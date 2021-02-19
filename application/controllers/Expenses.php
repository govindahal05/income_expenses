<?php defined('BASEPATH') or exit('No direct script access allowed');

class Expenses extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('expenses_model');
        $this->load->model('e_category_model');
        $this->uid = $this->session->userdata('user_id');

        if (!$this->ion_auth->logged_in())
        {
            // redirect them to the login page
            redirect('admin-login', 'refresh');
        }

    }
    public function index()
    {
        $uid = $this->uid;

        $expenses = $this->expenses_model->get_expenses();
        $e_category = $this->e_category_model->get_category(NULL, array('id','name'));
        $e_categories = ie_convert_array_to_key_value($e_category, 'name');
        $data = array();

        foreach ($expenses as $key => $value) {
            $expenses[$key]->category_name = $e_categories[$value->category_id];
        }
        $data['expenses'] = $expenses;

        $data['title'] = 'Expenses';
        $data['page_title'] = 'Expenses';
        $data['page_subtitle'] = 'Show Expenses';
        $data['page'] = 'index';
        $data['module'] = 'expenses';

        $container = ie_get_container($uid);

        $this->load->view($container, $data);

    }

    public function add()
    {
        $uid = $this->uid;
        if($this->input->method()==='post')
        {
        // var_dump($_POST);exit;
            if($this->form_validation->run('expenses')== TRUE){
                $exp_data=[
                    'category_id' => $this->input->post('category_id'),
                    'date' => $this->input->post('date'),
                    'amount' => $this->input->post('amount'),
                    'note' => $this->input->post('note'),
                ];

                $this->db->trans_start();
                    
                    $this->expenses_model->add_expenses($exp_data);

                $this->db->trans_complete();
    
                if($this->db->trans_status()==TRUE){
                    // $this->send_activate_mail($email);
                    $this->session->set_flashdata('success','Expenses added successfully');
                    redirect('my-expenses');
                }else{
                    $this->session->set_flashdata('error','failed to add user expenses.');
                    redirect('my-expenses');
                }
    
    
            }
        }

        $data = $this->_expenses_get_all_field();

        $data['formsubmit_url'] = base_url('add-expenses');
        $data['nav'] ='user';
        $data['title'] = 'Expenses Add';
        $data['page_title'] = 'Expenses';
        $data['page_subtitle'] = 'Add';
        $data['page'] = 'add';
        $data['module'] = 'expenses';

        $container = ie_get_container($uid);
        $this->load->view($container, $data);
    }

    public function edit($id)
    {
        $uid = $this->uid;

        $expenses = $this->expenses_model->get_expenses(array('id'=>$id),null,true);
        if(!$expenses)
        {
            redirect('user/expenses_index');
        }

        if($this->input->method()=='post')
        {

            if($this->form_validation->run('expenses_add')== TRUE)
            {
                $data = $_POST;

                $this->db->trans_start();
                    $this->expenses_model->update_expenses($data, array('id'=>$id));

                $this->db->trans_complete();
    
                if($this->db->trans_status()==TRUE)
                {
                    // $this->send_activate_mail($email);
                    $this->session->set_flashdata('success','Expenses edited successfully');
                    redirect('my-expenses');
                }else{
                    $this->session->set_flashdata('error','failed to edit user expenses.');
                    redirect('my-expenses');
                }
    
    
            }
        }

        $data = $this->expenses_model->expenses_get_all_field($expenses);

        $data['post_url'] = base_url('expenses-edit/'.$id);
        $data['nav'] ='user';
        $data['pageTitle'] = 'Expenses';
        $data['pageSubTitle'] = 'Add';
        $data['page'] = 'expenses_add';
        $data['module'] = 'users';

        $container = ie_get_container($uid);
        $this->load->view($container, $this->data);
    }

    public function _expenses_get_all_field($expenses = null)
    {
        $value = $this->_expenses_get_corresponding_field_value($expenses);
        $e_category = $this->e_category_model->get_category(NULL, array('id','name'));
        $e_categories = ie_convert_array_to_key_value($e_category, 'name');
        $data['e_categories'] =  $e_categories;
        $data['category_id'] =  $value['category_id'];

        $data['date'] = array(
            'name' => 'date',
            'id' => 'date',
            'autocomplete' => "off1",
            'class' => 'form-control m-input',
            'type' => 'date',
            'value' => $this->form_validation->set_value('date', $value['date']),
        );
        $data['amount'] = array(
            'name' => 'amount',
            'id' => 'amount',
            'autocomplete' => "off1",
            'class' => 'form-control m-input',
            'type' => 'text',
            'value' => $this->form_validation->set_value('amount', $value['amount']),
        );
        $data['note'] = array(
            'name' => 'note',
            'id' => 'note',
            'autocomplete' => "off1",
            'class' => 'form-control m-input',
            'type' => 'text',
            'value' => $this->form_validation->set_value('note', $value['note']),
        );

        return $data;
    }
    public function _expenses_get_corresponding_field_value($expenses)
    {
        $value['date'] = (isset($expenses->date)) ? $expenses->date:'';
        $value['amount'] = (isset($expenses->amount)) ? $expenses->amount:'';
        $value['note'] = (isset($expenses->note)) ? $expenses->note:'';
        $value['category_id'] = (isset($expenses->category_id)) ? $expenses->category_id:'';

        return $value;
    }

    public function delete($id)
    {
        $this->db->trans_start();

            $this->expenses_model->delete(array('id'=>$id));
        
        $this->db->trans_complete();

        if($this->db->trans_status()==TRUE){
            $this->session->set_flashdata('success','Expenses deleted successfully.');
            redirect('my-expenses');
        }else{
            $this->session->set_flashdata('error','failed to delete.');
            redirect('my-expenses');
        }

    }


}

/* End of file Expenses.php */
/* Location: ./application/controllers/Expenses.php */
