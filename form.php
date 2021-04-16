<?php include('include/header.php'); ?>
<!-- main header end -->

<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Form</h1>
            <ul class="breadcrumbs">
                <li><a href="index.php">Home</a></li>s
                <li class="active">Form</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->
<?php
if (isset($_POST["Send"])) {


    $name = $_POST['name'];
    $email = $_POST['email'];
    $father_name = $_POST['father_name'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $satsang = $_POST['satsang'];
    $events  = $_POST['event'];




    $center_name = $_POST['center_name'];
    $sub_center_name = $_POST['sub_center_name'];
    $coordinator_name = $_POST['coordinator_name'];
    $mahatma_id = $_POST['mahatma_id'];

    // foreach ($checkbox1 as $chk1) {
    //     $chk .= $chk1 . ",";
    // } 
    $e = "";
    foreach ($events as $ev) {
        $e .= $ev . ",";
    }

    
    $query = "INSERT INTO mahatma(name,father_name,email,mobile,message,satsang,center_name,sub_center_name,coordinator_name,mahatma_id,events,date) ";
    $query .= "VALUES('{$name}','{$father_name}','{$email}','{$phone}','{$message}','{$satsang}','{$center_name}','{$sub_center_name}','{$coordinator_name}','{$mahatma_id}','{$e}',now())";

    $create_post_query = mysqli_query($con, $query);
}
?>


<!-- Contact 1 start -->
<div class="contact-1 content-area-7">
    <div class="container">
        <div class="main-title">
            <h1>Form</h1>
        </div>





        <div class="row">
            <div class="col-lg-7 col-md-7 col-md-7">
                <form method="POST">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group name">
                                <input type="text" name="name" class="form-control" placeholder="Name" require>
                            </div>
                        </div>


                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group subject">
                                <input type="text" name="father_name" class="form-control" placeholder="Father's name">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group email">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group number">
                                <input type="text" name="phone" class="form-control" placeholder="Number">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group subject">
                                <input type="text" name="center_name" class="form-control" placeholder="Center Name">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group subject">
                                <input type="text" name="sub_center_name" class="form-control" placeholder="Sub Center Name">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group subject">
                                <input type="text" name="coordinator_name" class="form-control" placeholder="Coordinator Name">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group subject">
                                <input type="text" name="mahatma_id" class="form-control" placeholder="Mahatma id">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label style="color:black; font-size:18px; font:bold;">Satsang</label>

                                    <input name="satsang" type="radio" id="radio_36" value="yes" class="with-gap radio-col-light-blue" />
                                    <label for="radio_36">YES</label>

                                    <input name="satsang" type="radio" id="radio_30" value="No" class="with-gap radio-col-red" />
                                    <label for="radio_30">NO</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-line">
                            <label style="color:black; font-size:20px; font:bold">Which events do you attend?</label> <br>
                            <input type="checkbox" value="Parayan" name="event[]"> <label>Parayan</label> <br>
                            <input type="checkbox" value="Dadashri's Janm Jayanti" name="event[]"><label> Dadashri's Janm Jayanti</label> <br>
                            <input type="checkbox" value="MMTH shibir" name="event[]"><label> MMTH shibir</label> <br>
                            <input type="checkbox" value="WHMT shibir" name="event[]"><label> WHMT shibir</label> <br>
                            <input type="checkbox" value=" MBA shibir" name="event[]"><label> MBA shibir</label> <br>
                            <input type="checkbox" value="Hindi Shibir" name="event[]"><label>Hindi Shibir</label> <br>
                            <input type="checkbox" value="Any other" name="event[]"><label> Any other</label> <br>
                        </div><br>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group message">
                                <textarea class="form-control" name="message" placeholder="Write message"></textarea>
                            </div>
                        </div>
                        <input type="submit" value="Submit" name="Send" />
                    </div>
                </form>
            </div>

            <div class=" offset-lg-1 col-lg-4 offset-md-0 col-md-5">
                <div class="contact-info">
                    <h3>More Info</h3>
                    <div class="media">
                        <i class="fa fa-map-marker"></i>
                        <div class="media-body">
                            <p>Dada bhagwan Trimandir</p>
                            <p>Ahmedabad, Kalol hwy </p>
                            <p>Simandhar City</p>
                            <p>Adalaj,Gujarat</p>
                            <p>382421</p>
                        </div>
                    </div>
                    <div class="media">
                        <i class="fa fa-phone"></i>
                        <div class="media-body">
                            <h5 class="mt-0">Phone Number</h5>
                            <p>9328661166</p>

                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact 1 end -->

