<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= BASEURL;?>/css/bootstrap.min.css">

    <!-- My Css -->
    <style>
      section{
        min-height: 420px;
      }
    </style>

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/539ff654ff.js" crossorigin="anonymous"></script>

    <title>Babapus</title>
  </head>
  <body class="mt-5">
  <body class="mt-5">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white shadow p-2 mb-5">
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="<?= BASEURL;?>/home/homeAdmin"><img src="<?= BASEURL;?>/img/Babapus.png" alt=""></a>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link" href="<?= BASEURL;?>/home/homeAdmin">
                Kelola
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="<?= BASEURL;?>/home/homeAdmin id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?= BASEURL;?>/admin/kelolabuku">Buku</a>
                <a class="dropdown-item" href="<?= BASEURL;?>/admin/kelolaakun">User</a>
                <a class="dropdown-item"href="<?= BASEURL;?>/admin/kelolalapor">Laporan</a>
              </div>
            </li>
            <li class="nav-item dropdown mx-5">
                <a class="nav-link" href="<?= BASEURL;?>/home/halkurasi">Buku User</a>
            </li>
          </ul>
        </div>
      </div>
      <nav class="ml-auto">
            <a class="nav-link navbar-right" href="<?= BASEURL;?>/home/logout"><button  type="submit" class="btn btn-primary btn-xs p-1 mt-1" id="btnUp">Logout</button></a>
      </nav>
    </nav>
