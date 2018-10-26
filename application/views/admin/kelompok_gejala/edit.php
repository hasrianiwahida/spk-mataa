<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile fixed_height_350">
			<div class="x_title">

				<div class="container">
					<div class="row">
						<div class="col-md-12">
  							<h3>Edit </h3>
  							<br>
							<form action="" method ="POST">
								<div class="container">
									<div class="row">
										<input type="hidden" name="id" value="<?php echo $kelompok_gejala['id'] ?>">
										<div class="col-md-2" style="margin-bottom: 5px;">
										<!-- 	<span>No: </span> -->
										</div>
										<div class="col-md-12">
											<input type="hidden" name="id" class="form-control" style="font-size: 12px;" value="<?php echo $kelompok_gejala['id'] ?>">
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;" >
											<span>Nama : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="nama" class="form-control" style="font-size: 12px;" value="<?php echo $kelompok_gejala['nama_klp'] ?>">
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Keterangan : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="keterangan" class="form-control" style="font-size: 12px;" value="<?php echo $kelompok_gejala['keterangan'] ?>">
										</div>
									</div>
									<!-- <br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Solusi : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="solusi" class="form-control" style="font-size: 12px;" value="<?php echo $kelompok_gejala['solusi'] ?>">
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
										</div>
									</div> -->
									<br>
										<button type="submit" name="submit" class="btn btn-primary btn-sm" style="border-radius: 0px; background: #666666; border-color: #666666;">Simpan</button>
											<a href="<?php echo site_url('/kelompok_gejala/index') ?>" class="btn btn-default btn-flat btn-sm" style="border-radius: 0px;">Batal</a>


								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	


