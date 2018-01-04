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
  <link href="<?php echo base_url(); ?>___/css/style.css" rel="stylesheet">

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
          <a href="../../index2.html" class="navbar-brand"><b><?php echo $this->config->item('nama_aplikasi')." ".$this->config->item('versi'); ?></b>
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

  <div class="content-wrapper">
    <div class="container">

      <!-- Main content -->
      <section class="content">
        <div class="col-md-9">
            <form role="form" name="_form" method="post" id="_form">
                <div class="panel panel-default">
                    <div class="panel-heading">Soal Ke <div class="btn btn-info" id="soalke"></div>
            
                        <div class="tbl-kanan-soal">
                            <div id="clock" style="font-weight: bold" class="btn btn-danger"></div>
                        </div>
                    </div>

                    <div class="panel-body">
                    <?php echo $html; ?>
                    </div>

                    <div class="panel-footer">
                        <a class="action back btn btn-info btn-lg" rel="0" onclick="return back();"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
                        <a class="action next btn btn-info btn-lg" rel="2" onclick="return next();"><i class="glyphicon glyphicon-chevron-right"></i> Next</a>
                        <a class="action submit btn btn-danger btn-lg pull-right" onclick="return simpan_akhir();"><i class="glyphicon glyphicon-stop"></i> Selesai Ujian</a>
                        <input type="hidden" name="jml_soal" value="<?php echo $no; ?>">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-3">
            <div class="panel panel-info">
                <div class="panel-heading">Navigasi Soal</div>
                <div class="panel-body">
                    <div id="tampil_jawaban"></div>
                </div>
            </div>
        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  
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

<script src="<?php echo base_url(); ?>___/plugin/countdown/jquery.plugin.min.js"></script> 
<script src="<?php echo base_url(); ?>___/plugin/countdown/jquery.countdown.min.js"></script> 
<script src="<?php echo base_url(); ?>___/plugin/jquery_zoom/jquery.zoom.min.js"></script> 
<script type="text/javascript">
    var base_url = "<?php echo base_url(); ?>";
    id_tes = "<?php echo $id_tes; ?>";

    function getFormData($form){
        var unindexed_array = $form.serializeArray();
        var indexed_array = {};
        $.map(unindexed_array, function(n, i){
            indexed_array[n['name']] = n['value'];
        });
        return indexed_array;
    }
    
    $(document).on("ready", function(){
        $('.gambar').each(function(){
            var url = $(this).attr("src");
            $(this).zoom({url: url});
        });
            
        hitung();
        simpan();
        buka(1);

        widget      = $(".step");
        btnnext     = $(".next");
        btnback     = $(".back"); 
        btnsubmit   = $(".submit");

        $(".step").hide();
        $(".back").hide();
        $("#widget_1").show();
    });
      
    widget      = $(".step");
    total_widget = widget.length;
    
    hitung = function() {
        <?php 
        $tgl_selesai = $jam_selesai;
        $tgl_selesai = strtotime($tgl_selesai);
        $tgl_baru = date('F j, Y H:i:s', $tgl_selesai);
        ?>

        var waktu_selesai = new Date('<?php echo $tgl_baru; ?>');

        $('div#clock').countdown(
            {   
                until: waktu_selesai, 
                serverSync: dari_server,
                alwaysExpire: true, 
                format: 'HMS', 
                compact: true, 
                onExpiry: selesai
            }
        );
    }

    selesai = function() {
        alert('Waktu telah selesai....!')
        var f_asal  = $("#_form");
        var form  = getFormData(f_asal);
        simpan_akhir(id_tes);
        window.location.assign("<?php echo base_url(); ?>adm/sudah_selesai_ujian/"+id_tes); 
          
        return false;
    }

    next = function() {
        var berikutnya  = $(".next").attr('rel');
        berikutnya = parseInt(berikutnya);
        berikutnya = berikutnya > total_widget ? total_widget : berikutnya;

        $("#soalke").html(berikutnya);

        $(".next").attr('rel', (berikutnya+1));
        $(".back").attr('rel', (berikutnya-1));
        
        var sudah_akhir = berikutnya == total_widget ? 1 : 0;

        $(".step").hide();
        $("#widget_"+berikutnya).show();

        if (sudah_akhir == 1) {
            $(".back").show();
            $(".next").hide();
        } else if (sudah_akhir == 0) {
            $(".next").show();
            $(".back").show();
        }

        simpan();
    }
    
    dari_server = function() { 
        var time = null; 
        $.ajax({url: base_url+'adm/get_servertime', 
            async: false, 
            dataType: 'text', 
            success: function(text) { 
                time = new Date(text); 
            }, 
            error: function(http, message, exc) { 
                time = new Date(); 
            }
        }); 
        return time; 
    }

    back = function() {
        var back  = $(".back").attr('rel');
        back = parseInt(back);
        back = back < 1 ? 1 : back;

        $("#soalke").html(back);
        
        $(".back").attr('rel', (back-1));
        $(".next").attr('rel', (back+1));
        
        $(".step").hide();
        $("#widget_"+back).show();

        var sudah_awal = back == 1 ? 1 : 0;
         
        $(".step").hide();
        $("#widget_"+back).show();
        
        if (sudah_awal == 1) {
            $(".back").hide();
            $(".next").show();
        } else if (sudah_awal == 0) {
            $(".next").show();
            $(".back").show();
        }

        simpan();
    }

    buka = function(id_widget) {
        $(".next").attr('rel', (id_widget+1));
        $(".back").attr('rel', (id_widget-1));

        $("#soalke").html(id_widget);
        
        $(".step").hide();
        $("#widget_"+id_widget).show();
    }

    simpan = function() {
        var f_asal  = $("#_form");
        var form  = getFormData(f_asal);

        $.ajax({    
            type: "POST",
            url: base_url+"adm/ikut_ujian/simpan_satu/"+id_tes,
            data: JSON.stringify(form),
            dataType: 'json',
            contentType: 'application/json; charset=utf-8'
        }).done(function(response) {
            var hasil_jawaban = "";
            var panjang       = response.data.length;

            for (var i = 0; i < panjang; i++) {
                if (response.data[i] != "") {
                    hasil_jawaban += '<a class="btn btn-success btn_soal btn-sm" onclick="return buka('+(i+1)+');">'+(i+1)+". "+response.data[i]+"</a>";
                } else {
                    hasil_jawaban += '<a class="btn btn-warning btn_soal btn-sm" onclick="return buka('+(i+1)+');">'+(i+1)+". -</a>";
                }
            }

            $("#tampil_jawaban").html(hasil_jawaban);
        });
        return false;
    }

    simpan_akhir = function() {
        if (confirm('Anda yakin akan mengakhiri tes ini..?')) {
            var f_asal  = $("#_form");
            var form  = getFormData(f_asal);

            $.ajax({    
                type: "POST",
                url: base_url+"adm/ikut_ujian/simpan_akhir/"+id_tes,
                data: JSON.stringify(form),
                dataType: 'json',
                contentType: 'application/json; charset=utf-8'
            }).done(function(r) {
                if(r.status == "ok") {
                    window.location.assign("<?php echo base_url(); ?>adm/sudah_selesai_ujian/"+id_tes); 
                }
            });

          return false;
        }
    }

</script>
</body>
</html>
