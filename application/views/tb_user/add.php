<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tb User Add</h3>
            </div>
            <?php echo form_open('tb_user/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="idRole" class="control-label"><span class="text-danger">*</span>Tb Role</label>
						<div class="form-group">
							<select name="idRole" class="form-control">
								<option value="">select tb_role</option>
								<?php 
								foreach($all_tb_role as $tb_role)
								{
									$selected = ($tb_role['idRole'] == $this->input->post('idRole')) ? ' selected="selected"' : "";

									echo '<option value="'.$tb_role['idRole'].'" '.$selected.'>'.$tb_role['idRole'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('idRole');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="password" class="control-label"><span class="text-danger">*</span>Password</label>
						<div class="form-group">
							<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" class="form-control" id="password" />
							<span class="text-danger"><?php echo form_error('password');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="username" class="control-label"><span class="text-danger">*</span>Username</label>
						<div class="form-group">
							<input type="text" name="username" value="<?php echo $this->input->post('username'); ?>" class="form-control" id="username" />
							<span class="text-danger"><?php echo form_error('username');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label"><span class="text-danger">*</span>Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="namaDepan" class="control-label"><span class="text-danger">*</span>NamaDepan</label>
						<div class="form-group">
							<input type="text" name="namaDepan" value="<?php echo $this->input->post('namaDepan'); ?>" class="form-control" id="namaDepan" />
							<span class="text-danger"><?php echo form_error('namaDepan');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="namaBelakang" class="control-label"><span class="text-danger">*</span>NamaBelakang</label>
						<div class="form-group">
							<input type="text" name="namaBelakang" value="<?php echo $this->input->post('namaBelakang'); ?>" class="form-control" id="namaBelakang" />
							<span class="text-danger"><?php echo form_error('namaBelakang');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="noTelp" class="control-label"><span class="text-danger">*</span>NoTelp</label>
						<div class="form-group">
							<input type="text" name="noTelp" value="<?php echo $this->input->post('noTelp'); ?>" class="form-control" id="noTelp" />
							<span class="text-danger"><?php echo form_error('noTelp');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="alamat" class="control-label"><span class="text-danger">*</span>Alamat</label>
						<div class="form-group">
							<input type="text" name="alamat" value="<?php echo $this->input->post('alamat'); ?>" class="form-control" id="alamat" />
							<span class="text-danger"><?php echo form_error('alamat');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tglDaftar" class="control-label"><span class="text-danger">*</span>TglDaftar</label>
						<div class="form-group">
							<input type="text" name="tglDaftar" value="<?php echo $this->input->post('tglDaftar'); ?>" class="has-datepicker form-control" id="tglDaftar" />
							<span class="text-danger"><?php echo form_error('tglDaftar');?></span>
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