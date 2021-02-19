<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Income_model extends CI_Model {

	public $variable;
    public $table = 'income';

	public function __construct()
	{
		parent::__construct();
        $this->load->model('i_category_model');
		
	}

	public function add_income($data)
    {
        $data['added_by'] = $this->session->userdata('user_id');
        $data['added_on'] = date("Y-m-d H:i:sa");
        $result = $this->db->insert($this->table, $data);
        $id = $this->db->insert_id();
        return $id;
    }
    public function update_income($data, $where)
    {
        $this->db->where($where);

        $result = $this->db->update($this->table, $data);
        if($result){
            return $where['id'];
        }else{
            return false;
        }
    }

    public function get_income($where = NULL,$query = NULL, $row=NULL)
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
    
    public function delete($where = NULL)
    {
        return $this->db->delete($this->table, $where);
    }
    public function dashboard_income($where)
    {
        $inc = $this->get_income($where);
        $incomes = $this->get_final_income($inc);
        return $incomes;
    }

    public function get_final_income($income)
    {
        $i_category = $this->i_category_model->get_category(NULL, array('id','name'));
        $i_categories = ie_convert_array_to_key_value($i_category, 'name');
        $data = array();
        if(is_array($income) || is_object($income))
        {
            foreach ($income as $key => $value) {
                $income[$key]->category_name = $i_categories[$value->category_id];
            }
        }
        $data['income'] = $income;
        return $income;
    }
}

/* End of file Income_model.php */
/* Location: ./application/models/Income_model.php */