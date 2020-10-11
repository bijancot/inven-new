<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tb Peminjaman Add</h3>
            </div>
            <?php echo form_open('tb_peminjaman/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="idUser" class="control-label"><span class="text-danger">*</span>Tb User</label>
						<div class="form-group">
							<select name="idUser" class="form-control">
								<option value="">select tb_user</option>
								<?php 
								foreach($all_tb_user as $tb_user)
								{
									$selected = ($tb_user['idUser'] == $this->input->post('idUser')) ? ' selected="selected"' : "";

									echo '<option value="'.$tb_user['idUser'].'" '.$selected.'>'.$tb_user['idUser'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('idUser');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="idDetilBarang" class="control-label"><span class="text-danger">*</span>Tb Detil Barang</label>
						<div class="form-group">
							<select name="idDetilBarang" class="form-control">
								<option value="">select tb_detil_barang</option>
								<?php 
								foreach($all_tb_detil_barang as $tb_detil_barang)
								{
									$selected = ($tb_detil_barang['idDetilBarang'] == $this->input->post('idDetilBarang')) ? ' selected="selected"' : "";

									echo '<option value="'.$tb_detil_barang['idDetilBarang'].'" '.$selected.'>'.$tb_detil_barang['idDetilBarang'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('idDetilBarang');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tglPeminjaman" class="control-label"><span class="text-danger">*</span>TglPeminjaman</label>
						<div class="form-group">
							<input type="text" name="tglPeminjaman" value="<?php echo $this->input->post('tglPeminjaman'); ?>" class="has-datepicker form-control" id="tglPeminjaman" />
							<span class="text-danger"><?php echo form_error('tglPeminjaman');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="lamaPeminjaman" class="control-label"><span class="text-danger">*</span>LamaPeminjaman</label>
						<div class="form-group">
							<input type="text" name="lamaPeminjaman" value="<?php echo $this->input->post('lamaPeminjaman'); ?>" class="form-control" id="lamaPeminjaman" />
							<span class="text-danger"><?php echo form_error('lamaPeminjaman');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tglPengembalian" class="control-label"><span class="text-danger">*</span>TglPengembalian</label>
						<div class="form-group">
							<input type="text" name="tglPengembalian" value="<?php echo $this->input->post('tglPengembalian'); ?>" class="has-datepicker form-control" id="tglPengembalian" />
							<span class="text-danger"><?php echo form_error('tglPengembalian');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="catatanPeminjaman" class="control-label"><span class="text-danger">*</span>CatatanPeminjaman</label>
						<div class="form-group">
							<input type="text" name="catatanPeminjaman" value="<?php echo $this->input->post('catatanPeminjaman'); ?>" class="form-control" id="catatanPeminjaman" />
							<span class="text-danger"><?php echo form_error('catatanPeminjaman');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="catatanPengembalian" class="control-label"><span class="text-danger">*</span>CatatanPengembalian</label>
						<div class="form-group">
							<input type="text" name="catatanPengembalian" value="<?php echo $this->input->post('catatanPengembalian'); ?>" class="form-control" id="catatanPengembalian" />
							<span class="text-danger"><?php echo form_error('catatanPengembalian');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="statusPengembalian" class="control-label"><span class="text-danger">*</span>StatusPengembalian</label>
						<div class="form-group">
							<input type="text" name="statusPengembalian" value="<?php echo $this->input->post('statusPengembalian'); ?>" class="form-control" id="statusPengembalian" />
							<span class="text-danger"><?php echo form_error('statusPengembalian');?></span>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>