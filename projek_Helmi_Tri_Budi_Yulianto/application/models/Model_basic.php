<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Model_basic extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}



	function get_count($table)
	{
		$this->load->database('default', TRUE);
		$this->db->select('*');
		$this->db->from($table);
		return $this->db->get()->num_rows();
	}

	function select_all($table)
	{
		$this->load->database('default', TRUE);
		$this->db->select('*');
		$this->db->from($table);
		$data = $this->db->get();
		return $data->result();
	}

	function select_all_join($table, $select, $table_join1, $join1, $join2)
	{
		$this->load->database('default', TRUE);
		$this->db->select($select);
		$this->db->from($table);
		$this->db->join($table_join1, $join1 . ' = ' . $join2);
		$data = $this->db->get();
		return $data->result();
	}
	function select_all_join_2($table, $select, $table_join1, $join1, $join2, $table_join2, $join3, $join4)
	{
		$this->load->database('default', TRUE);
		$this->db->select($select);
		$this->db->from($table);
		$this->db->join($table_join1, $join1 . ' = ' . $join2);
		$this->db->join($table_join2, $join3 . ' = ' . $join4);
		$data = $this->db->get();
		return $data->result();
	}

	function select_where($table, $column, $where)
	{
		$this->load->database('default', TRUE);
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($column, $where);
		$data = $this->db->get();
		return $data;
	}
	function select_where_2($table, $column1, $where1, $column2, $where2)
	{
		$this->load->database('default', TRUE);
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($column1, $where1);
		$this->db->where($column2, $where2);
		$data = $this->db->get();
		return $data;
	}

	function select_where_join($table, $select, $column, $where, $table_join, $join1, $join2)
	{
		$this->load->database('default', TRUE);
		$this->db->select($select);
		$this->db->from($table);
		$this->db->join($table_join, $join1 . ' = ' . $join2);
		$this->db->where($column, $where);
		$data = $this->db->get();
		return $data;
	}

	function select_where_join_2($table, $select, $column, $where, $table_join1, $join1, $join2, $table_join2, $join3, $join4)
	{
		$this->load->database('default', TRUE);
		$this->db->select($select);
		$this->db->from($table);
		$this->db->join($table_join1, $join1 . ' = ' . $join2);
		$this->db->join($table_join2, $join3 . ' = ' . $join4);
		$this->db->where($column, $where);
		$data = $this->db->get();
		return $data;
	}
	function select_where_join_3($table, $select, $column, $where, $table_join1, $join1, $join2, $table_join2, $join3, $join4)
	{
		$this->load->database('default', TRUE);
		$this->db->select($select);
		$this->db->from($table);
		$this->db->join($table_join1, $join1 . ' = ' . $join2);
		$this->db->join($table_join2, $join3 . ' = ' . $join4);
		$this->db->where($column, $where, FALSE);
		$data = $this->db->get();
		return $data;
	}

	function insert_all($table, $data)
	{
		$this->load->database('default', TRUE);
		if (!$this->db->insert($table, $data))
			return FALSE;
		$data["id"] = $this->db->insert_id();
		return (object)$data;
	}

	function insert_all_batch($table, $data)
	{
		$this->load->database('default', TRUE);
		if (!$this->db->insert_batch($table, $data))
			return FALSE;
		$data["id"] = $this->db->insert_id();
		return (object)$data;
	}

	function update($table, $data, $column, $where)
	{
		$this->load->database('default', TRUE);
		$this->db->where($column, $where);
		return $this->db->update($table, $data);
	}

	function update_one($table, $column, $where, $target, $action)
	{
		$this->db->set($target, $target . $action, FALSE);
		$this->db->where($column, $where);
		return $this->db->update($table);
	}

	function delete($table, $column, $where)
	{
		$this->load->database('default', TRUE);
		$this->db->where($column, $where);
		return $this->db->delete($table);
	}

	function select_all_limit($table, $limit)
	{
		$this->load->database('default', TRUE);
		$this->db->select('*');
		$data = $this->db->get($table, $limit);
		return $data;
	}

	function select_where_limit($table, $column, $where, $limit)
	{
		$this->load->database('default', TRUE);
		$this->db->select('*');
		$this->db->where($column, $where);
		$data = $this->db->get($table, $limit);
		return $data;
	}

	function count($table)
	{
		$this->load->database('default', TRUE);
		$this->db->select('*');
		$this->db->from($table);
		return $this->db->count_all_results();
	}

	function count_where($table, $column, $where)
	{
		$this->load->database('default', TRUE);
		$this->db->select('*');
		$this->db->where($column, $where);
		$this->db->from($table);
		return $this->db->count_all_results();
	}

	function count_like($table, $column, $where)
	{
		$this->load->database('default', TRUE);
		$this->db->select('*');
		$this->db->like($column, $where);
		$this->db->from($table);
		return $this->db->count_all_results();
	}

	function count_where_array($table, $where)
	{
		$this->load->database('default', TRUE);
		$this->db->select('*');
		$this->db->where($where);
		$this->db->from($table);
		return $this->db->count_all_results();
	}

	function select_all_order($table, $order_by, $order)
	{
		$this->load->database('default', TRUE);
		$this->db->select('*');
		$this->db->from($table);
		$this->db->order_by($order_by, $order);
		$data = $this->db->get();
		return $data->result();
	}
}
