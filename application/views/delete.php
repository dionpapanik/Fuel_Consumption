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
                    <th>Average</th>
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
                        <td><?php echo round(($data->liters / $data->km) * 100, 2) ?></td>
                        <td><?php echo $data->money ?></td>
                        <td>
                            <a href="<?php echo base_url() . "delete/delete_id/" . $data->id; ?>">
                                <button type="button" class="btn btn-danger">Delete</button>
                            </a>
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