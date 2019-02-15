 <div class="box">
         <h1>Dokter</h1>
         <h4>
            <small>Edit Data Dokter</small>
            <div class="pull-right">
              <a href="<?php echo base_url('dokter');?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
            </div>
         </h4>
         <div class="row">
            <div class="col-lg-6 col-lg-offset-3">

               <form action="<?php echo site_url('dokter/edit');?>" method="post">
               <input type="hidden" name="id_dokter" value="<?php echo $dokter->id_dokter;?>">

                   <div class="form-group">
                        <label form="nama">Nama Dokter</label>
                        <input type="text" name="nama" id="nama" value="<?php echo $dokter->nama_dokter;?>" class="form-control">
                        
                       <div class="alert-danger">
                        <strong><?php echo form_error('nama');?></strong>
                        </div>

                   </div>
                   <div class="form-group">
                        <label form="spesialis">Spesialis</label>
                        <input type="text" name="spesialis" id="spesialis" value="<?php echo $dokter->spesialis;?>" class="form-control">
                         
                         <div class="alert-danger">
                        <strong><?php echo form_error('spesialis');?></strong>
                        </div>

                   </div>
                   <div class="form-group">
                        <label form="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" required><?php echo $dokter->alamat;?></textarea>
                        
                        <div class="alert-danger">
                        <strong><?php echo form_error('alamat');?></strong>
                        </div>

                   </div>
                   <div class="form-group">
                        <label form="telp">No. Telepon</label>
                        <input type="number" name="telp" id="telp" value="<?php echo $dokter->no_telp;?>"  class="form-control" >
                        
                        <div class="alert-danger">
                        <strong><?php echo form_error('telp');?></strong>
                        </div>

                   </div>
                   <div class="form-group pull-right">
                        <input type="submit" name="edit" value="Simpan" class="btn btn-success">
                   </div>   
                  </form>
            </div>
         </div>
     </div>