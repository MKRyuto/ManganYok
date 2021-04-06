<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="ManganYok Merupakan Website Resep Masakan yang menyediakan berbagai Resep masakan dari berbagai Daerah dan Tipe dari berbagai macam orang">
    <meta name="author" content="ManganYok">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="<?= base_url(''); ?>assets/dmb/img/faviconManganyok/fav.ico" />
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/dmb/dist/summernote-bs4.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="<?= base_url(''); ?>assets/dmb/css/bootstrap.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="<?= base_url(''); ?>assets/dmb/css/mdb.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="<?= base_url(''); ?>assets/css/ManganYok.css" rel="stylesheet">
    <link href="<?= base_url(''); ?>assets/css/style.css" rel="stylesheet">



</head>

<body>

    <!--Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark secondary-color lighten-1 green darken-1">
        <img src="<?= base_url(''); ?>assets/img/Logo WEb.png" alt="" height="40" width="100" style="object-fit:cover; margin-right:-20px">
        <a class="navbar-brand mr-3" href="<?= base_url('user'); ?>">ManganYok</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555" aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active mr-4">
                    <a class="nav-link" href="<?= base_url('user'); ?>">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item dropdown mr-4">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-555" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Post
                    </a>
                    <div class="dropdown-menu dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-555">
                        <a class="dropdown-item" href="<?= base_url('user/post'); ?>">Buat Post</a>
                        <a class="dropdown-item" href="<?= base_url('user/lihatpost'); ?>">Lihat Post</a>
                    </div>
                </li>
                <li class="nav-item mr-4">
                    <a class="nav-link" href="<?= base_url('user/filter'); ?>">Filter</a>
                </li>
                <li class="nav-item mr-4">
                    <a class="nav-link" href="<?= base_url('user/ketentuan'); ?>">Ketentuan</a>
                </li>
                <li class="nav-item mr-4">
                    <a class="nav-link" href="<?= base_url('user/faqs'); ?>">FAQs</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item mr-5">
                    <form class="form-inline mr-auto" action="<?= base_url('user/search'); ?>" method="post" enctype="multipart/form-data">
                        <input class="form-control" type="text" placeholder="Search" aria-label="Search" id="keyword" name="keyword" value="<?= set_value('keyword'); ?>">
                        <button class="btn btn-mdb-color btn-rounded btn-sm my-0 ml-sm-2   blue darken-1" type="submit">Search</button>
                    </form>
                </li>
                <li class="nav-item avatar dropdown">
                    <a href="<?= base_url('auth'); ?>" class="btn btn-mdb-color btn-rounded btn-sm my-1 ml-sm-2   blue darken-4">Login</a>
                    <a href="<?= base_url('auth/registration'); ?>" class="btn btn-mdb-color btn-rounded btn-sm my-0 ml-sm-2   blue darken-4">Sign Up</a>
                </li>
            </ul>
        </div>
    </nav>
    <!--/.Navbar -->