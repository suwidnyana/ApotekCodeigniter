 <div class="box">
         <h1>Rekam Medis</h1>
         <h4>
            <small>Data Rekam Medis</small>
            <div class="pull-right">
              <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
              <a href="<?php echo site_url('rekam_medis/add');?>" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i>Tambah Rekam Medis</a>
            </div>
         </h4>
         <div class="table-responsive">
             <table class="table table-striped table-bordered table-hover" id="rekammedis">
                <thead>
                  <tr>
                     <th>No.</th>
                     <th>Tanggal Periksa</th>
                     <th>Nama Pasien</th>
                     <th>Keluhan</th>
                     <th>Nama Dokter</th>
                     <th>Diagnosa</th>
                     <th>Poliklinik</th>
                     <th>Data Obat</th>
                     <th><i class="glyphicon glyphicon-cog"></i></th>
                  </tr> 
                </thead>

                <tbody>
                  <?php
                  $no = 1;
                  foreach ($rekammedis as $row) { ?>
                        <tr>
                            <td><?=$no++?></td>
                            <td><?=$row['tgl_periksa']?></td>
                            <td><?=$row['nama_pasien'];?></td>
                            <td><?=$row['keluhan'];?></td>
                            <td><?=$row['nama_dokter'];?></td>
                            <td><?=$row['diagnosa'];?></td>
                            <td><?=$row['nama_poli'];?></td>
                            <td>
                                <?php foreach($row['obat'] as $obat) : ?>
                                    <?=$obat->nama_obat;?><br />
                                <?php endforeach; ?>
                            </td>
                            <td>
                            <a href="<?php echo site_url('rekam_medis/del/'.$row['id_rm']);?>" class="btn btn-danger btn-xs delete_lead"><i class="glyphicon glyphicon-trash" onclick="return confirm('Yakin menghapus data ?')"></i></a>
                            </a>
                        </td>
                        </tr>
                  <?php } ?>
              </tbody>
             </table>
         </div>
    </div>   

    <script>
    $(document).ready(function() {
     
    $ ('.delete_lead').on("click", function (e) {
    e.preventDefault ();
    var url = $ (this).attr('href');
    swal({
      title: "Apakah Anda Yakin ?",
      text: "Sekali dihapus, datanya susah untuk dikembalikan !",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        
        swal("Success! Your Lead has been deleted!", 
        {
          icon: "success",
          
        });
        setTimeout(
  
  function() 
  {
    window.location.replace(url);
  }, 1500);
        
      } else {
        swal("","Data anda aman!","success");
      }
    });
  });

    });

   
      </script>