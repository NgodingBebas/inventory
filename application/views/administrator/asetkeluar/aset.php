  <div class="row">
      <div class="col-lg-12">
          <!--breadcrumbs start -->
          <ul class="breadcrumb">
              <li><a href="<?php echo base_url().'administrator/Dashboard';?>"><i class="fa fa-home"></i> Dashboard</a></li>
              <li class="active">Transaksi Aset Keluar</li>
          </ul>
          <!--breadcrumbs end -->
      </div>
  </div>

              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                               Transaksi Aset Keluar
                          </header>
                          <div class="panel-body">
                       <div class="panel-body">
                          	  
                              <form class="form-horizontal tasi-form" enctype="multipart/form-data" role="form" method="post">
                                   <?php foreach($query2 as $row1){ ?>
                               
                                          <input type="hidden" class="form-control" id="kodeKeluar" name="kodeKeluar" placeholder="Kode Aset Keluar" value="<?php echo $row1->IDASET+1; ?>" disabled/>
                                          <input type="hidden" class="form-control" id="idUser" name="idUser" class="hide" value="<?php echo $this->session->userdata('id_user'); ?>">
                               
                                  <?php  } ?>

                                    <div class="form-group">
                                      <label class="col-lg-2 col-sm-2 control-label">Keterangan</label>
                                        <div class="col-lg-4">
                                          <!-- <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan"> -->
                                          <textarea class="form-control" cols="80" rows="3" id="keterangan" name="keterangan" placeholder="Keterangan"></textarea>
                                         <!--  <p class="help-block">Contoh : Keyboard, Avometer</p> -->
                                    </div>
                              </form>

                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="aset_keluar">
                                      <thead>
                                      <tr>
                                      	  <th><input id="selecctall" type="checkbox">&nbsp;Check All</th>
                                          <th>ID Aset</th>
                                          <th>No Seri</th>
                                          <th>Jenis Aset</th>
                                          <th>Tipe Aset</th>
                                        
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php
                                          foreach ($query1 as $row){ 
                                      ?>
                                      <tr class="gradeX">
                                      	  <td class="center"><input name="checkbox[]" class="checkbox1" type="checkbox" id="checkbox[]" value="<?php echo $row->KODE_ASET; ?>">
                                    	  </td>
                                          <td><?php echo $row->KODE_ASET; ?></td>
                                          <td><?php echo $row->NO_SERI; ?></td>
                                          <td class="center"><?php echo $row->NAMA_JENIS; ?></td>
                                          <td class="center"><?php echo $row->TIPE; ?></td>
                                          
                                      </tr>
                                      <?php } ?>
                                      </tbody>
                                </table>
                                </section>
                                </div>
                                </div>

                                 <div class="btn-group">
                                  <a class="btn btn-primary" id="simpan_keluar">
                                  Simpan Data <i class="fa fa-plus"></i>
                                  </a></div>
                        </div>
                      </div>
                                </div>
                  </div>
                </div>
<!-- 
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                               Riwayat Transaksi Aset Keluar
                          </header>
                          <div class="panel-body">
                              	<div class="btn-group">
                                  <a class="btn btn-success" href="<?php echo base_url().'administrator/Data_Aset_Keluar/pdf';?>" data-toggle="modal">
                                      Export Data <i class="fa fa-file-o"></i>
                                  </a>
                              </div>
                                <div class="adv-table">
                                    <table  cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="riwayat_aset_keluar">
                                      <thead>
                                      <tr>
                                      	  <th>Kode Transaksi</th>
                                      	  <th>Tanggal</th>
                                      	  <th>Keterangan</th>
                                      	  <th>ID Aset</th>
                                          <th>No Seri</th>
                                          <th>Jenis Aset</th>
                                          <th>Tipe Aset</th>
                                        
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php
                                          foreach ($query3 as $row){ 
                                      ?>
                                      <tr class="gradeX">
                                      	  <td><?php echo $row->KODE_ASET_KELUAR; ?></td>
                                      	  <td><?php echo $row->TANGGAL; ?></td>
                                      	  <td><?php echo $row->KETERANGAN; ?></td>
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
 -->
             

