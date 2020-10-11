<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tb User Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tb_user/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>IdUser</th>
						<th>IdRole</th>
						<th>Password</th>
						<th>Username</th>
						<th>Email</th>
						<th>NamaDepan</th>
						<th>NamaBelakang</th>
						<th>NoTelp</th>
						<th>Alamat</th>
						<th>TglDaftar</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tb_user as $t){ ?>
                    <tr>
						<td><?php echo $t['idUser']; ?></td>
						<td><?php echo $t['idRole']; ?></td>
						<td><?php echo $t['password']; ?></td>
						<td><?php echo $t['username']; ?></td>
						<td><?php echo $t['email']; ?></td>
						<td><?php echo $t['namaDepan']; ?></td>
						<td><?php echo $t['namaBelakang']; ?></td>
						<td><?php echo $t['noTelp']; ?></td>
						<td><?php echo $t['alamat']; ?></td>
						<td><?php echo $t['tglDaftar']; ?></td>
						<td>
                            <a href="<?php echo site_url('tb_user/edit/'.$t['idUser']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tb_user/remove/'.$t['idUser']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
