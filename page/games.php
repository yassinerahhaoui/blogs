<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../fontawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap-rtl.css">
    <link rel="stylesheet" href="../style.css">
    <title>موقع المعرفة</title>
</head>
<body dir="rtl">
<!--this is nav-bar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">المعرفة</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="../index.php"><i class="fas fa-home"></i> الرئيسية<span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="article.php"><i class="far fa-newspaper"></i> مقالات</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="service.php"><i class="fas fa-laptop-code"></i> خدمات</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="store.php"><i class="fas fa-store-alt"></i> متجر</a>
            </li>
            <li class="nav-item active">
				<a class="nav-link" href="games.php"><i class="fas fa-gamepad"></i> ألعاب</a>
			</li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php"><i class="fas fa-headset"></i> تواصل معنا</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="بحث" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">بحث</button>
        </form>
    </div>
</nav>
<!--this is End-nav-bar -->

<div class="container-fluid">
		<div class="row">
				<div class="col-md-12 col-lg-9">
    				<div class="card mt-5">
                        <div class="card-header bg-dark text-center text-light">
                            
                        </div>
                        <div class="card-body">
                            
                        </div>
                    </div>
				</div> 
				<!--start aside-bar-->
				<?php require "aside.inc.php";?>
				<!--end aside-bar-->
		</div>
</div>





<!--Start Footer-->
<?php require "footer.inc.php"; ?>

<!--End Footer-->
<script src="../jquery/jquery.js"></script>
<script src="../popper/popper.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script>
    
</script>
</body>
</html>