<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html xml:lang="el" lang="el">
<head>
    <?php $this->load->view('theme/head'); ?>
</head>
<body>
<div class="container">
    <?php $this->load->view('theme/header'); ?>
    <script type="text/javascript">
        $(function () {
            $('#liters-chart').highcharts({
                title: {
                    text: 'Gasoline Data Consumption',
                    x: -20 //center
                },
                xAxis: {
                    categories: [ <?php
                        foreach ($fuel as $dt) {
                            echo '"' . $dt->date_from . ' to ' . $dt->date_to . '",';
                        }
                        ?>]
                },
                yAxis: {
                    title: {
                        text: 'Liters (lt)'
                    },
                    plotLines: [{
                        value: 0,
                        width: 1,
                        color: '#808080'
                    }]
                },
                tooltip: {
                    valueSuffix: 'lt'
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle',
                    borderWidth: 0
                },
                series: [{
                    name: 'Gasoline Liters',
                    data: [<?php
                        foreach ($fuel as $dt) {
                            echo $dt->liters . ',';
                        }
                        ?>]
                }]
            });


            $('#km-chart').highcharts({
                title: {
                    text: 'Mileage Data',
                    x: -20 //center
                },
                xAxis: {
                    categories: [ <?php
                        foreach ($fuel as $dt) {
                            echo '"' . $dt->date_from . ' to ' . $dt->date_to . '",';
                        }
                        ?>]
                },
                yAxis: {
                    title: {
                        text: 'Kilometers (km)'
                    },
                    plotLines: [{
                        value: 0,
                        width: 1,
                        color: '#808080'
                    }]
                },
                tooltip: {
                    valueSuffix: 'km'
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle',
                    borderWidth: 0
                },
                series: [{
                    name: 'Kilometers',
                    data: [<?php
                        foreach ($fuel as $dt) {
                            echo $dt->km . ',';
                        }
                        ?>]
                }]
            });


            $('#avg-chart').highcharts({
                title: {
                    text: 'Average Consumption Data',
                    x: -20 //center
                },
                xAxis: {
                    categories: [ <?php
                        foreach ($fuel as $dt) {
                            echo '"' . $dt->date_from . ' to ' . $dt->date_to . '",';
                        }
                        ?>]
                },
                yAxis: {
                    title: {
                        text: 'Average (lt/100km)'
                    },
                    plotLines: [{
                        value: 0,
                        width: 1,
                        color: '#808080'
                    }]
                },
                tooltip: {
                    valueSuffix: 'lt/100km'
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'middle',
                    borderWidth: 0
                },
                series: [{
                    name: 'Average',
                    data: [<?php
                        foreach ($fuel as $dt) {
                            echo round(($dt->liters / $dt->km) * 100, 2) . ',';
                        }
                        ?>]
                }]
            });

        });
    </script>

    <div class="row">
        <div class="col-md-12">
            <div id="avg-chart" style="height: 250px;"></div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div id="liters-chart" style="height: 250px;"></div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div id="km-chart" style="height: 250px;"></div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">

            <?php
            $total_lt = 0;
            $total_km = 0;
            $total_money = 0;
            foreach ($fuel as $dt) {
                $total_lt += $dt->liters;
                $total_km += $dt->km;
                $total_money += $dt->money;
            }
            ?>
            <h3>Total Data</h3>
            <p>Total Liters = <?php echo $total_lt ?> lt</p>
            <p>Total Kilometers = <?php echo $total_km ?> km</p>
            <p>Total Money Spent = <?php echo $total_money ?> €</p>


        </div>
    </div>

    <?php $this->load->view('theme/footer'); ?>
</div>
</body>
</html>