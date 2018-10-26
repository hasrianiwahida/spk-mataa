 <aside class="main-sidebar" style="background:#ffffff;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="background:#ffffff;">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url()?>template/dist/img/eye.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p style="color:#3366ff;">Admin</p>
          <!-- <a href="#"><i class="fa fa-circle text-success"></i style="color:#3366ff;"> Online</a> -->
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class ="input-group">
          <input type="text" name="q" class="form-control" style="background:#ffffff; color:#3366ff;" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" style="background:#ffffff;" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header" style="background:#ffffff; color:#3366ff;"  >MAIN NAVIGATION</li>
        <li class="active treeview">
          <li> <a href="<?php echo site_url()?>/welcome">
            <i class="fa fa-dashboard"></i> <span style="color:#3366ff;">Halaman Utama</span>
            <span class="pull-right-container">
            </span>
          </a>
          </li>
          <!-- <ul class="treeview-menu">
            <li class="active"><a href="<?php echo site_url()?>"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li> -->


          <li class style="color:#3366ff;" ="active treeview">
          <a href="#" style="background:#ffffff;">
            <i class  ="fa fa-dashboard"></i> <span style="color:#3366ff;">Dashboard
            <span class="pull-right-container">
            </span>
          </a>
          <!-- <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul> -->
        </li>



        <li style="color:#3366ff;" class ="treeview" >
          <a href="#" style="color:blue !important">
            <i class="fa fa-files-o"></i>
            <span>Data Gejala</span  style="background:#ffffff;;">
            <span class ="pull-right-container">
             <!--  <span class="label label-primary pull-right">4</span> -->
            </span>
          </a>
          <ul class ="treeview-menu">
            <li class style="background:#ffffff;"><a href ="<?php echo site_url()?>/gejala" style="color:blue !important"><i class ="fa fa-circle-o"></i > Gejala</a></li>
            <li style="background:#ffffff;"><a href="<?php echo site_url()?>/kelompok_gejala" style="color:blue !important"><i class="fa fa-circle-o"></i> Kelompok Gejala</a></li>
            <li style="background:#ffffff;"><a href="<?php echo site_url()?>/nilaicf" style="color:blue !important"><i class="fa fa-circle-o"></i> Certainty Factor</a></li>

          </ul>
        </li> 
            <li><a href = "<?php echo site_url()?>/penyakit" style="color:blue !important"><i class ="fa fa-files-o"></i> Data Penyakit</a></li>
        
            <li><a href ="<?php echo site_url()?>/admin" style="color:blue !important"><i class ="fa fa-files-o"></i> Data Admin</a></li>
            <li><a href  ="<?php echo site_url()?>/user" style="color:blue !important"><i class="fa fa-files-o"></i> Data User</a></li>
             <li><a href  ="<?php echo site_url()?>/cetaklaporan" style="color:blue !important"><i class="fa fa-files-o"></i> Data Laporan</a></li>

 
 </li> 
<!-- 
        <li class="header">Pengaturan</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>