  <div class="content-wrapper">
    <div class="container">

      <!-- Main content -->
      <section class="content">
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Import Data Guru</h3>
          </div>
          <div class="box-body">
            <form name="f_siswa" action="<?php echo base_url(); ?>import/guru" id="f_siswa" enctype="multipart/form-data" method="post">
                <table class="table table-form">
                    <tr><td style="width: 25%">File</td><td style="width: 75%"><input type="file" class="form-control" name="import_excel" required></td></tr>
                    <tr><td></td><td>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Simpan</button>
                        <a href="<?php echo base_url(); ?>adm/m_guru" class="btn btn-default"><i class="fa fa-minus-circle"></i> Kembali</a>
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
