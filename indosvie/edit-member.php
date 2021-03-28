<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
if (isset($_REQUEST['nama'])){
    $catid=intval($_GET['cid']);
        $id = stripslashes($_REQUEST['id']);
        $id = mysqli_real_escape_string($con,$id);
        $nama = stripslashes($_REQUEST['nama']);
        $nama = mysqli_real_escape_string($con,$nama);
        $divisi = stripslashes($_REQUEST['divisi']);
        $divisi = mysqli_real_escape_string($con,$divisi);
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con,$username);
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con,$email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con,$password);
        $status=1;
        $imgfile=$_FILES["image"]["name"];
$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
$allowed_extensions = array(".jpg","jpeg",".png",".gif");

$imgnewfile=md5($imgfile).$extension;
move_uploaded_file($_FILES["image"]["tmp_name"],"memberimages/".$imgnewfile);

        
        $query = "UPDATE tblmember SET MemberName='$nama',MemberDivision='$divisi',MemberUsername='$username',MemberEmailId='$email',MemberPasword='".md5($password)."',Image='$imgnewfile' where id='$catid'";
        $result = mysqli_query($con,$query);
if($result)
{
$msg="user created ";
}
else{
$error="Something went wrong . Please try again.";    
} 
}


?>


<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Newsportal | Add Category</title>

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

<!-- Top Bar Start -->
 <?php include('includes/topheader.php');?>
<!-- Top Bar End -->


<!-- ========== Left Sidebar Start ========== -->
           <?php include('includes/leftsidebar.php');?>
 <!-- Left Sidebar End -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Edit Member</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Manage Member </a>
                                        </li>
                                        <li class="active">
                                            Edit Member
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><b>Edit Member </b></h4>
                                    <hr />
                        		


<div class="row">
<div class="col-sm-6">  
<!---Success Message--->  
<?php if($msg){ ?>
<div class="alert alert-success" role="alert">
<strong>Well done!</strong> <?php echo htmlentities($msg);?>
</div>
<?php } ?>

<!---Error Message--->
<?php if($error){ ?>
<div class="alert alert-danger" role="alert">
<strong>Oh snap!</strong> <?php echo htmlentities($error);?></div>
<?php } ?>


</div>
</div>

<?php 
$catid=intval($_GET['cid']);
$query=mysqli_query($con,"Select id,MemberName,MemberDivision,MemberEmailId,MemberUsername,Created,Updated from  tblmember where Is_Active=1 and id='$catid'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>



                       <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="p-6">
                                    <div class="">

<form name="addpost" method="post" enctype="multipart/form-data">
    <div class="form-group m-b-20">
        <label>Nama Lengkap</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Lengkap" required>
    </div>

    <div class="form-group m-b-20">
        <label>Divisi</label>
        <select class="form-control" name="divisi" id="divisi"  required>
        <option value="">Pilih Divisi </option>
        <?php
        $ret=mysqli_query($con,"select id,Division from tbldivision where Is_Active=1");
        while($result=mysqli_fetch_array($ret))
        {    
        ?>
        <option value="<?php echo htmlentities($result['id']);?>"><?php echo htmlentities($result['Division']);?></option>
        <?php } ?>
        </select>
    </div>

    <div class="form-group m-b-20">
        <label>Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email" required>
    </div>

    <div class="form-group m-b-20">
        <label>Username</label>
        <input type="text" class="form-control" name="username" placeholder="Username" required />
    </div>

    <div class="form-group m-b-20">
        <label>Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password" required />
    </div>
    <div class="row">
    <div class="col-sm-12">
    <div class="card-box">
    <h4 class="m-b-30 m-t-0 header-title"><b>Foto Profile</b></h4>
    <input type="file" class="form-control" id="image" name="image"  required>
    </div>
    </div>
    </div>
        <button type="submit" name="submit" class="btn btn-success waves-effect waves-light" value="Register">Simpan</button>
        <button type="button" class="btn btn-danger waves-effect waves-light">Discard</button>

 </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->

<?php include('includes/footer.php');?>

            </div>


        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
<?php } ?>