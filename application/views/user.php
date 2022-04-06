<?php
    $this->load->view('layout/header');
?>
<div class="container">
    <div class="card">
        <div class="card-header">
           <h2>User</h2> 
        </div>
        <div class="card-body">
            <a href="user/add" class="btn btn-success mb-4">Tambah</a>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                </tr>
                <?php
                foreach ($list as $data) {
                    ?>
                    <tr>
                        <td><?=$data->nama;?></td>
                        <td><?=$data->email;?></td>
                        <td><?=$data->telp;?></td>
                        <td><?=$data->alamat;?></td>
                        <td>
                            <!-- <a href="user/detail/<?=$data->id_user;?>" class="btn btn-info">Detail</a> -->
                            <a href="user/edit/<?=$data->id_user;?>" class="btn btn-warning">Edit</a>
                            <button onclick="peringatan(<?=$data->id_user;?>)" class="btn btn-danger">Hapus</button>
                        </td>
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