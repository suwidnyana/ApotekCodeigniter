<!-- Display the status message -->
 <?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
<?php endif; ?>


<div class="box">
         <h1>Dokter</h1>
         <h4>
            <small>Data Dokter</small>
            <div class="pull-right">
              <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
              <a href="<?=site_url('dokter/add'); ?>" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i>Tambah Data Dokter</a>
            </div>
         </h4>

         <form  name="bulk_action_form" method="post" action="<?php echo site_url('dokter'); ?>" id="form_dokter" />
        <input type="hidden" name="bulk_delete_submit" value="true">

         <div class="table-responsive">
             <table class="table table-striped table-bordered table-hover" id="dokter">
                <thead>
                  <tr>
                    <th>
                        <input type="checkbox" id="select_all" value=""/> 
                     </th>
                     <th>No.</th>
                     <th>Nama Dokter</th>
                     <th>Spesialis</th>
                     <th>Alamat</th>
                     <th>No. Telepon</th>
                     <th><i class="glyphicon glyphicon-cog"></i></th>
                  </tr> 
                </thead>

                <tbody>

                <?php 
                 $no = 1;
                 if(!empty($data_dokter)){ foreach($data_dokter as $dokter){ ?>
                   
                <tr>
                    
                         <td align="center">
                             <input type="checkbox"  name='checked_id[]' class="checkbox" value="<?php echo $dokter['id_dokter']; ?>">
                        </td>
                    <td><?=$no++?></td>
                    <td><?=$dokter['nama_dokter'];?></td>
                    <td><?=$dokter['spesialis'];?></td>
                    <td><?=$dokter['alamat'];?></td>
                    <td><?=$dokter['no_telp'];?></td>
                        <td>
                            <a class="btn btn-sm btn-warning" href="<?php echo site_url('dokter/edit/'.$dokter['id_dokter']);?>"><i class="glyphicon glyphicon-edit"></i></a>
                        </td>
                </tr>
                <?php } }else{ ?>
                    <tr><td colspan="5">No records found.</td></tr>
                <?php } ?>
              </tbody>
             </table>
             
            <div class="box pull-right">
                <button class="btn btn-danger btn-sm" type="submit" name="bulk_delete_submit" value="Delete" id="btn-delete"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
              </div>

         </div>
     </form>

    </div>


<script>

    $('#btn-delete').on('click', function(e) {
        e.preventDefault();

        if($('.checkbox:checked').length > 0){
            swal({
              title: "Apakah Anda Yakin ?",
              text: "Sekali dihapus, datanya susah untuk dikembalikan !",
              icon: "warning",
              buttons: true,
              dangerMode: true,
            }).then(response => {
                if(response) {
                    $('#form_dokter').submit();
                }
            });

           
        }else{
            swal('Peringatan!', 'Anda harus setidaknya memilih data untuk di hapus', 'error');
            return false;
        }
    });

$(document).ready(function(){
    $('#select_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
	
    $('.checkbox').on('click',function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
            $('#select_all').prop('checked',true);
        }else{
            $('#select_all').prop('checked',false);
        }
    });
});
</script>