  <div class="row">
      <div class="col-lg-12">
          <!--breadcrumbs start -->
          <ul class="breadcrumb">
              <li><a href="<?php echo base_url().'administrator/Dashboard';?>"><i class="fa fa-home"></i> Dashboard</a></li>
              <li class="active">Master User</li>
          </ul>
          <!--breadcrumbs end -->
      </div>
  </div>

  <div class="row">
      <div class="col-lg-12">
          <section class="panel">
              <header class="panel-heading">
                   Data User
              </header>
              <div class="panel-body">
                  <div class="btn-group">
                      <a class="btn btn-primary" href="<?php echo base_url().'administrator/Data_User/Add_User';?>" data-toggle="modal">
                          Tambah Data <i class="fa fa-plus"></i>
                      </a>

                  </div>
                    <div class="adv-table">
                        <table  class="display table table-bordered table-striped" id="user_table">
                          <thead>
                         <tr>
								<th>Id User</th>
								<th>Nama</th>
								<th>Username</th>
								<th>Password</th>
								<th>Status</th>
								<th></th>
								<th></th>
							</tr>
                          </thead>
                          <tbody>
                          <?php
                              foreach ($query_getUser as $row){ 
                          ?>
                          <tr class="gradeX">
                                <td><?php echo $row->ID_USER; ?></td>
                                <td><?php echo $row->NAMA; ?></td>
								<td><?php echo $row->USERNAME; ?></td>
								<td><?php echo $row->PASSWORD; ?></td>
								<td><?php echo $row->AKTIF; ?></td>
                              <td><a href="<?php echo base_url().'administrator/Data_User/Edit_User/';?><?php echo $row->ID_USER; ?>">Edit</a></td>
                              <td><a href="#Konfirm_Parameter_System_<?php echo $row->ID_USER; ?>" data-toggle="modal">Hapus</a></td>
                                  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="Konfirm_Parameter_System_<?php echo $row->ID_USER; ?>" class="modal fade">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <!-- <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button> -->
                                                  <h4 class="modal-title">Konfirmasi</h4>
                                              </div>
                                              <div class="modal-body">Hapus User <b><?php echo $row->NAMA; ?></b> ?
                                              </div>
                                              <div class="modal-footer">
                                                  <button class="btn btn-info" data-dismiss="modal" onClick="Delete_User(<?php echo $row->ID_USER; ?>,'<?php echo base_url().'Administrator/Data_User/Delete_User';?>')">Ya</button>
                                                  <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Batal</button>
                                              </div>                                                         
                                              
                                          </div>
                                      </div>
                                  </div>

                  
                  </div>
          </div>
                          </tr>
                          <?php } ?>
                          </tbody>
                          <tfoot>
                          <tr>
                              <th>Id User</th>
								<th>Nama</th>
								<th>Username</th>
								<th>Password</th>
								<th>Status</th>
								<th></th>
								<th></th>
                          </tr>
                          </tfoot>
              </table>
                    </div>
              </div>
          </section>
      </div>
  </div>