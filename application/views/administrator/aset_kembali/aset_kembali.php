  <div class="row">
      <div class="col-lg-12">
          <!--breadcrumbs start -->
          <ul class="breadcrumb">
              <li><a href="<?php echo base_url().'administrator/Dashboard';?>"><i class="fa fa-home"></i> Dashboard</a></li>
              <li class="active">Pengembalian Aset</li>
          </ul>
          <!--breadcrumbs end -->
      </div>
  </div>


  <div class="row">
      <div class="col-lg-12">
          <section class="panel">
              <header class="panel-heading">
                   Data Peminjaman Aset
              </header>
           

              <div class="panel-body">
                    <div class="adv-table">
                        <table  class="display table table-bordered table-striped" id="Data_Aset_Kembali">
                          <thead>
                         <tr>
                            <th>Kode</th>
                            <th>Tanggal</th>
                            <th>Peminjam</th>
                            <th>Keterangan</th>
                            <th></th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php
                              foreach ($aset_pinjam as $row){ 
                          ?>
                          <tr class="gradeX">
                               <td><?php echo $row->KODE_PINJAM; ?></td>
                                <td><?php echo $row->TANGGAL; ?></td>
                                <td><?php echo $row->PEMINJAM; ?></td>
                                <td><?php echo $row->KETERANGAN; ?></td>
                              <td><a href="<?php echo base_url().'administrator/Data_Aset_Kembali/Edit_Aset_Kembali/';?><?php echo $row->KODE_PINJAM; ?>">Detail</a></td>
                             
                  
                  </div>
          </div>
                          </tr>
                          <?php } ?>
                          </tbody>
                          <tfoot>
                           <tr>
                            <th>Kode</th>
                            <th>Tanggal</th>
                            <th>Peminjam</th>
                            <th>Status</th>
                            <th></th>
                            </tr>
                          </tfoot>
              </table>
                    </div>
              </div>
          </section>
      </div>
  </div>