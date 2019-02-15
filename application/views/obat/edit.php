<div class="box">
         <h1>Obat</h1>
         <h4>
            <small>Edit Data Obat</small>
            <div class="pull-right">
              <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
            </div>
         </h4>
         <div class="row">
            <div class="col-lg-6 col-lg-offset-3">

               <?php echo form_open('obat/proses','', array('id_obat' => $obat->id_obat)); ?>
                   <div class="form-group">
                        <label form="nama">Nama Obat</label>
                        <input type="hidden" name="id" value="<?php echo $obat->id_obat;?>">
                        <input type="text" name="nama" id="nama" value="<?php echo $obat->nama_obat;?>" class="form-control" required autofocus>
                   </div>
                   <div class="form-group">
                        <label form="ket">Keterangan</label>
                        <textarea name="ket" id="t" class="form-control" required><?php echo $obat->ket_obat;?></textarea>
                   </div>
                   <div class="form-group pull-right">
                        <input type="submit" name="edit" value="Simpan" class="btn btn-success">
                   </div>   
                <?php echo form_close(); ?> 
            </div>
         </div>
     </div>