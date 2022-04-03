<?php
include('header.php');
include_once($_SERVER["DOCUMENT_ROOT"] . '/admin/controller/serviceController.php');
$setService = new serviceController;
$services    = $setService->getService();
 ?>
<div class="content-wrapper">

    <div class="row">
        <div class="col-sm-12 mb-4 mb-xl-0">
        <h4 class="font-weight-bold text-dark">Site All Services here.</h4><br>
        <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <h4 class="card-title text-right">
                <a class="btn btn-outline-behance" href="<?php echo "add-service.php"; ?>">Add New Service</a>
            </h4>
            <div class="table-responsive pt-3">

            <?php 
                if( !empty($services) ){
                    echo '<table class="table table-bordered">';
                        echo "<thead>";
                            echo "<tr>";
                                echo "<th>#Serial</th>";
                                echo "<th>Post Title</th>";
                                echo "<th>Post Content</th>";
                                echo "<th>Image</th>";
                                echo "<th>Action</th>";
                            echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        while($row = $services->fetch_array()){
                            echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['title'] . "</td>";
                                echo "<td>" . $row['content'] . "</td>";
                                echo "<td>" . $row['image'] . "</td>";
                                echo "<td>";
                                    echo '<a href="update.php?id='. $row['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip">Edit</a>';
                                    echo '<a href="delete.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip">Delete</a>';
                                echo "</td>";
                            echo "</tr>";
                        }
                        echo "</tbody>";                            
                    echo "</table>";
                } else{
                    echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                }
            ?>
           
            </div>
        </div>
        </div>
    </div>

</div></div></div>
<?php include('footer.php'); ?>