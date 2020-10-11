<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tb_user_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tb_user by idUser
     */
    function get_tb_user($idUser)
    {
        return $this->db->get_where('tb_user',array('idUser'=>$idUser))->row_array();
    }
        
    /*
     * Get all tb_user
     */
    function get_all_tb_user()
    {
        $this->db->order_by('idUser', 'desc');
        return $this->db->get('tb_user')->result_array();
    }
        
    /*
     * function to add new tb_user
     */
    function add_tb_user($params)
    {
        $this->db->insert('tb_user',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tb_user
     */
    function update_tb_user($idUser,$params)
    {
        $this->db->where('idUser',$idUser);
        return $this->db->update('tb_user',$params);
    }
    
    /*
     * function to delete tb_user
     */
    function delete_tb_user($idUser)
    {
        return $this->db->delete('tb_user',array('idUser'=>$idUser));
    }
}