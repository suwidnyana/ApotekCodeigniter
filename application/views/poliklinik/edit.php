<div class="box">
         <h1>Poliklinik</h1>
         <h4>
         	<small>Tambah Data Poliklinik</small>
            <div class="pull-right">
              <a href="<?php echo site_url('poliklinik');?>" class="btn btn-info btn-sm">Data</a>

            </div>
         </h4>
         <div class="row">
         	<div class="col-lg-8 col-lg-offset-2">
         	<?php echo form_open('poliklinik/proses_bulk_edit'); ?>
                  <table class="table" id="dynamic_field">
                     <tr>
                           <th>#</th>
                           <th>Nama Poliklinik</th>
                           <th>Alamat</th>
                     </tr>
                    
                           <?php $i = 1; foreach($poliklinik as $poli) { ?>
                              <input type="hidden" name="id_poli[]" value="<?php echo $poli->id_poli; ?>">
                              <tr>
                                <td><span class="btn btn-sm btn-default"><?php echo $i; ?></span>
                                 <td>
                                    <input type="text" name="nama[]" placeholder="Nama Poliklinik" class="form-control" value="<?php echo $poli->nama_poli; ?>" required>
                                 </td>
                                 <td>
                                    <input type="text" name="alamat[]" placeholder="Alamat Poliklinik" class="form-control" value="<?php echo $poli->gedung; ?>" required>
                                 </td>
                              </tr>
                           <?php $i++; } ?>         
                       
                  </table>

                  <div class="form-group pull-right">
                        <input type="submit" name="add" value="Simpan Semua" class="btn btn-info">
                  </div>
         		 <?php echo form_close(); ?> 
         	</div>
         </div>