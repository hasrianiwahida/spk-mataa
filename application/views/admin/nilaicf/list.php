<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile fixed_height_350">
			<!-- <h3>nilaicf List</h3> -->
			<br>
			<a href="<?php echo site_url('/nilaicf/create') ?>" class="btn btn-primary" style="border-radius: 0px; font-size: 12px; background:#666666; border-color: #666666;"><i class="fa fa-plus-circle"></i>  Tambah +</a>
			<br><br>
			<table class="table table-bordered">
				<thead>
					<tr><!-- 
						<th>ID nilaicf </th> -->
						<th>No</th>
						<th>Gejala</th>
						<th>Penyakit</th>
						<th>Mb</th>
						<th>Md</th>
						<th>Aksi</th>
					</tr>  
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($get_nilaicf as $nilaicf) : ?>
					<tr>
						<td><?php echo  $no++ ?></td>
						<td><?php echo $nilaicf['gejala'] ?></td>
						<td><?php echo $nilaicf['nama_penyakit'] ?></td>
						<td><?php echo $nilaicf['mb'] ?></td>
						<td><?php echo $nilaicf['md'] ?></td>

			
						<td style="text-align: center; width: 200px;">
								<a href="<?php echo site_url('/nilaicf/edit/').$nilaicf['id'] ?>" class="btn btn-primary btn-sm" style="border-radius: 0px; background: #666666; border-color: #666666;"><i class="fa fa-edit"></i> Edit</a>
								<a href="<?php echo site_url('/nilaicf/hapus/').$nilaicf['id'] ?>" class="btn btn-info btn-sm" style="border-radius: 0px;" onclick="javasciprt: return confirm('Apakah anda yakin ?')"><i class="fa fa-trash"></i> Hapus</a>
						</td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
