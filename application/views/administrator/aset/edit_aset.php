			  <div class="row">
                  <div class="col-lg-12">
                      <!--breadcrumbs start -->
                      <ul class="breadcrumb">
                          <li><a href="<?php echo base_url().'administrator/Dashboard';?>"><i class="fa fa-home"></i> Dashboard</a></li>
                          <li><a href="<?php echo base_url().'administrator/Data_Aset';?>">Master Data</a></li>
                          <li class="active">Edit Aset</li>
                      </ul>
                      <!--breadcrumbs end -->
                  </div>
              </div>
              <section class="panel">
                          <header class="panel-heading">
                              Edit Aset
                          </header>
                          
                          <div class="panel-body">
                          	  
                              <form class="form-horizontal tasi-form" id="form_edit_aset" enctype="multipart/form-data" role="form" method="post">
                                  <?php foreach($Aset as $row1){ ?>
                             <!--      <div class="form-group">
                                      <label class="col-lg-2 col-sm-2 control-label">ID Aset</label>
                                      <div class="col-lg-2"> -->
                                          <input type="hidden" class="form-control" id="idAset" name="idAset" value="<?php echo $row1->KODE_ASET; ?>" disabled/>
                            <!--           </div>
                                  </div> -->
                                  
                                  <div class="form-group">
                                      <label class="col-lg-2 col-sm-2 control-label">Nomor Seri</label>
                                      <div class="col-lg-4">
                                          <input type="text" class="form-control" id="nomorSeri" name="nomorSeri" value="<?php echo $row1->NO_SERI; ?>">
                                         <!--  <p class="help-block">Contoh : Keyboard, Avometer</p> -->
                                      </div>
                                  </div>
                                  
                                  <div class="form-group">
                                       <label class="col-lg-2 col-sm-2 control-label">Jenis Aset</label>
                                       <div class="col-lg-4">
                                       <select class="form-control m-bot15" name="jenisAset" id="jenisAset">
                                          <option value="<?php echo $row1->KODE_JENIS; ?>"><?php echo $row1->NAMA_JENIS; ?></option>
                                          <?php foreach($Jenis as $row2){ ?>
                                          <option value="<?php echo $row2->KODE_JENIS; ?>"><?php echo $row2->NAMA_JENIS; ?></option>
                                          <?php  } ?>
                                       </select>
                                       </div>
                                   </div>
                                   
                                  <div class="form-group">
                                    <label class="col-lg-2 col-sm-2 control-label">Status</label>
                                      <div class="col-lg-4">
                                          <select class="form-control m-bot15" id="statusAset" name="statusAset">
                                          <option value="<?php echo $row1->STATUS; ?>"><?php echo $row1->STATUS; ?></option>
                                          <option value="Tersedia">Ada</option>
                                          <option value="Dipinjam">Dipinjam</option>
                                          <option value="Keluar">Keluar</option>
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