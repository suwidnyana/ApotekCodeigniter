<div class="box">
         <h1>Rekam Medis</h1>
         <h4>
            <small>Tambah Rekam Medis</small>
            <div class="pull-right">
              <a href="<?php echo base_url();?>rekam_medis/index" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
            </div>
         </h4>
         <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
             <?php echo form_open('rekam_medis/proses'); ?>
                <!-- <form action="<?php echo base_url();?>rekam_medis/proses" method="post"> -->
                   <div class="form-group">
                        <label for="pasien">Pasien</label>
                        <select name="id_pasien" id="pasien" class="form-control" required>
                              <?php foreach($pasien as $row) : ?>
                                   <option value="<?= $row->id_pasien; ?>"><?= $row->nama_pasien; ?></option>
                              <?php endforeach; ?>
                        </select>
                   </div>
                   <div class="form-group">
                        <label form="keluhan">Keluhan</label>
                        <textarea name="keluhan" id="keluhan" class="form-control" rows="4" required></textarea>
                   </div>
                   <div class="form-group">
                        <label for="pasien">Dokter</label>
                        <select name="id_dokter" id="dokter" class="form-control" required>
                            <option value="">- Pilih </option>
                            <?php foreach($dokter as $row) : ?>
                                   <option value="<?= $row->id_dokter; ?>"><?= $row->nama_dokter; ?></option>
                              <?php endforeach; ?>
                        </select>
                   </div>
                   <div class="form-group">
                        <label form="diagnosa">Diagnosa</label>
                        <textarea name="diagnosa" id="diagnosa" class="form-control" required></textarea>
                   </div>
                   <div class="form-group">
                        <label for="poli">Poliklinik</label>
                        <select name="id_poli" id="poli" class="form-control" required>
                            <option value="">- Pilih </option>
                            <?php foreach($poli as $row) : ?>
                                   <option value="<?= $row->id_poli; ?>"><?= $row->nama_poli; ?></option>
                              <?php endforeach; ?>
                        </select>
                   </div>
                   <div class="form-group">
                        <label for="obat">Obat</label>
                        <select multiple name="obat[]" id="obat" class="form-control" size="7" required>
                            <?php foreach($obat as $row) : ?>
                                   <option value="<?= $row->id_obat; ?>"><?= $row->nama_obat; ?></option>
                              <?php endforeach; ?>
                        </select>
                   </div>
                   <div class="form-group">
                        <label form="tgl">Tanggal Periksa</label>
                        <input type="date" name="tgl_periksa" id="tgl" value="<?=date('Y-m-d')?>" class="form-control" required autofocus>
                   </div>
                   <div class="form-group pull-right">
                        <input type="submit" name="add" value="Simpan" class="btn btn-success">
                        <input type="reset" name="reset" value="Reset" class="btn btn-default">
                   </div>   
                <!-- </form> -->
                 <?php echo form_close(); ?> 
            </div>
         </div>
     </div>