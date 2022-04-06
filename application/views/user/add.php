<?php  
	$this->load->view('layout/header');
?>
<div class="container">
	<div class="card">
		<div class="card-header">
			<h2>Tambah User</h2>
		</div>
		<div class="card-body">
			
			<form method="post" action="insert" enctype="multipart/form-data">
				<div class="row">
					<div class="col-6">
						<div class="mb-3">
							<label class="form-label">Nama</label>
							<input class="form-control" type="text" name="nama">
						</div>
						<!-- <div class="mb-3">
							<label class="form-label">Avatar</label>
							<input class="form-control" type="file" name="gambar">
						</div> -->
						<div class="mb-3">
							<label class="form-label" >Alamat</label>
							<textarea class="form-control" name="alamat"></textarea>
						</div>
								
					</div>
					<div class="col-6">
						<div class="mb-3">
							<label class="form-label">Email</label>
							<input class="form-control" type="email" name="email">
						</div>
						<div class="mb-3">
							<label class="form-label">Password</label>
							<input class="form-control" type="password" name="password">
						</div>
						<div class="mb-3">
							<label class="form-label">Telepon</label>
							<input class="form-control" type="number" name="telp">
						</div>
								
					</div>
				</div>
				<button type="submit" class="btn btn-success">Submit</button>		
			</form>
		</div>
		
	</div>
</div>
<?php
	$this->load->view('layout/footer');
?>