                <div class="tab-content ">
                  <div class="active tab-pane">
                    <!-- Post -->
                    <div class="post">
                      <div class="box-body">
                        <form class="form-horizontal" method="post" action="./asset/proses.php">
                      <div class="form-group">
                        <label for="inputName" class="col-sm-2 control-label">Nama Kantor</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="glyphicon glyphicon-briefcase"></i>
                            </div>
                            <input type="text" class="form-control" name="name_st" placeholder="Nama kantor" required>
                          </div><!-- /.input group -->
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputTelp" class="col-sm-2 control-label">No. Telpon Kantor</label>
                        <div class="col-sm-10">
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-phone"></i>
                            </div>
                            <input type="text" class="form-control" name="telp_st" data-inputmask="&quot;mask&quot;: &quot;(999) 999-9999&quot;" data-mask="" required>
                          </div><!-- /.input group -->
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputAdd" class="col-sm-2 control-label">Alamat Telepon Kantor</label>
                        <div class="col-sm-10">
                          <textarea class="form-control" name="add_st" rows='10' placeholder='Alamat kantor' required></textarea>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-success" name="add_kantor">Simpan</button>
                          <button type="reset" class="btn btn-danger" name="">Reset</button>
                        </div>
                      </div>
                    </form>

                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
                    <!-- end -->
                      </div>
                    </div><!-- /.post -->
                  </div><!-- /.tab-pane -->

                </div><!-- /.tab-content -->