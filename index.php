<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
	<meta name="csrf-param" content="_csrf-frontend">
	<!-- <meta name="csrf-token" content=""> -->
	<title>ArcticAir</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
<!--	<meta http-equiv="content-language" content="ru">-->
	<meta name="viewport" content="initial-scale=1, minimum-scale=1, maximum-scale=1">
	<!-- Open Graph -->
<!--	 <meta name="og:title" content="ArcticAir">
	<meta name="og:description" content="">
	<meta name="og:url" content="">
	<meta name="og:site_name" content="ArcticAir">
	<meta name="og:locale" content="ru_RU">
	<meta name="fb:app_id" content="">
	<meta name="og:type" content="website">
	<meta name="og:image" content=""> -->
	<!-- Open Graph -->
	<meta name="theme-color" content="#fff">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	<!-- <link rel="stylesheet" type="text/css" href="assets/web/roboto.css"> -->
	<!-- <link rel="stylesheet" type="text/css" href="assets/web/slick.css"/> -->
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	<link rel="stylesheet" type="text/css" href="assets/css/mobile.css">
</head>
<body class="euro">
	<div id="pagenav-outer">
		<div id="pagenav">
		<!--<a class="pagelink" href="#">Top</a>
			<a class="pagelink" href="#">Advantages</a>
			<a class="pagelink" href="#">All products</a> -->
		</div>		
	</div>

	<header id="header">
		<nav>
			<a id="logo-a" href="">
				<img id="logo" alt="ArcticAir" src="assets/img/logo.png">
			</a>
			<button class="btn blue phone" id="callback-btn">Call back</button>
			<a class="btn white phone tel" href="tel:+380503040500">+38 050 30 40 500</a>
			<div class="btn white lang" id="toplang">
				<a href="">en</a>
				<a href="">ru</a>
				<a href="">ua</a>
			</div>
		</nav>
		<div id="header-anim-outer-wrap">
			<div id="header-anim-outer">
				<div id="header-anim"></div>
			</div>			
		</div>
		<div class="header-img" id="header-palm1"></div>
		<div class="header-img" id="header-palm2"></div>
		<div class="header-img" id="header-img-penguin"></div>
		<div class="header-img" id="header-img-snow-b"></div>
		<div class="header-img" id="header-balloon"></div>
		<div id="header-smoke"></div>
		<div class="header-img" id="header-img-snow-f"></div>
		<div id="header-content">
			<h1>ArcticAir1<br><span>Best Frion</span></h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Etiam euismod varius euismod. Lorem ipsum dolor sit ametv</p>
			<a class="btn blue" href="#anchor-makeorder">Сделать заказ</a>
		</div>
	</header>
	<section class="snownsteam" id="advantages">
		<h2>Advantages</h2>
		<div id="advantages-bg">Advantages</div>
		<div class="rectangle-items" id="advantages-slider">
			<div class="rectangle-item-outer">
				<div class="rectangle-item">
					<div class="advantages-img"></div>
					<h3>Lorem ipsum dolor</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				</div>				
			</div>
			<div class="rectangle-item-outer">
				<div class="rectangle-item">
					<div class="advantages-img"></div>
					<h3>Lorem ipsum dolor</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				</div>				
			</div>
			<div class="rectangle-item-outer">
				<div class="rectangle-item">
					<div class="advantages-img"></div>
					<h3>Lorem ipsum dolor</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				</div>				
			</div>
			<div class="rectangle-item-outer">
				<div class="rectangle-item">
					<div class="advantages-img"></div>
					<h3>Lorem ipsum dolor</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				</div>				
			</div>
		</div>
		<div class="row">
			<button class="btn blue" id="open-certificates">Certificates</button>
		</div>
	</section>
	<section id="allproducts">
		<h2>All products</h2>
		<div id="allproducts-row">
			<div id="allproducts-list">
				<button class="allproducts-btn active">
					<img class="allproducts-img" src="/assets/img/ballons/blue512.png">
				</button>
				<button class="allproducts-btn">
					<img class="allproducts-img" src="/assets/img/ballons/orange512.png">
				</button>
				<button class="allproducts-btn">
					<img class="allproducts-img" src="/assets/img/ballons/aqua512.png">
				</button>
				<button class="allproducts-btn">
					<img class="allproducts-img" src="/assets/img/ballons/pink512.png">
				</button>
				<button class="allproducts-btn">
					<img class="allproducts-img" src="/assets/img/ballons/red512.png">
				</button>
			</div>
			<div id="allproducts-preview-outer">
				<div class="allproducts-preview-bg" id="allproducts-preview-palm2"></div>
				<div class="allproducts-preview-bg" id="allproducts-preview-snow-b"></div>
				<div id="allproducts-preview-img"></div>
				<div class="allproducts-preview-bg" id="allproducts-preview-snow-f"></div>
				<svg id="allproducts-svg" viewBox="0 0 554 554" xmlns="http://www.w3.org/2000/svg">
					<defs>
						<linearGradient id="circleGradient"
						                x1="100%" y1="50%"
						                x2="0%" y2="50%"
						                spreadMethod="pad">
						  <stop offset="10%" stop-color="#ADE1FF" stop-opacity="1"/>
						  <stop offset="100%" stop-color="#4293C1" stop-opacity="1"/>
						</linearGradient>
					</defs>
					<circle id="allproducts-circle" r="273" cx="277" cy="277" stroke="url(#circleGradient)" stroke-width="8" fill="none" stroke-dasharray="1720" stroke-dashoffset="1720"></circle>
				</svg>
			</div>
			<div id="allproducts-description-outer">
				<div class="allproducts-description active">
					<h4>ArcticAir <span>134A</span></h4>
					<p class="allproducts-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<span class="h5">Application</span>
					<div class="applications">
						<img class="applications-img" src="/assets/img/applications/conditioner.png" alt="conditioner">
						<img class="applications-img" src="/assets/img/applications/car.png" alt="car">
						<img class="applications-img" src="/assets/img/applications/truck.png" alt="truck">
						<img class="applications-img" src="/assets/img/applications/industrial.png" alt="industrial">
					</div>
					<a href="#anchor-makeorder" class="btn blue">Make order</a>
				</div>
				<div class="allproducts-description">
					<h4>ArcticAir <span>404A</span></h4>
					<p class="allproducts-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quircitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<a href="#anchor-makeorder" class="btn blue">Make order</a>
				</div>
				<div class="allproducts-description">
					<h4>ArcticAir <span>507</span></h4>
					<p class="allproducts-p">Lorem ipsum dour adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nis dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<a href="#anchor-makeorder" class="btn blue">Make order</a>
				</div>
				<div class="allproducts-description">
					<h4>ArcticAir <span>410A</span></h4>
					<p>Lorquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillumation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dosectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, unt mollit anim id est laborulore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserem ipsum dolor sit amet, conm.</p>
					<a href="#anchor-makeorder" class="btn blue">Make order</a>
				</div>
				<div class="allproducts-description">
					<h4>ArcticAir <span>407C</span></h4>
					<p class="allproducts-p">Lorem ipsum doiam, quis nostrud exeur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim vente velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id esrcitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptalor sit amet, consectett laborum.</p>
					<a href="#anchor-makeorder" class="btn blue">Make order</a>
				</div>
			</div>
		</div>
	</section>
	<section id="assortiment">
		<h2>Assortiment</h2>
		<div id="assortiment-row">
			<div class="rectangle-item-outer">
				<div class="rectangle-item">
					<img class="assortiment-img" src="/assets/img/ballons/blue512.png">
					<span class="h3">ArcticAir 134A</span>
					<span class="assortiment-price price">Price: <span>1999</span></span>
					<a class="btn blue addnewballon" data-model="134A" href="#anchor-makeorder"> buy</a>
				</div>
			</div>
			<div class="rectangle-item-outer">
				<div class="rectangle-item">
					<img class="assortiment-img" src="/assets/img/ballons/orange512.png">
					<span class="h3">ArcticAir 404A</span>
					<span class="assortiment-price price">Price: <span>1999</span></span>
					<a class="btn blue addnewballon" data-model="404A" href="#anchor-makeorder"> buy</a>
				</div>
			</div>
			<div class="rectangle-item-outer">
				<div class="rectangle-item">
					<img class="assortiment-img" src="/assets/img/ballons/aqua512.png">
					<span class="h3">ArcticAir 507</span>
					<span class="assortiment-price price">Price: <span>1999</span></span>
					<a class="btn blue addnewballon" data-model="507" href="#anchor-makeorder"> buy</a>
				</div>
			</div>
			<div class="rectangle-item-outer">
				<div class="rectangle-item">
					<img class="assortiment-img" src="/assets/img/ballons/pink512.png">
					<span class="h3">ArcticAir 410A</span>
					<span class="assortiment-price price">Price: <span>1999</span></span>
					<a class="btn blue addnewballon" data-model="410A" href="#anchor-makeorder"> buy</a>
				</div>
			</div>
			<div class="rectangle-item-outer">
				<div class="rectangle-item">
					<img class="assortiment-img" src="/assets/img/ballons/red512.png">
					<span class="h3">ArcticAir 407C</span>
					<span class="assortiment-price price">Price: <span>1999</span></span>
					<a class="btn blue addnewballon" data-model="407C" href="#anchor-makeorder"> buy</a>
				</div>
			</div>
		</div>
	</section>
	<section id="reviews">
		<h2>reviews</h2>
		<div class="reviews-slider-outer">
			<div class="reviews-slider">
				<div class="review-item-slide">
					<div class="review-item">
						<div class="review-item-img">
							<img src="/assets/img/reviews/Ellipse.png">
						</div>
						<div class="review-item-description">
							<span class="h3">Lorem ipsum dolor</span>
							<p class="revirw-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
					</div>				
				</div>
				<div class="review-item-slide">
					<div class="review-item">
						<div class="review-item-img">
							<img src="/assets/img/reviews/Ellipse.png">
						</div>
						<div class="review-item-description">
							<span class="h3">Lorem ipsum dolor</span>
							<p class="revirw-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
					</div>				
				</div>
				<div class="review-item-slide">
					<div class="review-item">
						<div class="review-item-img">
							<img src="/assets/img/reviews/Ellipse.png">
						</div>
						<div class="review-item-description">
							<span class="h3">Lorem ipsum dolor</span>
							<p class="revirw-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						</div>
					</div>				
				</div>
			</div>
<!-- 			<div class="slider-nav slider-prev" id="reviews-slider-prev"></div>
			<div class="slider-nav slider-next" id="reviews-slider-next"></div> -->
		</div>
		<button class="btn blue" id="open-feedback-form">Write Feedback</button>
	</section>
	<section id="makeorder">
		<div class="snownsteam" id="snow-makeorder"></div>
		<h2 id="anchor-makeorder">Make Order</h2>
		<div id="makeorder-outer">
			<div class="makeorder-row">
				<div></div>
				<div>Name</div>
				<div>Quantity</div>
				<div>Price</div>
				<div>Amount</div>
			</div>
			<div class="makeorder-row" data-order-model="134A">
				<div>
					<img class="makeorder-img" src="/assets/img/ballons/\blue512.png">
				</div>
				<div class="makeorder-title">
					ArcticAir <span>134A</span>
				</div>
				<div class="makeorder-quantity">
					<button class="minus"></button>
					<input type="number" name="amount" value="0">
					<button class="plus"></button>
				</div>
				<div class="makeorder-price price">1999 </div>
				<div class="makeorder-amount price">0</div>
			</div>
			<div class="makeorder-row" data-order-model="404A">
				<div>
					<img class="makeorder-img" src="/assets/img/ballons/orange512.png">
				</div>
				<div class="makeorder-title">
					ArcticAir <span>404A</span>
				</div>
				<div class="makeorder-quantity">
					<button class="minus"></button>
					<input type="number" name="amount" value="0">
					<button class="plus"></button>
				</div>
				<div class="makeorder-price price">1899 </div>
				<div class="makeorder-amount price">0</div>
			</div>
			<div class="makeorder-row" data-order-model="507">
				<div>
					<img class="makeorder-img" src="/assets/img/ballons/aqua512.png">
				</div>
				<div class="makeorder-title">
					ArcticAir <span>507</span>
				</div>
				<div class="makeorder-quantity">
					<button class="minus"></button>
					<input type="number" name="amount" value="0">
					<button class="plus"></button>
				</div>
				<div class="makeorder-price price">1799 </div>
				<div class="makeorder-amount price">0</div>
			</div>
			<div class="makeorder-row" data-order-model="410A">
				<div>
					<img class="makeorder-img" src="/assets/img/ballons/pink512.png">
				</div>
				<div class="makeorder-title">
					ArcticAir <span>410A</span>
				</div>
				<div class="makeorder-quantity">
					<button class="minus"></button>
					<input type="number" name="amount" value="0">
					<button class="plus"></button>
				</div>
				<div class="makeorder-price price">1699 </div>
				<div class="makeorder-amount price">0</div>
			</div>
			<div class="makeorder-row" data-order-model="407C">
				<div>
					<img class="makeorder-img" src="/assets/img/ballons/red512.png">
				</div>
				<div class="makeorder-title">
					ArcticAir <span>407C</span>
				</div>
				<div class="makeorder-quantity">
					<button class="minus"></button>
					<input type="number" name="amount" value="0">
					<button class="plus"></button>
				</div>
				<div class="makeorder-price price">1599 </div>
				<div class="makeorder-amount price">0</div>
			</div>
			<hr>
			<div class="makeorder-row makeorder-total">
				<div></div>
				<div class="h3">Together</div>
				<div class="makeorder-quantity-together">
					<span class="input-style" id="together-amount">0</span>
				</div>
				<div></div>
				<div>
					<span class="input-style price" id="together-price">0</span>
				</div>
			</div>

			<form action="buyform.php" method="post" id="sendobj">
				<input id="object" type="hidden" name="object">
			</form>

			<button class="btn blue" form="sendobj">Make order</button>
		</div>
	</section>
	<div id="eclipse"></div>

	<div class="modal form" id="callback-form-outer">
		<div class="slider-nav slider-prev close-form" id="close-callback-form"></div>
		<span class="h2">We'll call back</span>
		<form action="" id="callback-form">
			<div class="input">
				<label>First name</label>
				<input type="text" name="name" placeholder="Enter your first name">
			</div>
			<div class="input">
				<label>Your city</label>
				<input type="text" name="city" placeholder="Enter your city">
			</div>
			<div class="input">
				<label>Phone number</label>
				<input type="text" name="tel" placeholder="Enter your phone number">
			</div>
		</form>
		<button class="btn blue" form="callback-form">Make order</button>
	</div>

	<div class="modal form" id="feedback-form-outer">
		<div class="slider-nav slider-prev close-form" id="close-feedback-form"></div>
		<span class="h2">Write feedback</span>
		<form action="" id="feedback-form">
			<div class="input-row">
				<div class="input">
					<label>First name</label>
					<input type="text" name="firstname" placeholder="Enter your first name">
				</div>
				<div class="input">
					<label>Second name</label>
					<input type="text" name="secondname" placeholder="Enter your second name">
				</div>
			</div>
			<div class="input-row">
				<label class="file">
					<span>Attach image</span>
					<input type="file" name="image">
				</label>
			</div>
			<div class="input">
				<label>Feedback</label>
				<textarea></textarea>
			</div>
		</form>
		<button class="btn blue" form="feedback-form">Send</button>
	</div>

	<button id="open-whatsapp"></button>
	<div class="modal form" id="whatsapp-form-outer">
		<div class="slider-nav slider-prev close-form"></div>
		<span class="h2">Write Message</span>
		<form action="" id="whatsapp-form">
			<div class="input-row">
				<div class="input">
					<label>First name</label>
					<input type="text" name="name" placeholder="Enter your first name">
				</div>
				<div class="input">
					<label>Your City</label>
					<input type="text" name="city" placeholder="Enter your city">
				</div>
			</div>
			<div class="input">
				<label>Phone number</label>
				<input type="tel" name="tel" placeholder="Enter your second name">
			</div>
			<div class="input">
				<label>Message</label>
				<textarea></textarea>
			</div>
		</form>
		<button class="btn green" form="whatsapp-form">Send</button>
	</div>

	<div class="modal" id="modal-certificates">
		<div class="slider-nav slider-prev close-form" id="close-certificates-modal"></div>
		<span class="h2">Certificates</span>
		<div class="certificates-row">
			<a class="certificate-item" href="" target="_blank">
				<img src="/assets/img/ballons/blue512.png" alt="134A">
				<span class="h3">ArcticAir 134A</span>
			</a>
			<a class="certificate-item" href="" target="_blank">
				<img src="/assets/img/ballons/orange512.png" alt="134A">
				<span class="h3">ArcticAir 404A</span>
			</a>
			<a class="certificate-item" href="" target="_blank">
				<img src="/assets/img/ballons/aqua512.png" alt="134A">
				<span class="h3">ArcticAir 507</span>
			</a>
			<a class="certificate-item" href="" target="_blank">
				<img src="/assets/img/ballons/pink512.png" alt="134A">
				<span class="h3">ArcticAir 410A</span>
			</a>
			<a class="certificate-item" href="" target="_blank">
				<img src="/assets/img/ballons/red512.png" alt="134A">
				<span class="h3">ArcticAir 407C</span>
			</a>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<!-- <script type="text/javascript" src="/assets/web/jquery-3.4.1.min.js"></script> -->
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<!-- <script type="text/javascript" src="/assets/web/slick.min.js"></script> -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/pixi.js/5.0.3/pixi.min.js"></script>

	<script src="/assets/js/script.js"></script>
</body>
</html>

<!--

Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

-->