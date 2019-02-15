<div class="box">
         <h1>Poliklinik</h1>
         <h4>
         	<small>Tambah Data Poliklinik</small>
            <div class="pull-right">
              <a href="<?php echo site_url('poliklinik');?>" class="btn btn-info btn-sm">Data</a>
            </div>
         </h4>
         <div class="row">
         	<div class="col-lg-8 col-lg-offset-2">
         	<?php echo form_open('poliklinik/proses'); ?>
         			<input type="hidden" name="total" value="">
                  <table class="table" id="dynamic_field">
                     <tr>
                           <th>#</th>
                           <th>Nama Poliklinik</th>
                           <th>Alamat</th>
                     </tr>
                    
                           <tr>
                             <!-- <td>No</td> -->
                             <td><span class="btn btn-sm btn-default">#</span>
                             <input type="hidden" name="count[]"></td>
                              <td>
                                 <input type="text" name="nama[]" placeholder="Nama Poliklinik" class="form-control" required>
                              </td>
                              <td>
                                 <input type="text" name="alamat[]" placeholder="Alamat Poliklinik" class="form-control" required>
                              </td>
                              <td>
                                 <button type="button" name="add" id="add" class="btn btn-primary">Add More</button>
                              </td>
                           </tr>         
                       
                  </table>

                  <div class="form-group pull-right">
                        <input type="submit" name="add" value="Simpan Semua" class="btn btn-success">
                  </div>
         		 <?php echo form_close(); ?> 
         	</div>
         </div>

<script>
$(document).ready(function(){
	var i=1;
	$('#add').click(function(){
      $('#dynamic_field').append('<tr id="row'+i+'"><td><span class="btn btn-sm btn-default">'+i+'</span></td><td><input type="text" name="nama[]" placeholder="Nama Poliklinik" class="form-control" /> <td><input type="text" name="alamat[]" placeholder="Alamat Poliklnik" class="form-control" /></td> <td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
      i++;
	});
	
	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
      i--;
   });
   

	
});
</script>
