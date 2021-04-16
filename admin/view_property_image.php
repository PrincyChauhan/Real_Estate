            <?php include('include/header.php');?>
    
    <section>

        <script type="text/javascript">

  function delet(id)
  {
    if(confirm("you want to delete ?"))
    {
      window.location.href='delete_property_image.php?x='+id;
    }
  }

</script>
       
       <!-- Left Sidebar -->
<?php include('include/sidebar.php');?>
        <!-- #END# Left Sidebar -->
        <section class="content">
                    <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <a class="btn btn-info" href="add_property_image.php">Add Property Images</a>
                            <h2 style="text-align: center;">
                             View Property Images
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
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                       <tr>
                                            <th>S.no</th>
                                            <th>Title</th>
                                            <th>Image 1</th>
                                            <th>Image 2</th>
                                            <th>Image 3</th>
                                            <th>Image 4</th> 
                                            <th>Action</th>                                                                                                                            
                                        </tr>
                                    </thead>
                                    <tfoot>


                                        <tr>
                                            <th>S.no</th>
                                            <th>Title</th>
                                            <th>Image 1</th>
                                            <th>Image 2</th>
                                            <th>Image 3</th>
                                            <th>Image 4</th> 
                                            <th>Action</th>  
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $i=1;
include'include/config.php';





$query1=mysqli_query($con,"select * from images");

while($res=mysqli_fetch_array($query1))
{

$image_id=$res['property_id'];
$img1=$res['image1'];
$img2=$res['image2'];
$img3=$res['image3'];
$img4=$res['image4'];  

$query=mysqli_query($con,"select * from property where id='$image_id'");
$res1=mysqli_fetch_array($query);

?>

                                            <tr>
                                            <td><?php echo $i++; ?></td>
                                            <td><?php echo $res1['title'];?></td>
                                            <td><img src="images/property_image/<?php echo $img1;?>" width="120"></td>
                                            <td><img src="images/property_image/<?php echo $img2;?>" width="120"></td>
                                            <td><img src="images/property_image/<?php echo $img3;?>" width="120"></td>
                                            <td><img src="images/property_image/<?php echo $img4;?>" width="120"></td>
                                             <td>
    <!--<a class='btn btn-info' href="update_property_image.php?&id=<?php echo $image_id;?>"><span class="glyphicon glyphicon-pencil"></span></a>-->
    

      <a class='btn btn-danger' onclick="delet(<?php echo $image_id;?>);" ><span class="glyphicon glyphicon-remove" style="color:white;"></span></a>
  
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
            <?php include'include/footer.php';?>


                                