<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tb Peminjaman Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tb_peminjaman/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>IdPeminjaman</th>
						<th>IdUser</th>
						<th>IdDetilBarang</th>
						<th>TglPeminjaman</th>
						<th>LamaPeminjaman</th>
						<th>TglPengembalian</th>
						<th>CatatanPeminjaman</th>
						<th>CatatanPengembalian</th>
						<th>StatusPengembalian</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tb_peminjaman as $t){ ?>
                    <tr>
						<td><?php echo $t['idPeminjaman']; ?></td>
						<td><?php echo $t['idUser']; ?></td>
						<td><?php echo $t['idDetilBarang']; ?></td>
						<td><?php echo $t['tglPeminjaman']; ?></td>
						<td><?php echo $t['lamaPeminjaman']; ?></td>
						<td><?php echo $t['tglPengembalian']; ?></td>
						<td><?php echo $t['catatanPeminjaman']; ?></td>
						<td><?php echo $t['catatanPengembalian']; ?></td>
						<td><?php echo $t['statusPengembalian']; ?></td>
						<td>
                            <a href="<?php echo site_url('tb_peminjaman/edit/'.$t['idPeminjaman']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tb_peminjaman/remove/'.$t['idPeminjaman']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
