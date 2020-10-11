<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tb_peminjaman extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tb_peminjaman_model');
    } 

    /*
     * Listing of tb_peminjaman
     */
    function index()
    {
        $data['tb_peminjaman'] = $this->Tb_peminjaman_model->get_all_tb_peminjaman();
        
        $data['_view'] = 'tb_peminjaman/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new tb_peminjaman
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('tglPeminjaman','TglPeminjaman','required');
		$this->form_validation->set_rules('lamaPeminjaman','LamaPeminjaman','required|integer');
		$this->form_validation->set_rules('tglPengembalian','TglPengembalian','required');
		$this->form_validation->set_rules('catatanPeminjaman','CatatanPeminjaman','required|max_length[250]');
		$this->form_validation->set_rules('catatanPengembalian','CatatanPengembalian','required|max_length[250]');
		$this->form_validation->set_rules('statusPengembalian','StatusPengembalian','required|max_length[250]');
		$this->form_validation->set_rules('idUser','IdUser','required|integer');
		$this->form_validation->set_rules('idDetilBarang','IdDetilBarang','required|integer');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'idUser' => $this->input->post('idUser'),
				'idDetilBarang' => $this->input->post('idDetilBarang'),
				'tglPeminjaman' => $this->input->post('tglPeminjaman'),
				'lamaPeminjaman' => $this->input->post('lamaPeminjaman'),
				'tglPengembalian' => $this->input->post('tglPengembalian'),
				'catatanPeminjaman' => $this->input->post('catatanPeminjaman'),
				'catatanPengembalian' => $this->input->post('catatanPengembalian'),
				'statusPengembalian' => $this->input->post('statusPengembalian'),
            );
            
            $tb_peminjaman_id = $this->Tb_peminjaman_model->add_tb_peminjaman($params);
            redirect('tb_peminjaman/index');
        }
        else
        {
			$this->load->model('Tb_user_model');
			$data['all_tb_user'] = $this->Tb_user_model->get_all_tb_user();

			$this->load->model('Tb_detil_barang_model');
			$data['all_tb_detil_barang'] = $this->Tb_detil_barang_model->get_all_tb_detil_barang();
            
            $data['_view'] = 'tb_peminjaman/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a tb_peminjaman
     */
    function edit($idPeminjaman)
    {   
        // check if the tb_peminjaman exists before trying to edit it
        $data['tb_peminjaman'] = $this->Tb_peminjaman_model->get_tb_peminjaman($idPeminjaman);
        
        if(isset($data['tb_peminjaman']['idPeminjaman']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('tglPeminjaman','TglPeminjaman','required');
			$this->form_validation->set_rules('lamaPeminjaman','LamaPeminjaman','required|integer');
			$this->form_validation->set_rules('tglPengembalian','TglPengembalian','required');
			$this->form_validation->set_rules('catatanPeminjaman','CatatanPeminjaman','required|max_length[250]');
			$this->form_validation->set_rules('catatanPengembalian','CatatanPengembalian','required|max_length[250]');
			$this->form_validation->set_rules('statusPengembalian','StatusPengembalian','required|max_length[250]');
			$this->form_validation->set_rules('idUser','IdUser','required|integer');
			$this->form_validation->set_rules('idDetilBarang','IdDetilBarang','required|integer');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'idUser' => $this->input->post('idUser'),
					'idDetilBarang' => $this->input->post('idDetilBarang'),
					'tglPeminjaman' => $this->input->post('tglPeminjaman'),
					'lamaPeminjaman' => $this->input->post('lamaPeminjaman'),
					'tglPengembalian' => $this->input->post('tglPengembalian'),
					'catatanPeminjaman' => $this->input->post('catatanPeminjaman'),
					'catatanPengembalian' => $this->input->post('catatanPengembalian'),
					'statusPengembalian' => $this->input->post('statusPengembalian'),
                );

                $this->Tb_peminjaman_model->update_tb_peminjaman($idPeminjaman,$params);            
                redirect('tb_peminjaman/index');
            }
            else
            {
				$this->load->model('Tb_user_model');
				$data['all_tb_user'] = $this->Tb_user_model->get_all_tb_user();

				$this->load->model('Tb_detil_barang_model');
				$data['all_tb_detil_barang'] = $this->Tb_detil_barang_model->get_all_tb_detil_barang();

                $data['_view'] = 'tb_peminjaman/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The tb_peminjaman you are trying to edit does not exist.');
    } 

    /*
     * Deleting tb_peminjaman
     */
    function remove($idPeminjaman)
    {
        $tb_peminjaman = $this->Tb_peminjaman_model->get_tb_peminjaman($idPeminjaman);

        // check if the tb_peminjaman exists before trying to delete it
        if(isset($tb_peminjaman['idPeminjaman']))
        {
            $this->Tb_peminjaman_model->delete_tb_peminjaman($idPeminjaman);
            redirect('tb_peminjaman/index');
        }
        else
            show_error('The tb_peminjaman you are trying to delete does not exist.');
    }
    
}