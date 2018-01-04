<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard | <?php echo $this->config->item('nama_aplikasi')." ".$this->config->item('versi'); ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>___/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>___/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>___/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="#" class="navbar-brand"><b><?php echo $this->config->item('nama_aplikasi')." ".$this->config->item('versi'); ?></b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <?php gen_menu2(); ?>
        
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs"><?php echo $this->session->userdata('admin_nama')." (".$this->session->userdata('admin_user').")"; ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat" onclick="return rubah_password();">Ubah Password</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?php echo base_url(); ?>adm/logout" class="btn btn-default btn-flat" onclick="return confirm('Anda yakin akan keluar?');">Logout</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->

  <?php echo $this->load->view($p); ?>
  
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> <?php echo $this->config->item('versi'); ?>
      </div>
      <strong>Copyright &copy; 2017-2018 <a href="<?php echo base_url(); ?>adm"><?php echo $this->config->item('nama_aplikasi');?></a>.</strong> All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- insert modal -->
<div id="tampilkan_modal"></div>

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url(); ?>___/plugin/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url(); ?>___/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>___/plugin/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>___/plugin/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>___/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>___/dist/js/demo.js"></script>
<?php 
if ($this->uri->segment(2) == "m_soal" && $this->uri->segment(3) == "edit") {
?>
<script src="<?php echo base_url(); ?>___/plugin/ckeditor/ckeditor.js"></script>
<?php
}
?>
<!-- editor
<script src="<?php echo base_url(); ?>___/plugin/editor/nicEdit.js"></script>
 -->

<script src="<?php echo base_url(); ?>___/plugin/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>___/plugin/datatables/dataTables.bootstrap.min.js"></script>


<script src="<?php echo base_url(); ?>___/plugin/countdown/jquery.plugin.min.js"></script> 
<script src="<?php echo base_url(); ?>___/plugin/countdown/jquery.countdown.min.js"></script> 
<script src="<?php echo base_url(); ?>___/plugin/jquery_zoom/jquery.zoom.min.js"></script>

<script type="text/javascript">
  var base_url = "<?php echo base_url(); ?>";
  var editor_style = "<?php echo $this->config->item('editor_style'); ?>";
  var uri_js = "<?php echo $this->config->item('uri_js'); ?>";
  
</script>
<script src="<?php echo base_url(); ?>___/js/aplikasi.js"></script> 
</body>
</html>
