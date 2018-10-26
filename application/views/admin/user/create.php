  <div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile fixed_height_350">
			<div class="x_title">

				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h3>Tambah </h3>
							<br>
							<form action="<?php echo site_url() ?>/user/create" method = "POST">
								<div class="container">

									<div class="row">
									<!-- 	<div class="col-md-2" style="margin-bottom: 5px;">
											<span> Id  : </span>
										</div> -->
										<div class="col-md-12">
											<input type="hidden" name="id_user" class="form-control" style="font-size: 12px;">
										</div>
									</div>


									<br>

									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Nama : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="nama" class="form-control" style="font-size: 12px;">
										</div>
									</div>

									<!-- <br>

									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Username : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="username" class="form-control" style="font-size: 12px;">
										</div>
									</div>

									<br>

									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Password : </span>
										</div>
										<div class="col-md-12">
											<input type="password" name="password" class="form-control" style="font-size: 12px;">
										</div>
									</div>

									<br>
 -->
									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Jenis Kelamin : </span>
										</div>
										<div class="col-md-12">
											<select name="jenis_kelamin" id="jenis_kelamin" class='form-control'>
                            					<option value="0" selected="selected">- Jenis Kelamin -</option>
                            					<option value="L">Laki-laki</option>
                           						 <option value="P">Wanita</option>
                       						 </select>

										</div>
									</div>
										<div class="row">
											<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Usia : </span>
												</div>
													<div class="col-md-12">
													<input type="text" name="umur" class="form-control" style="font-size: 12px;">
												</div>
											</div>

											<br>

									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Alamat : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="alamat" class="form-control" style="font-size: 12px;">
										</div>
									</div>

									<button type="submit" name="submit" class="btn btn-primary btn-sm" style="border-radius: 0px; background: #666666; border-color: #666666;">Simpan</button>
									<a href="<?php echo site_url('/user/index') ?>" class="btn btn-default btn-flat btn-sm" style="border-radius: 0px;">Batal</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	


