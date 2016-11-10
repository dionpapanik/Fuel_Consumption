<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html xml:lang="el" lang="el">
<head>
    <?php $this->load->view('theme/head'); ?>
</head>
<body>
<div class="container">
    <?php $this->load->view('theme/header'); ?>
    <div class="jumbotron text-center">
        <h3><?php echo $message ?></h3>
    </div>

    <?php $this->load->view('theme/footer'); ?>
</div>
</body>
</html>