<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tb Jenis Barang Add</h3>
            </div>
            <?php echo form_open('tb_jenis_barang/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="namaJenis" class="control-label"><span class="text-danger">*</span>NamaJenis</label>
						<div class="form-group">
							<input type="text" name="namaJenis" value="<?php echo $this->input->post('namaJenis'); ?>" class="form-control" id="namaJenis" />
							<span class="text-danger"><?php echo form_error('namaJenis');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="keteranganJenis" class="control-label"><span class="text-danger">*</span>KeteranganJenis</label>
						<div class="form-group">
							<input type="text" name="keteranganJenis" value="<?php echo $this->input->post('keteranganJenis'); ?>" class="form-control" id="keteranganJenis" />
							<span class="text-danger"><?php echo form_error('keteranganJenis');?></span>
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