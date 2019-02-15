     <div class="box">
         <h1>Pasien</h1>
         <h4>
            <small>Tambah Data Pasien</small>
            <div class="pull-right">
              <a href="<?= site_url('pasien/index'); ?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
            </div>
         </h4>
         <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
      
                <form action="<?=base_url('pasien/add') ?>" method="post">
      
                    <div class="form-group">
                        <label form="identitas">Nomor Identitas</label>
                        <input type="number" name="identitas" id="identitas" class="form-control">
                        
                        <div class="alert-danger">
                        <strong><?php echo form_error('identitas');?></strong>
                        </div>

                   <div class="form-group">
                        <label form="nama">Nama Pasien</label>
                        <input type="text" name="nama" id="nama" class="form-control">
                        
                        <div class="alert-danger">
                         <strong> <?php echo form_error('nama');?></strong>
                         </div>
                   </div>
                    <div class="form-group">
                        <label form="jk">Jenis Kelamin</label>
                        <div>

                          <label class="radio-inline">
                             <input type="radio" name="jk" id="jk" value="L" <?php echo  set_radio('jk', 'L'); ?>/> Laki-Laki
                          </label>

                          <label class="radio-inline">
                             <input type="radio" name="jk" value="P" <?php echo  set_radio('jk', 'P'); ?> /> Perempuan
                          </label>
                           <div class="alert-danger">
                         <strong> <?php echo form_error('jk');?></strong>
                         </div>
                        </div>
                   </div>
                   <div class="form-group">
                        <label form="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control"></textarea>
                        
                         <div class="alert-danger "> 
                         <strong> <?php echo form_error('alamat');?></strong>
                         </div>
                   </div>
                   <div class="form-group">
                        <label form="telp">No. Telepon</label>
                        <input type="number" name="telp" id="telp" class="form-control">
                         
                         <div class="alert-danger">
                         <strong> <?php echo form_error('telp');?></strong>
                         </div>
                         
                   </div>
                   <div class="form-group pull-right">
                        <input type="submit" name="add" value="Simpan" class="btn btn-success">
                   </div>   
                </form>
                
            </div>
         </div>
     </div>
