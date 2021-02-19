<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Expenses_model extends CI_Model {

	public $variable;
    public $table = 'expenses';

	public function __construct()
	{
		parent::__construct();
        $this->load->model('e_category_model');
		
	}

	public function add_expenses($data)
    {
        $data['added_by'] = $this->session->userdata('user_id');
        $data['added_on'] = date("Y-m-d H:i:sa");
        $result = $this->db->insert($this->table, $data);
        $id = $this->db->insert_id();
        return $id;
    }
    public function update_expenses($data, $where)
    {
        $this->db->where($where);

        $result = $this->db->update($this->table, $data);
        if($result){
            return $where['id'];
        }else{
            return false;
        }
    }

    public function get_expenses($where = NULL,$query = NULL, $row=NULL)
    {
        ($query) ? $this->db->select($query):$this->db->select();
        $this->db->from($this->table);
        $query = $this->db->get_where('', $where);
        $sql = $this->db->last_query();
        if($row){
            return $query->row();
        }else{
            return $query->result();
        }
        
    }

    public function dashboard_expenses($where)
    {
        $exp = $this->get_expenses($where);
        $expenses = $this->get_final_expenses($exp);
        return $expenses;

    }
    
    public function delete($where = NULL)
    {
        return $this->db->delete($this->table, $where);
    }

    public function get_final_expenses($expenses)
    {
        $e_category = $this->e_category_model->get_category(NULL, array('id','name'));
        $e_categories = ie_convert_array_to_key_value($e_category, 'name');
        $data = array();
        if(is_array($expenses) || is_object($expenses))
        {
            foreach ($expenses as $key => $value) {
                $expenses[$key]->category_name = $e_categories[$value->category_id];
            }
        }
        return $expenses;
    }
}

/* End of file Expenses_model.php */
/* Location: ./application/models/Expenses_model.php */