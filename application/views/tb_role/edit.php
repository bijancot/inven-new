<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tb Role Edit</h3>
            </div>
			<?php echo form_open('tb_role/edit/'.$tb_role['idRole']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="namaRole" class="control-label"><span class="text-danger">*</span>NamaRole</label>
						<div class="form-group">
							<input type="text" name="namaRole" value="<?php echo ($this->input->post('namaRole') ? $this->input->post('namaRole') : $tb_role['namaRole']); ?>" class="form-control" id="namaRole" />
							<span class="text-danger"><?php echo form_error('namaRole');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="keteranganRole" class="control-label"><span class="text-danger">*</span>KeteranganRole</label>
						<div class="form-group">
							<input type="text" name="keteranganRole" value="<?php echo ($this->input->post('keteranganRole') ? $this->input->post('keteranganRole') : $tb_role['keteranganRole']); ?>" class="form-control" id="keteranganRole" />
							<span class="text-danger"><?php echo form_error('keteranganRole');?></span>
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