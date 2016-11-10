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

    <div class="row">
        <div class="col-md-12">
            <h1>Insert Data Into Database</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <?php if (isset($message)) : ?>
                <h3> <?php echo $message ?> </h3>
            <?php endif; ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <?php echo form_label('Date From :', 'date_from'); ?><?php echo form_error('date_from'); ?>
                <?php echo form_input(array('id' => 'date_from', 'name' => 'date_from')); ?>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <?php echo form_label('Date To :'); ?><?php echo form_error('date_to'); ?>
                <?php echo form_input(array('id' => 'date_to', 'name' => 'date_to')); ?>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <?php echo form_label('Liters :'); ?><?php echo form_error('liters'); ?>
                <?php echo form_input(array('id' => 'liters', 'name' => 'liters')); ?>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <?php echo form_label('Km :'); ?><?php echo form_error('km'); ?>
                <?php echo form_input(array('id' => 'km', 'name' => 'km')); ?>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <?php echo form_label('Money :'); ?><?php echo form_error('money'); ?>
                <?php echo form_input(array('id' => 'money', 'name' => 'money')); ?>
            </div>
        </div>

        <div class="col-md-6">
            <?php echo form_submit(array('id' => 'submit', 'class' => 'btn btn-success', 'value' => 'Submit')); ?>
        </div>
    </div>

    <?php echo form_close(); ?><br/>

    <?php $this->load->view('theme/footer'); ?>
</div>
</body>
</html>