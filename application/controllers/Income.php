<?php defined('BASEPATH') or exit('No direct script access allowed');

class Income extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('income_model');
        $this->load->model('i_category_model');
        $this->uid = $this->session->userdata('user_id');
        $this->gid = $this->session->userdata('group');

        if (!$this->ion_auth->logged_in())
        {
            // redirect them to the login page
            redirect('admin-login', 'refresh');
        }


    }
    public function index()
    {
        $gid = $this->gid;
        if(!in_array(1, $gid)){
            redirect('dashboard', 'refresh');
        }
        $uid = $this->uid;
        $container = ie_get_container($uid);

        $income = $this->income_model->get_income();
        $e_category = $this->i_category_model->get_category(NULL, array('id','name'));
        $e_categories = ie_convert_array_to_key_value($e_category, 'name');
        $data = array();

        foreach ($income as $key => $value) {
            $income[$key]->category_name = $e_categories[$value->category_id];
        }
        $data['income'] = $income;

        $data['title'] = 'Income';
        $data['page_title'] = 'Income';
        $data['page_subtitle'] = 'Show Income';
        $data['page'] = 'index';
        $data['module'] = 'income';

        $this->load->view($container, $data);

    }
    public function user()
    {
        $uid = $this->uid;
        $container = ie_get_container($uid);

        $incomes = $this->income_model->get_income(array('added_by'=>$uid));      
        $data['income'] = $this->income_model->get_final_income($incomes);      

        $data['title'] = 'Income';
        $data['page_title'] = 'Income';
        $data['page_subtitle'] = 'Show Income';
        $data['page'] = 'index';
        $data['module'] = 'income';

        $this->load->view($container, $data);

    }

    public function add()
    {
        $uid = $this->uid;
        if($this->input->method()==='post')
        {
        // var_dump($_POST);exit;
            if($this->form_validation->run('income')== TRUE){
                $exp_data=[
                    'category_id' => $this->input->post('category_id'),
                    'date' => $this->input->post('date'),
                    'amount' => $this->input->post('amount'),
                    'note' => $this->input->post('note'),
                ];

                $this->db->trans_start();
                    
                    $this->income_model->add_income($exp_data);

                $this->db->trans_complete();
    
                if($this->db->trans_status()==TRUE){
                    // $this->send_activate_mail($email);
                    $this->session->set_flashdata('success','Income added successfully');
                    redirect('my-income');
                }else{
                    $this->session->set_flashdata('error','failed to add user income.');
                    redirect('my-income');
                }
    
    
            }
        }

        $data = $this->_income_get_all_field();

        $data['formsubmit_url'] = base_url('add-income');
        $data['nav'] ='user';
        $data['title'] = 'Income Add';
        $data['page_title'] = 'Income';
        $data['page_subtitle'] = 'Add';
        $data['page'] = 'add';
        $data['module'] = 'income';

        $container = ie_get_container($uid);
        $this->load->view($container, $data);
    }

    public function _income_get_all_field($income = null)
    {
        $value = $this->_income_get_corresponding_field_value($income);
        $i_category = $this->i_category_model->get_category(NULL, array('id','name'));
        $i_categories = ie_convert_array_to_key_value($i_category, 'name');
        $data['i_categories'] =  $i_categories;
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
    public function _income_get_corresponding_field_value($income)
    {
        $value['date'] = (isset($income->date)) ? $income->date:'';
        $value['amount'] = (isset($income->amount)) ? $income->amount:'';
        $value['note'] = (isset($income->note)) ? $income->note:'';
        $value['category_id'] = (isset($income->category_id)) ? $income->category_id:'';

        return $value;
    }

    public function delete($id)
    {
        $this->db->trans_start();

            $this->income_model->delete(array('id'=>$id));
        
        $this->db->trans_complete();

        if($this->db->trans_status()==TRUE){
            $this->session->set_flashdata('success','Income deleted successfully.');
            redirect('my-income');
        }else{
            $this->session->set_flashdata('error','failed to delete.');
            redirect('my-income');
        }

    }


}

/* End of file Income.php */
/* Location: ./application/controllers/Income.php */
