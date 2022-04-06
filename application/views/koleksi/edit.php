<?php  
	$this->load->view('layout/header');

?>
<div class="container">
	<div class="card">
		<div class="card-header">
			<h2>Edit Buku</h2>
		</div>
		<div class="card-body">
			
			<form method="post" action="<?=base_url('koleksi/update/').$item['id_koleksi']?>" enctype="multipart/form-data">
				<div class="row">
					<div class="col-6">
						<input type="text" name="id" value="<?=$item['id_koleksi']?>" hidden>
						<div class="mb-3">
							<label class="form-label">Judul</label>
							<input class="form-control" type="text" name="judul" value="<?=$item['judul']?>">
						</div>
						<div class="mb-3">
							<label class="form-label">Cover</label>
							<input class="form-control" type="file" name="gambar">
						</div>
						<div class="mb-3">
							<label class="form-label" >Deskripsi</label>
							<textarea class="form-control" name="deskripsi"><?=$item['deskripsi']?></textarea>
						</div>
								
					</div>
					<div class="col-6">
						<div class="mb-3">
							<label class="form-label">Kategori</label>
							<input class="form-control" type="text" name="kategori" value="<?=$item['kategori']?>">
						</div>
						<div class="mb-3">
							<label class="form-label">Penulis</label>
							<input class="form-control" type="text" name="penulis" value="<?=$item['penulis']?>">
						</div>
						<div class="mb-3">
							<label class="form-label">Penerbit</label>
							<input class="form-control" type="text" name="penerbit" value="<?=$item['penerbit']?>">
						</div>
						<div class="mb-3">
							<label class="form-label">Tahun Terbit</label>
							<input class="form-control" type="number" name="tahun_terbit" min="1000" max="2106" value="<?=$item['tahun_terbit']?>">
						</div>		
					</div>
				</div>
				<button type="submit" class="btn btn-success">Edit</button>		
			</form>
		</div>
		
	</div>
</div>
<?php
	$this->load->view('layout/footer');
?>