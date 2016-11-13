<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html xml:lang="el" lang="el">
<head>
    <?php $this->load->view('theme/head'); ?>
</head>
<body>
<div class="container">
    <?php $this->load->view('theme/header'); ?>

    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading text-center"><?php echo $message ?></h4>
        <p class="mb-0">You saved in database the following records</p>
        <p>Date From: <?php echo $date_from ?></p>
        <p>Date To: <?php echo $date_to ?></p>
        <p>Liters: <?php echo $liters ?></p>
        <p>Km: <?php echo $km ?></p>
        <p>Money Spent: <?php echo $money ?></p>
    </div>

    <a href="<?php echo base_url(); ?>" class="btn btn-info btn-lg" role="button">Return
        <to></to>
        Homepage</a>

    <?php $this->load->view('theme/footer'); ?>
</div>
</body>
</html>