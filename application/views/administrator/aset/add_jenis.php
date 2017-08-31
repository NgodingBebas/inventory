			  <div class="row">
                  <div class="col-lg-12">
                      <!--breadcrumbs start -->
                      <ul class="breadcrumb">
                          <li><a href="<?php echo base_url().'administrator/Dashboard';?>"><i class="fa fa-home"></i> Dashboard</a></li>
                          <li><a href="<?php echo base_url().'administrator/Data_Aset';?>">Data Jenis</a></li>
                          <li class="active">Tambah Jenis Aset</li>
                      </ul>
                      <!--breadcrumbs end -->
                  </div>
              </div>
              <section class="panel">
                          <header class="panel-heading">
                              Tambah Jenis Aset
                          </header>
                          
                          <div class="panel-body">
                          	  <?php foreach($IDJenis as $row1){ ?>
                              <form class="form-horizontal tasi-form" id="form_add_jenis" enctype="multipart/form-data" role="form" method="post">
                            
                                  <div class="form-group">
                                      <label class="col-lg-2 col-sm-2 control-label">Nama Aset</label>
                                      <div class="col-lg-4">
                                          <input type="text" class="form-control" id="namaJenis" name="namaJenis" >
                                          <p class="help-block">Contoh : Keyboard, Avometer</p>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                       <label class="col-lg-2 col-sm-2 control-label">Tipe</label>
                                       <div class="col-lg-4">
                                       <select class="form-control m-bot15" name="tipe" id="tipe">
                                          <option value=""></option>
                                          <option value="Elektronik">Elektronik</option>
                                          <option value="Perkakas">Perkakas</option>
                                       </select>
                                       </div>

                                   </div>
                                  <div class="form-actions">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <button type="submit" name="submit" id="submit" class="btn btn-info">Simpan</button>
                                      	  <a class="btn btn-danger" href="<?php echo base_url();?>administrator/Data_Aset"> Kembali</a>

                                      </div>
                                  </div>
                              </form>
                              <?php  } ?>
                          </div>
                      </section>