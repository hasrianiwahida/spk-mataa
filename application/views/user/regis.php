<?php echo form_open('regis/create');?>

<section class="more-portfolio-item" style="margin-top:200px;">
        <div class="container">
            <div class="row">
                <div class="col-md-offset-4 col-md-4">
                <div class="section-title">
              <!--     <h3>REGISTRASI PENGGUNA</h3> -->
                  <!-- <span class="border"></span> -->
                  <h4>Registrasi Pengguna</h4>
                </div><!-- end .section-title --><br>

                    <div class="box-body">
                      <div class="form-group">
                        <label>Nama</label>
                        <input name="nama" id="nama" class='form-control' placeholder="Masukkan Nama" autofocus required>
                      </div>
                      <div class='form-group'>
                        <label>Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class='form-control'>
                            <option value="0" selected="selected">- Jenis Kelamin -</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                      </div>
                      <!-- <div class="form-group">
                        <label>Pekerjaan</label>
                        <input name="TxtPekerjaan" id="TxtPekerjaan" class='form-control' placeholder="Masukkan Pekerjaan" required>
                      </div> -->
                      <div class="form-group">
                        <label>Umur</label>
                        <input name="umur" id="umur" class='form-control' placeholder="Masukkan Umur" required>
                      </div>
                      <div class="form-group">
                        <label>Alamat</label>
                        <input name="alamat" id="alamat" class='form-control' placeholder="Masukkan Alamat" required>
                      </div>
                    </div><!-- /.box-body -->

                    <div class="box-footer" style="margin-bottom: 100px;">
                      <button type="submit" class="btn btn-primary" name="submit" value="Daftar">Simpan</button>
                      <input type="reset" value="Reset" class="btn btn-default"/></td>
                    </div>
                  <!-- </form> -->

                </div>
 
            </div><!-- End .row -->            
        </div><!-- End .container -->

    </section>

    <? php echo form_close('');?>

    
