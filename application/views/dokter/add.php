
     <div class="box">
         <h1>Dokter</h1>
         <h4>
            <small>Tambah Data Dokter</small>
            <div class="pull-right">
              <a href="<?= site_url('dokter/index');?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
            </div>
         </h4>
         <div class="row">
            <div class="col-lg-6 col-lg-offset-3">

                <form action="<?= site_url('dokter/add');?>" method="post">

                   <div class="form-group">
                        <label form="nama">Nama Dokter</label>
                        <input type="text" name="nama" id="nama" class="form-control">

                         <div class="alert-danger">
                        <strong><?php echo form_error('nama');?></strong>
                        </div>

                   </div>
                   <div class="form-group">
                        <label form="spesialis">Spesialis</label>
                        <input type="text" name="spesialis" id="spesialis" class="form-control">
                         
                         <div class="alert-danger">
                        <strong><?php echo form_error('spesialis');?></strong>
                        </div>

                   </div>
                   <div class="form-group">
                        <label form="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control"></textarea>
                          
                          <div class="alert-danger">
                        <strong><?php echo form_error('alamat');?></strong>
                        </div>

                   </div>
                   <div class="form-group">
                        <label form="telp">No. Telepon</label>
                        <input type="number" name="telp" id="telp" class="form-control">
                          
                          <div class="alert-danger">
                        <strong><?php echo form_error('telp');?></strong>
                        </div>

                   </div>
                   <div class="form-group pull-right">
                        <input type="submit" name="add" value="Simpan" class="btn btn-success">
                   </div>   

                </form>
            </div>
         </div>
     </div>
