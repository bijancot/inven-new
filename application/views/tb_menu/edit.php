<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tb Menu Edit</h3>
            </div>
			<?php echo form_open('tb_menu/edit/'.$tb_menu['idMenu']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="namaMenu" class="control-label"><span class="text-danger">*</span>NamaMenu</label>
						<div class="form-group">
							<input type="text" name="namaMenu" value="<?php echo ($this->input->post('namaMenu') ? $this->input->post('namaMenu') : $tb_menu['namaMenu']); ?>" class="form-control" id="namaMenu" />
							<span class="text-danger"><?php echo form_error('namaMenu');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="menuUrl" class="control-label"><span class="text-danger">*</span>MenuUrl</label>
						<div class="form-group">
							<input type="text" name="menuUrl" value="<?php echo ($this->input->post('menuUrl') ? $this->input->post('menuUrl') : $tb_menu['menuUrl']); ?>" class="form-control" id="menuUrl" />
							<span class="text-danger"><?php echo form_error('menuUrl');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="menuDesc" class="control-label"><span class="text-danger">*</span>MenuDesc</label>
						<div class="form-group">
							<input type="text" name="menuDesc" value="<?php echo ($this->input->post('menuDesc') ? $this->input->post('menuDesc') : $tb_menu['menuDesc']); ?>" class="form-control" id="menuDesc" />
							<span class="text-danger"><?php echo form_error('menuDesc');?></span>
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