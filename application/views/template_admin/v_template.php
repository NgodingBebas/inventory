<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="<?php echo base_url().'public/pages/';?>img/favicon.png">

  <title>Inventory | PT. Sembada Karya Mandiri</title>



  <link href="<?php echo base_url().'public/pages/';?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url().'public/pages/';?>css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url().'public/pages/';?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url().'public/pages/';?>assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="<?php echo base_url().'public/pages/';?>css/owl.carousel.css" type="text/css">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url().'public/pages/';?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url().'public/pages/';?>css/style-responsive.css" rel="stylesheet" />

  <?php foreach($css_plugin as $css){  ?>
  <link href="<?php echo base_url().$css->SRC;?>" rel="stylesheet" type="text/css" media="screen"/>
  <?php } ?>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" class="">
      <!--header start-->
      <header class="header white-bg">
          <div class="sidebar-toggle-box">
              <div data-original-title="Toggle Navigation" data-placement="right" class="fa fa-bars tooltips"></div>
          </div>
          <!--logo start-->
          <a href="<?php echo base_url().'public/pages/';?>index.html" class="logo" >INVEN<span>TORY</span></a>
          <!--logo end-->
          <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
              <!-- settings start -->
          <!--     <li class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                      <i class="fa fa-tasks"></i>
                      <span class="badge bg-success">6</span>
                  </a>
                  <ul class="dropdown-menu extended tasks-bar">
                      <div class="notify-arrow notify-arrow-green"></div>
                      <li>
                          <p class="green">You have 6 pending tasks</p>
                      </li>
                      <li>
                          <a href="#">
                              <div class="task-info">
                                  <div class="desc">Dashboard v1.3</div>
                                  <div class="percent">40%</div>
                              </div>
                              <div class="progress progress-striped">
                                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                      <span class="sr-only">40% Complete (success)</span>
                                  </div>
                              </div>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <div class="task-info">
                                  <div class="desc">Database Update</div>
                                  <div class="percent">60%</div>
                              </div>
                              <div class="progress progress-striped">
                                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                      <span class="sr-only">60% Complete (warning)</span>
                                  </div>
                              </div>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <div class="task-info">
                                  <div class="desc">Iphone Development</div>
                                  <div class="percent">87%</div>
                              </div>
                              <div class="progress progress-striped">
                                  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
                                      <span class="sr-only">87% Complete</span>
                                  </div>
                              </div>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <div class="task-info">
                                  <div class="desc">Mobile App</div>
                                  <div class="percent">33%</div>
                              </div>
                              <div class="progress progress-striped">
                                  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 33%">
                                      <span class="sr-only">33% Complete (danger)</span>
                                  </div>
                              </div>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <div class="task-info">
                                  <div class="desc">Dashboard v1.3</div>
                                  <div class="percent">45%</div>
                              </div>
                              <div class="progress progress-striped active">
                                  <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                      <span class="sr-only">45% Complete</span>
                                  </div>
                              </div>

                          </a>
                      </li>
                      <li class="external">
                          <a href="#">See All Tasks</a>
                      </li>
                  </ul>
              </li> -->
              <!-- settings end -->
              <!-- inbox dropdown start-->
            <!--   <li id="header_inbox_bar" class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                      <i class="fa fa-envelope-o"></i>
                      <span class="badge bg-important">5</span>
                  </a>
                  <ul class="dropdown-menu extended inbox">
                      <div class="notify-arrow notify-arrow-red"></div>
                      <li>
                          <p class="red">You have 5 new messages</p>
                      </li>
                      <li>
                          <a href="#">
                              <span class="photo"><img alt="avatar" src="<?php echo base_url().'public/pages/';?>img/avatar-mini.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jonathan Smith</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hello, this is an example msg.
                                    </span>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <span class="photo"><img alt="avatar" src="<?php echo base_url().'public/pages/';?>img/avatar-mini2.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jhon Doe</span>
                                    <span class="time">10 mins</span>
                                    </span>
                                    <span class="message">
                                     Hi, Jhon Doe Bhai how are you ?
                                    </span>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <span class="photo"><img alt="avatar" src="<?php echo base_url().'public/pages/';?>img/avatar-mini3.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jason Stathum</span>
                                    <span class="time">3 hrs</span>
                                    </span>
                                    <span class="message">
                                        This is awesome dashboard.
                                    </span>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <span class="photo"><img alt="avatar" src="<?php echo base_url().'public/pages/';?>img/avatar-mini4.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Jondi Rose</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hello, this is metrolab
                                    </span>
                          </a>
                      </li>
                      <li>
                          <a href="#">See all messages</a>
                      </li>
                  </ul>
              </li> -->
              <!-- inbox dropdown end -->
              <!-- notification dropdown start-->
            <!--   <li id="header_notification_bar" class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                      <i class="fa fa-bell-o"></i>
                      <span class="badge bg-warning">7</span>
                  </a>
                  <ul class="dropdown-menu extended notification">
                      <div class="notify-arrow notify-arrow-yellow"></div>
                      <li>
                          <p class="yellow">You have 7 new notifications</p>
                      </li>
                      <li>
                          <a href="#">
                              <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                              Server #3 overloaded.
                              <span class="small italic">34 mins</span>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <span class="label label-warning"><i class="fa fa-bell"></i></span>
                              Server #10 not respoding.
                              <span class="small italic">1 Hours</span>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                              Database overloaded 24%.
                              <span class="small italic">4 hrs</span>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <span class="label label-success"><i class="fa fa-plus"></i></span>
                              New user registered.
                              <span class="small italic">Just now</span>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <span class="label label-info"><i class="fa fa-bullhorn"></i></span>
                              Application error.
                              <span class="small italic">10 mins</span>
                          </a>
                      </li>
                      <li>
                          <a href="#">See all notifications</a>
                      </li>
                  </ul>
              </li> -->
              <!-- notification dropdown end -->
          </ul>
          </div>
          <div class="top-nav ">
              <ul class="nav pull-right top-menu">
                  <li>
                      <input type="text" class="form-control search" placeholder="Search">
                  </li>
                  <!-- user login dropdown start-->
                  <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                          <img alt="" src="<?php echo base_url().'public/pages/';?>img/avatar1_small.jpg">
                          <span class="username"><?php echo $this->session->userdata('nama'); ?></span>
                          <b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu extended logout">
                          <div class="log-arrow-up"></div>
                          <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                          <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                          <li><a href="#"><i class="fa fa-bell-o"></i> Notification</a></li>
                          <li><a href="<?php echo base_url().'Administrator/Login/logout';?>"><i class="fa fa-key"></i> Log Out</a></li>
                      </ul>
                  </li>
                  <!-- user login dropdown end -->
              </ul>
          </div>
      </header>
      <!--header end-->
      <!--sidebar start-->


      <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="MessageBox" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
             <div class="modal-header">
                <!-- <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button> -->
                <h4 class="modal-title"></h4>
            </div>
             <div class="modal-body">
              </div>
              <div class="modal-footer">
              
            </div>                                                         
                                       
          </div>
      </div>
    </div>

      

      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a href="<?php echo base_url().'administrator/Dashboard';?>">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="<?php echo base_url().'public/pages/';?>javascript:;">
                          <i class="fa fa-laptop"></i>
                          <span>Master Data</span>
                      </a>
                      <ul class="sub">
                         
                  <li><a href="<?php echo base_url().'administrator/Data_Aset';?>"><span>Aset</span></a>
                  </li>

                  <li><a href="<?php echo base_url().'administrator/data_aset1';?>"><span>Jumlah Aset</span></a>
                  </li>
                         
                  <li><a href="<?php echo base_url().'administrator/Data_User';?>">User</a></li></ul>
                  </li>

                  <li class="sub-menu">
                      <a href="<?php echo base_url();?>Administrator/Data_Aset_Pinjam">
                          <i class="fa   fa-external-link"></i>
                          <span>Pinjam Aset</span>
                      </a>
                  </li>

                    <li class="sub-menu">
                      <a href="<?php echo base_url();?>Administrator/Data_Aset_Kembali">
                          <i class="fa  fa-sign-in"></i>
                          <span>Pengembalian Aset</span>
                      </a>
                  </li>


                  <li class="sub-menu">
                      <a href="<?php echo base_url();?>Administrator/Data_Aset_Keluar">
                          <i class="fa  fa-plane"></i>
                          <span>Aset Keluar</span>
                      </a>
                  </li>


                 <li class="sub-menu">
                      <a href="<?php echo base_url();?>Administrator/History">
                          <i class="fa   fa-clock-o"></i>
                          <span>Riwayat</span>
                      </a>
                  </li>


                 <!--  <li class="sub-menu">
                      <a href="<?php echo base_url().'public/pages/';?>javascript:;">
                          <i class="fa fa-cogs"></i>
                          <span>Components</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url().'public/pages/';?>grids.html">Grids</a></li>
                          <li><a  href="<?php echo base_url().'public/pages/';?>calendar.html">Calendar</a></li>
                          <li><a  href="<?php echo base_url().'public/pages/';?>gallery.html">Gallery</a></li>
                          <li><a  href="<?php echo base_url().'public/pages/';?>todo_list.html">Todo List</a></li>
                          <li><a  href="<?php echo base_url().'public/pages/';?>draggable_portlet.html">Draggable Portlet</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="<?php echo base_url().'public/pages/';?>javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span>Form Stuff</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url().'public/pages/';?>form_component.html">Form Components</a></li>
                          <li><a  href="<?php echo base_url().'public/pages/';?>advanced_form_components.html">Advanced Components</a></li>
                          <li><a  href="<?php echo base_url().'public/pages/';?>form_wizard.html">Form Wizard</a></li>
                          <li><a  href="<?php echo base_url().'public/pages/';?>form_validation.html">Form Validation</a></li>
                          <li><a  href="<?php echo base_url().'public/pages/';?>dropzone.html">Dropzone File Upload</a></li>
                          <li><a  href="<?php echo base_url().'public/pages/';?>inline_editor.html">Inline Editor</a></li>
                          <li><a  href="<?php echo base_url().'public/pages/';?>image_cropping.html">Image Cropping</a></li>
                          <li><a  href="<?php echo base_url().'public/pages/';?>file_upload.html">Multiple File Upload</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="<?php echo base_url().'public/pages/';?>javascript:;">
                          <i class="fa fa-th"></i>
                          <span>Data Tables</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url().'public/pages/';?>basic_table.html">Basic Table</a></li>
                          <li><a  href="<?php echo base_url().'public/pages/';?>responsive_table.html">Responsive Table</a></li>
                          <li><a  href="<?php echo base_url().'public/pages/';?>dynamic_table.html">Dynamic Table</a></li>
                          <li><a  href="<?php echo base_url().'public/pages/';?>advanced_table.html">Advanced Table</a></li>
                          <li><a  href="<?php echo base_url().'public/pages/';?>editable_table.html">Editable Table</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="<?php echo base_url().'public/pages/';?>javascript:;" >
                          <i class=" fa fa-envelope"></i>
                          <span>Mail</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url().'public/pages/';?>inbox.html">Inbox</a></li>
                          <li><a  href="<?php echo base_url().'public/pages/';?>inbox_details.html">Inbox Details</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="<?php echo base_url().'public/pages/';?>javascript:;">
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Charts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url().'public/pages/';?>morris.html">Morris</a></li>
                          <li><a  href="<?php echo base_url().'public/pages/';?>chartjs.html">Chartjs</a></li>
                          <li><a  href="<?php echo base_url().'public/pages/';?>flot_chart.html">Flot Charts</a></li>
                          <li><a  href="<?php echo base_url().'public/pages/';?>xchart.html">xChart</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="<?php echo base_url().'public/pages/';?>javascript:;">
                          <i class="fa fa-shopping-cart"></i>
                          <span>Shop</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url().'public/pages/';?>product_list.html">List View</a></li>
                          <li><a  href="<?php echo base_url().'public/pages/';?>product_details.html">Details View</a></li>
                      </ul>
                  </li>
                  <li>
                      <a href="<?php echo base_url().'public/pages/';?>google_maps.html" >
                          <i class="fa fa-map-marker"></i>
                          <span>Google Maps </span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="<?php echo base_url().'public/pages/';?>javascript:;">
                          <i class="fa fa-comments-o"></i>
                          <span>Chat Room</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url().'public/pages/';?>lobby.html">Lobby</a></li>
                          <li><a  href="<?php echo base_url().'public/pages/';?>chat_room.html"> Chat Room</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="<?php echo base_url().'public/pages/';?>javascript:;" class="active" >
                          <i class="fa fa-glass"></i>
                          <span>Extra</span>
                      </a>
                      <ul class="sub">
                          <li class="active"><a  href="<?php echo base_url().'public/pages/';?>blank.html">Blank Page</a></li>
                          <li><a  href="<?php echo base_url().'public/pages/';?>lock_screen.html">Lock Screen</a></li>
                          <li><a  href="<?php echo base_url().'public/pages/';?>profile.html">Profile</a></li>
                          <li><a  href="<?php echo base_url().'public/pages/';?>invoice.html">Invoice</a></li>
                          <li><a  href="<?php echo base_url().'public/pages/';?>search_result.html">Search Result</a></li>
                          <li><a  href="<?php echo base_url().'public/pages/';?>pricing_table.html">Pricing Table</a></li>
                          <li><a  href="<?php echo base_url().'public/pages/';?>faq.html">FAQ</a></li>
                          <li><a  href="<?php echo base_url().'public/pages/';?>fb_wall.html">FB Wall</a></li>
                          <li><a  href="<?php echo base_url().'public/pages/';?>404.html">404 Error</a></li>
                          <li><a  href="<?php echo base_url().'public/pages/';?>500.html">500 Error</a></li>
                      </ul>
                  </li>
                  <li>
                      <a  href="<?php echo base_url().'public/pages/';?>login.html">
                          <i class="fa fa-user"></i>
                          <span>Login Page</span>
                      </a>
                  </li>
 -->
                  <!--multi level menu start-->
                 <!--  <li class="sub-menu">
                      <a href="<?php echo base_url().'public/pages/';?>javascript:;" >
                          <i class="fa fa-sitemap"></i>
                          <span>Multi level Menu</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url().'public/pages/';?>javascript:;">Menu Item 1</a></li>
                          <li class="sub-menu">
                              <a  href="<?php echo base_url().'public/pages/';?>boxed_page.html">Menu Item 2</a>
                              <ul class="sub">
                                  <li><a  href="<?php echo base_url().'public/pages/';?>javascript:;">Menu Item 2.1</a></li>
                                  <li class="sub-menu">
                                      <a  href="<?php echo base_url().'public/pages/';?>javascript:;">Menu Item 3</a>
                                      <ul class="sub">
                                          <li><a  href="<?php echo base_url().'public/pages/';?>javascript:;">Menu Item 3.1</a></li>
                                          <li><a  href="<?php echo base_url().'public/pages/';?>javascript:;">Menu Item 3.2</a></li>
                                      </ul>
                                  </li>
                              </ul>
                          </li>
                      </ul>
                  </li> -->
                  <!--multi level menu end-->

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
              <!-- page start-->
             <?php $this->load->view($content); ?>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2013 &copy; PT Sembada Karya Mandiri
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
  </section>

    <!-- DB JS -->
      <?php foreach($js_plugin as $js){  ?>
      <script  type="text/javascript" src="<?php echo base_url().$js->SRC;?>"></script> 
      <?php } ?>

    <!-- JS Tabel aset-->
     <?php if($this->uri->segment(2) == 'Data_Aset'){?>
       <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#aset').dataTable( {
                  "aaSorting": [[ 0, "desc" ]]
              } );
          } );
      </script>
         <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#jenis').dataTable( {
                  "aaSorting": [[ 0, "desc" ]]
              } );
          } );

      </script>
     <?php } ?>

     <!-- JS Tabel aset-->
     <?php if($this->uri->segment(2) == 'data_aset1'){?>
       <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#aset').dataTable( {
                  "aaSorting": [[ 0, "desc" ]]
              } );
          } );
      </script>
         <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#jenis').dataTable( {
                  "aaSorting": [[ 0, "desc" ]]
              } );
          } );

      </script>
     <?php } ?>

    <!-- JS Tabel user-->
    <?php if($this->uri->segment(2) == 'Data_User'){?>
       <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#user_table').dataTable( {
                  "aaSorting": [[ 0, "desc" ]]
              } );
          } );
        </script>
    <?php } ?>

    <?php if($this->uri->segment(2) == 'Data_Aset_Masuk'){?>
      <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#jenis').dataTable( {
                  "aaSorting": [[ 0, "desc" ]]
              } );
          } );

      </script>
 <?php } ?>

<?php if($this->uri->segment(2) == 'Data_Aset_Pinjam'){?>
      <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#Data_Aset_Pinjam').dataTable( {
                  "aaSorting": [[ 0, "desc" ]]
              } );
          } );

      </script>
 <?php } ?>


<?php if($this->uri->segment(2) == 'Data_Aset_Kembali'){?>
    <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#Data_Aset_Kembali').dataTable( {
                  "aaSorting": [[ 0, "desc" ]]
              } );
          } );

      </script>
<?php } ?>

<?php if($this->uri->segment(3) == 'Edit_Aset_Kembali'){?>
    <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#Edit_Aset_Kembali').dataTable( {
                  "aaSorting": [[ 0, "desc" ]]
              } );
          } );

      </script>
<?php } ?>


     <?php if($this->uri->segment(2) == 'Data_Aset_Keluar'){?>

      <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#aset_keluar').dataTable( {
                  "aaSorting": [[ 4, "desc" ]]
              } );
          } );
      </script>
      
       <script type="text/javascript">
      function fnFormatDetails ( oTable, nTr )
      {
          <?php
            foreach ($query3 as $row){ 
          ?>
          var aData = oTable.fnGetData( nTr );
          var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
          sOut += '<tr><td>Kode Transakasi </td><td>: '+aData[1]+'</td></tr>';
          sOut += '<tr><td>Tanggal </td><td>: '+aData[2]+'</tr>';
          sOut += '<tr><td>Keterangan </td><td>: '+aData[3]+'</td></tr>';
          sOut += '</table>';

          return sOut;
          <?php } ?>
      }
     

      $(document).ready(function() {
          /*
           * Insert a 'details' column to the table
           */
          var nCloneTh = document.createElement( 'th' );
          var nCloneTd = document.createElement( 'td' );
          nCloneTd.innerHTML = '<img src="<?php echo base_url().'public/pages/';?>assets/advanced-datatable/examples/examples_support/details_open.png">';
          nCloneTd.className = "center";

          $('#riwayat_aset_keluar thead tr').each( function () {
              this.insertBefore( nCloneTh, this.childNodes[0] );
          } );

          $('#riwayat_aset_keluar tbody tr').each( function () {
              this.insertBefore(  nCloneTd.cloneNode( true ), this.childNodes[0] );
          } );

          /*
           * Initialse DataTables, with no sorting on the 'details' column
           */
          var oTable = $('#riwayat_aset_keluar').dataTable( {
              "aoColumnDefs": [
                  { "bSortable": false, "aTargets": [ 0 ],
                    "bVisible": false, "aTargets": [1, 3]
                     }
                  
              ],
              "aaSorting": [[1, 'desc']]
          });

          /* Add event listener for opening and closing details
           * Note that the indicator for showing which row is open is not controlled by DataTables,
           * rather it is done here
           */
          $('#riwayat_aset_keluar tbody td img').live('click', function () {
              var nTr = $(this).parents('tr')[0];
              if ( oTable.fnIsOpen(nTr) )
              {
                  /* This row is already open - close it */
                  this.src = "<?php echo base_url().'public/pages/';?>assets/advanced-datatable/examples/examples_support/details_open.png";
                  oTable.fnClose( nTr );
              }
              else
              {
                  /* Open this row */
                  this.src = "<?php echo base_url().'public/pages/';?>assets/advanced-datatable/examples/examples_support/details_close.png";
                  oTable.fnOpen( nTr, fnFormatDetails(oTable, nTr), 'details' );
              }
          } );
      } );
      </script>
    <?php } ?>

    <?php if($this->uri->segment(2) == 'Data_Aset_Masuk'){?>
      <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#example').dataTable( {
                  "aaSorting": [[ 4, "desc" ]]
              } );
          } );
      </script>
 <?php } ?>

 <?php if($this->uri->segment(2) == 'Dashboard'){?>
      <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
          $("#owl-demo").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true,
        autoPlay:true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

      </script>
 <?php } ?>

































 <?php if($this->uri->segment(2) == 'History'){?>

     
  <!-- Aset Masuk -->    
   <script type="text/javascript">
      function masuk ( oTable, nTr )
      {
        
          var aData = oTable.fnGetData( nTr );
          var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
          sOut += '<tr><td>Kode Transakasi </td><td>: '+aData[1]+'</td></tr>';
          sOut += '<tr><td>Tanggal </td><td>: '+aData[2]+'</tr>';
          sOut += '<tr><td>Tipe </td><td>: '+aData[6]+'</td></tr>';
          sOut += '</table>';

          return sOut;
    
      }
     

      $(document).ready(function() {
          /*
           * Insert a 'details' column to the table
           */
          var nCloneTh = document.createElement( 'th' );
          var nCloneTd = document.createElement( 'td' );
          nCloneTd.innerHTML = '<img src="<?php echo base_url().'public/pages/';?>assets/advanced-datatable/examples/examples_support/details_open.png">';
          nCloneTd.className = "center";

          $('#AsetMasuk thead tr').each( function () {
              this.insertBefore( nCloneTh, this.childNodes[0] );
          } );

          $('#AsetMasuk tbody tr').each( function () {
              this.insertBefore(  nCloneTd.cloneNode( true ), this.childNodes[0] );
          } );

          /*
           * Initialse DataTables, with no sorting on the 'details' column
           */
          var oTable = $('#AsetMasuk').dataTable( {
              "aoColumnDefs": [
                  { "bSortable": false, "aTargets": [ 0 ],
                    "bVisible": false, "aTargets": [1, 6]
                     }
                  
              ],
              "aaSorting": [[1, 'desc']]
          });

          /* Add event listener for opening and closing details
           * Note that the indicator for showing which row is open is not controlled by DataTables,
           * rather it is done here
           */
          $('#AsetMasuk tbody td img').live('click', function () {
              var nTr = $(this).parents('tr')[0];
              if ( oTable.fnIsOpen(nTr) )
              {
                  /* This row is already open - close it */
                  this.src = "<?php echo base_url().'public/pages/';?>assets/advanced-datatable/examples/examples_support/details_open.png";
                  oTable.fnClose( nTr );
              }
              else
              {
                  /* Open this row */
                  this.src = "<?php echo base_url().'public/pages/';?>assets/advanced-datatable/examples/examples_support/details_close.png";
                  oTable.fnOpen( nTr, masuk(oTable, nTr), 'details' );
              }
          } );
      } );
      </script>

     
  <!-- Aset Kembali -->    
   <script type="text/javascript">
      function kembali ( oTable, nTr )
      {
        
          var aData = oTable.fnGetData( nTr );
          var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
          sOut += '<tr><td>Kode Transakasi </td><td>: '+aData[1]+'</td></tr>';
          sOut += '<tr><td>Tipe </td><td>: '+aData[6]+'</tr>';
          // sOut += '<tr><td>Peminjam </td><td>: '+aData[6]+'</td></tr>';
          sOut += '</table>';

          return sOut;
    
      }
     

      $(document).ready(function() {
          /*
           * Insert a 'details' column to the table
           */
          var nCloneTh = document.createElement( 'th' );
          var nCloneTd = document.createElement( 'td' );
          nCloneTd.innerHTML = '<img src="<?php echo base_url().'public/pages/';?>assets/advanced-datatable/examples/examples_support/details_open.png">';
          nCloneTd.className = "center";

          $('#AsetKembali thead tr').each( function () {
              this.insertBefore( nCloneTh, this.childNodes[0] );
          } );

          $('#AsetKembali tbody tr').each( function () {
              this.insertBefore(  nCloneTd.cloneNode( true ), this.childNodes[0] );
          } );

          /*
           * Initialse DataTables, with no sorting on the 'details' column
           */
          var oTable = $('#AsetKembali').dataTable( {
              "aoColumnDefs": [
                  { "bSortable": false, "aTargets": [ 0 ],
                    "bVisible": false, "aTargets": [1, 6]
                     }
                  
              ],
              "aaSorting": [[1, 'desc']]
          });

          /* Add event listener for opening and closing details
           * Note that the indicator for showing which row is open is not controlled by DataTables,
           * rather it is done here
           */
          $('#AsetKembali tbody td img').live('click', function () {
              var nTr = $(this).parents('tr')[0];
              if ( oTable.fnIsOpen(nTr) )
              {
                  /* This row is already open - close it */
                  this.src = "<?php echo base_url().'public/pages/';?>assets/advanced-datatable/examples/examples_support/details_open.png";
                  oTable.fnClose( nTr );
              }
              else
              {
                  /* Open this row */
                  this.src = "<?php echo base_url().'public/pages/';?>assets/advanced-datatable/examples/examples_support/details_close.png";
                  oTable.fnOpen( nTr, kembali(oTable, nTr), 'details' );
              }
          } );
      } );
      </script>

<!-- Aset Keluar -->    
   <script type="text/javascript">
      function Keluar ( oTable, nTr )
      {
        
          var aData = oTable.fnGetData( nTr );
          var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
          sOut += '<tr><td>Kode Transakasi </td><td>: '+aData[1]+'</td></tr>';
          sOut += '<tr><td>Tanggal </td><td>: '+aData[2]+'</tr>';
          sOut += '<tr><td>Keterangan </td><td>: '+aData[6]+'</td></tr>';
          sOut += '</table>';

          return sOut;
    
      }
     

      $(document).ready(function() {
          /*
           * Insert a 'details' column to the table
           */
          var nCloneTh = document.createElement( 'th' );
          var nCloneTd = document.createElement( 'td' );
          nCloneTd.innerHTML = '<img src="<?php echo base_url().'public/pages/';?>assets/advanced-datatable/examples/examples_support/details_open.png">';
          nCloneTd.className = "center";

          $('#AsetKeluar thead tr').each( function () {
              this.insertBefore( nCloneTh, this.childNodes[0] );
          } );

          $('#AsetKeluar tbody tr').each( function () {
              this.insertBefore(  nCloneTd.cloneNode( true ), this.childNodes[0] );
          } );

          /*
           * Initialse DataTables, with no sorting on the 'details' column
           */
          var oTable = $('#AsetKeluar').dataTable( {
              "aoColumnDefs": [
                  { "bSortable": false, "aTargets": [ 0 ],
                    "bVisible": false, "aTargets": [1, 3]
                     }
                  
              ],
              "aaSorting": [[1, 'desc']]
          });

          /* Add event listener for opening and closing details
           * Note that the indicator for showing which row is open is not controlled by DataTables,
           * rather it is done here
           */
          $('#AsetKeluar tbody td img').live('click', function () {
              var nTr = $(this).parents('tr')[0];
              if ( oTable.fnIsOpen(nTr) )
              {
                  /* This row is already open - close it */
                  this.src = "<?php echo base_url().'public/pages/';?>assets/advanced-datatable/examples/examples_support/details_open.png";
                  oTable.fnClose( nTr );
              }
              else
              {
                  /* Open this row */
                  this.src = "<?php echo base_url().'public/pages/';?>assets/advanced-datatable/examples/examples_support/details_close.png";
                  oTable.fnOpen( nTr, Keluar(oTable, nTr), 'details' );
              }
          } );
      } );
      </script>



<!-- Aset Pinjam -->    
   <script type="text/javascript">
       function  pinjam ( oTable, nTr )
      {
        
          var aData = oTable.fnGetData( nTr );
          var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
          sOut += '<tr><td>Tanggal </td><td>: '+aData[2]+'</td></tr>';
          sOut += '<tr><td>Peminjam </td><td>: '+aData[6]+'</tr>';
          sOut += '<tr><td>Keterangan </td><td>: '+aData[7]+'</td></tr>';
          sOut += '</table>';

          return sOut;
    
      }
     

      $(document).ready(function() {
          /*
           * Insert a 'details' column to the table
           */
          var nCloneTh = document.createElement( 'th' );
          var nCloneTd = document.createElement( 'td' );
          nCloneTd.innerHTML = '<img src="<?php echo base_url().'public/pages/';?>assets/advanced-datatable/examples/examples_support/details_open.png">';
          nCloneTd.className = "center";

          $('#AsetPinjam thead tr').each( function () {
              this.insertBefore( nCloneTh, this.childNodes[0] );
          } );

          $('#AsetPinjam tbody tr').each( function () {
              this.insertBefore(  nCloneTd.cloneNode( true ), this.childNodes[0] );
          } );

          /*
           * Initialse DataTables, with no sorting on the 'details' column
           */
          var oTable = $('#AsetPinjam').dataTable( {
              "aoColumnDefs": [
                  { "bSortable": false, "aTargets": [ 0 ],
                    "bVisible": false, "aTargets": [1, 6, 7]
                     }
                  
              ],
              "aaSorting": [[1, 'desc']]
          });

          /* Add event listener for opening and closing details
           * Note that the indicator for showing which row is open is not controlled by DataTables,
           * rather it is done here
           */
          $('#AsetPinjam tbody td img').live('click', function () {
              var nTr = $(this).parents('tr')[0];
              if ( oTable.fnIsOpen(nTr) )
              {
                  /* This row is already open - close it */
                  this.src = "<?php echo base_url().'public/pages/';?>assets/advanced-datatable/examples/examples_support/details_open.png";
                  oTable.fnClose( nTr );
              }
              else
              {
                  /* Open this row */
                  this.src = "<?php echo base_url().'public/pages/';?>assets/advanced-datatable/examples/examples_support/details_close.png";
                  oTable.fnOpen( nTr, pinjam(oTable, nTr), 'details' );
              }
          } );
      } );
      </script>
    <?php } ?>

                                        

</html>
