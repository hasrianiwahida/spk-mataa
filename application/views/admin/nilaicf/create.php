  <div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile fixed_height_350">
			<div class="x_title">

				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h3>Tambah nilaicf</h3>
							<br>
							<form action="<?php echo site_url() ?>/nilaicf/create" method = "POST">
								<div class="container">
									<br>

									<div class="row">
										<!-- <div class="col-md-2" style="margin-bottom: 5px;">
											<span>id : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="nama" class="form-control" style="font-size: 12px;">
										</div> -->
									</div>

									<br>

									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Gejala : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="gejala_id" class="form-control" style="font-size: 12px;">
										</div>
									</div>

									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Penyakit : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="penyakit_id" class="form-control" style="font-size: 12px;">
										</div>
									</div>

									<br>

									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Mb : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="mb" class="form-control" style="font-size: 12px;">
										</div>
									</div>

									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Md : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="md" class="form-control" style="font-size: 12px;">
										</div>
									</div>

									<br>

									<!-- <div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Solusi : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="solusi" class="form-control" style="font-size: 12px;">
										</div>
									</div> -->
									
									<br>

									<button type="submit" name="submit" class="btn btn-primary btn-sm" style="border-radius: 0px; background: #3399cc; border-color: #3399cc;">Simpan</button>
									<a href="<?php echo site_url('/nilaicf/index') ?>" class="btn btn-default btn-flat btn-sm" style="border-radius: 0px;">Batal</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	


