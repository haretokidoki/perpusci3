<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href= "<?=base_url('assets/dist/css/bootstrap.min.css')?>" >
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">
              <img src="<?=base_url('assets/images/logo-ts.png')?>" alt="" width="30" height="24" class="d-inline-block align-text-top">
              Tiga Serangkai
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" href="<?=base_url()?>">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?=base_url("user")?>">User</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?=base_url("koleksi")?>">Koleksi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?=base_url("about")?>">About</a>
                </li>
              </ul>
              
                
                <a href="login/logout" class="btn btn-outline-success" type="submit">Logout</a>
              
            </div>
          </div>
        </nav>
    <div class="container mt-4">
        