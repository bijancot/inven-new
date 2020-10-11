<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tb_barang_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tb_barang by idBarang
     */
    function get_tb_barang($idBarang)
    {
        return $this->db->get_where('tb_barang',array('idBarang'=>$idBarang))->row_array();
    }
        
    /*
     * Get all tb_barang
     */
    function get_all_tb_barang()
    {
        $this->db->order_by('idBarang', 'desc');
        return $this->db->get('tb_barang')->result_array();
    }
        
    /*
     * function to add new tb_barang
     */
    function add_tb_barang($params)
    {
        $this->db->insert('tb_barang',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tb_barang
     */
    function update_tb_barang($idBarang,$params)
    {
        $this->db->where('idBarang',$idBarang);
        return $this->db->update('tb_barang',$params);
    }
    
    /*
     * function to delete tb_barang
     */
    function delete_tb_barang($idBarang)
    {
        return $this->db->delete('tb_barang',array('idBarang'=>$idBarang));
    }
}
