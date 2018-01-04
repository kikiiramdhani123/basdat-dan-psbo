  <div class="content-wrapper">
    <div class="container">

      <!-- Main content -->
      <section class="content">
        <div class="box box-default">
          <div class="box-header with-border">
            <h3 class="box-title">Data Guru</h3>
            <div class="pull-right">
              <a class="btn btn-success btn-sm tombol-kanan" href="#" onclick="return m_guru_e(0);"><i class="glyphicon glyphicon-plus"></i> &nbsp;&nbsp;Tambah</a>       
              <a class="btn btn-warning btn-sm tombol-kanan" href="<?php echo base_url(); ?>upload/format_import_guru.xlsx" ><i class="glyphicon glyphicon-download"></i> &nbsp;&nbsp;Download Format Import</a>
              <a class="btn btn-info btn-sm tombol-kanan" href="<?php echo base_url(); ?>adm/m_guru/import" ><i class="glyphicon glyphicon-upload"></i> &nbsp;&nbsp;Import</a>
            </div>
          </div>
          <div class="box-body">
            <table class="table table-bordered" id="datatabel">
              <thead>
                <tr>
                  <th width="5%">No</th>
                  <th width="40%">Nama</th>
                  <th width="20%">NIP/Username</th>
                  <th width="35%">Aksi</th>
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

                    
<div class="modal fade" id="m_guru" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 id="myModalLabel">Data Guru</h4>
      </div>
      <form name="f_guru" id="f_guru" onsubmit="return m_guru_s();">
        <div class="modal-body">          
            <input type="hidden" name="id" id="id" value="0">
              <table class="table table-form">
                <tr>
                  <td style="width: 25%">NIP</td>
                  <td style="width: 75%"><input type="text" class="form-control" name="nip" id="nip" required></td>
                </tr>
                <tr>
                  <td style="width: 25%">Nama</td>
                  <td style="width: 75%"><input type="text" class="form-control" name="nama" id="nama" required></td>
                </tr>
                <tr>
                  <td style="width: 25%">Tempat Lahir</td>
                  <td style="width: 75%"><input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" required></td>
                </tr>
                <tr>
                  <td style="width: 25%">Tanggal Lahir</td>
                  <td style="width: 75%">
                    <div class="input-group date" data-provide="datepicker">
                        <input type="text" name="tanggal_lahir" class="form-control" required>
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td style="width: 25%">Jenis Kelamin</td>
                  <td style="width: 75%">
                    <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L"> Laki-laki <input type="radio" name="jk" id="jk" value="P"> Perempuan 
                  </td>
                </tr>
                <tr>
                  <td style="width: 25%">Alamat</td>
                  <td style="width: 75%"><textarea name="alamat" id="alamat" class="form-control" required></textarea></td>
                </tr>
                <tr>
                  <td style="width: 25%">Lulusan</td>
                  <td style="width: 75%">
                    <select class="form-control" name="lulusan" id="lulusan">
                        <option value="Strata 1">Strata 1</option>
                        <option value="Strata 2">Strata 2</option>
                        <option value="Strata 3">Strata 3</option>
                    </select>
                  </td>
                </tr>
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
