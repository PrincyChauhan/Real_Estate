<?php include('include/header.php'); ?>

<script type="text/javascript">
    function delet(id) {
        if (confirm("you want to delete ?")) {
            window.location.href = 'delete_form.php?x=' + id;
        }
    }
</script>
<!-- Header -->

<section>

    <!-- Left Sidebar -->
    <?php include('include/sidebar.php'); ?>
    <!-- #END# Left Sidebar -->
    <section class="content">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2 style="text-align: center;">
                            View Form
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>sr.no</th>
                                        <th>Name</th>
                                        <th>father name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>center name</th>
                                        <th> sub center name</th>
                                        <th>event</th>
                                        <th>satsang</th>
                                        <th>mahatma id</th>
                                        <th>coordinater name</th>
                                        <th>center name</th>
                                        <th>message</th>
                                  
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    include 'include/config.php';

                                    $query = mysqli_query($con, "select * from mahatma");
                                    while ($res = mysqli_fetch_array($query)) {
                                        $id = $res['id'];
                                    ?>

                                        <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $res['name']; ?></td>
                                            <td><?php echo $res['father_name']; ?></td>
                                            <td><?php echo $res['email']; ?></td>
                                            
                                            <td><?php echo $res['mobile']; ?></td>
                                            <td><?php echo $res['center_name']; ?></td>
                                            <td><?php echo $res['sub_center_name']; ?></td>
                                            <td><?php echo $res['events']; ?></td>
                                            <td><?php echo $res['satsang']; ?></td>

                                            <td><?php echo $res['mahatma_id']; ?></td>
                                            <td><?php echo $res['coordinator_name']; ?></td>
                                            <td><?php echo $res['message']; ?></td>
                                          
                                            <td>
                                                <a class='btn btn-danger' onclick="delet(<?php echo $id; ?>);"><span class="glyphicon glyphicon-remove" style="color:white;"></span></a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'include/footer.php'; ?>

