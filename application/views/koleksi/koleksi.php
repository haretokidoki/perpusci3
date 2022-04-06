<?php  
	$this->load->view('layout/header');
?>
<div class="container">
	<div class="card">
		<div class="card-header">
			<h2>Koleksi</h2>
		</div>
		<div class="card-body">
            <a href="koleksi/add" class="btn btn-success mb-3">Tambah Data</a>
            
			<table class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th></th>
                </tr>
                <?php
                foreach ($list as $data) {
                    ?>
                    <tr>
                        <td><?=$data->id_koleksi;?></td>
                        <td><?=$data->judul;?></td>
                        <td><?=$data->kategori;?></td>
                        <td>
                            <a href="koleksi/detail/<?=$data->id_koleksi;?>" class="btn btn-info">Detail</a>
                            <a href="koleksi/edit/<?=$data->id_koleksi;?>" class="btn btn-warning">Edit</a>
                            <button onclick="peringatan(<?=$data->id_koleksi;?>)" class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <?php   
                }
                ?>
            </table>
			
		</div>
		
	</div>
</div>

<script type="text/javascript">
    function peringatan(id){
        let text = "Apakah Anda yakin ingin menghapus data?";
        if (confirm(text) == true) {
            window.location.href = 'user/delete/'+id;
        }    
    }
    
</script>
<?php
	$this->load->view('layout/footer');
?>