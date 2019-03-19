<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#FF4D4D">
    <title>Palembang Kost - Cari Kost di Palembang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    
</head>
<style>

</style>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-tomato">
        <a class="navbar-brand" href="<?=base_url();?>">PalembangKost</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#pkostnavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="pkostnavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php if($this->uri->segment(1)=="")echo 'active';?> "><a class="nav-link" href="<?=base_url();?>">Home</a></li>
                <li class="nav-item <?php if($this->uri->segment(1)=="palembangkost")echo 'active';?>"><a class="nav-link" href="<?=base_url('promokost');?>">Promosikan Kost</a></li>
                <li class="nav-item <?php if($this->uri->segment(1)=="login")echo 'active';?>"><a class="nav-link" href="<?=base_url('login');?>"><span class="lnr lnr-lock"></span> Login</a></li>
            </ul>
        </div>
    </nav> 