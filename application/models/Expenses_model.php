<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Expenses_model extends CI_Model {

	public $variable;
    public $table = 'expenses';

	public function __construct()
	{
		parent::__construct();
		
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
    
    public function delete($where = NULL)
    {
        return $this->db->delete($this->table, $where);
    }
}

/* End of file Expenses_model.php */
/* Location: ./application/models/Expenses_model.php */