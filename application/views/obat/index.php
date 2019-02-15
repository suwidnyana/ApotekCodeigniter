  <div class="box">
         <h1>Obat</h1>
         <h4>
         	<small>Data Obat</small>
            <div class="pull-right">
              <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
              <a href="<?= site_url('obat/add'); ?>" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i>Tambah Obat</a>
            </div>
         </h4>
         
         <div class="table-responsive">
             <table class="table table-striped table-bordered table-hover" id="obat">
             	<thead>
             	  <tr>
             	  	 <th>No.</th>
             	  	 <th>NamaObat</th>
             	  	 <th>Keterangan</th>
                     <th><i class="glyphicon glyphicon-cog"></i></th>
             	  </tr>	
             	</thead>

             	<tbody>
                <?php 
                $no = 1;
                foreach ($data_obat as $obat) {?>
                  <tr>
                     <td><?=$no++?></td>
                     <td><?=$obat->nama_obat?></td>
                     <td><?=$obat->ket_obat?></td>
                     <td>
                           <a class="btn btn-sm btn-warning" href="<?php echo site_url('obat/edit/'.$obat->id_obat);?>"><i class="glyphicon glyphicon-edit"></i></a>
                            <a class="btn btn-sm btn-danger delete_lead" href="<?php echo site_url('obat/delete/'.$obat->id_obat);?>"><i class="glyphicon glyphicon-trash"></i></a>

                        </td>
                  </tr>
                <?php
                }?>
              </tbody>
             </table>
         </div>
      
<script>
    $(document).ready(function() {
       $('#obat').DataTable();

      $ ('.delete_lead').on("click", function (e) {
    e.preventDefault ();
    var url = $ (this).attr('href');
    swal({
      title: "Apakah Anda Yakin ?",
      text: "Sekali dihapus, data akan hilang selamanya !",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
        
        swal("Success! Data Anda Telah Dihapus!", {
          icon: "success",
          
        });
        setTimeout(
  function() 
  {
    window.location.replace(url);
  }, 1500);
        
      } else {
        swal("Data anda aman!");
      }
    });
  });

    });

   
      </script>
        
    </div>