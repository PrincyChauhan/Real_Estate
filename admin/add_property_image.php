<?php 
include('include/header.php');
extract($_REQUEST);
include'include/config.php';
if(isset($submit))
{

  $file=$_FILES['file']['name'];
  $file1=$_FILES['file1']['name'];
  $file2=$_FILES['file2']['name'];
  $file3=$_FILES['file3']['name'];
  
  $query="insert into images values('','$file','$file1','$file2','$file3','$property_id')";  
  mysqli_query($con,$query);
  move_uploaded_file($_FILES['file']['tmp_name'],"images/property_image/".$_FILES['file']['name']); 
  move_uploaded_file($_FILES['file1']['tmp_name'],"images/property_image/".$_FILES['file1']['name']); 
  move_uploaded_file($_FILES['file2']['tmp_name'],"images/property_image/".$_FILES['file2']['name']); 
  move_uploaded_file($_FILES['file3']['tmp_name'],"images/property_image/".$_FILES['file3']['name']); 

   $msg='<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success!</strong> Image Upload  successfuly.
  </div>';       
}

?>  
    <!-- Header -->
    
    <section>
       
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

                                    <div class="col-lg-12 col-md-3 col-sm-3 col-xs-6">
                                        <select class="form-control show-tick" name="property_id">
                                            <option disabled selected>--Select Room Title--</option>
                                            <?php
                                            $sel=mysqli_query($con,"select * from property");
                                            while($res=mysqli_fetch_array($sel))
                                            {
                                            ?>

                                            <option value="<?php echo $res['id'];?>"><?php echo $res['title'];?></option>  
                                           
                                           <?php  }  ?>

                                        </select>  


                             
                                    </div>


                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                       
                                      <div class="dz-message">
                                   
                                    <h3>Click to Image upload.</h3>
                                    
                                </div>
                                <div>
                                    <input required name="file" type="file" multiple />
                                </div>
                             
                             </div>


                             <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                       
                                      <div class="dz-message">
                                   
                                    <h3>Click to Image upload.</h3>
                                    
                                </div>
                                <div>
                                    <input required name="file1" type="file" multiple />
                                </div>
                             
                             </div>

                             <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                       
                                      <div class="dz-message">
                                   
                                    <h3>Click to Image upload.</h3>
                                    
                                </div>
                                <div>
                                    <input required name="file2" type="file" multiple />
                                </div>
                             
                             </div>


                             <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                       
                                      <div class="dz-message">
                                   
                                    <h3>Click to Image upload.</h3>
                                    
                                </div>
                                <div>
                                    <input required name="file3" type="file" multiple />
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
 
