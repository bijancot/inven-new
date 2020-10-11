<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tb Role Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tb_role/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>IdRole</th>
						<th>NamaRole</th>
						<th>KeteranganRole</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tb_role as $t){ ?>
                    <tr>
						<td><?php echo $t['idRole']; ?></td>
						<td><?php echo $t['namaRole']; ?></td>
						<td><?php echo $t['keteranganRole']; ?></td>
						<td>
                            <a href="<?php echo site_url('tb_role/edit/'.$t['idRole']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tb_role/remove/'.$t['idRole']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
