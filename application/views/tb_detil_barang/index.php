<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tb Detil Barang Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tb_detil_barang/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>IdDetilBarang</th>
						<th>IdBarang</th>
						<th>IdJenis</th>
						<th>TahunPengadaan</th>
						<th>KondisiBarang</th>
						<th>QtyBarang</th>
						<th>KeteranganBarang</th>
						<th>FotoBarang</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tb_detil_barang as $t){ ?>
                    <tr>
						<td><?php echo $t['idDetilBarang']; ?></td>
						<td><?php echo $t['idBarang']; ?></td>
						<td><?php echo $t['idJenis']; ?></td>
						<td><?php echo $t['tahunPengadaan']; ?></td>
						<td><?php echo $t['kondisiBarang']; ?></td>
						<td><?php echo $t['qtyBarang']; ?></td>
						<td><?php echo $t['keteranganBarang']; ?></td>
						<td><?php echo $t['fotoBarang']; ?></td>
						<td>
                            <a href="<?php echo site_url('tb_detil_barang/edit/'.$t['idDetilBarang']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tb_detil_barang/remove/'.$t['idDetilBarang']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
