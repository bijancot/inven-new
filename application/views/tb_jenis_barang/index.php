<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tb Jenis Barang Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tb_jenis_barang/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>IdJenis</th>
						<th>NamaJenis</th>
						<th>KeteranganJenis</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tb_jenis_barang as $t){ ?>
                    <tr>
						<td><?php echo $t['idJenis']; ?></td>
						<td><?php echo $t['namaJenis']; ?></td>
						<td><?php echo $t['keteranganJenis']; ?></td>
						<td>
                            <a href="<?php echo site_url('tb_jenis_barang/edit/'.$t['idJenis']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tb_jenis_barang/remove/'.$t['idJenis']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
