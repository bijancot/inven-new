<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tr Menu Role Edit</h3>
            </div>
			<?php echo form_open('tr_menu_role/edit/'.$tr_menu_role['idTrMenu']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="idMenu" class="control-label"><span class="text-danger">*</span>Tb Menu</label>
						<div class="form-group">
							<select name="idMenu" class="form-control">
								<option value="">select tb_menu</option>
								<?php 
								foreach($all_tb_menu as $tb_menu)
								{
									$selected = ($tb_menu['idMenu'] == $tr_menu_role['idMenu']) ? ' selected="selected"' : "";

									echo '<option value="'.$tb_menu['idMenu'].'" '.$selected.'>'.$tb_menu['idMenu'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('idMenu');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="idRole" class="control-label"><span class="text-danger">*</span>Tb Role</label>
						<div class="form-group">
							<select name="idRole" class="form-control">
								<option value="">select tb_role</option>
								<?php 
								foreach($all_tb_role as $tb_role)
								{
									$selected = ($tb_role['idRole'] == $tr_menu_role['idRole']) ? ' selected="selected"' : "";

									echo '<option value="'.$tb_role['idRole'].'" '.$selected.'>'.$tb_role['idRole'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('idRole');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="tglDibuat" class="control-label"><span class="text-danger">*</span>TglDibuat</label>
						<div class="form-group">
							<input type="text" name="tglDibuat" value="<?php echo ($this->input->post('tglDibuat') ? $this->input->post('tglDibuat') : $tr_menu_role['tglDibuat']); ?>" class="has-datepicker form-control" id="tglDibuat" />
							<span class="text-danger"><?php echo form_error('tglDibuat');?></span>
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