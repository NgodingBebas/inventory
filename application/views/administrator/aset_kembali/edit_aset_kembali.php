  <div class="row">
      <div class="col-lg-12">
          <!--breadcrumbs start -->
          <ul class="breadcrumb">
              <li><a href="<?php echo base_url().'administrator/Dashboard';?>"><i class="fa fa-home"></i> Dashboard</a></li>
              <li><a href="<?php echo base_url().'administrator/Data_Aset_Kembali';?>"><i class="fa fa-home"></i> Pengembalian Aset</a></li>
              <li class="active">Detail Peminjaman Aset</li>
          </ul>
          <!--breadcrumbs end -->
      </div>
  </div>

  <div class="row">
      <div class="col-lg-12">
          <section class="panel">
              <header class="panel-heading">
                  Aset yang dipinjam
              </header>
                <div class="panel-body">
                    <form class="form-horizontal tasi-form" enctype="multipart/form-data" role="form" method="post">
                
                  <?php foreach($id_aset_kembali as $row){ ?>
                        <input type="hidden" class="form-control" id="kodeAsetKembali" name="kodeAsetKembali" value="<?php echo $row->IDASET +1; ?>">
                  <?php  } ?>


                  <?php foreach($getHead as $row){ ?>
                     <input type="hidden" class="form-control" id="kodepinjam" name="kodepinjam" value="<?php echo $row->KODE_PINJAM; ?>">
           
                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label">Tanggal Pinjam</label>
                        <div class="col-lg-4">
                            <label class="col-lg-2 col-sm-2 control-label" id="tanggal" name="tanggal" value="<?php echo $row->TANGGAL; ?>"> <?php echo $row->TANGGAL; ?></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label">Peminjam</label>
                        <div class="col-lg-4">
                            <label class="col-lg-2 col-sm-2 control-label" id="peminjam" name="peminjam" value="<?php echo $row->PEMINJAM; ?>"> <?php echo $row->PEMINJAM; ?></label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-2 col-sm-2 control-label">Keterangan </label>
                        <div class="col-lg-10">
                            <label class="col-lg-10 col-sm-10 control-label"> <?php echo $row->KETERANGAN; ?></label>
                        </div>
                    </div>
              

                <div class="btn-group">
                    <a class="btn btn-primary" id="submit">
                        Simpan Data <i class="fa fa-plus"></i>
                    </a>
                </div>
                 <?php  } ?>
                 <div class="panel-body">
                    <div class="adv-table">
                        <table  class="display table table-bordered table-striped" id="Edit_Aset_Kembali">
                          <thead>
                           <tr>
                            <th> <input id="selecctall" type="checkbox"> Pilih Semua</th>
                            <th>Kode Aset</th>
                            <th>Nomor Seri</th>
                            <th>Jenis</th>
                          </tr>
                          </thead>
                          <tbody>
                          <?php
                              foreach ($querygetAset as $row){ 
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
                           </div>
                      </div>
                          </tr>
                          <?php } ?>
                          </tbody>
                          <tfoot>
                         <tr>
                            <th></th>
                            <th>Kode Aset</th>
                            <th>Nomor Seri</th>
                            <th>Jenis</th>
                          </tr>
                          </tfoot>
                        </table>
                              </div>
                        </div>
                    </section>
                </div>
            </div>
   <!--    <div class="form-actions">
            <div class="col-lg-offset-2 col-lg-10">
                <button type="submit" name="submit" id="submit" class="btn btn-primary">Simpan</button>
                <a class="btn btn-danger" href="<?php echo base_url();?>administrator/Data_User"> Kembali</a>

            </div>
        </div> -->
</form>
