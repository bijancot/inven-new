<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tb Detil Barang Add</h3>
            </div>
            <?php echo form_open('tb_detil_barang/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="idBarang" class="control-label"><span class="text-danger">*</span>Tb Barang</label>
						<div class="form-group">
							<select name="idBarang" class="form-control">
								<option value="">select tb_barang</option>
								<?php 
								foreach($all_tb_barang as $tb_barang)
								{
									$selected = ($tb_barang['idBarang'] == $this->input->post('idBarang')) ? ' selected="selected"' : "";

									echo '<option value="'.$tb_barang['idBarang'].'" '.$selected.'>'.$tb_barang['idBarang'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('idBarang');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="idJenis" class="control-label"><span class="text-danger">*</span>Tb Jenis Barang</label>
						<div class="form-group">
							<select name="idJenis" class="form-control">
								<option value="">select tb_jenis_barang</option>
								<?php 
								foreach($all_tb_jenis_barang as $tb_jenis_barang)
								{
									$selected = ($tb_jenis_barang['idJenis'] == $this->input->post('idJenis')) ? ' selected="selected"' : "";

									echo '<option value="'.$tb_jenis_barang['idJenis'].'" '.$selected.'>'.$tb_jenis_barang['idJenis'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('idJenis');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tahunPengadaan" class="control-label"><span class="text-danger">*</span>TahunPengadaan</label>
						<div class="form-group">
							<input type="text" name="tahunPengadaan" value="<?php echo $this->input->post('tahunPengadaan'); ?>" class="form-control" id="tahunPengadaan" />
							<span class="text-danger"><?php echo form_error('tahunPengadaan');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="kondisiBarang" class="control-label"><span class="text-danger">*</span>KondisiBarang</label>
						<div class="form-group">
							<input type="text" name="kondisiBarang" value="<?php echo $this->input->post('kondisiBarang'); ?>" class="form-control" id="kondisiBarang" />
							<span class="text-danger"><?php echo form_error('kondisiBarang');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="qtyBarang" class="control-label"><span class="text-danger">*</span>QtyBarang</label>
						<div class="form-group">
							<input type="text" name="qtyBarang" value="<?php echo $this->input->post('qtyBarang'); ?>" class="form-control" id="qtyBarang" />
							<span class="text-danger"><?php echo form_error('qtyBarang');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="keteranganBarang" class="control-label"><span class="text-danger">*</span>KeteranganBarang</label>
						<div class="form-group">
							<input type="text" name="keteranganBarang" value="<?php echo $this->input->post('keteranganBarang'); ?>" class="form-control" id="keteranganBarang" />
							<span class="text-danger"><?php echo form_error('keteranganBarang');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="fotoBarang" class="control-label"><span class="text-danger">*</span>FotoBarang</label>
						<div class="form-group">
							<input type="text" name="fotoBarang" value="<?php echo $this->input->post('fotoBarang'); ?>" class="form-control" id="fotoBarang" />
							<span class="text-danger"><?php echo form_error('fotoBarang');?></span>
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