<?php
	$data['judul'] = 'Admin | Manajemen User';
	$data['identitas'] = $this->MyModel->getidentitas();
	$pengguna = $this->MyModel->getPenggunaById($_SESSION['user_id']);
	$data['notifikasi'] = $this->MyModel->count_notifikasi($pengguna->ID); 
    $this->load->view('admin/layout/header.html',$data);
	$this->load->library('ion_auth');
	
	if (!$this->ion_auth->is_admin())
	{
		$this->load->view('admin/layout/sidebar_user.html');
	}else{
        $this->load->view('admin/layout/sidebar.html');
    }    
?>
<div id="content-wrapper">
  <div class="container-fluid">
	  <!-- Breadcrumbs-->
	  <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="<?php echo base_url('auth');?>">Manajemen User</a>
      </li>
   	 </ol>  
    
<ol class="breadcrumb">
    <div class="container">
          <div class="card mb-12">
            <div class="card-header">
			<i class="fa fa-id-card"></i>
              <b>Daftar User</b>
            </div>
            <div class="card-body">
              <div class="table-responsive">
			
			  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			  	<thead>
                	<tr>
                    	<th><center>No</center></th>
                        <th><center>Nama Depan</center></th>
                        <th><center>Nama Belakang</center></th>
                        <th><center>E-mail</center></th>
						<th><center>Grup</center></th>
						<th><center>Action</center></th>
                    </tr>
				</thead>
				<tbody>
				<?php $n=1; foreach ($users as $user):?>
					<tr>
						<td><?php echo $n;?></td>
						<td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
						<td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
						<td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
						<td>
							<?php foreach ($user->groups as $group):?>
								<?php echo $group->name ;?><br />
							<?php endforeach?>
						</td>
						<td>
							<center>
							    <a class="btn btn-success" href="<?php echo base_url('auth/edit_user/').$user->id; ?>">Edit</a>
							    <a href="<?php echo site_url('auth/nonaktifkan/').$user->id; ?>" class="btn btn-primary hapuskategori" data-toggle="modal" data-target="#formHapus" data-idx="<?= $user->id ;?>">Aktivasi</a>
							</center>
						</td>
					</tr>
				<?php $n++; endforeach;?>
				</tbody>
			</table>
			  
              </div>
            </div>
            <div class="card-footer small text-muted">Copyright &copy;<script>document.write(new Date().getFullYear());</script> KebaikanKita.com</div>
          </div>
        </ol>

  </div>
</div>

<?php
	$this->load->view('admin/layout/footer.html');
?>

<!-- Modal Hapus -->
    <div class="modal fade" id="formHapus" tabindex="-1" role="dialog" aria-labelledby="formHapus" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="formHapusJudul">Hapus Kategori</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="<?php echo site_url();?>Auth/nonaktifkan" method="post">
                <input type="hidden" id="iduser" name="iduser">
                <input type="hidden" id="active" name="active">
                <p></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Proses</button>
          </form>
          </div>
        </div>
      </div>
    </div>  
  <!-- Akhir dari modal hapus-->
  
  <script src="<?php echo base_url('asset/jquery/jquery.min.js');?>"></script>        
        <!-- Custom js for this page-->
      <script type="text/javascript">
        //register
        $(document).ready(function(){
          var BASE_URL = "<?php echo base_url();?>";

          $('.hapuskategori').on('click', function(){
              $('#formHapusJudul').html('Hapus Kategori');
              const idx = $(this).data('idx');
              $.ajax({
                  url: BASE_URL + 'Auth/getpengguna',
                  data: {idx : idx},
                  method: 'post',
                  dataType: 'json',
                  success: function(data){
                    $('#iduser').val(data.ID_USERS);
                    $('#active').val(data.ACTIVE);
                    $('#iduser').attr('type','hidden');
                      if(data.ACTIVE == 1){
                        $('#formHapus .modal-dialog .modal-content .modal-body form p').html('Anda yakin mau menonaktifkan akun '+ data.EMAIL + ' ?');    
                      }else{
                          $('#formHapus .modal-dialog .modal-content .modal-body form p').html('Anda yakin mau mengaktifkan akun '+ data.EMAIL + ' ?');
                      }
                        
                  },
                    error: function (xhr, ajaxOptions, thrownError) { // Ketika terjadi error
                      alert(xhr.responseText) 
                    }          
              });
          });

        })
      </script>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('asset/admin/vendor/jquery/jquery.min.js');?>"></script>
  <script src="<?php echo base_url('asset/admin/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('asset/admin/vendor/jquery-easing/jquery.easing.min.js');?>"></script>
