  <div class="content-wrapper">
    <div class="container">

      <!-- Main content -->
      <section class="content">
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Daftar Ujian / Tes</h3>
            <div class="pull-right">
              <a class="btn btn-success btn-sm tombol-kanan" href="#" onclick="return m_mapel_e(0);"><i class="glyphicon glyphicon-plus"></i> &nbsp;&nbsp;Tambah</a>
            </div>
          </div>
          <div class="box-body">
            <table class="table table-bordered" id="datatabel">
              <thead>
                <tr>
                  <th width="5%">No</th>
                  <th width="75%">Nama</th>
                  <th width="20%">Aksi</th>
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


<div class="modal fade" id="m_mapel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 id="myModalLabel">Data Mata Pelajaran</h4>
      </div>
      <div class="modal-body">
          <form name="f_mapel" id="f_mapel" onsubmit="return m_mapel_s();">
            <input type="hidden" name="id" id="id" value="0">
              <table class="table table-form">
                <tr><td style="width: 25%">Nama</td><td style="width: 75%"><input type="text" class="form-control" name="nama" id="nama" required></td></tr>
              </table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary"><i class="fa fa-check"></i> Simpan</button>
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="fa fa-minus-circle"></i> Tutup</button>
      </div>
        </form>
    </div>
  </div>
</div>
