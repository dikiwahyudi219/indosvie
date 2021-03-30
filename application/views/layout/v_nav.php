  <!-- Top Bar Start -->
  <div class="topbar">

<!-- LOGO -->
<div class="topbar-left">
    <a href="index.html" class="logo"><span>NP<span>Admin</span></span><i class="mdi mdi-layers"></i></a>
    <!-- Image logo -->
    <!--<a href="index.html" class="logo">-->
        <!--<span>-->
            <!--<img src="assets/images/logo.png" alt="" height="30">-->
        <!--</span>-->
        <!--<i>-->
            <!--<img src="assets/images/logo_sm.png" alt="" height="28">-->
        <!--</i>-->
    <!--</a>-->
</div>

<!-- Button mobile view to collapse sidebar menu -->
        <div class="topbar">

<!-- LOGO -->
<div class="topbar-left">
    <a href="index.html" class="logo"><span>INDO<span>SVIE</span></span><i class="mdi mdi-layers"></i></a>
    <!-- Image logo -->
    <!--<a href="index.html" class="logo">-->
        <!--<span>-->
            <!--<img src="assets/images/logo.png" alt="" height="30">-->
        <!--</span>-->
        <!--<i>-->
            <!--<img src="assets/images/logo_sm.png" alt="" height="28">-->
        <!--</i>-->
    <!--</a>-->
</div>



<!-- Button mobile view to collapse sidebar menu -->
<div class="navbar navbar-default" role="navigation">
    <div class="container">

        <!-- Navbar-left -->
        <ul class="nav navbar-nav navbar-left">
            <li>
                <button class="button-menu-mobile open-left waves-effect">
                    <i class="mdi mdi-menu"></i>
                </button>
            </li>
     
    
        </ul>

        <!-- Right(Notification) -->


        <ul class="nav navbar-nav navbar-right">


<!--  <li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <span class="glyphicon glyphicon-envelope" style=" font-size:30px; margin-top: 7px;"></span></a>
<ul class="dropdown-menu"></ul> -->

<script>
// $(document).ready(function(){

// function load_unseen_notification(view = '')
// {
//  $.ajax({
//   url:"fetch.php",
//   method:"POST",
//   data:{view:view},
//   dataType:"json",
//   success:function(data)
//   {
//    $('.dropdown-menu').html(data.notification);
//    if(data.unseen_notification > 0)
//    {
//     $('.count').html(data.unseen_notification);
//    }
//   }
//  });
// }

//  load_unseen_notification();

//  $('#comment_form').on('submit', function(event){
//   event.preventDefault();
//   if($('#subject').val() != '' && $('#comment').val() != '')
//   {
//    var form_data = $(this).serialize();
//    $.ajax({
//     url:"insert.php",
//     method:"POST",
//     data:form_data,
//     success:function(data)
//     {
//      $('#comment_form')[0].reset();
//      load_unseen_notification();
//     }
//    });
//   }
//   else
//   {
//    alert("Both Fields are Required");
//   }
//  });

//  $(document).on('click', '.dropdown-toggle', function(){
//   $('.count').html('');
//   load_unseen_notification('yes');
//  });

//  setInterval(function(){ 
//   load_unseen_notification();; 
//  }, 5000);

// });
</script>

          


            <li class="dropdown user-box">



                <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                    <img src="<?= base_url()?>codeigniter/indosvie/assets/images/users/users.png" alt="user-img" class="img-circle user-img">
                </a>


                <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                    <li>
                        <h5>Hi, Admin</h5>
                    </li>
              
           
                    <li><a href="logout.php"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                </ul>
            </li>
        </li>


        </ul> <!-- end navbar-right -->

    </div><!-- end container -->
</div><!-- end navbar -->
</div>

</div>
<!-- Top Bar End -->


<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
<div class="sidebar-inner slimscrollleft">

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <ul>
            <li class="menu-title">Navigation</li>

            <li class="has_sub">
                <a href="<?= base_url() ?>" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span> </a>
         
            </li>

            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="glyphicon glyphicon-film"></i> <span> Manage Movie </span> <span class="menu-arrow"></span></a>
                <ul class="list-unstyled">
                    <li><a href="<?= base_url('manage_movie/add') ?>">Add Movie</a></li>
                    <li><a href="<?= base_url('manage_movie') ?>">Manage Movie</a></li>
                </ul>
            </li>

<li class="has_sub">

            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account"></i> <span> Profile </span> <span class="menu-arrow"></span></a>
                <ul class="list-unstyled">
                    <li><a href="add-category.php">Profile</a></li>
                    <li><a href="manage-categories.php">Manage Division</a></li>
                </ul>
            </li>

<li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span>Category </span> <span class="menu-arrow"></span></a>
                <ul class="list-unstyled">
                    <li><a href="<?= base_url('category/add') ?>">Add Category</a></li>
                    <li><a href="<?= base_url('category') ?>">Manage Category</a></li>
                </ul>
            </li>    
            <li class="has_sub">
                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-book-multiple-variant"></i> <span> Pages </span> <span class="menu-arrow"></span></a>
                <ul class="list-unstyled">
                    <li><a href="aboutus.php">About us</a></li>
                    <li><a href="contactus.php">Contact us</a></li>
                </ul>
            </li>
    </div>
    <!-- Sidebar -->
    <div class="clearfix"></div>

    <div class="help-box">
        <h5 class="text-muted m-t-0">For Help ?</h5>
        <p class=""><span class="text-custom">Email:</span> <br/>indosvie@indv.com</p>
    </div>

</div>
<!-- Sidebar -left -->

</div>            <!-- Left Sidebar End -->



<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
<!-- Start content -->
<div class="content">
    <div class="container">