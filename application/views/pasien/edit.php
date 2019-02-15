   <div class="box">
         <h1>Pasien</h1>
         <h4>
            <small>Edit Data Pasien</small>
            <div class="pull-right">
              <a href="<?php echo site_url('pasien/index');?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
            </div>
         </h4>
         <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
            
                <form action="<?php echo base_url('pasien/edit');?>" method="post">
                
               <input type="hidden" name="id_pasien" value="<?php echo $pasien->id_pasien?>" />

                    <div class="form-group">
                        <label form="identitas">Nomor Identitas</label>
                        <input type="number" name="identitas" id="identitas" class="form-control" 
                        <?php echo form_error('identitas') ? 'is-invalid':'' ?>"
                        value="<?php echo $pasien->nomor_identitas?>" />

                        <div class="alert-danger">
                        <strong><?php echo form_error('identitas');?></strong>
                        </div>

                   </div>
               
                   <div class="form-group">
                        <label form="nama">Nama Pasien</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $pasien->nama_pasien;?>" >
                        
                        <div class="alert-danger">
                        <strong><?php echo form_error('nama');?></strong>
                        </div>

                   </div>

                    <div class="form-group">
                        <label form="jk">Jenis Kelamin</label>
                        <div>
                          <label class="radio-inline">
                             <input type="radio" name="jk" id="jk" value="L"  <?=$pasien->jenis_kelamin == "L" ? "checked" : null?>> Laki-Laki
                          </label>
                          <label class="radio-inline">
                             <input type="radio" name="jk" value="P" <?=$pasien->jenis_kelamin == "P" ? "checked" : null?>> Perempuan
                          </label>
                        </div>

                         <div class="alert-danger">
                         <strong> <?php echo form_error('jk');?></strong>
                         </div>

                   </div>
                   
                   <div class="form-group">
                        <label form="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control"><?php echo $pasien->alamat;?></textarea>

                          <div class="alert-danger">
                         <strong> <?php echo form_error('alamat');?></strong>
                         </div>

                   </div>
                   <div class="form-group">
                        <label form="telp">No. Telepon</label>
                        <input type="number" name="telp" id="telp" class="form-control" value="<?php echo $pasien->no_telp;?>">
                         
                          <div class="alert-danger">
                         <strong> <?php echo form_error('telp');?></strong>
                         </div>

                   </div>
                   <div class="form-group pull-right">
                        <input type="submit" name="edit" value="Simpan" class="btn btn-success">
                   </div>   
                </form>

            </div>
         </div>
     </div>