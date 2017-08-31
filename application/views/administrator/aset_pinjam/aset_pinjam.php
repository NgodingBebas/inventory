  <div class="row">
      <div class="col-lg-12">
          <!--breadcrumbs start -->
          <ul class="breadcrumb">
              <li><a href="<?php echo base_url().'administrator/Dashboard';?>"><i class="fa fa-home"></i> Dashboard</a></li>
              <li class="active">Pinjam Aset</li>
          </ul>
          <!--breadcrumbs end -->
      </div>
  </div>







  <div class="row">
      <div class="col-lg-12">
          <section class="panel">
              <header class="panel-heading">
                   Pinjam Aset
              </header>
                <div class="panel-body">
                   <form class="form-horizontal tasi-form" enctype="multipart/form-data" role="form" method="post">
                   
                     <!--   <div class="form-group">
                            <label class="col-lg-2 col-sm-2 control-label">Tanggal</label>
                            <div class="col-lg-2">
                                <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2015-04-16"  class="input-append date dpYears">
                                    <input type="text" readonly="" value="12-02-2012" size="16" class="form-control">
                                        <span class="input-group-btn add-on">
                                          <button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                                        </span>
                                </div>
                            </div>
                        </div>
               -->
               <?php foreach($id_aset_pinjam as $row){ ?>
                        <input type="hidden" class="form-control" id="kodeAsetPinjam" name="kodeAsetPinjam" value="<?php echo $row->IDASET +1; ?>">
          
               <?php  } ?>

                <div class="form-group">
                    <label class="col-lg-2 col-sm-2 control-label">Peminjam</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" id="peminjam" name="peminjam">
                    </div>
                </div>

               
                <div class="form-group">
                    <label class="col-lg-2 col-sm-2 control-label">Keterangan</label>
                    <div class="col-lg-7">
                        <textarea type="text" class="form-control" id="keterangan" name="keterangan"></textarea>
                    </div>
                </div>
                
                 <div class="panel-body">
                    <div class="adv-table">
                        <table  class="display table table-bordered table-striped" id="Data_Aset_Pinjam">
                          <thead>
                           <tr>
                            <th> <input id="selecctall" type="checkbox"> Pilih Semua</th>
                            <th>Kode Aset</th>
                            <th>Nomor Seri</th>
                            <th>Jenis</th>
                            <th>Tipe</th>
                          </tr>
                          </thead>
                          <tbody>
                          <?php
                              foreach ($aset_pinjam as $row){ 
                          ?>
                          <tr class="gradeX">
                              <td> 
                                 <div class="checkboxes">
                                       <input name="checkbox[]" class="checkbox1" type="checkbox" id="checkbox[]" value="<?php echo $row->KODE_ASET; ?>" /> &nbsp;</label>
                                  </div>
                                </td>
                                
                                <td><?php echo $row->KODE_ASET; ?></td>
                                <td><?php echo $row->NO_SERI; ?></td>
                                <td><?php echo $row->NAMA_JENIS; ?></td>
                                <td><?php echo $row->TIPE; ?></td>
                           </div>
                      </div>
                          </tr>
                          <?php } ?>
                          </tbody>
                          
              </table>
               <div class="btn-group">
                    <a class="btn btn-primary" id="submit">
                        Simpan Data <i class="fa fa-plus"></i>
                    </a>
                </div>
                    </div>
              </div>
          </section>
      </div>
  </div>
                               <!--  <div class="form-actions">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <button type="submit" name="submit" id="submit" class="btn btn-primary">Simpan</button>
                                          <a class="btn btn-danger" href="<?php echo base_url();?>administrator/Data_User"> Kembali</a>

                                      </div>
                                  </div> -->
</form>
