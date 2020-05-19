<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class Common_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }



    /*
     * Fetching data from provided table
     * @parameter $table
     * @return array/boolean
     */
    function get_records($table) {
        $data = FALSE;
        $query = $this->db->get($table);
        $table_data = $query->result_array();
        if(count($table_data) > 0) {
            $data = $table_data;
        }
        return $data;
    }

    /** 
     * Fetching data from provided table
     * @param $table
     * @return array/boolean
     */
    function get_specific_record($table, $cond_col, $cond_val) {
        $data = FALSE;
        $this->db->select('*');
        $this->db->where($cond_col, $cond_val);
        $this->db->from($table);
        $this->db->limit('1');
        $query = $this->db->get()->result_array();
        if(count($query) > 0) {
            $data = $query;
        }
        return $data;
    }

    /**
     * Getting Sinlge Record with Specific Column name
     * @param $table/$col_name/$cond_col/$cond_val
     * @return array/boolean
     */
    public function get_specific_record_with_column($table, $col_name, $cond_col, $cond_val) {
        $data = FALSE;
        $this->db->select($col_name);
        $this->db->where($cond_col, $cond_val);
        $this->db->from($table);
        $this->db->limit('1');
        $query = $this->db->get()->result_array();
        if(count($query) > 0) {
            $data = $query[0];
        }
        return $data;
    }

    /**
     * Adding data into provided table
     * @param $table/$data
     * @return array/boolean
     */
    public function adding_record($table, $data) {
        $response = array();
        //start the transaction
        $this->db->trans_begin();
        
        //Running insert query
        $this->db->insert($table, $data);
        $added_id  = $this->db->insert_id();
        //make transaction complete
        $this->db->trans_complete();
        
        //check if transaction status TRUE or FALSE
        if ($this->db->trans_status() === FALSE) {
            //if something went wrong, rollback everything
            $this->db->trans_rollback();
            $response['response'] = 'error';
        } else {
            //if everything went right, commit the data to the database
            $this->db->trans_commit();
            $response['response'] = 'success';
            $response['data'] = $added_id;
        }
        return $response;
    }

    /**
     * Updating Data
     * @param $table/$data/$id
     * @return array/json
     */
    public function updating_record($table, $data, $id) {
        $response = FALSE;
        //start the transaction
        $this->db->trans_begin();
        
        //Running insert query
        $this->db->where('id', $id);
        $this->db->update($table, $data);
        
        //make transaction complete
        $this->db->trans_complete();
        
        //check if transaction status TRUE or FALSE
        if ($this->db->trans_status() === FALSE) {
            //if something went wrong, rollback everything
            $this->db->trans_rollback();
            $response = 'error';
        } else {
            //if everything went right, commit the data to the database
            $this->db->trans_commit();
            $response = 'success';
        }
        return $response;
    }


    /**
     * Deleting record
     * @param $table/$cond_col/$cond_val
     * @return array/json
     */
    public function delete_specific_record($table, $cond_col, $cond_val) {
        $response = array();
        //start the transaction
        $this->db->trans_begin();
        // Deleting Club
        $this->db->where($cond_col, $cond_val);
        $this->db->delete($table);
        
        //make transaction complete
        $this->db->trans_complete();
        
        //check if transaction status TRUE or FALSE
        if ($this->db->trans_status() === FALSE) {
            //if something went wrong, rollback everything
            $this->db->trans_rollback();
            $response = 'error';
        } else {
            //if everything went right, commit the data to the database
            $this->db->trans_commit();
            $response = 'success';
        }
        return $response;
    }
    
    /**
     * Deleting record
     * @param $table/$id
     * @return bool|string
     */
    public function delete_record($table, $id, $multi_cond = null)
    {
        $response = false;
        //start the transaction
        $this->db->trans_begin();
        // Deleting Club
        if($multi_cond == null) {
            $this->db->where('id', $id);
        } else {
            $this->db->where($multi_cond);
        }
        $this->db->delete($table);
        //make transaction complete
        $this->db->trans_complete();
        //check if transaction status TRUE or FALSE
        if ($this->db->trans_status() === FALSE) {
            //if something went wrong, rollback everything
            $this->db->trans_rollback();
            $response = false;
        } else {
            //if everything went right, commit the data to the database
            $this->db->trans_commit();
            $response = 'success';
        }
        return $response;
    }

    /**
     * Getting records custom query
     * @param $sql
     * @return bool/array
     */
    public function custom_results($sql)
    {
        $response = false;
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $response = $query->result_array();
        }
        return $response;
    }

}

?>