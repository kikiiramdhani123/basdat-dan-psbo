<?php 
$uri4 = $this->uri->segment(4);
?>

  <div class="content-wrapper">
    <div class="container">

      <!-- Main content -->
      <section class="content">
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Data Soal</h3>
            <div class="pull-right">
              <a class="btn btn-success btn-sm" href="<?php echo base_url(); ?>adm/m_soal/edit/0"><i class="glyphicon glyphicon-plus" style="margin-left: 0px; color: #fff"></i> &nbsp;&nbsp;Tambah Data</a>        
              <a class="btn btn-warning btn-sm tombol-kanan" href="<?php echo base_url(); ?>upload/format_soal_download.xlsx" ><i class="glyphicon glyphicon-download"></i> &nbsp;&nbsp;Download Format Import</a>
              <a class="btn btn-info btn-sm tombol-kanan" href="<?php echo base_url(); ?>adm/m_soal/import" ><i class="glyphicon glyphicon-upload"></i> &nbsp;&nbsp;Import</a>
              <a href='<?php echo base_url(); ?>adm/m_soal/cetak/<?php echo $uri4; ?>' class='btn btn-info btn-sm' target='_blank'><i class='glyphicon glyphicon-print'></i> Cetak</a>
            </div>
          </div>
          <div class="box-body">
            <?php echo $this->session->flashdata('k'); ?>
        
            <table class="table table-bordered" id="datatabel">
              <thead>
                <tr>
                  <td width="5%">No</td>
                  <td width="50%">Soal</td>
                  <td width="15%">Mapel/Guru</td>
                  <td width="15%">Analisa</td>
                  <td width="15%">Aksi</td>
                </tr>
              </thead>

              <tbody>

              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
