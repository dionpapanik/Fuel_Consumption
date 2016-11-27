<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html xml:lang="el" lang="el">
<head>
    <?php $this->load->view('theme/head'); ?>
</head>
<body>
<div class="container">
    <?php $this->load->view('theme/header'); ?>

    <div class="container">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Date From</th>
                    <th>Date To</th>
                    <th>Liters</th>
                    <th>Kilometers</th>
                    <th>Money Spent</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($fuel as $data): ?>
                    <tr>
                        <td><?php echo $data->date_from ?></td>
                        <td><?php echo $data->date_to ?></td>
                        <td><?php echo $data->liters ?></td>
                        <td><?php echo $data->km ?></td>
                        <td><?php echo $data->money ?></td>
                        <td>
                            <button type="button" class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php $this->load->view('theme/footer'); ?>
</div>
</body>
</html>