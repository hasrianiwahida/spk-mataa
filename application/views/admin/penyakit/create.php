  <div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile fixed_height_350">
			<div class="x_title">

				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h3>Tambah </h3>
							<br>
							<form action="<?php echo site_url() ?>/penyakit/create" method = "POST">
								<div class="container">

									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Kode Penyakit : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="kd_penyakit" class="form-control" style="font-size: 12px;">
										</div>
									</div>

									<br>

									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Nama Penyakit : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="nama_penyakit" class="form-control" style="font-size: 12px;">
										</div>
									</div>

									<br>

									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Keterangan : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="definisi" class="form-control" style="font-size: 12px;">
										</div>
									</div>

									<!-- <br>

									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Solusi : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="solusi" class="form-control" style="font-size: 12px;">
										</div>
									</div> -->
									
									<br>

									<button type="submit" name="submit" class="btn btn-primary btn-sm" style="border-radius: 0px; background: #666666; border-color: #666666;">Simpan</button>
									<a href="<?php echo site_url('/penyakit/index') ?>" class="btn btn-default btn-flat btn-sm" style="border-radius: 0px;">Batal</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	


