<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="fontawesome/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-rtl.css">
	<link rel="stylesheet" href="style.css">
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
			<li class="nav-item active">
				<a class="nav-link" href="index.php"><i class="fas fa-home"></i> الرئيسية<span class="sr-only">(current)</span></a>
			</li>
			
			<li class="nav-item">
				<a class="nav-link" href="page/article.php"><i class="far fa-newspaper"></i> مقالات</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="page/service.php"><i class="fas fa-laptop-code"></i> خدمات</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="page/store.php"><i class="fas fa-store-alt"></i> متجر</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="page/games.php"><i class="fas fa-gamepad"></i> ألعاب</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="page/contact.php"><i class="fas fa-headset"></i> تواصل معنا</a>
			</li>
		</ul>
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="بحث" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">بحث</button>
		</form>
	</div>
</nav>
<!--this is End-nav-bar -->

<!--start Carousel-->
<div class="container mt-5">
	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner carousel-2">
			<div class="carousel-item active">
				<img src="images/cybersecurity.jpg" class="d-block w-100" alt="الأمن السيبراني" title="الأمن السيبراني">
				<div class="carousel-caption d-none d-md-block">
					<a href="page/article/cybersecurity.php" class="text-light">
					<h5 class="flash">أساسيات الأمن السيبراني </h5>
					<p class="flash">لقد جمعنا أساسيات الأمان السيبراني التي تحتاج إلى تعلمها. تابع القراءة لمعرفة المزيد.</p>
					</a>
				</div>
			</div>
			<div class="carousel-item">
				<img src="images/wordpress.jpg" class="d-block w-100" alt="WordPress" title="WordPress">
				<div class="carousel-caption d-none d-md-block">
					<a href="page/article/wordpress.php" class="text-light">
					<h5 class="flash">هل WordPress هو أفضل منصة للقيام بتحسين محركات البحث؟</h5>
					<p class="flash">هل WordPress هو أفضل منصة للقيام بتحسين محركات البحث؟</p>
					</a>
				</div>
			</div>
			<div class="carousel-item">
				<img src="images/cyberattack.jpg" class="d-block w-100" alt="الأمن السيبراني" title="الأمن السيبراني">
				<div class="carousel-caption d-none d-md-block">
					<a href="page/article/cyberattack.php" class="text-light">
					<h5 class="flash">7 نصائح لتحسين الأمن السيبراني للشركات الصغيرة</h5>
					<p class="flash">لماذا تحتاج الشركات الصغيرة إلى الأمن السيبراني؟</p>
					</a>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>
<!--End Carousel-->
<!--start header-->
<div class="container-fluid mt-5 mb-5">
	<div class="row">
		<div class="col-md-4 col-sm-6">
			<div class="container">
				<a href="page/article/glucodown.php" style="font-weight:bolder;">
				<div class="card b mb-4">
					<img class="card-img" src="images/glucodown.jpg" alt="شاي وظيفي" title="شاي وظيفي">
					<div class="card-img-overlay h-100 d-flex flex-column justify-content-end">
						<h3 class="card-title flash">جلوكو داون </h3>
						<p class="card-text flash">شاي وظيفي جديد شائع لدى مرضى السكري</p>
					</div>
				</div>
				</a>
			</div>
		</div>
		<div class="col-md-4 col-sm-6">
			<div class="container">
				<a href="page/article/babor.php" style="font-weight:bolder;">
				<div class="card b mb-4">
					<img class="card-img" src="images/babor.jpg" alt="أمصال الطاقة" title="أمصال الطاقة">
					<div class="card-img-overlay h-100 d-flex flex-column justify-content-end">
						<h3 class="card-title flash">منتجات بابور</h3>
						<p class="card-text flash">محبو منتجات التجميل يحتضنون أمصال الطاقة</p>
					</div>
				</div>
				</a>
			</div>
		</div>
		<div class="col-md-4 col-sm-6">
			<div class="container">
				<a href="page/article/translate.php" style="font-weight:bolder;">
				<div class="card b mb-4">
					<img class="card-img" src="images/1translate.jpg" alt="مزود خدمة اللغة" title="مزود خدمة اللغة">
					<div class="card-img-overlay h-100 d-flex flex-column justify-content-end">
						<h3 class="card-title flash">مزود خدمة اللغة </h3>
						<p class="card-text flash">ما هي أنواع مقدمي خدمة اللغات الموجودة؟</p>
					</div>
				</div>
				</a>
			</div>
		</div>
		<div class="col-md-4 col-sm-6">
			<div class="container">
				<a href="page/article/wordpress.php" style="font-weight:bolder;">
				<div class="card b mb-4">
					<img class="card-img" src="images/1wordpress.jpg" alt="WordPress" title="WordPress">
					<div class="card-img-overlay h-100 d-flex flex-column justify-content-end">
						<h3 class="card-title flash">هل WordPress هو أفضل منصة </h3>
						<p class="card-text flash">تحسين محركات البحث لـ WordPress </p>
					</div>
				</div>
				</a>
			</div>
		</div>
		<div class="col-md-4 col-sm-6">
			<div class="container">
				<a href="page/article/cyberattack.php" style="font-weight:bolder;">
				<div class="card b mb-4">
					<img class="card-img" src="images/1cyberattack.jpg" alt="الأمن السيبراني" title="الأمن السيبراني">
					<div class="card-img-overlay h-100 d-flex flex-column justify-content-end">
						<h3 class="card-title flash">نصائح لتحسين الأمن السيبراني </h3>
						<p class="card-text flash">لماذا تحتاج الشركات الصغيرة إلى الأمن السيبراني؟</p>
					</div>
				</div>
				</a>
			</div>
		</div>
		<div class="col-md-4 col-sm-6">
			<div class="container">
				<a href="page/article/marketing.php" style="font-weight:bolder;">
				<div class="card b mb-4">
					<img class="card-img" src="images/marketing.jpg" alt="تسويق المحتوى" title="تسويق المحتوى">
					<div class="card-img-overlay h-100 d-flex flex-column justify-content-end">
						<h3 class="card-title flash">لماذا تسويق المحتوى مهم لشركات التعلم الإلكتروني</h3>
						<p class="card-text flash">تسويق المحتوى هو استخدام أشكال مختلفة من المحتوى لتوليد العملاء </p>
					</div>
				</div>
				</a>
			</div>
		</div>
	</div>
</div>
<!--End Header-->
<!--Start Article-->
<div class="container-fluid mb-5">
	<div class="col-lg-7 col-md-10">
		<div class="card-group">
				<div class="card d mh">
					<a href="page/article/vrcamera.php">
						<div class="row">
							<img class="card-img-top rounded-lg" src="images/vrcamera.jpg" alt="كاميرا الواقع الافتراضي " title="كاميرا الواقع الافتراضي " style="width:100px">
							<div class="card-body pdr">
								<h5 class="card-title text-dark">كاميرا الواقع الافتراضي </h5>
								<p class="card-text text-dark">كيف يمكن أن تكون أفضل...</p>
							</div>
						</div>
					</a>
				</div>
			<div class="card d mh">
				<a href="page/article/localseo.php">
					<div class="row">
						<img class="card-img-top rounded-lg" src="images/localseo.jpg" alt="محركات البحث" title="محركات البحث" style="width:100px">
						<div class="card-body pdr">
							<h5 class="card-title text-dark">لتحسين محركات البحث </h5>
							<p class="card-text text-dark">SEO المحلي هو عملية  ...</p>
						</div>
					</div>
				</a>
			</div>
		</div>

		<div class="card-group">
			<div class="card d mh">
				<a href="page/article/branding.php">
					<div class="row">
						<img class="card-img-top rounded-lg" src="images/branding.jpg" alt="5 فوائد للعلامة التجارية العالمية " title="5 فوائد للعلامة التجارية العالمية " style="width:100px">
						<div class="card-body pdr">
							<h5 class="card-title text-dark"> العلامة التجارية العالمية </h5>
							<p class="card-text text-dark"> إنشاء علامتك التجارية ...</p>
						</div>
					</div>
				</a>
			</div>
			<div class="card d mh">
				<a href="page/article/affilite.php">
					<div class="row">
						<img class="card-img-top rounded-lg" src="images/affilite.jpg" alt="إنشاء موقع ويب تابع" title="إنشاء موقع ويب تابع" style="width:100px">
						<div class="card-body pdr">
							<h5 class="card-title text-dark">إنشاء موقع ويب تابع</h5>
							<p class="card-text text-dark">مواقع التسويق التابعة لها ...</p>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>
<!--End Article-->
<!--Start Section-->
<div class="container-fluid mt-5 mb-5">
	<div class="row">
		<div class="col-md-4 col-lg-3 col-sm-6">
			<div class="container">
				<a href="page/article/cybersecurity.php" style="font-weight:bolder;">
				<div class="card b mb-4">
					<img class="card-img" src="images/1cybersecurity.jpg" alt="الأمن السيبراني" title="الأمن السيبراني">
					<div class="card-img-overlay h-100 d-flex flex-column justify-content-end">
						<h3 class="card-title flash">أساسيات الأمن السيبراني</h3>
						<p class="card-text flash">أشكال الجرائم الإلكترونية الأكثر شيوعًا </p>
					</div>
				</div>
				</a>
			</div>
		</div>
		<div class="col-md-4 col-lg-3 col-sm-6">
			<div class="container">
				<a href="page/article/protectonline.php" style="font-weight:bolder;">
				<div class="card b mb-4">
					<img class="card-img" src="images/protect-online.jpg" alt="حماية الهوية" title="حماية الهوية">
					<div class="card-img-overlay h-100 d-flex flex-column justify-content-end">
						<h3 class="card-title flash">كيف تحمي هويتك على الإنترنت</h3>
						<p class="card-text flash">بعض النصائح حول كيفية حماية هويتك عبر الإنترنت</p>
					</div>
				</div>
				</a>
			</div>
		</div>
		<div class="col-md-4 col-lg-3 col-sm-6">
			<div class="container">
				<a href="page/article/machinelearning.php" style="font-weight:bolder;">
				<div class="card b mb-4">
					<img class="card-img" src="images/machinelearning.jpg" alt="التعلم الآلي " title="التعلم الآلي ">
					<div class="card-img-overlay h-100 d-flex flex-column justify-content-end">
						<h3 class="card-title flash">كيف يعمل التعلم الآلي؟</h3>
						<p class="card-text flash">موضوع التعلم الآلي هو كل ضجة في مجتمع الذكاء الاصطناعي </p>
					</div>
				</div>
				</a>
			</div>
		</div>
		<div class="col-md-4 col-lg-3 col-sm-6">
			<div class="container">
				<a href="page/article/managecloud.php" style="font-weight:bolder;">
				<div class="card b mb-4">
					<img class="card-img" src="images/managecloud.jpg" alt="التخزين السحابي" title="التخزين السحابي">
					<div class="card-img-overlay h-100 d-flex flex-column justify-content-end">
						<h3 class="card-title flash">أفضل الطرق لإدارة التخزين السحابي</h3>
						<p class="card-text flash">ستتعلم أفضل الطرق لإدارة التخزين السحابي </p>
					</div>
				</div>
				</a>
			</div>
		</div>
		<div class="col-md-4 col-lg-3 col-sm-6">
			<div class="container">
				<a href="page/article/heartline.php" style="font-weight:bolder;">
				<div class="card b mb-4">
					<img class="card-img" src="images/heartline.jpg" alt="Heartline" title="Heartline">
					<div class="card-img-overlay h-100 d-flex flex-column justify-content-end">
						<h3 class="card-title flash">دراسة منزلية في صحة القلب</h3>
						<p class="card-text flash">دراسة Heartline برعاية شركات الأدوية Janssen بالتعاون مع Apple</p>
					</div>
				</div>
				</a>
			</div>
		</div>
		<div class="col-md-4 col-lg-3 col-sm-6">
			<div class="container">
				<a href="page/article/store.php" style="font-weight:bolder;">
				<div class="card b mb-4">
					<img class="card-img" src="images/store.jpg" alt="متجر للتجارة الإلكترونية" title="متجر للتجارة الإلكترونية">
					<div class="card-img-overlay h-100 d-flex flex-column justify-content-end">
						<h3 class="card-title flash">بناء متجر للتجارة الإلكترونية</h3>
						<p class="card-text flash">دليلك لبدء الأعمال التجارية عبر الإنترنت</p>
					</div>
				</div>
				</a>
			</div>
		</div>
		<div class="col-md-4 col-lg-3 col-sm-6">
			<div class="container">
				<a href="page/article/developer.php" style="font-weight:bolder;">
				<div class="card b mb-4">
					<img class="card-img" src="images/developer.jpg" alt="developer" title="developer">
					<div class="card-img-overlay h-100 d-flex flex-column justify-content-end">
						<h3 class="card-title flash">دليل موجز لتطوير البرمجيات الخارجية</h3>
						<p class="card-text flash">ما هو تطوير البرمجيات الخارجية؟</p>
					</div>
				</div>
				</a>
			</div>
		</div>
		<div class="col-md-4 col-lg-3 col-sm-6">
			<div class="container">
				<a href="page/article/marketplace.php" style="font-weight:bolder;">
				<div class="card b mb-4">
					<img class="card-img" src="images/marketplace.jpg" alt="marketplace" title="marketplace">
					<div class="card-img-overlay h-100 d-flex flex-column justify-content-end">
						<h3 class="card-title flash">التصوير الفوتوغرافي الراقي</h3>
						<p class="card-text flash">جودة صور التسويق الرقمي مهمة جدًا</p>
					</div>
				</div>
				</a>
			</div>
		</div>
		<div class="col-md-4 col-lg-3 col-sm-6">
			<div class="container">
				<a href="page/article/media.php" style="font-weight:bolder;">
				<div class="card b mb-4">
					<img class="card-img" src="images/media.jpg" alt="social media" title="social media">
					<div class="card-img-overlay h-100 d-flex flex-column justify-content-end">
						<h3 class="card-title flash">خدمات تطوير تطبيقات الشبكات الاجتماعية </h3>
						<p class="card-text flash">أحدث التقنيات الجيدة لتطبيقات الشبكات الاجتماعية</p>
					</div>
				</div>
				</a>
			</div>
		</div>
		<div class="col-md-4 col-lg-3 col-sm-6">
			<div class="container">
				<a href="page/article/notification.php" style="font-weight:bolder;">
				<div class="card b mb-4">
					<img class="card-img" src="images/notification.jpg" alt="notification" title="notification">
					<div class="card-img-overlay h-100 d-flex flex-column justify-content-end">
						<h3 class="card-title flash">إشعارات الويب ولماذا يجب عليك استخدامها</h3>
						<p class="card-text flash">مزايا إشعارات الويب</p>
					</div>
				</div>
				</a>
			</div>
		</div>
		<div class="col-md-4 col-lg-3 col-sm-6">
			<div class="container">
				<a href="page/article/ecommerce.php" style="font-weight:bolder;">
				<div class="card b mb-4">
					<img class="card-img" src="images/ecommerce.jpg" alt="التجارة الإلكترونية" title="التجارة الإلكترونية">
					<div class="card-img-overlay h-100 d-flex flex-column justify-content-end">
						<h3 class="card-title flash">حلول التجارة الإلكترونية للعالم الرقمي</h3>
						<p class="card-text flash">طرق شراء وبيع العناصر على الويب</p>
					</div>
				</div>
				</a>
			</div>
		</div>
		<div class="col-md-4 col-lg-3 col-sm-6">
			<div class="container">
				<a href="page/article/work.php" style="font-weight:bolder;">
				<div class="card b mb-4">
					<img class="card-img" src="images/work.jpg" alt="العمل عن بعد" title="العمل عن بعد">
					<div class="card-img-overlay h-100 d-flex flex-column justify-content-end">
						<h3 class="card-title flash">كيف يبدو مستقبل العمل بعد COVID 19</h3>
						<p class="card-text flash">التغيير من المكتب التقليدي إلى العمل عن بعد</p>
					</div>
				</div>
				</a>
			</div>
		</div>
	</div>
</div>
<!--End Section-->
<!--Start Footer-->
<footer>
	<div class="jumbotron jumbotron-fluid bg-dark text-center text-light" style="margin-bottom:0;overflow:hidden;">
		<div class="row">
			<div class="col-md-4" >
				<a href="" class="family"><h4>LINK-1</h4></a>
				<ul class="list-unstyled">
					<li><a href="" class="family">link</a></li>
					<li><a href="" class="family">link</a></li>
					<li><a href="" class="family">link</a></li>
					<li><a href="admin/login.php" disabled class="family admin">المسؤول</a></li>
				</ul>
			</div>
			<div class="col-md-4">
				<a href="" class="family"><h4>LINK-1</h4></a>
				<ul class="list-unstyled">
					<li><a href="" class="family">link</a></li>
					<li><a href="" class="family">link</a></li>
					<li><a href="" class="family">link</a></li>
					<li><a href="" class="family">link</a></li>
				</ul>
			</div>
			<div class="col-md-4">
				<a href="" class="text-light family"><h4>LINK-1</h4></a>
				<ul class="list-unstyled">
					<li><a href="" class="family">link</a></li>
					<li><a href="" class="family">link</a></li>
					<li><a href="" class="family">link</a></li>
					<li><a href="" class="family">link</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="card bg-dark ftr">
		<div dir="ltr" class="card-footer text-center text-light family">© Copyright 2020, All Rights Reserved</div>
		</div>
</footer>
<!--End Footer-->
<script src="jquery/jquery.js"></script>
<script src="popper/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>