<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="x_panel tile fixed_height_350">
			<div class="x_title">

				<div class="container">
					<div class="row">
						<div class="col-md-12">
  							<h3>Edit</h3>
  							<br>
							<form action="" method ="POST">
								<div class="container">
									<div class="row">
										<input type="hidden" name="id_gejala" value="<?php echo $gejala['id_gejala'] ?>">
										<div class="col-md-2" style="margin-bottom: 5px;" >
											<span>Kelompok gejala : </span>
										</div>
										<div class="col-md-12">
											<select name="id_klp_gejala" class="form-control " style="font-size: 12px;">
												<option>-Pilih-</option>
												<?php $kelompok_gejala = $this->Gejala_model->getlistkelompokgejala();

												?>
												<?php foreach ($kelompok_gejala->result() as $key){ ?>
													<option value="<?php echo $key->id ?>"><?php echo $key->nama_klp; ?></option>
												<?php } ?> 
											
											</select>
										</div>
									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;" >
											<span>Kode gejala : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="kd_gejala" class="form-control" style="font-size: 12px;" value="<?php echo $gejala['kd_gejala'] ?>">
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Nama Gejala : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="gejala" class="form-control" style="font-size: 12px;" value="<?php echo $gejala['gejala'] ?>">
										</div>
									</div>
									<!-- <br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
											<span>Solusi : </span>
										</div>
										<div class="col-md-12">
											<input type="text" name="solusi" class="form-control" style="font-size: 12px;" value="<?php echo $gejala['solusi'] ?>">
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-2" style="margin-bottom: 5px;">
										</div>
									</div> -->
									<br>
										<button type="submit" name="submit" class="btn btn-primary btn-sm" style="border-radius: 0px; background: #666666; border-color: #666666;">Simpan</button>
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
	


