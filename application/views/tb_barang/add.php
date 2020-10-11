<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tb Barang Add</h3>
            </div>
            <?php echo form_open('tb_barang/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="namaBarang_" class="control-label"><span class="text-danger">*</span>Nama Barang</label>
						<div class="form-group">
							<input type="text" name="namaBarang_" value="<?php echo $this->input->post('namaBarang_'); ?>" class="form-control" id="namaBarang_" />
							<span class="text-danger"><?php echo form_error('namaBarang_');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="satuanBarang" class="control-label"><span class="text-danger">*</span>Satuan Barang (Kg/M/unit)</label>
						<div class="form-group">
							<input type="text" name="satuanBarang" value="<?php echo $this->input->post('satuanBarang'); ?>" class="form-control" id="satuanBarang" />
							<span class="text-danger"><?php echo form_error('satuanBarang');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="deskripsiBarang" class="control-label"><span class="text-danger">*</span>Deskripsi Barang</label>
						<div class="form-group">
							<textarea type="text" name="deskripsiBarang" value="<?php echo $this->input->post('deskripsiBarang'); ?>" class="form-control" id="deskripsiBarang"></textarea>
							<span class="text-danger"><?php echo form_error('deskripsiBarang');?></span>
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
