			  <div class="row">
                  <div class="col-lg-12">
                      <!--breadcrumbs start -->
                      <ul class="breadcrumb">
                          <li><a href="<?php echo base_url().'administrator/Dashboard';?>"><i class="fa fa-home"></i> Dashboard</a></li>
                          <li><a href="<?php echo base_url().'administrator/Data_Aset';?>">Master Data</a></li>
                          <li class="active">Tambah User</li>
                      </ul>
                      <!--breadcrumbs end -->
                  </div>
              </div>
              <section class="panel">
                          <header class="panel-heading">
                              Tambah User
                          </header>
                          
                          <div class="panel-body">
                          	  
                              <form class="cmxform form-horizontal" id="form_add_user" enctype="multipart/form-data"  method="post"/>
                                  <?php foreach($query_idUser as $row){ ?>
                                  <div class="form-group">
                                      <label class="col-lg-2 col-sm-2 control-label">ID User</label>
                                      <div class="col-lg-2">
                                          <input type="text" class="form-control" id="idUser" name="idUser" value="<?php echo $row->idUser; ?>" readonly/>
                                      </div>
                                  </div>
                                  <?php  } ?>
                                  <div class="form-group">
                                      <label class="col-lg-2 col-sm-2 control-label">Nama</label>
                                      <div class="col-lg-4">
                                          <input type="text" class="form-control" id="nama" name="nama">
                                      </div>
                                  </div>

                                   <div class="form-group">
                                      <label class="col-lg-2 col-sm-2 control-label">Username</label>
                                      <div class="col-lg-4">
                                          <input type="text" class="form-control" id="username" name="username">
                                      </div>
                                  </div>
                                
                                  
                                  <div class="form-group">
                                      <label class="col-lg-2 col-sm-2 control-label">Password</label>
                                      <div class="col-lg-4">
                                          <input type="password" class="form-control" id="password" name="password">
                                      </div>
                                  </div>

                                
                                  <div class="form-group">
                                       <label class="col-lg-2 col-sm-2 control-label">Status</label>
                                       <div class="col-lg-4">
                                       <select class="form-control m-bot15" name="status" id="status">
                                          <option value=""></option>
                                          <option value="Y">Aktif</option>
                                          <option value="T">Tidak Aktif</option>
                                       </select>
                                       </div>

                                   </div>
                                   
                                      <div class="form-actions">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <button type="submit" name="submit" id="submit" class="btn btn-primary">Simpan</button>
                                      	  <a class="btn btn-danger" href="<?php echo base_url();?>administrator/Data_User"> Kembali</a>

                                      </div>
                                  </div>
                              </form>
                          </div>
                      </section>