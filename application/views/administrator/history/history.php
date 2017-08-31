        <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                               Riwayat Aset Masuk
                          </header>
                          <div class="panel-body">
                             <!--  	<div class="btn-group">
                                  <a class="btn btn-success" href="<?php echo base_url().'administrator/History/pdfAsetMasuk';?>" data-toggle="modal">
                                      Export Data <i class="fa fa-file-o"></i>
                                  </a>
                              </div> -->
                                <div class="adv-table">
                                    <table  cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="AsetMasuk">
                                      <thead>
                                      <tr>
                                       <th>Kode Transaksi</th>
                                          <th>Tanggal</th>
                                          <th>Kode Aset</th>
                                          <th>No Seri</th>
                                          <th>Jenis Aset</th>
                                          <th>Tipe Aset</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php
                                          foreach ($asetmasuk as $row){ 
                                      ?>
                                      <tr class="gradeX">
                                          <td><?php echo $row->KODE_ASET_MASUK; ?></td>
                                          <td><?php echo $row->TANGGAL; ?></td>
                                          <td><?php echo $row->KODE_ASET; ?></td>
                                          <td><?php echo $row->NO_SERI; ?></td>
                                      
                                          <td class="center"><?php echo $row->NAMA_JENIS; ?></td>
                                          <td class="center"><?php echo $row->TIPE; ?></td>
                                      </tr>
                                      <?php } ?>
                                      </tbody>
                                      
                          </table>
                                </div>
                          </div>

                          
                          </section>
                  </div>
              </div>


        <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                               Riwayat Peminjaman Aset
                          </header>
                          <div class="panel-body">
                            <!--     <div class="btn-group">
                                  <a class="btn btn-success" href="<?php echo base_url().'administrator/Data_Aset_Keluar/pdf';?>" data-toggle="modal">
                                      Export Data <i class="fa fa-file-o"></i>
                                  </a>
                              </div> -->
                                <div class="adv-table">
                                    <table  cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="AsetPinjam">
                                      <thead>
                                      <tr>
                                          <th>Kode Transaksi</th>
                                          <th>Tanggal</th>
                                          <th>Kode Aset</th>
                                          <th>No Seri</th>
                                          <th>Jenis Aset</th>
                                          <th>Tipe Aset</th>
                                          <th>Keterangan</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php
                                          foreach ($asetpinjam as $row){ 
                                      ?>
                                      <tr class="gradeX">
                                          <td><?php echo $row->KODE_PINJAM; ?></td>
                                          <td><?php echo $row->TANGGAL; ?></td>
                                          <td><?php echo $row->KODE_ASET; ?></td>
                                          <td><?php echo $row->NO_SERI; ?></td>
                                          <td class="center"><?php echo $row->NAMA_JENIS; ?></td>
                                          <td class="center"><?php echo $row->PEMINJAM; ?></td>
                                          <td class="center"><?php echo $row->KETERANGAN; ?></td>
                                      </tr>
                                      <?php } ?>
                                      </tbody>
                                </table>
                                      </div>
                                </div>

                          
                          </section>
                  </div>
              </div>


       <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                               Riwayat Pengembalian Aset
                          </header>
                          <div class="panel-body">
                               <!--  <div class="btn-group">
                                  <a class="btn btn-success" href="<?php echo base_url().'administrator/Data_Aset_Keluar/pdf';?>" data-toggle="modal">
                                      Export Data <i class="fa fa-file-o"></i>
                                  </a>
                              </div> -->
                                <div class="adv-table">
                                    <table  cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="AsetKembali">
                                      <thead>
                                      <tr>
                                          <th>Kode Transaksi</th>
                                          <th>Tanggal</th>
                                          <th>Kode Aset</th>
                                          <th>No Seri</th>
                                          <th>Jenis Aset</th>
                                          <th>Tipe Aset</th>
                                        
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php
                                          foreach ($asetkembali as $row){ 
                                      ?>
                                      <tr class="gradeX">
                                          <td><?php echo $row->KODE_KEMBALI; ?></td>
                                          <td><?php echo $row->TANGGAL; ?></td>
                                          <td><?php echo $row->KODE_ASET; ?></td>
                                          <td><?php echo $row->NO_SERI; ?></td>
                                          <td class="center"><?php echo $row->NAMA_JENIS; ?></td>
                                          <td class="center"><?php echo $row->TIPE; ?></td>
                                      </tr>
                                      <?php } ?>
                                      </tbody>
                                      
                          </table>
                                </div>
                          </div>

                          
                          </section>
                  </div>
              </div>



              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                               Riwayat Aset Keluar
                          </header>
                          <div class="panel-body">
                            <!--     <div class="btn-group">
                                  <a class="btn btn-success" href="<?php echo base_url().'administrator/Data_Aset_Keluar/pdf';?>" data-toggle="modal">
                                      Export Data <i class="fa fa-file-o"></i>
                                  </a>
                              </div> -->
                                <div class="adv-table">
                                    <table  cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="AsetKeluar">
                                      <thead>
                                      <tr>
                                          <th>Kode Transaksi</th>
                                          <th>Tanggal</th>
                                          <th>Kode Aset</th>
                                          <th>No Seri</th>
                                          <th>Jenis Aset</th>
                                          <th>Tipe Aset</th>
                                        
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php
                                          foreach ($asetkeluar as $row){ 
                                      ?>
                                      <tr class="gradeX">
                                          <td><?php echo $row->KODE_ASET_KELUAR; ?></td>
                                          <td><?php echo $row->TANGGAL; ?></td>
                                          <td><?php echo $row->KODE_ASET; ?></td>
                                          <td><?php echo $row->NO_SERI; ?></td>
                                          <td class="center"><?php echo $row->NAMA_JENIS; ?></td>
                                          <td class="center"><?php echo $row->KETERANGAN; ?></td>
                                      </tr>
                                      <?php } ?>
                                      </tbody>
                                      
                          </table>
                                </div>
                          </div>

                          
                          </section>
                  </div>
              </div>