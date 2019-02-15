 <!-- Display the status message -->
 <?php if($this->session->flashdata('statusMsg')){ ?>
<div class="alert alert-success">
<?php echo $this->session->flashdata('statusMsg'); ?>
</div>
<?php } ?>

 <div class="box">
         <h1>Poliklinik</h1>
         <h4>
         	<small>Data Poliklinik</small>
            <div class="pull-right">
              <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
              
              <a href="<?php echo site_url('poliklinik/add');?>" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i>Tambah Data Poliklinik</a>
            </div>
         </h4>

         <form method="post" name="bulk_action_form" action="<?php echo site_url('poliklinik'); ?>" id="form_poliklinik" />
         <input type="hidden" name="bulk_delete_submit" id="bulk_delete">
         <input type="hidden" name="bulk_edit_submit" id="bulk_edit">

         <div class="table-responsive">
             <table class="table table-striped table-bordered table-hover" id="poliklinik">
             	<thead>
             	  <tr>
             	  	 <th>No.</th>
             	  	 <th>Nama Poliklinik</th>
             	  	 <th>Alamat</th>
                     <th>
                         <center>
                             <input type="checkbox" id="select_all" value="">
                         </center>
                     </th>
             	  </tr>
             	</thead>
             	<tbody>

                 <?php
                    $no = 1;
                    if(!empty($poliklinik)){ foreach ($poliklinik as $poli) { ?>
                    <tr>
                    <td><?=$no++?></td>
                    <td><?=$poli['nama_poli'];?></td>
                    <td><?=$poli['gedung'];?></td>
                        <td align="center">
                            <input type="checkbox" name="checked[]" class="check" value="<?=$poli['id_poli']?>">
                        </td>
                    </tr>
                <?php } }else{ ?>
                    <tr><td colspan="5">No records found.</td></tr>
                <?php } ?>
              </tbody>
             </table>

                <div class="box pull-right">
                    <button id="btn-edit" class="btn btn-warning btn-sm" type="submit" name="bulk_edit_submit" value="Edit"><i class="glyphicon glyphicon-edit"></i> Edit</button>
                    <button class="btn btn-danger btn-sm" type="submit" name="bulk_delete_submit" value="Delete" id="btn-delete"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
                </div>

         </div>
     </form>

        <!-- <div class="box pull-right">
            <button class="btn btn-warning btn-sm" onclick="edit()"><i class="glyphicon glyphicon-edit"></i> Edit</button>
            <button class="btn btn-danger btn-sm" onclick="hapus()"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
        </div> -->
    </div>

    <script>
    
    // $(document).ready(function() {
    //    $('#poliklinik').DataTable(); //script datatables, dihubungkan dengan  #id
    // });

    //script sweetalert
    $('#btn-delete').on('click', function(e) {
        e.preventDefault();

        $('#bulk_delete').val(true);
        $('#bulk_edit').val(false);

        if($('.check:checked').length > 0){
            swal({
              title: "Apakah Anda Yakin ?",
              text: "Sekali dihapus, datanya susah untuk dikembalikan !",
              icon: "warning",
              buttons: true,
              dangerMode: true,
            }).then(response => {
                if(response) {
                    $('#form_poliklinik').submit();
                }
            });

           
        }else{
            swal('Peringatan!', 'Anda harus setidaknya memilih data untuk di hapus', 'error');
            return false;
        }
    });

    $('#btn-edit').on('click', function(e) {
        if($('.check:checked').length < 1){
            swal('Peringatan!', 'Anda harus setidaknya memilih data untuk di edit', 'error');
            e.preventDefault();
        }

        $('#form_poliklinik').attr('action', "<?php echo site_url('poliklinik/bulk_edit'); ?>");
    });



    //script multiple checked
    $(document).ready(function() {
      $('#select_all').on('click',function(){
         if(this.checked) {
            $('.check').each(function() {
                this.checked = true;
            })
         } else {
            $('.check').each(function() {
                this.checked = false;
            })
         }
      });

      $('.check').on('click', function() {
        if($('.check:checked').length == $('.check').length) {
            $('#select_all').prop('checked',true)
        } else {
            $('#select_all').prop('checked',false)
        }
      })
    })



    //membuat fungsi edit
    function edit() {
        document.proses.action = 'edit.php';
        document.proses.submit();
    }

    //membuat fungsi hapus
    function hapus() {
        var conf = confirm('Yakin Akan Menghapus Data');
        if(conf) {
           document.proses.action = "<?php echo site_url('poliklinik/del');?>";
           document.proses.submit();
        }
        
    }
    </script>