 <?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
<?php endif; ?>


  <div class="box">
         <h1>Data Pasien</h1>
         <h4>
            <small>Data Pasien</small>
            <div class="pull-right">
              <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
              <a href="<?php echo base_url('pasien/add');?>" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i>Tambah Pasien</a>
            </div>
         </h4>
         
         <div class="table-responsive">
             <table class="table table-striped table-bordered table-hover" id="pasien">
                <thead>
                  <tr>
                     <th>Nomor Identitas</th>
                     <th>Nama Pasien</th>
                     <th>Jenis Kelamin</th>
                     <th>Alamat</th>
                     <th>No. Telepon</th>
                     <th><i class="glyphicon glyphicon-cog"></i></th>
                  </tr> 
                </thead>

                <tbody>
                <?php 
                foreach ($pasien as  $pasien) {?>
                  <tr>
                     <td><?= $pasien->nomor_identitas?></td>
                     <td><?= $pasien->nama_pasien?></td>
                     <td><?= $pasien->jenis_kelamin?></td>
                     <td><?= $pasien->alamat?></td>
                     <td><?= $pasien->no_telp?></td>
                     <td>
                        <a class="btn btn-sm btn-warning" href="<?php echo site_url('pasien/edit/'.$pasien->id_pasien);?>"><i class="glyphicon glyphicon-edit"></i></a>
                        <a class="btn btn-sm btn-danger delete_lead" href="<?php echo site_url('pasien/delete/'.$pasien->id_pasien);?>"><i class="glyphicon glyphicon-trash"></i></a>
                     </td>
                  </tr>
               <?php
               } ?>
                </tbody>
                
             </table>
         </div>

         <script>
    $(document).ready(function() {
       $('#pasien').DataTable();
      

      
    $ ('.delete_lead').on("click", function (e) {
    e.preventDefault ();
    var url = $ (this).attr('href');
    swal({
      title: "Apakah Kau Yakin ?",
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
      
    </div>  