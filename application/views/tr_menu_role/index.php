<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tr Menu Role Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tr_menu_role/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>IdTrMenu</th>
						<th>IdMenu</th>
						<th>IdRole</th>
						<th>TglDibuat</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tr_menu_role as $t){ ?>
                    <tr>
						<td><?php echo $t['idTrMenu']; ?></td>
						<td><?php echo $t['idMenu']; ?></td>
						<td><?php echo $t['idRole']; ?></td>
						<td><?php echo $t['tglDibuat']; ?></td>
						<td>
                            <a href="<?php echo site_url('tr_menu_role/edit/'.$t['idTrMenu']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tr_menu_role/remove/'.$t['idTrMenu']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
