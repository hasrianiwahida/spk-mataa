  <div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile fixed_height_350">
			<div class="x_title">

				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h3>Tambah gejala</h3>
							<br>
							<form action="<?php echo site_url() ?>/gejala/create" method = "POST">
								<div class="container">

									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<!-- <span>Id gejala : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="id_gejala" class="form-control" style="font-size: 12px;">
										</div>
									</div> -->

									<br>

									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Kelompok gejala : </span>
										</div>
										<div class="col-md-12">
											<select name="id_klp_gejala" class="form-control " style="font-size: 12px;">
												<option>-Pilih-</option>
												<?php $kelompok_gejala = $this->Gejala_model->getlistkelompokgejala();

												?>
												<?php foreach ($kelompok_gejala->result() as $key){ ?>
													<option value="<?php echo $key->id ?>"><?php echo $key->nama; ?></option>
												<?php } ?> 
											
											</select>
										</div>
									</div>

									<br>

									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Kode Gejala : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="kd_gejala" class="form-control" style="font-size: 12px;">
										</div>
									</div>

									<br>

									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Nama Gejala : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="gejala" class="form-control" style="font-size: 12px;">
										</div>
									</div>

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
									<a href="<?php echo site_url('/gejala/index') ?>" class="btn btn-default btn-flat btn-sm" style="border-radius: 0px;">Batal</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	


