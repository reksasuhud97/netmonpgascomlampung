<div class="col-md-12">
              <!-- Horizontal Form -->
              <div class="box box-info">
              <br />
                <!-- form start -->
                <form class="form-horizontal" method="post" action="asset/proses.php?change-pwd">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Katasandi lama</label>
                      <div class="col-sm-10">
                        <input type="password" name="old-pwd" class="form-control" id="inputEmail3" placeholder="Masukkan Kata Sandi Lama">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Katasandi baru</label>
                      <div class="col-sm-10">
                        <input type="password" name="new-pwd" class="form-control" id="inputPassword3" placeholder="Masukkan Kata Sandi Baru">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Ulangi katasandi</label>
                      <div class="col-sm-10">
                        <input type="password" name="cek-new-pwd" class="form-control" id="inputPassword3" placeholder="Konfirmasi Ulang Kata Sandi Baru">
                      </div>
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="button" class="btn btn-info">Batal</button>
                    <button type="reset" class="btn btn-warning" name="">Reset</button>
                    <button type="submit" class="btn btn-danger">Ubah</button>
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
