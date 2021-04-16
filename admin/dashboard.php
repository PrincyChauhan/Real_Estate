<?php include('include/header.php'); ?>
<!-- Header -->

<section>

    <!-- Left Sidebar -->
    <?php include('include/sidebar.php'); ?>
    <!-- #END# Left Sidebar -->

    <!-- Right Sidebar -->

    <section class="content">
        <div class="container-fluid">



            <div class="row clearfix">




                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="./view_property.php" style="text-decoration: none">
                        <div class="info-box bg-pink hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">playlist_add_check</i>
                            </div>
                            <div class="content">
                                <div class="text">Property</div>


                                <?php

                                $query = "SELECT * FROM property";
                                $select_all_property = mysqli_query($con, $query);
                                $property_count = mysqli_num_rows($select_all_property);


                                ?>

                                <div class="number count-to" data-from="0" data-to="<?php echo $property_count ?>" data-speed="15" data-fresh-interval="20"></div>
                            </div>
                        </div>
                    </a>
                </div>




                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="./view_form.php" style="text-decoration: none">
                        <div class="info-box bg-cyan hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">help</i>
                            </div>
                            <div class="content">
                                <div class="text">Form</div>

                                <?php

                                $query = "SELECT * FROM mahatma";
                                $select_all_form = mysqli_query($con, $query);
                                $form_count = mysqli_num_rows($select_all_form);



                                ?>
                                <div class="number count-to" data-from="0" data-to="<?php echo $form_count ?>" data-speed="1000" data-fresh-interval="20"></div>
                            </div>
                        </div>
                    </a>
                </div>




                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="./view_contact.php" style="text-decoration: none">
                        <div class="info-box bg-light-green hover-expand-effect">
                            <div class="icon">
                                <i class="material-icons">forum</i>
                            </div>
                            <div class="content">
                                <div class="text">Inquiry</div>

                                <?php

                                $query = "SELECT * FROM inquiry";
                                $select_all_inquiry = mysqli_query($con, $query);
                                
                                $inquiry_count = mysqli_num_rows($select_all_inquiry);



                                ?>
                                <div class="number count-to" data-from="0" data-to="<?php echo $inquiry_count ?>" data-speed="1000" data-fresh-interval="20"></div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <div class="row clearfix">

            </div>


            <div class="row">



                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                    google.charts.load('current', {
                        'packages': ['bar']
                    });
                    google.charts.setOnLoadCallback(drawChart);

                    function drawChart() {
                        var data = google.visualization.arrayToDataTable([
                            ['Data', 'Count'],

                            <?php
                            $element_text = ['All Property', 'All Forms', 'All Inquery'];
                            $element_count = [$property_count, $form_count, $inquiry_count];

                            for ($i = 0; $i < 3; $i++) {

                                echo "['{$element_text[$i]}'" . "," . "{$element_count[$i]}],";
                            }
                            ?>


                        ]);

                        var options = {
                            chart: {
                                title: '',
                                subtitle: '',
                            }
                        };

                        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                        chart.draw(data, google.charts.Bar.convertOptions(options));
                    }
                </script>


                <div id="columnchart_material" style="width: 'auto'; height: 500px;"></div>


            </div>
        </div>
    </section>
    <?php include 'include/footer.php'; ?>