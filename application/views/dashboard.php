<?php
    $this->load->view('layout/header.php');
?>
        <div class="container">
            <div class="card">
                <div class="card-header">
                   <h2>Hallo, <?=$nama?>!</h2> 
                </div>
                <div class="card-body">
                    <h4>Alamat : <?=$alamat?></h4>
                    <h4>Email : <?=$email?></h4>  
                    <h4>Hobby : 
                        <ul>
                            <?php
                                foreach ($hobi as $hobi) {
                                    echo '<li>'.$hobi.'</li>';
                                }                            
                            ?>
                        </ul>
                    </h4>
                </div>
            </div>
        </div>
<?php
    $this->load->view('layout/footer.php');
?>