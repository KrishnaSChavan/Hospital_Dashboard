<?php

include('backend/doc/assets/inc/config.php');
include('backend/doc/assets/inc/checklogin.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="app.min.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="icons.min.css">
    <link rel="stylesheet" href="bootstrap.">
    <link rel="stylesheet" href="in.css">
</head>
<?php include("head.php"); ?>

<body>
    <ul class="nav-menu">
        <li class="menu-active"><a href="index.php">Home</a></li>
        <li><a href="backend/doc/index.php">Doctor's Login</a></li>
        <li><a href="backend/admin/index.php">Administrator Login</a></li>
    </ul>
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">

                            <h1 class="tit">Hospital Dashboard</h1> 
                        </div>
                    </div>
                </div>
                <!-- end page title -->


                <div class="row">
                    <!--Start OutPatients-->
                    <div class="col-md-6 col-xl-4">
                        <div class="widget-rounded-circle card-box">
                            <div class="row">
                                <div class="col-6">
                                    <div>
                                        <img src="icons/images.png" style="width:45% ;display:flex ;
                                        left: 10px;
                                        box-sizing:border-box">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <?php
                                        //code for summing up number of out patients 
                                        $result = "SELECT count(*) FROM his_patients  ";
                                        $stmt = $mysqli->prepare($result);
                                        $stmt->execute();
                                        $stmt->bind_result($patient);
                                        $stmt->fetch();
                                        $stmt->close();
                                        ?>
                                        <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $patient; ?></span></h3>
                                        <p class="text-muted mb-1 text-truncate">Patients</p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end widget-rounded-circle-->
                    </div> <!-- end col-->
                    <!--End Out Patients-->


                    <!--Start InPatients-->
                    <div class="col-md-6 col-xl-4">
                        <div class="widget-rounded-circle card-box">
                            <div class="row">
                                <div class="col-6">
                                    <div>
                                        <img src="icons/632339.png" style="width:45% ;display:flex ;
                                        left: 10px;
                                        box-sizing:border-box">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <?php
                                        /* 
                                                     * code for summing up number of assets,
                                                     */
                                                    $result ="SELECT count(*) FROM his_equipments ";
                                                    $stmt = $mysqli->prepare($result);
                                                    $stmt->execute();
                                                    $stmt->bind_result($assets);
                                                    $stmt->fetch();
                                                    $stmt->close();
                                        ?>
                                        <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo 500-$assets; ?></span>/500</h3>
                                        <p class="text-muted mb-1 text-truncate">Bed available  </p>
                                        <p></p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end widget-rounded-circle-->
                    </div>
                    <!--End InPatients-->

                    <!--Start Pharmaceuticals-->
                    <div class="col-md-6 col-xl-4">
                        <div class="widget-rounded-circle card-box">
                            <div class="row">
                                <div class="col-6">
                                    <div>
                                        <img src="icons/download.png" style="width:45% ;display:flex ;
                                        left: 10px;
                                        box-sizing:border-box">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-right">
                                        <?php
                                        /* 
                                                     * code for summing up number of pharmaceuticals,
                                                     */
                                        $result = "SELECT count(*) FROM his_pharmaceuticals ";
                                        $stmt = $mysqli->prepare($result);
                                        $stmt->execute();
                                        $stmt->bind_result($phar);
                                        $stmt->fetch();
                                        $stmt->close();
                                        ?>
                                        <h3 class="text-dark mt-1"><span data-plugin="counterup"><?php echo $phar; ?></span></h3>
                                        <p class="text-muted mb-1 text-truncate">Pharmaceuticals</p>
                                    </div>
                                </div>
                            </div> <!-- end row-->
                        </div> <!-- end widget-rounded-circle-->
                    </div> <!-- end col-->
                    <!--End Pharmaceuticals-->

                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card-box">
                            <h4 class="header-title mb-3">Doctor's</h4>

                            <div class="table-responsive">
                                <table class="table table-borderless table-hover table-centered m-0">

                                    <thead class="thead-light">
                                        <tr>

                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Department</th>

                                        </tr>
                                    </thead>
                                    <?php
                                    $ret = "SELECT * FROM his_docs ORDER BY RAND() LIMIT 10 ";
                                    //sql code to get to ten docs  randomly
                                    $stmt = $mysqli->prepare($ret);
                                    $stmt->execute(); //ok
                                    $res = $stmt->get_result();
                                    $cnt = 1;
                                    while ($row = $res->fetch_object()) {
                                    ?>
                                        <tbody>
                                            <tr>


                                                <td>
                                                    <?php echo $row->doc_fname; ?> <?php echo $row->doc_lname; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->doc_email; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->doc_dept; ?>
                                                </td>

                                            </tr>
                                        </tbody>
                                    <?php } ?>
                                </table>
                            </div>
                            
                        </div>
                    <div class="left-side-menu">
                        <div class="box">
                            <h3>Facilites</h3>
                        <div>
    
                           
                           <tr>
                           <br>
                            <td>Heart</td>
                            <br>
                            <br>
                            <td>Spine</td>
                            <br>
                            <br>
                            <td>Orthopaedics</td>
                            <br>
                            <br>
                            <td>Cancer Care</td>
                            <br>
                            <br>
                            <td>Surgery</td>
                            <br>
                            <br>
                            <td>Gaspronenterology</td>
                            <br>
                            </tr>  
                           
                                    </div>
                                    </div>
                                    
                    </div> <!-- end col -->
                </div>
            </div>



                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->







</body>

</html>