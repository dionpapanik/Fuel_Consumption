<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html xml:lang="el" lang="el">
<head>
    <?php $this->load->view('theme/head'); ?>
</head>
<body>
<div class="container">
    <?php $this->load->view('theme/header'); ?>
    <?php echo form_open('save'); ?>
    <h1>Insert Data Into Database Using CodeIgniter</h1>
    <hr/>
    <?php if (isset($message)) { ?>
        <h3>D ata inserted successfully </h3><br>
    <?php } ?>
    <?php echo form_label('Student Name :'); ?> <?php echo form_error('dname'); ?><br/>
    <?php echo form_input(array('id' => 'dname', 'name' => 'dname')); ?><br/>

    <?php echo form_label('Student Email :'); ?> <?php echo form_error('demail'); ?><br/>
    <?php echo form_input(array('id' => 'demail', 'name' => 'demail')); ?><br/>

    <?php echo form_label('Student Mobile No. :'); ?> <?php echo form_error('dmobile'); ?><br/>
    <?php echo form_input(array('id' => 'dmobile', 'name' => 'dmobile', 'placeholder' => '10 Digit Mobile No.')); ?>
    <br/>

    <?php echo form_label('Student Address :'); ?> <?php echo form_error('daddress'); ?><br/>
    <?php echo form_input(array('id' => 'daddress', 'name' => 'daddress')); ?><br/>

    <?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
    <?php echo form_close(); ?><br/>
    <div id="fugo">

    </div>

    <?php $this->load->view('theme/footer'); ?>
</div>
</body>
</html>