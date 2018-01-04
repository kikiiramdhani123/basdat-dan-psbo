  <div class="content-wrapper">
    <div class="container">

      <!-- Main content -->
      <section class="content">
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Import Data Soal</h3>
          </div>
          <div class="box-body">
            <form name="f_siswa" action="<?php echo base_url(); ?>import/soal" id="f_siswa" enctype="multipart/form-data" method="post">
                <input type="hidden" name="id" id="id" value="0">
                <table class="table table-form">
                    <tr><td style="width: 25%">Guru</td><td style="width: 75%">
                    <?php echo form_dropdown('id_guru', $p_guru, '', 'class="form-control" id="id_guru" required'); ?>
                    </td></tr>
                    <tr><td>Mapel</td><td><?php echo form_dropdown('id_mapel', $p_mapel, '', 'class="form-control" id="id_mapel" required'); ?></td></tr>

                    <tr><td>File</td><td><input type="file" class="form-control col-md-3" name="import_excel" required></td></tr>
                    <tr><td></td><td>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Simpan</button>
                        <a href="<?php echo base_url(); ?>adm/m_siswa" class="btn btn-default"><i class="fa fa-minus-circle"></i> Kembali</a>
                    </td></tr>
                </table>
            </form>
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