<div class="box">
         <h1>Obat</h1>
         <h4>
            <small>Tambah Data Obat</small>
            <div class="pull-right">
              <a href="<?= site_url('obat/index'); ?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
            </div>
         </h4>
         <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <?php echo form_open('obat/proses'); ?>
                   <div class="form-group">
                        <label form="nama">Nama Obat</label>
                        <input type="text" name="nama" id="nama" class="form-control" required autofocus>
                   </div>
                   <div class="form-group">
                        <label form="ket">Keterangan</label>
                        <textarea name="ket" id="ket" class="form-control" required></textarea>
                   </div>
                   <div class="form-group pull-right">
                        <input type="submit" name="add" value="Simpan" class="btn btn-success">
                   </div>   
              
                 <?php echo form_close(); ?> 
            </div>
         </div>
     </div>
