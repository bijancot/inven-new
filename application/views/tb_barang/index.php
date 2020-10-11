<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tb Barang Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tb_barang/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Barang</th>
						<th>Nama Barang </th>
						<th>Satuan Barang</th>
						<th>Deskripsi Barang</th>
						<th>Aksi</th>
                    </tr>
                    <?php foreach($tb_barang as $t){ ?>
                    <tr>
						<td><?php echo $t['idBarang']; ?></td>
						<td><?php echo $t['namaBarang_']; ?></td>
						<td><?php echo $t['satuanBarang']; ?></td>
						<td><?php echo $t['deskripsiBarang']; ?></td>
						<td>
                            <a href="<?php echo site_url('tb_barang/edit/'.$t['idBarang']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tb_barang/remove/'.$t['idBarang']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
