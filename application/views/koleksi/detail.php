<?php  
	$this->load->view('layout/header');
?>
<div class="container">
	<div class="card">
		<div class="card-header">
			<h2>Detail Buku</h2>
		</div>
		<div class="card-body">
			<div class="row">
                <div class="col-12">
                    <h3><?=$item['judul']?></h3>
                </div>         
                <div class="col-4">
                    <img class="img-fluid" src="<?=base_url('assets/images/cover/').$item['gambar']?>">
                </div>
                <div class="col-8">
                    <p class="card-text"><?=$item['deskripsi']?></p>
                </div>
            </div>
		</div>
		
	</div>
</div>
<?php
	$this->load->view('layout/footer');
?>