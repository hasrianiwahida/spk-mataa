<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile fixed_height_350">
		<!-- 	<h3>Penyakit List</h3> -->
			<br>
			<a href="<?php echo site_url('/penyakit/create') ?>" class="btn btn-primary" style="border-radius: 0px; font-size: 12px; background:#3399cc; border-color: #3399cc;"><i class="fa fa-plus-circle"></i>  Tambah Penyakit</a>
			<br><br>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>ID </th>
						<th>Kode Penyakit</th>
						<th>Nama Penyakit</th>
						<th>Keterangan</th>
						<th>Solusi</th>
						<th>Aksi</th>
					</tr>  
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($get_penyakit as $penyakit) : ?>
					<tr>
						<td><?php echo  $no++ ?></td>
						<td><?php echo $penyakit->kd_penyakit ?></td>
						<td><?php echo $penyakit->nama_penyakit ?></td>
						<td><?php echo $penyakit->definisi ?></td> 
						<td><?php echo $penyakit->solusi ?></td>
						<td style="text-align: center; width: 200px;">
								<a href="<?php echo site_url('/penyakit/edit/').$penyakit->id_penyakit ?>" class="btn btn-primary btn-sm" style="border-radius: 0px; background: #3399cc; border-color: #3399cc;"><i class="fa fa-edit"></i> Edit</a>
								<a href="<?php echo site_url('/penyakit/hapus/').$penyakit->id_penyakit ?>" class="btn btn-danger btn-sm" style="border-radius: 0px;" onclick="javasciprt: return confirm('Apakah anda yakin ?')"><i class="fa fa-trash"></i> Hapus</a>
						</td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
