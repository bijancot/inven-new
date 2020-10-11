<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tb_menu_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tb_menu by idMenu
     */
    function get_tb_menu($idMenu)
    {
        return $this->db->get_where('tb_menu',array('idMenu'=>$idMenu))->row_array();
    }
        
    /*
     * Get all tb_menu
     */
    function get_all_tb_menu()
    {
        $this->db->order_by('idMenu', 'desc');
        return $this->db->get('tb_menu')->result_array();
    }
        
    /*
     * function to add new tb_menu
     */
    function add_tb_menu($params)
    {
        $this->db->insert('tb_menu',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tb_menu
     */
    function update_tb_menu($idMenu,$params)
    {
        $this->db->where('idMenu',$idMenu);
        return $this->db->update('tb_menu',$params);
    }
    
    /*
     * function to delete tb_menu
     */
    function delete_tb_menu($idMenu)
    {
        return $this->db->delete('tb_menu',array('idMenu'=>$idMenu));
    }
}