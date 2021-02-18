<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class E_category_model extends CI_Model {

	public $variable;
    public $table = 'e_categories';

	public function __construct()
	{
		parent::__construct();
		
	}

	public function add_category($data)
    {
        $result = $this->db->insert($this->table, $data);
        $id = $this->db->insert_id();
        return $id;
    }
    public function update_category($data, $where)
    {
        $this->db->where($where);

        $result = $this->db->update($this->table, $data);
        if($result){
            return $where['id'];
        }else{
            return false;
        }
    }

    public function get_category($where = NULL,$query = NULL, $row=NULL)
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

/* End of file E_category_model.php */
/* Location: ./application/models/E_category_model.php */