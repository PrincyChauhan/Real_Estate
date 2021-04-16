<?php include('include/header.php'); ?>
<!-- main header end -->

<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Properties Grid</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Properties Grid</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Properties list fullwidth start -->
<div class="properties-list-fullwidth content-area-2">
    <div class="container">
        <div class="option-bar d-none d-xl-block d-lg-block d-md-block d-sm-block">
            <div class="row clearfix">
                <div class="col-xl-4 col-lg-5 col-md-5 col-sm-5">
                    <h4>
                        <span class="heading-icon">
                            <i class="fa fa-caret-right icon-design"></i>
                            <i class="fa fa-th-large"></i>
                        </span>
                        <span class="heading">Properties </span>
                    </h4>
                </div>

            </div>
        </div>
        <!-- <div class="subtitle">
            20 Result Found
        </div> -->
        <div class="row">
            <?php
            include 'include/config.php';
            $query1 = mysqli_query($con, "select * from admin");
            $admin = mysqli_fetch_array($query1);

            $u_name = ucfirst($admin['name']);

            $query = mysqli_query($con, "select * from property");
            while ($res = mysqli_fetch_array($query)) {
                $id = $res['id'];
                $img = $res['image'];

            ?>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="properties-details.html" class="property-img">
                                <div class="price-ratings-box">
                                    <p class="price">
                                        ₹ <?php echo $res['price']; ?>
                                    </p>
                                    <div class="ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                                <img src="admin/images/property_image/<?php echo $img; ?>" alt="property-1" height="180px" width='300px'>>
                            </a>
                            <div class="property-overlay">

                                <!-- <a class="overlay-link property-video" title="Test Title">
                                <i class="fa fa-video-camera"></i>
                            </a>-->
                                <div class="property-magnify-gallery">
                                    <a href="admin/images/property_image/<?php echo $img; ?>" class="overlay-link">
                                        <i class="fa fa-expand"></i>
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="properties-details.php?id=<?php echo $id; ?>"><?php echo $res['title']; ?></a>
                            </h1>
                            <div class="location">
                                <a href="properties-details.php?id=<?php echo $id; ?>">
                                    <i class="fa fa-map-marker"></i><?php echo $res['address']; ?>
                                </a>
                            </div>
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="flaticon-bed"></i> <?php echo $res['bedroom']; ?> : Bedroom
                                </li>
                                <li>
                                    <i class="flaticon-bath"></i> <?php echo $res['hall']; ?> : Hall
                                </li>

                                <li>
                                    <i class="fa fa-coffee"></i> <?php echo $res['kichan']; ?> : kitchen
                                </li>
                            </ul>
                        </div>
                        <div class="footer">
                            <!-- <a href="#">
                                <i class="fa fa-user"></i> <?php echo $u_name; ?>
                            </a> -->
                            <!-- <span>
                                <i class="fa fa-calendar-o"></i> 2 years ago
                            </span> -->
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</div>
<!-- Properties list fullwidth end -->

<!-- Footer start -->
<?php include('include/footer.php'); ?>