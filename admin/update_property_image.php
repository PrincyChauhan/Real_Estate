<?php 
include('include/header.php');
extract($_REQUEST);
include'include/config.php';

$image_id=$_REQUEST['id'];

$query=mysqli_query($con,"select * from images where property_id='$image_id'");
$res=mysqli_fetch_array($query);

$img1=$res['image1'];
$img2=$res['image2'];
$img3=$res['image3'];
$img4=$res['image4'];

if(isset($submit))
{

  $file1=$_FILES['file1']['name'];
  $file2=$_FILES['file2']['name'];
  $file3=$_FILES['file3']['name'];
  $file4=$_FILES['file4']['name'];

 

if($file2=="" || $file3=="" || $file4=="")
{

$query=mysqli_query($con,"update images set image1='$file1' where property_id='$image_id'");
  move_uploaded_file($_FILES['file1']['tmp_name'],"images/property_image/".$_FILES['file1']['name']); 
   $msg='<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Image Upload  successfuly.
  </div>'; 
  move_uploaded_file($_FILES['file1']['tmp_name'],"images/property_image/".$_FILES['file1']['name']); 

     $msg='<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Image Upload  successfuly.
  </div>'; 


}

else
{

  $query=mysqli_query($con,"update images set image1='$file1',image2='$file2',image3='$file3',image4='$file4' where property_id='$image_id'");

  move_uploaded_file($_FILES['file']['tmp_name'],"images/property_image/".$_FILES['file']['name']); 
  move_uploaded_file($_FILES['file1']['tmp_name'],"images/property_image/".$_FILES['file1']['name']); 
  move_uploaded_file($_FILES['file2']['tmp_name'],"images/property_image/".$_FILES['file2']['name']); 
  move_uploaded_file($_FILES['file3']['tmp_name'],"images/property_image/".$_FILES['file3']['name']); 


   $msg='<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Image Upload  successfuly.
  </div>'; 

}


}

?>  
    <!-- Header -->
  
       
       <!-- Left Sidebar -->
<?php include('include/sidebar.php');?>
        <!-- #END# Left Sidebar -->
        <section class="content">
        <div class="container-fluid">
            <?php echo @$msg;?>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2 style="text-align: center;">
                                Add Property
                                
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form method="post" enctype="multipart/form-data">

                                <div class="row clearfix">

              


                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                       
                                      <div class="dz-message">
                                   
                                    <h3>Click to Image upload.</h3>
                                    
                                </div>
                                <div>
                                    <input class="form-control"  name="file1" type="file" multiple /></br>
                                    <img src="images/property_image/<?php echo $img1;?>" width="200">
                                </div>
                             
                             </div>


                             <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                       
                                      <div class="dz-message">
                                   
                                    <h3>Click to Image upload.</h3>
                                    
                                </div>
                                <div>
                                    <input class="form-control"  name="file2" type="file" multiple /></br>
                                    <img src="images/property_image/<?php echo $img2;?>" width="200">
                                </div>
                             
                             </div>

                             <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                       
                                      <div class="dz-message">
                                   
                                    <h3>Click to Image upload.</h3>
                                    
                                </div>
                                <div>
                                    <input class="form-control"  name="file3" type="file" multiple /></br>
                                    <img src="images/property_image/<?php echo $img3;?>" width="200">
                                </div>
                             
                             </div>


                             <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                       
                                      <div class="dz-message">
                                   
                                    <h3>Click to Image upload.</h3>
                                    
                                </div>
                                <div>
                                    <input class="form-control"  name="file4" type="file" multiple /></br>
                                    <img src="images/property_image/<?php echo $img4;?>" width="200">
                                </div>
                             
                             </div>
                                                                 
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12" style="text-align: center;">

                                                                                                  
                            <input type="submit" name="submit" class="btn btn-primary btn-lg m-l-15 waves-effect" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
            <?php include'include/footer.php';?>
            <!-- Select Plugin Js -->
 
