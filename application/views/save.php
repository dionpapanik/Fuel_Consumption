<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html xml:lang="el" lang="el">
<head>
    <?php $this->load->view('theme/head'); ?>
</head>
<body>
<div class="container">
    <?php $this->load->view('theme/header'); ?>
    <?php echo form_open('save', array('class' => 'form-inline')); ?>
    <h1>Insert Data Into Database</h1>

    <?php if (isset($message)) : ?>
        <h3> <?php echo $message ?> </h3>
    <?php endif; ?>

    <div class="form-group">
        <?php echo form_label('Date From :', 'date_from'); ?> <?php echo form_error('date_from'); ?>
        <?php echo form_input(array('id' => 'date_from', 'name' => 'date_from')); ?><br/>
    </div>

    <?php echo form_label('Date To :'); ?> <?php echo form_error('date_to'); ?><br/>
    <?php echo form_input(array('id' => 'date_to', 'name' => 'date_to')); ?><br/>

    <?php echo form_label('Liters :'); ?> <?php echo form_error('liters'); ?><br/>
    <?php echo form_input(array('id' => 'liters', 'name' => 'liters')); ?>
    <br/>

    <?php echo form_label('Km :'); ?> <?php echo form_error('km'); ?><br/>
    <?php echo form_input(array('id' => 'km', 'name' => 'km')); ?>
    <br/>

    <?php echo form_label('Money :'); ?> <?php echo form_error('money'); ?><br/>
    <?php echo form_input(array('id' => 'money', 'name' => 'money')); ?>
    <br/>


    <?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
    <?php echo form_close(); ?><br/>

    <?php $this->load->view('theme/footer'); ?>
</div>
</body>
</html>