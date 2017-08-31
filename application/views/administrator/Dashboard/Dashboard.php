<div class="row state-overview">
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol terques">
                              <i class="fa fa-desktop"></i>
                          </div>
                          <?php
                            foreach ($elektronik as $row){ 
                          ?>
                          <div class="value">
                              <h1 class="count">
                                  <?php echo $row->JUMLAH; ?>
                              </h1>
                              <a href="<?php echo base_url().'administrator/Data_Aset';?>"><p>Elektronik</p></a>
                          </div>
                          <?php } ?>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol red">
                              <i class="fa fa-desktop"></i>
                          </div>
                         <?php
                            foreach ($elektronikpinjam as $row){ 
                          ?>
                          <div class="value">
                              <h1 class=" count2">
                                  <?php echo $row->JUMLAH; ?>
                              </h1>
                              <a href="<?php echo base_url().'administrator/Data_Aset';?>"><p>Elektronik yang dipinjam</p></a>
                          </div>
                          <?php } ?>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol terques">
                              <i class="fa fa-gavel"></i>
                          </div>
                          <?php
                            foreach ($perkakas as $row){ 
                          ?>
                          <div class="value">
                              <h1 class=" count2">
                                  <?php echo $row->JUMLAH; ?>
                              </h1>
                              <a href="<?php echo base_url().'administrator/Data_Aset';?>"><p>Perkakas</p></a>
                          </div>
                          <?php } ?>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol red">
                              <i class="fa fa-gavel"></i>
                          </div>
                          <?php
                            foreach ($perkakaspinjam as $row){ 
                          ?>
                          <div class="value">
                              <h1 class=" count2">
                                  <?php echo $row->JUMLAH; ?>
                              </h1>
                              <a href="<?php echo base_url().'administrator/Data_Aset';?>"><p>Perkakas yang dipinjam</p></a>
                          </div>
                          <?php } ?>
                      </section>
                  </div>

                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol red">
                              <i class="fa fa-desktop"></i>
                          </div>
                         <?php
                            foreach ($keluar as $row){ 
                          ?>
                          <div class="value">
                              <h1 class=" count2">
                                  <?php echo $row->JUMLAH; ?>
                              </h1>
                              <a href="<?php echo base_url().'administrator/Data_Aset';?>"><p>Aset Keluar</p></a>
                          </div>
                          <?php } ?>
                      </section>
                  </div>
                  
              </div>
              