<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Medical Health Center</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/libs/Datatables/DataTables-1.10.16/css/dataTables.bootstrap.min.css'); ?>">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/simple-sidebar.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/libs/DataTables/datatables.min.css');?>" rel="stylesheet">
    <link rel="icon" href="<?php echo base_url()?>/assets/img/medical.png">
</head>

<body>

     <!-- Javascript -->
	<script src="<?php echo base_url('assets/js/jquery.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-3.3.1.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery2.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/libs/DataTables/datatables.min.js')?>"></script>
    <script src="<?php echo base_url('assets/libs/vendor/ckeditor/ckeditor/ckeditor.js')?>"></script>
    <script src="<?php echo base_url('assets/js/sweetalert.min.js');?>"></script>
    
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href=""><span class="text-primary">Rumah Sakit<b></b></span></a>
                </li>
                <li>
                    <a href="<?=base_url('dashboard')?>">Halaman Muka</a>
                </li>
                <li>
                    <a href="<?php echo site_url('pasien')?>">Data Pasien</a>
                </li>
                <li>
                    <a href="<?=base_url('dokter')?>"">Data Dokter</a>
                </li>
                <li>
                    <a href="<?=base_url('poliklinik')?>">Data Poliklinik</a>
                </li>
                <li>
                    <a href="<?=base_url('obat')?>">Data Obat</a>
                </li>
                <li>
                    <a href="<?=base_url('rekam_medis')?>">Rekam Medis</a>
                </li>
                <li>
                    <a href="<?php echo site_url('login/logout');?>"><span class="text-danger">Logout</span></a>
                </li>
            </ul>
        </div>
        <div id="page-content-wrapper">
            <div class="container-fluid">
