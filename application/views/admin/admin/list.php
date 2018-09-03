<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile fixed_height_350">
			<!-- <h3>admin List</h3> -->
			<br>
			<a href="<?php echo site_url('/admin/create') ?>" class="btn btn-primary" style="border-radius: 0px; font-size: 12px; background:#3399cc; border-color: #3399cc;"><i class="fa fa-plus-circle"></i>  Tambah admin</a>
			<br><br>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No </th>
						<th>Nama</th>
						<th>Username</th>
						<th>Password</th>
						<th>Usia</th>
						<th>Jenis_kelamin</th>
						<th>Alamat</th>
						<th>Aksi</th>
					</tr>  
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($get_admin as $admin) : ?>
					<tr>
						<td><?php echo  $no++ ?></td>
						<td><?php echo $admin->nama ?></td>
						<td><?php echo $admin->username ?></td>
						<td><?php echo $admin->password ?></td> 
						<td><?php echo $admin->usia ?></td>
						<td><?php echo $admin->jenis_kelamin ?></td>
						<td><?php echo $admin->alamat ?></td>

						<td style="text-align: center; width: 200px;">
								<a href="<?php echo site_url('/admin/edit/').$admin->id_admin ?>" class="btn btn-primary btn-sm" style="border-radius: 0px; background: #3399cc; border-color: #3399cc;"><i class="fa fa-edit"></i> Edit</a>
								<a href="<?php echo site_url('/admin/hapus/').$admin->id_admin ?>" class="btn btn-danger btn-sm" style="border-radius: 0px;" onclick="javasciprt: return confirm('Apakah anda yakin ?')"><i class="fa fa-trash"></i> Hapus</a>
						</td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
