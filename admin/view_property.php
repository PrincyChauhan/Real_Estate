            <?php include('include/header.php'); ?>

            <script type="text/javascript">
                function delet(id) {
                    if (confirm("you want to delete ?")) {
                        window.location.href = 'delete_property.php?x=' + id;
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
                                    <a class="btn btn-info" href="add_property.php">Add Property</a>
                                    <h2 style="text-align: center;">
                                        View Property
                                    </h2>
                                </div>
                                <div class="body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                            <thead>
                                                <tr>
                                                    <th>S.no</th>
                                                    <th>Title</th>
                                                    <th>Bedroom</th>
                                                    <th>Kitchan</th>
                                                    <th>Hall</th>
                                                    <th>Price</th>
                                                    <th>Address</th>
                                                    <th>Image</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 1;
                                                include 'include/config.php';

                                                $query = mysqli_query($con, "select * from property");
                                                while ($res = mysqli_fetch_array($query)) {
                                                    $id = $res['id'];
                                                    $img = $res['image'];
                                                ?>

                                                    <tr>
                                                        <td><?php echo $i++; ?></td>
                                                        <td><?php echo $res['title']; ?></td>
                                                        <td><?php echo $res['bedroom']; ?></td>
                                                        <td><?php echo $res['kichan']; ?></td>
                                                        <td><?php echo $res['hall']; ?></td>
                                                        <td><?php echo $res['price']; ?></td>

                                                        <td><?php echo $res['address']; ?></td>
                                                        <td><img src="images/property_image/<?php echo $img; ?>" width="120"></td>
                                                        <td>
                                                            <a class='btn btn-info' href="update_property.php?&id=<?php echo $id; ?>"><span class="glyphicon glyphicon-pencil"></span></a>
                                                            <a class='btn btn-danger' onclick="delet(<?php echo $id; ?>);"><span class="glyphicon glyphicon-remove" style="color:white;"></span></a>

                                                            <!-- <a class='btn btn-success' href="dashboard.php?page=c_info&id=<?php echo $id; ?>"><span class="fa fa-eye"></span></a>-->

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