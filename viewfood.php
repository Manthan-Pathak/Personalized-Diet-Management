<?php 

session_start();

if(!isset($_SESSION['aname']))
{
    header("location:login.php");
}


?>


<!DOCTYPE html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/skote/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Oct 2020 05:05:31 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>Dashboard </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="ahome.php" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/sitelogo.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/sitelogo.png" alt="" height="17">
                                </span>
                            </a>

                            <a href="ahome.php" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/sitelogo.php" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/sitelogo.png" alt="" height="19">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="bx bx-search-alt"></span>
                            </div>
                        </form>

                        
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ml-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                aria-labelledby="page-header-search-dropdown">
                    
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        

                        

                        

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               
                                <span class="d-none d-xl-inline-block ml-1"><?php  echo $_SESSION['aname'];   ?></span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a class="dropdown-item text-danger" href="logout.php"><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> Logout</a>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="bx bx-cog bx-spin"></i>
                            </button>
                        </div>
            
                    </div>
                </div>
            </header> <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu">

        <div data-simplebar class="h-100">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu list-unstyled" id="side-menu">
                    <li class="menu-title">Menu</li>

                    <li>
                        <a href="ahome.php" class="waves-effect">
                            <i class="bx bx-home-circle"></i>
                            <span>Dashboards</span>
                        </a>
                    </li>


                    <li class="menu-title">People</li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                              <i class="bx bxs-user-detail"></i>
                            <span>Manage People</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="Viewuser.php">View All Users</a></li>
                            <li><a href="Viewadm.php">view Admin</a></li>
                            <li><a href="addadmin.php">Add Admin</a></li>
                            <li><a href="modadmin.php">Modify Admin</a></li>
                            
                        </ul>
                    </li>


                    <li class="menu-title">Food</li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                             <i class="bx bx-tone"></i>
                            <span>Food items</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="viewfood.php">View All Food Items</a></li>
                            <li><a href="addfood.php">Add Food Item</a></li>
                            <li><a href="modfood.php">Modify Food Item</a></li>
                            
                        </ul>
                    </li>

                  

                    <li class="menu-title">Diet</li>

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-tone"></i>
                            <span>Diet Records</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                           <!--  <li><a href="viewdtype.php">View Diet Types</a></li>
                            <li><a href="adddtype.php">Add Diet Types</a></li>
                            <li><a href="moddtype.php">Modify Diet Types</a></li> -->
                            <li><a href="viewusrdiet.php">View Active User Diet</a></li>
                            <li><a href="bmirecord.php">User's Bmi Record</a></li>
                            <li><a href="caloriesrecord.php">User's Calories record</a></li>
                           
                        </ul>
                    </li>

                    

                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-list-ul"></i>
                            <span>Extra</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="viewfeedback.php">View Feedbacks</a></li>
                        <li><a href="viewcontact.php">View Messages</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <!-- Sidebar -->
        </div>
    </div>
<!-- Left Sidebar End -->
<!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">All Food Items In the System</h4>
                                        <span align="right">
                                            <button type="button" class="btn btn-info" data-target="#report" data-toggle="modal">Report</button>
                                        </span>
                                        <p class="card-title-desc">
                                        </p>
        
                                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                            <thead>
                                            <tr>
                                                <th>Food Id</th>
                                                <th>Food Name</th>
                                                <th>Calories</th>
                                                <th>Protine</th>
                                                <th>Fat</th>
                                                <th>Carbs</th>
                                                <th>Type</th>
                                                <th>Is Vegan?</th>
                                                <th>Diabetic?</th>
                                                <th>Food Catagory</th>

                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                             <?php

                                                include 'dbcon.php';

                                                $squery = "select * from foodrec";
                                                $querysel = mysqli_query($con, $squery);

                                                $num = mysqli_num_rows($querysel);

                                                while ($res = mysqli_fetch_array($querysel)) {

                                                ?>
                                                <tr>
                                                <td><?php echo $res['fid']; ?></td>
                                                <td><?php echo $res['foodname']; ?></td>
                                                <td><?php echo $res['cals']; ?></td>
                                                <td><?php echo $res['prot']; ?></td>
                                                <td><?php echo $res['fat']; ?></td>
                                                <td><?php echo $res['carb']; ?></td>
                                                <td><?php echo $res['foodtype']; ?></td>
                                                <td><?php echo $res['isvegan']; ?></td>
                                                <td><?php echo $res['fordiabetic']; ?></td>
                                                <td><?php echo $res['foodcat']; ?></td>
                                                
                                                </tr>
                                           

                                                <?php  
                                                }
                                                  

                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Skote.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-right d-none d-sm-block">
                                    Design & Develop by Themesbrand
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-right">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />
                        <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css" />
                        <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-5">
                        <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />
                        <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <div class="modal" id="report" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="food_report.php" method="post" target="_blank">
                  <div class="modal-header">
                    <h5 class="modal-title">Generate Report</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                        <label>Report Type</label>
                        <select name="type" id="type" class="form-control">
                            <option value="0">Select Type</option>
                            <option value="1">All</option>
                            <option value="2">Food Type</option>
                            <option value="3">Food Category</option>
                            <option value="4">Diabetic</option>
                        </select>
                    </div>
                    <div id="report_section"></div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Generate</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- Required datatable js -->
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="assets/libs/jszip/jszip.min.js"></script>
        <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
        
        <!-- Responsive examples -->
        <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets/js/pages/datatables.init.js"></script>    

        <script src="assets/js/app.js"></script>

        <script>
            $("#type").on('change', function() {
                let type = $(this).val();

                if (type == 3) {
                    let html ='<div class="form-group">' +
                        '<input type="radio" name="cat" value="breakfast" id="breakfast" checked > <label for="breakfast">breakfast</label>' +
                        '<input type="radio" name="cat" value="lunch" id="lunch" style="margin-left: 20px;"> <label for="lunch">lunch</label>' +
                        '<input type="radio" name="cat" value="snack" id="snacks" style="margin-left: 20px;"> <label for="snacks">snacks</label>' +
                        '<input type="radio" name="cat" value="dinner" id="dinner" style="margin-left: 20px;"> <label for="dinner">dinner</label>' +
                        '</div>';
                    $("#report_section").html(html);
                }else if (type == 2) {
                    let html ='<div class="form-group">' +
                        '<input type="radio" name="food_type" value="veg" id="Veg" checked > <label for="Veg">Veg</label>' +
                        '<input type="radio" name="food_type" value="Non-Veg" id="Non-veg" style="margin-left: 20px;"> <label for="Non-veg">Non-veg</label>' +
                        '<input type="radio" name="food_type" value="Vegan" id="Vegan" style="margin-left: 20px;"> <label for="Vegan">Vegan</label>' +
                        '</div>';
                    $("#report_section").html(html);
                }else if (type == 4) {
                    let html ='<div class="form-group">' +
                        '<input type="radio" name="diabetic" value="yes" id="Yes" checked > <label for="Yes">Yes</label>' +
                        '<input type="radio" name="diabetic" value="no" id="No" style="margin-left: 20px;"> <label for="No">No</label>' +
                        '</div>';
                    $("#report_section").html(html);
                } else{
                    $("#report_section").html("");
                }
            });
        </script>

    </body>

<!-- Mirrored from themesbrand.com/skote/layouts/vertical/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 23 Oct 2020 05:07:28 GMT -->
</html>
