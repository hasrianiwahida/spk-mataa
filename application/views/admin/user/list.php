<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile fixed_height_350">
			<!-- <h3>user List</h3> -->
			<br>
			<a href="<?php echo site_url('/user/create') ?>" class="btn btn-primary" style="border-radius: 0px; font-size: 12px; background:#3399cc; border-color: #3399cc;"><i class="fa fa-plus-circle"></i>  Tambah user</a>
			<br><br>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No </th>
						<th>Nama</th>
						<th>Jenis_kelamin</th>
						<th>Usia</th>
						<th>Alamat</th>
						<th>Aksi</th>
					</tr>  
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($get_user as $user) : ?>
					<tr>
						<td><?php echo  $no++ ?></td>
						<td><?php echo $user->nama ?></td> 
						<td><?php echo $user->jenis_kelamin ?></td>
						<td><?php echo $user->umur ?></td>
						<td><?php echo $user->alamat ?></td>

						<td style="text-align: center; width: 200px;">
								<a href="<?php echo site_url('/user/edit/').$user->id_user ?>" class="btn btn-primary btn-sm" style="border-radius: 0px; background: #3399cc; border-color: #3399cc;"><i class="fa fa-edit"></i> Edit</a>
								<a href="<?php echo site_url('/user/hapus/').$user->id_user ?>" class="btn btn-danger btn-sm" style="border-radius: 0px;" onclick="javasciprt: return confirm('Apakah anda yakin ?')"><i class="fa fa-trash"></i> Hapus</a>
						</td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
