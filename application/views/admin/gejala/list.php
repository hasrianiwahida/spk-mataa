<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile fixed_height_350">
			<!-- <h3>gejala List</h3> -->
			<br>
			<a href="<?php echo site_url('/gejala/create') ?>" class="btn btn-primary" style="border-radius: 0px; font-size: 12px; background:#666666; border-color: #666666;"><i class="fa fa-plus-circle"></i>  Tambah +</a>
			<br><br>
			<table class="table table-bordered">
				<thead>
					<tr><!-- 
						<th>ID Gejala </th> -->
						<th>No</th>
						<th>Kelompok Gejala</th>
						<th>Kode Gejala</th>
						<th>Gejala</th>
						<th>Aksi</th>
					</tr>  
				</thead>
				<tbody>
					<?php $no= 1; foreach ($kelompok_data as $data): ?>	
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $data['nama_klp'] ?></td>
							<td><?php echo $data['kd_gejala'] ?></td>
							<td><?php echo $data['gejala'] ?></td>
			
						<td style="text-align: center; width: 200px;">
								<a href="<?php echo site_url('/gejala/edit/').$data['gid'] ?>" class="btn btn-primary btn-sm" style="border-radius: 0px; background: #666666; border-color: #666666;"><i class="fa fa-edit"></i> Edit</a>
								<a href="<?php echo site_url('/gejala/hapus/').$data['gid'] ?>" class="btn btn-info btn-sm" style="border-radius: 0px;" onclick="javasciprt: return confirm('Apakah anda yakin ?')"><i class="fa fa-trash"></i> Hapus</a>
						</td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
