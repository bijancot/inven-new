<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tb_detil_barang_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tb_detil_barang by idDetilBarang
     */
    function get_tb_detil_barang($idDetilBarang)
    {
        return $this->db->get_where('tb_detil_barang',array('idDetilBarang'=>$idDetilBarang))->row_array();
    }
        
    /*
     * Get all tb_detil_barang
     */
    function get_all_tb_detil_barang()
    {
        $this->db->order_by('idDetilBarang', 'desc');
        return $this->db->get('tb_detil_barang')->result_array();
    }
        
    /*
     * function to add new tb_detil_barang
     */
    function add_tb_detil_barang($params)
    {
        $this->db->insert('tb_detil_barang',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tb_detil_barang
     */
    function update_tb_detil_barang($idDetilBarang,$params)
    {
        $this->db->where('idDetilBarang',$idDetilBarang);
        return $this->db->update('tb_detil_barang',$params);
    }
    
    /*
     * function to delete tb_detil_barang
     */
    function delete_tb_detil_barang($idDetilBarang)
    {
        return $this->db->delete('tb_detil_barang',array('idDetilBarang'=>$idDetilBarang));
    }
}