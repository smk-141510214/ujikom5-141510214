<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aplikasi Penggajian</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="bs-binary-admin/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="bs-binary-admin/assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="bs-binary-admin/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="bs-binary-admin/assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Binary admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">
                    <?php if(Auth::guest()): ?>
                        <a class="btn btn-danger square-btn-adjust" href="<?php echo e(url('/login')); ?>">Login</a>
                        <a class="btn btn-danger square-btn-adjust" href="<?php echo e(url('/Pegawai/create')); ?>">Register</a>
                    <?php else: ?>
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                        </a>
                            <ul class="dropdown-menu" role="menu">
                                    <a href="<?php echo e(url('/logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                                        <?php echo e(csrf_field()); ?>

                                    </form>
                            </ul>
                        </div>
                    <?php endif; ?>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="bs-binary-admin/assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a class="active-menu"  href="<?php echo e(url('/')); ?>"><i class="fa fa-dashboard fa-3x"></i> Home</a>
                    </li>
                    <li>
                        <a  href="tab-panel.html"><i class="fa fa-qrcode fa-3x"></i> Tabs & Panels</a>
                    </li>
                      <li  >
                        <a  href="table.html"><i class="fa fa-table fa-3x"></i> Table Examples</a>
                    </li>
                    <li  >
                        <a  href="form.html"><i class="fa fa-edit fa-3x"></i> Forms </a>
                    </li>				
					
					                   
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-5x"></i>Data<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo e(url('/Jabatan')); ?>">Data Jabatan</a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('/Golongan')); ?>">Data Golongan</a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('/KategoriLembur')); ?>">Data Kategori Lembur</a>
                            </li>
                            <li>
                                <a href="<?php echo e(url('/Tunjangan')); ?>">Data Tunjangan</a>
                            </li>
                            <li>
                                <a href="#">Data Pegawai<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="<?php echo e(url('/Pegawai')); ?>">Pegawai</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(url('/LemburPegawai')); ?>">Lembur Pegawai</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(url('/TunjanganPegawai')); ?>">Tunjangan Pegawai</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(url('/Penggajian')); ?>">Gaji Pegawai</a>
                                    </li>

                                </ul>
                               
                            </li>
                        </ul>
                      </li>  
                  <li>
                        <a  href="blank.html"><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                    </li>	
                </ul>
               
            </div>

            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
                     <?php echo $__env->yieldContent('content'); ?>        
                 <!-- /. ROW  -->
                  <hr />
         
                </div>     
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="bs-binary-admin/assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="bs-binary-admin/assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="bs-binary-admin/assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="bs-binary-admin/assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="bs-binary-admin/assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="bs-binary-admin/assets/js/custom.js"></script>
    
   
</body>
</html>
