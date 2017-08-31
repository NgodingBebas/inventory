              <div class="row">
                  <div class="col-lg-12">
                      <!--breadcrumbs start -->
                      <ul class="breadcrumb">
                          <li><a href="<?php echo base_url().'administrator/Dashboard';?>"><i class="fa fa-home"></i> Dashboard</a></li>
                          <li class="active">Master Aset</li>
                      </ul>
                      <!--breadcrumbs end -->
                  </div>
              </div>

              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                               Data Aset
                          </header>
                          <div class="panel-body">
                              <div class="btn-group">
                                  <a class="btn btn-primary" href="<?php echo base_url().'administrator/data_aset1/add_asetjumlah';?>" data-toggle="modal">
                                      Tambah Data <i class="fa fa-plus"></i>
                                  </a>
                                  <a class="btn btn-success" href="<?php echo base_url().'administrator/data_aset1/pdf';?>" data-toggle="modal">
                                      Export Data <i class="fa fa-file-o"></i>
                                  </a>
                              </div>
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="aset">
                                      <thead>
                                      <tr>
                                          <th>ID Aset</th>
                                          <th>No Seri</th>
                                          <th>Jenis Aset</th>
                                          <th>Jumlah Barang</th>
                                          <th>Tipe Aset</th>
                                          <th></th>
                                          <th></th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      <?php
                                          foreach ($query1 as $row){ 
                                      ?>
                                      <tr class="gradeX">
                                          <td><?php echo $row->KODE_ASET; ?></td>
                                          <td><?php echo $row->NO_SERI; ?></td>
                                          <td class="center"><?php echo $row->NAMA_JENIS; ?></td>
                                          <td class="center"><?php echo $row->JUMLAH; ?></td>
                                          <td class="center"><?php echo $row->TIPE; ?></td>
                                          <td><a href="<?php echo base_url().'administrator/Data_Aset/Edit_Aset/';?><?php echo $row->KODE_ASET; ?>">Edit</a></td>
                                          <td><a href="#Konfirm_Parameter_Aset_<?php echo $row->KODE_ASET; ?> " data-toggle="modal">Hapus</a></td>
                                      
                                          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="Konfirm_Parameter_Aset_<?php echo $row->KODE_ASET; ?>" class="modal fade">
                                                    <div class="modal-dialog">
                                                      <div class="modal-content">
                                                          <div class="modal-header">
                                                              <!-- <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button> -->
                                                              <h4 class="modal-title">Konfirmasi</h4>
                                                          </div>
                                                          <div class="modal-body">Hapus Aset <b><?php echo $row->NAMA_JENIS; ?></b> No. Seri : <b><?php echo $row->NO_SERI; ?></b> ?
                                                          </div>
                                                          <div class="modal-footer">
                                                              <button class="btn btn-info" data-dismiss="modal" onClick="Delete_Aset(<?php echo $row->KODE_ASET; ?>,'<?php echo base_url().'Administrator/Data_Aset/Delete_Aset';?>')">Ya</button>
                                                              <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Batal</button>
                                                          </div>                                                         
                                                          
                                                      </div>
                                                  </div>
                                              </div>


                                      </tr>
                                      <?php } ?>
                                      </tbody>
                                      
                          </table>
                                </div>
                          </div>
                      </section>
                  </div>
              </div>


              