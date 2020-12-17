<!doctype html>
<html lang="en">
<head>
	<title>Sidebar 04</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="layouts/css/bootstrap.min.css">
    <link rel="stylesheet" href="layouts/css/all.min.css">
	<link rel="stylesheet" href="layouts/css/style.css">
	<link rel="stylesheet" href="layouts/css/index.css">
</head>
<body>
	<div class="wrapper d-flex align-items-stretch">
		<nav id="sidebar" class="order-last text-right" >
			<div class="">
				<img src="img/img.png">
				<h2 class="text-center"><a href="index.html" class="logo">اسم الكورس</a></h2>
				<ul class="list-unstyled components mb-5">
					<li class="active 1">
						<button value="1"> فيديو1 <span class="fas fa-play-circle mr-3"></span></button>
					</li>
					<li class="2">
						<button value="2"> امتحان1 <span class="fas fa-question-circle mr-3"></span></button>
					</li>
					<li class="3">
						<button value="3"> رابط شرح <span class="fas fa-file-pdf mr-3"></span></button>
					</li>
				</ul>
			</div>
		</nav>
		<!-- Page Content  -->
		<div id="content">
			<section class="header">
				<nav class="navbar navbar-expand-lg navbar-light">
					<button class="btn main my-2 my-sm-0" type="submit" data-toggle="modal" data-target="#Quetes">مقتبسات</button>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav" style="margin: auto;margin-bottom: 0;">
							<li class="nav-item">
								<a class="nav-link" href="#">اخر الانشطة</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									الاعوام الدراسية
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="#">Action</a>
									<a class="dropdown-item" href="#">Another action</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#">Something else here</a>
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">الكورسات</a>
							</li>
							<li class="nav-item active">
								<a class="nav-link" href="#">الرئيسية <span class="sr-only">(current)</span></a>
							</li>
						</ul>
					</div>
					<a class="navbar-brand" href="#"><img src="img/logo.png" alt="logo" width="60"></a>
					<button id="sidebarCollapse"><i class="fa fa-bars"></i></button>
				</nav>
			</section>
			<section class="section7">
				<div class="container content">
					<div class="video 1 ">
						<div class="card text-right">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/qgdO2dVqP2E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>							<div class="card-body">
							<h2>اسم الدرس</h2>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							</div>
						</div>
					</div>
					<div class="exam 2 hidden_val">
						<div class="card text-right">
							<img src="img/exam.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h2>اسم الامتحان</h2>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="#" class="btn brown">الذهاب للامتحان</a>
							</div>
						</div>
					</div>
					<div class="pdf 3 hidden_val">
						<div class="card text-right">
							<div class="card-body">
								<h2>ورق الشرح</h2>
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="#" class="btn brown">الحصول علي الورق</a>
							</div>
						</div>
					</div>
				</div>
				<div class="content_control text-center">
					<div class="center_content">
						<button class="btn" id="next">التالى</button>
						<button class="btn" id="previous">السابق</button>
					</div>
				</div>
			</section>
		</div>
	</div>
	<footer>
		<div class="container">
			<div class="row">
				<div class="social_media">
					<!-- Facebook -->
					<a class="fb-ic mr-md-5">
						<i class="fab fa-facebook-f "></i>
					</a>
					<!-- Twitter -->
					<a class="tw-ic mr-md-5">
						<i class="fab fa-twitter "></i>
					</a>
					<!--Instagram-->
					<a class="ins-ic mr-md-5">
						<i class="fab fa-instagram "></i>
					</a>
					<!--Pinterest-->
					<a class="pin-ic">
						<i class="fab fa-pinterest "></i>
					</a>
				</div>
			</div>
		</div>
		<!-- Copyright -->
		<div class="footer-copyright text-center">© 2020 Copyright:
			<a href="#">Ahmed Eltaroon</a>
		</div>
	</footer>
</body>
<script src="layouts/js/jquery-3.5.1.min.js"></script>
<script src="layouts/js/popper.min.js"></script>
<script src="layouts/js/bootstrap.min.js"></script>
<script src="layouts/js/index.js"></script>
<script src="layouts/js/main.js"></script>
</html>