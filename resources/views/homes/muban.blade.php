<html lang="en"><head>
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"> 
<link href="css/animate.min.css" rel="stylesheet" type="text/css" media="all"><!-- animation -->
<link href="css/menu.css" rel="stylesheet" type="text/css" media="all"> <!-- menu style -->  
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<script src="js/jquery-scrolltofixed-min.js" type="text/javascript"></script><!-- fixed nav js -->
<script>
    $(document).ready(function() {

        // Dock the header to the top of the window when scrolled past the banner. This is the default behaviour.

        $('.header-two').scrollToFixed();  
        // previous summary up the page.

        var summaries = $('.summary');
        summaries.each(function(i) {
            var summary = $(summaries[i]);
            var next = summaries[i + 1];

            summary.scrollToFixed({
                marginTop: $('.header-two').outerHeight(true) + 10, 
                zIndex: 999
            });
        });
    });
</script>
<!-- //js --> 
<!-- web-fonts -->
<link href="http://fonts.useso.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css">
<link href="http://fonts.useso.com/css?family=Lovers+Quarrel" rel="stylesheet" type="text/css">
<link href="http://fonts.useso.com/css?family=Offside" rel="stylesheet" type="text/css"> 
<!-- web-fonts -->  
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!-- //end-smooth-scrolling -->
<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
		
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
<style>@-webkit-keyframes marqueeAnimation-1202815  { 100%  {margin-left:-1577px}}</style></head>
<body>
	<!-- header -->
	<div class="header">
		<div class="w3ls-header"><!--header-one--> 
			<div class="w3ls-header-left">
				<p><a href="#">UPTO $50 OFF ON LAPTOPS | USE COUPON CODE LAPPY </a></p>
			</div>
			<div class="w3ls-header-right">
				<ul>
					<li class="dropdown head-dpdn">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> My Account<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="login.html">Login </a></li> 
							<li><a href="signup.html">Sign Up</a></li> 
							<li><a href="login.html">My Orders</a></li>  
							<li><a href="login.html">Wallet</a></li> 
						</ul> 
					</li> 

					<li class="dropdown head-dpdn">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gift" aria-hidden="true"></i> Gift Cards<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="offers.html">Product Gift card</a></li> 
							<li><a href="offers.html">Occasions Register</a></li>
							<li><a href="offers.html">View Balance</a></li> 
						</ul> 
					</li> 

					<li class="dropdown head-dpdn">
						<a href="help.html" class="dropdown-toggle"><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div> 
		</div>
		<div class="header-two scroll-to-fixed-fixed" style="z-index: 1000; position: fixed; top: 0px; margin-left: 0px; width: 1349px; left: 0px;"><!-- header-two -->
			<div class="container">
				<div class="header-logo">
					<h1><a href="index.html"><span>S</span>mart <i>Bazaar</i></a></h1>
					<h6>Your stores. Your place.</h6> 
				</div>	
				<div class="header-search">
					<form action="#" method="post">
						<input type="search" name="Search" placeholder="Search for a Product..." required="">
						<button type="submit" class="btn btn-default" aria-label="Left Align">
							<i class="fa fa-search" aria-hidden="true"> </i>
						</button>
					</form>
				</div>
				<div class="header-cart"> 
					<div class="my-account">
						<a href="contact.html"><i class="fa fa-map-marker" aria-hidden="true"></i> CONTACT US</a>						
					</div>
					<div class="cart"> 
						<form action="#" method="post" class="last"> 
							<input type="hidden" name="cmd" value="_cart">
							<input type="hidden" name="display" value="1">
							<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
						</form>  
					</div>
					<div class="clearfix"> </div> 
				</div> 
				<div class="clearfix"> </div>
			</div>		
		</div><div style="display: block; width: 1349px; height: 246.344px; float: none;"></div><!-- //header-two -->
		<div class="header-three"><!-- header-three -->
			<div class="container">
				<div class="menu">
					<div class="cd-dropdown-wrapper">
						<a class="cd-dropdown-trigger" href="#0">Store Categories</a>
						<nav class="cd-dropdown"> 
							<a href="#0" class="cd-close">Close</a>
							<ul class="cd-dropdown-content"> 
								<li><a href="offers.html">Today's Offers</a></li>
								<li class="has-children">
									<a href="#">Electronics</a> 
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="see-all"><a href="products.html">All Electronics</a></li>
										<li class="has-children">
											<a href="#">MOBILE PHONES</a>  
											<ul class="is-hidden"> 
												<li class="go-back"><a href="#">All Electronics</a></li> 
												<li class="has-children">
													<a href="#0">SmartPhones</a> 
													<ul class="is-hidden"> 
														<li class="go-back"><a href="#"> </a></li>
														<li><a href="products.html">Android</a></li>
														<li><a href="products.html">Windows</a></li>
														<li><a href="products.html">Black berry</a></li>
													</ul>
												</li>
												<li> <a href="products.html">IPhones</a> </li>
												<li><a href="products.html">Tablets</a></li>
												<li><a href="products.html">IPad</a></li>
												<li><a href="products.html">Feature Phones</a></li> 
											</ul>
										</li> 
										<li class="has-children">
											<a href="#">LARGE APPLIANCES</a> 
											<ul class="is-hidden"> 
												<li class="go-back"><a href="#">All Electronics </a></li>
												<li><a href="products.html">Refrigerators</a></li> 
												<li><a href="products.html">Washing Machine</a></li>
												<li><a href="products.html">Office Technology</a></li>
												<li><a href="products.html">Air conditioner</a></li>
												<li><a href="products.html">Home Automation</a></li>
											</ul>
										</li> 
										<li class="has-children">
											<a href="#">ENTERTAINMENT</a> 
											<ul class="is-hidden"> 
												<li class="go-back"><a href="#">All Electronics</a></li>
												<li><a href="products.html">Tv &amp; Accessories</a></li>
												<li><a href="products.html">Digital Camera</a></li>
												<li><a href="products.html">Gaming</a></li>
												<li><a href="products.html">Home Audio &amp; Theater</a></li>
												<li class="has-children">
													<a href="#">Computer</a>
													<ul class="is-hidden">
														<li class="go-back"><a href="#"> </a></li> 
														<li><a href="products.html">Laptop </a></li>
														<li><a href="products.html">Gaming PC</a></li>
														<li><a href="products.html">Monitors</a></li>
														<li><a href="products.html">Networking</a></li>
														<li><a href="products.html">Printers &amp; Supplies</a></li>
														<li><a href="products.html">Accessories</a></li>
													</ul>
												</li> 
											</ul>
										</li> 
										<li class="has-children">
											<a href="#">HOME APPLIANCES</a> 
											<ul class="is-hidden">
												<li class="go-back"><a href="#0">All Electronics </a></li>
												<li class="has-children"><a href="#">Kitchen appliances</a>
													<ul class="is-hidden">
														<li class="go-back"><a href="#0"> </a></li>
														<li><a href="products.html">Rice Cookers</a></li>
														<li><a href="products.html">Mixer Juicer</a></li>
														<li><a href="products.html">Grinder</a></li>
														<li><a href="products.html">Blenders &amp; Choppers</a></li>
														<li><a href="products.html">Microwave Oven</a></li>
														<li><a href="products.html">Food Processors</a></li>
													</ul>
												</li>
												<li><a href="products.html">Purifiers</a></li>
												<li><a href="products.html">Geysers</a></li>
												<li><a href="products.html">Gas Stove</a></li>
												<li><a href="products.html">Vacuum Cleaner</a></li>
												<li><a href="products.html">Sewing Machine</a></li> 
												<li><a href="products.html">Heaters &amp; Fans</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">SMALL DEVICES</a> 
											<ul class="is-hidden"> 
												<li class="go-back"><a href="#0">All Electronics </a></li>
												<li><a href="products.html">Wifi Dongle</a></li>
												<li><a href="products.html">Router &amp; Modem</a></li>
												<li class="has-children"><a href="#">Storage Devices</a>
													<ul class="is-hidden">
														<li class="go-back"><a href="#0"> </a></li>
														<li><a href="products.html">Cloud Storage</a></li>
														<li><a href="products.html">Hard Disk</a></li>
														<li><a href="products.html">SSD</a></li>
														<li><a href="products.html">Pen Drive</a></li>
														<li><a href="products.html">Memory card</a></li> 
														<li><a href="products.html">Security Devices</a></li> 
													</ul>
												</li> 
												<li><a href="products.html">Office Supplies</a></li>
												<li><a href="products.html">Cut the Cable</a></li>
												<li><a href="products.html">Auto Electronics</a></li>  
											</ul>
										</li>
										<li class="has-children">
											<a href="#">PERSONAL CARE</a> 
											<ul class="is-hidden"> 
												<li class="go-back"><a href="#0">All Electronics </a></li>
												<li><a href="products.html">Epilator</a></li> 
												<li><a href="products.html">Hair Styler</a></li>
												<li><a href="products.html">Trimmer &amp; Shaver</a></li>
												<li><a href="products.html">Health Care</a></li> 
												<li><a href="products.html">cables</a></li>
											</ul>
										</li>
									</ul> <!-- .cd-secondary-dropdown --> 
								</li> <!-- .has-children -->
								<li class="has-children">
									<a href="#">Fashion Store</a> 
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="see-all"><a href="products1.html">All Fashion Stores</a></li>
										<li class="has-children">
											<a href="#">GIRLS' CLOTHING</a> 
											<ul class="is-hidden">  
												<li class="go-back"><a href="#">All Fashion Stores</a></li>
												<li><a href="products1.html">Ethnic wear </a></li>
												<li><a href="products1.html">Maternity wear</a></li>
												<li><a href="products1.html">inner &amp; nightwear </a></li>
												<li><a href="products1.html">casual wear </a></li>
												<li><a href="products1.html">formal wear</a></li>
												<li><a href="products1.html">Sports wear</a></li>
											</ul>
										</li> 
										<li class="has-children">
											<a href="#">BOYS' CLOTHING</a> 
											<ul class="is-hidden">  
												<li class="go-back"><a href="#">All Fashion Stores</a></li>
												<li><a href="products1.html">Jeans</a></li>  
												<li><a href="products1.html">Casual wear</a></li> 
												<li><a href="products1.html">Shorts</a></li> 
												<li><a href="products1.html">T-Shirts &amp; Polos</a></li> 
												<li><a href="products1.html">Trousers &amp; Chinos</a></li> 
											</ul>
										</li> 
										<li class="has-children">
											<a href="#">JACKETS</a> 
											<ul class="is-hidden">
												<li class="go-back"><a href="#">All Fashion Stores</a></li>
												<li><a href="products1.html">Blazers</a></li>
												<li><a href="products1.html">Bomber jackets</a></li>
												<li><a href="products1.html">Denim Jackets</a></li>
												<li><a href="products1.html">Duffle Coats</a></li>
												<li><a href="products1.html">Leather Jackets</a></li>
												<li><a href="products1.html">Parkas</a></li>
											</ul>
										</li> 
										<li class="has-children">
											<a href="#">ACCESSORIES </a> 
											<ul class="is-hidden"> 
												<li class="go-back"><a href="#">All Fashion Stores</a></li>
												<li><a href="products1.html">Watches </a></li>
												<li><a href="products1.html">Eyewear </a></li>
												<li><a href="products1.html">Jewellery </a></li>
												<li class="has-children">
													<a href="#">Footwear </a>  
													<ul class="is-hidden">
														<li class="go-back"><a href="#"> </a></li>
														<li><a href="products1.html">Ethnic</a></li>  
														<li><a href="products1.html">Casual wear</a></li>
														<li><a href="products1.html">Sports Shoes</a></li>
														<li><a href="products1.html">Boots</a></li>
													</ul> 
												</li> 
												<li><a href="products1.html">Stoles &amp; Scarves</a></li>
												<li><a href="products1.html">Handbags</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">BEAUTY</a> 
											<ul class="is-hidden">
												<li class="go-back"><a href="#">All Fashion Stores</a></li>
												<li><a href="products1.html">Perfumes &amp; Deos</a></li>
												<li><a href="products1.html">Lipsticks &amp; Nail Polish</a></li>
												<li><a href="products1.html">Beauty Gift Hampers</a></li> 
												<li><a href="products1.html">Personal Grooming</a></li>
												<li><a href="products1.html">Travel bags</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="products1.html">PERSONAL CARE</a> 
											<ul class="is-hidden"> 
												<li class="go-back"><a href="#">All Fashion Stores</a></li>
												<li><a href="products1.html">Face Care</a></li>
												<li><a href="products1.html">Nail Care</a></li>
												<li><a href="products1.html">Hair Care</a></li>
												<li><a href="products1.html">Body Care</a></li>
												<li><a href="products1.html">Bath &amp; Spa</a></li>   
											</ul>
										</li>
									</ul> <!-- .cd-secondary-dropdown --> 
								</li> <!-- .has-children -->
								<li class="has-children">
									<a href="products2.html">Kids Fashion &amp; Toys</a> 
									<ul class="cd-secondary-dropdown is-hidden"> 
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="see-all"><a href="products2.html">All Kids Fashions</a></li>
										<li class="has-children">
											<a href="products2.html">KIDS CLOTHING</a> 
											<ul class="is-hidden"> 
												<li class="go-back"><a href="#">All Kids Fashions</a></li>
												<li><a href="products2.html">Ethnic wear </a></li> 
												<li><a href="products2.html">inner &amp; Sleepwear </a></li>
												<li><a href="products2.html">Dresses &amp; Frocks </a></li>
												<li><a href="products2.html">Winter wear</a></li>
												<li><a href="products2.html">Diaper &amp; Accessories</a></li>
											</ul>
										</li> 
										<li class="has-children"><a href="#">KIDS FASHION</a>
											<ul class="is-hidden">  
												<li class="go-back"><a href="#">All Kids Fashions</a></li>
												<li><a href="products2.html">Footwear</a></li> 
												<li><a href="products2.html">Sunglasses </a></li>
												<li><a href="products2.html">School &amp; Stationery</a></li>
												<li><a href="products2.html">Jewellery</a></li>
												<li><a href="products2.html">Hair bands &amp; Clips</a></li>
											</ul>
										</li>
										<li class="has-children"><a href="#">Baby Care</a>
											<ul class="is-hidden"> 
												<li class="go-back"><a href="#">All Kids Fashions</a></li>
												<li><a href="products2.html">Lotions, Oil &amp; Powder </a></li> 
												<li><a href="products2.html">Soaps, Shampoo </a></li>
												<li><a href="products2.html">Bath Towels</a></li> 
												<li class="has-children">
													<a href="#">Feeding</a> 
													<ul class="is-hidden">
														<li class="go-back"><a href="#"> </a></li> 
														<li><a href="products2.html">Baby Food </a></li>
														<li><a href="products2.html">Bottle Feeding </a></li>
														<li><a href="products2.html">Breast Feeding</a></li>  
													</ul>
												</li>  
												<li><a href="products2.html">Toddlers' Rooms</a></li> 	
											</ul><!-- .cd-secondary-dropdown --> 
										</li> <!-- .has-children -->								
										<li class="has-children"><a href="#">TOYS &amp; GAMES </a>
											<ul class="is-hidden"> 
												<li class="go-back"><a href="#">All Kids Fashions</a></li>
												<li><a href="products2.html">Art &amp; Crafts</a></li> 
												<li><a href="products2.html">Educational Toys </a></li>
												<li><a href="products2.html">Baby Toys</a></li> 
												<li><a href="products2.html">Outdoor Play </a></li> 
												<li><a href="products2.html">Musical Instruments</a></li>
											</ul>
										</li>
										<li> 
											<ul class="is-hidden">
												<li class="go-back"><a href="#">All Kids Fashions</a></li>
												<li><a href="products2.html">Toy Tips &amp; Trends</a></li> 
												<li><a href="products2.html">Preschool Toys</a></li>
												<li><a href="products2.html">Musical Instruments</a></li> 
												<li><a href="products2.html">Bikes &amp; Ride-Ons</a></li>
												<li><a href="products2.html">Video Games</a></li>
												<li><a href="products2.html">PC &amp; Digital Gaming</a></li>
											</ul>	
										</li> 
									</ul><!-- .cd-secondary-dropdown --> 
								</li> <!-- .has-children --> 
								<li class="has-children">
									<a href="#">Home, Furniture &amp; Patio</a> 
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="see-all"><a href="products3.html">All Products</a></li>
										<li class="has-children">
											<a href="#">Kitchen Uses</a> 
											<ul class="is-hidden">  
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products3.html">Dinner Sets </a></li> 
												<li><a href="products3.html">Cookware &amp; Bakeware </a></li>
												<li><a href="products3.html">Containers &amp; Jars </a></li>
												<li><a href="products3.html">Kitchen Tools </a></li>
												<li><a href="products3.html">Food Storage</a></li>
												<li><a href="products3.html">Casseroles</a></li>
											</ul>
										</li> 
										<li class="has-children">
											<a href="#">Furniture </a> 
											<ul class="is-hidden"> 
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products3.html">Bedroom </a></li> 
												<li><a href="products3.html">Dining Room </a></li>
												<li><a href="products3.html">Kids' Furniture </a></li>
												<li><a href="products3.html">Living Room</a></li>
												<li><a href="products3.html">Office</a></li>
												<li><a href="products3.html">Mattresses</a></li>
											</ul>
										</li> 
										<li class="has-children">
											<a href="#">Home Decor </a> 
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products3.html">Lighting</a></li> 
												<li><a href="products3.html">Painting</a></li>
												<li><a href="products3.html">Curtains &amp; Blinds</a></li>
												<li><a href="products3.html">Patio Furniture</a></li>
												<li><a href="products3.html">Wardrobes &amp; Cabinets</a></li>
												<li><a href="products3.html">Mattresses</a></li>
											</ul>
										</li>  
										<li class="has-children">
											<a href="#">Gardening &amp; Lawn </a> 
											<ul class="is-hidden">
												<li class="go-back"><a href="#"> </a></li>  
												<li><a href="products3.html">Gardening </a></li> 
												<li><a href="products3.html">Landscaping </a></li>
												<li><a href="products3.html">Sheds</a></li>
												<li><a href="products3.html">Outdoor Storage  </a></li>
												<li><a href="products3.html">Garden &amp; Ideas </a></li>
												<li><a href="products3.html">Patio Tips</a></li>
											</ul>
										</li> 
										<li class="has-children">
											<a href="#">Garage Storage</a> 
											<ul class="is-hidden"> 
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products3.html">Baskets &amp; Bins </a></li> 
												<li><a href="products3.html">Garage Door Openers</a></li>
												<li><a href="products3.html">Free Standing Shelves </a></li>
												<li><a href="products3.html">Floor cleaning</a></li>
												<li><a href="products3.html">Tool Kits</a></li>
											</ul>
										</li>  
									</ul><!-- .cd-secondary-dropdown --> 
								</li> <!-- .has-children -->  
								<li class="has-children">
									<a href="#">Sports, Fitness &amp; Outdoor</a>
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="see-all"><a href="products4.html">All Products</a></li>
										<li class="has-children">
											<a href="#">Single Sports </a> 
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products4.html">Bikes </a></li> 
												<li><a href="products4.html">Fishing  </a></li>
												<li><a href="products4.html">Cycling </a></li>
												<li><a href="products4.html">Musical Instruments</a></li>
												<li><a href="products4.html">Archery </a></li>
											</ul>
										</li> 
										<li class="has-children">
											<a href="#">Team Sports</a> 
											<ul class="is-hidden"> 
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products4.html">Cricket </a></li> 
												<li><a href="products4.html">Badminton </a></li>
												<li><a href="products4.html">Swimming Gear </a></li>
												<li><a href="products4.html">Sports Apparel </a></li>
												<li><a href="products4.html">Indoor games</a></li>
											</ul>
										</li> 
										<li class="has-children">
											<a href="#">Fitness </a> 
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products4.html">Fitness Accessories </a></li> 
												<li><a href="products4.html">Exercise Machines </a></li>
												<li><a href="products4.html">Ellipticals </a></li>
												<li><a href="products4.html">Home Gyms</a></li> 
												<li><a href="products4.html">Exercise Bikes</a></li> 
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Camping </a> 
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products4.html"> Airbeds</a></li> 
												<li><a href="products4.html">Tents </a></li>
												<li><a href="products4.html">Gazebo's &amp; Shelters</a></li>
												<li><a href="products4.html">Coolers </a></li>
												<li><a href="products4.html">Canopies</a></li>
												<li><a href="products4.html">Sleeping Bags</a></li>
											</ul>
										</li> 
										<li class="has-children">
											<a href="#">Camping Tools</a> 
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products4.html">Shooting </a></li> 
												<li><a href="products4.html">Knives &amp; Tools </a></li>
												<li><a href="products4.html">Optics &amp; Binoculars </a></li>
												<li><a href="products4.html">Lights &amp; Lanterns </a></li>
												<li><a href="products4.html">Hunting Clothing </a></li>
											</ul>
										</li> 
										<li class="has-children">
											<a href="#">Other</a> 
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products4.html">Riding Gears &amp; More </a></li> 
												<li><a href="products4.html">Body Massagers </a></li>
												<li><a href="products4.html">Health Monitors </a></li>
												<li><a href="products4.html">Health Drinks </a></li> 
											</ul>
										</li> 	
									</ul><!-- .cd-secondary-dropdown --> 
								</li> <!-- .has-children -->  
								<li class="has-children">
									<a href="#">Grocery store</a>
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="see-all"><a href="products5.html">All Products</a></li>
										<li class="has-children">
											<a href="#">Veggies &amp; Fruits </a> 
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products5.html">Vegetables </a></li> 
												<li><a href="products5.html">Fruits </a></li>
												<li><a href="products5.html">Dry Fruits</a></li> 
												<li><a href="products5.html">Snacks &amp; Cookies </a></li>
												<li><a href="products5.html">Breakfast &amp; Cereal</a></li> 
											</ul> 
										</li> 
										<li class="has-children">
											<a href="#">Packet Food</a> 
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products5.html">Beverages </a></li> 
												<li><a href="products5.html">Baking </a></li>
												<li><a href="products5.html">Emergency Food </a></li>
												<li><a href="products5.html">Candy &amp; Gum </a></li>
												<li><a href="products5.html">Meals &amp; Pasta </a></li>
											</ul>
										</li> 
										<li class="has-children">
											<a href="#">Shop All Pets </a> 
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products5.html">Dogs </a></li>  
												<li><a href="products5.html">Fish </a></li>												
												<li><a href="products5.html">Cats</a></li>
												<li><a href="products5.html">Birds </a></li>
												<li><a href="products5.html">Pet Food </a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Household Essentials </a> 
											<ul class="is-hidden"> 
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products5.html">Laundry Room </a></li> 
												<li><a href="products5.html">Paper &amp; Plastic</a></li>
												<li><a href="products5.html">Pest Control </a></li>
												<li><a href="products5.html">Batteries </a></li> 
											</ul>
										</li> 
										<li class="has-children">
											<a href="#">Food Shops </a> 
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products5.html">Fresh Food</a></li> 
												<li><a href="products5.html">Food Gifts </a></li>
												<li><a href="products5.html">Frozen Food </a></li>
												<li><a href="products5.html">Organic </a></li>
												<li><a href="products5.html">Gluten Free </a></li>
											</ul>
										</li> 
										<li class="has-children">
											<a href="#">Tips </a> 
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products5.html">Pets Growth</a></li> 
												<li><a href="products5.html">Recipes </a></li>
												<li><a href="products5.html">Snacks</a></li>
												<li><a href="products5.html">Nutrition</a></li> 
											</ul>
										</li> 
									</ul><!-- .cd-secondary-dropdown --> 
								</li> <!-- .has-children -->  
								<li class="has-children">
									<a href="#">Photo, Gifts &amp; Office Supplies</a>
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="see-all"><a href="products6.html">All Products</a></li>
										<li class="has-children">
											<a href="#">Trending Now </a> 
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products6.html">Best Priced</a></li> 
												<li><a href="products6.html">Chocolates </a></li>
												<li><a href="products6.html">Gift Cards </a></li>
												<li><a href="products6.html">Fashion &amp; Accessories </a></li>
												<li><a href="products6.html">Decorative Plants </a></li>
											</ul>
										</li> 
										<li class="has-children">
											<a href="#">Photos </a> 
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products6.html">Shelf animation </a></li> 
												<li><a href="products6.html">3D-rendered </a></li>
												<li><a href="products6.html">gift builder </a></li>
												<li><a href="products6.html">Frames</a></li>
												<li><a href="products6.html">Wall Decor</a></li>
											</ul>
										</li> 
										<li class="has-children">
											<a href="#">Gifts </a> 
											<ul class="is-hidden">	
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products6.html">Personalized Gifts </a></li> 
												<li><a href="products6.html">Flowers </a></li>
												<li><a href="products6.html">Cards &amp; Toys</a></li>
												<li><a href="products6.html">Show pieces </a></li>
												<li><a href="products6.html">Photo Books</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Favourite Brands </a> 
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products6.html">Archies </a></li> 
												<li><a href="products6.html">Jewel Fuel </a></li>
												<li><a href="products6.html">Ferns N Petals </a></li>
												<li><a href="products6.html">Happily Unmarried</a></li>
												<li><a href="products6.html">Chumbak</a></li>
											</ul>
										</li> 
										<li class="has-children">
											<a href="#">Office</a> 
											<ul class="is-hidden"> 
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products6.html">Calendars</a></li> 
												<li><a href="products6.html">Mousepads</a></li>
												<li><a href="products6.html">Phone Cases</a></li>
												<li><a href="products6.html">Tablet &amp; Laptop Cases</a></li>
												<li><a href="products6.html">Mounted Photos</a></li>
											</ul>
										</li> 
										<li class="has-children">
											<a href="#">Combos </a> 
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products6.html">Chocolates </a></li> 
												<li><a href="products6.html">Dry Fruits</a></li>
												<li><a href="products6.html">Sweets</a></li>
												<li><a href="products6.html">Snacks</a></li>
												<li><a href="products6.html">Cakes</a></li>
											</ul>
										</li> 
									</ul><!-- .cd-secondary-dropdown --> 
								</li> 
								<li class="has-children">
									<a href="#">Health, Beauty &amp; Pharmacy</a>
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="see-all"><a href="products7.html">All Products</a></li>
										<li class="has-children">
											<a href="#">Health</a> 
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products7.html">Home Health Care </a></li> 
												<li><a href="products7.html">Sports Nutrition </a></li>
												<li><a href="products7.html">Vision </a></li>
												<li><a href="products7.html">Vitamins </a></li>
												<li><a href="products7.html">Diet &amp; Nutrition </a></li>
											</ul>
										</li> 
										<li class="has-children">
											<a href="#">Health Tips</a> 
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products7.html">Diet</a></li> 
												<li><a href="products7.html">Exercise Tips  </a></li>
												<li><a href="products7.html">Vitamin Balance</a></li>
												<li><a href="products7.html">Health Insurance</a></li>
												<li><a href="products7.html">Funeral</a></li>
											</ul>
										</li> 
										<li class="has-children">
											<a href="#">Beauty </a> 
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products7.html">Massage &amp; Spa </a></li> 
												<li><a href="products7.html">Face Wash</a></li>
												<li><a href="products7.html">Facial Cleanser</a></li>
												<li><a href="products7.html">Makeup </a></li>
												<li><a href="products7.html">Beauty Tips</a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Pharmacy </a> 
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products7.html">Home Delivery </a></li> 
												<li><a href="products7.html">History &amp; Reports </a></li>
												<li><a href="products7.html">Transfer Prescriptions </a></li>
												<li><a href="products7.html">Health CheckUp</a></li>
												<li><a href="products7.html">Mobile App</a></li>
											</ul>
										</li> 
										<li class="has-children">
											<a href="#">Pharmacy Center </a> 
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products7.html">Diabetes Shop </a></li> 
												<li><a href="products7.html">Medicine Cabinet </a></li>
												<li><a href="products7.html">Vitamin Selector</a></li>
												<li><a href="products7.html">Pharmacy Help</a></li> 
											</ul>
										</li>  
									</ul><!-- .cd-secondary-dropdown --> 
								</li>
								<li class="has-children">
									<a href="#">Automotive</a>
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="see-all"><a href="products8.html">All Products</a></li>
										<li class="has-children">
											<a href="#">All Motors </a> 
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products8.html">Bikes </a></li> 
												<li><a href="products8.html">Yachts </a></li>
												<li><a href="products8.html">Scooters </a></li>
												<li><a href="products8.html">Autos</a></li>
												<li><a href="products8.html">Bus</a></li>
											</ul>
										</li> 
										<li class="has-children">
											<a href="#">Accessories </a> 
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products8.html">Vehicle Electronics</a></li> 
												<li><a href="products8.html">Stereos &amp; Monitors</a></li>
												<li><a href="products8.html">Bluetooth Devices</a></li>
												<li><a href="products8.html">GPS Navigation</a></li>
												<li><a href="products8.html">Speakers &amp; Tweeters</a></li>
											</ul>
										</li> 
										<li class="has-children">
											<a href="#">Safety &amp; Security </a> 
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products8.html">Anti-Theft Devices </a></li> 
												<li><a href="products8.html">Helmets</a></li>
												<li><a href="products8.html">Sensors</a></li>
												<li><a href="products8.html">Auto Repair Tools </a></li>
												<li><a href="products8.html">Antifreeze &amp; Coolants </a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Car Interiors</a> 
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products8.html">Stereos </a></li> 
												<li><a href="products8.html">Floor Mats </a></li>
												<li><a href="products8.html">Seat Covers</a></li>
												<li><a href="products8.html">Chargers </a></li>
												<li><a href="products8.html">Audio Finder </a></li>
											</ul>
										</li>  
										<li class="has-children">
											<a href="#">Exterior Accessories </a> 
											<ul class="is-hidden"> 
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products8.html">Wheel covers </a></li> 
												<li><a href="products8.html">Car Lighting </a></li>
												<li><a href="products8.html">Polish &amp; Waxes</a></li>
												<li><a href="products8.html">Cargo Management</a></li>
												<li><a href="products8.html">Car Decoration </a></li>
											</ul>
										</li> 
										<li class="has-children">
											<a href="#">Car Care</a> 
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products8.html">Auto Tips &amp; Advice </a></li> 
												<li><a href="products8.html">Car Washes &amp; Cleaners </a></li>
												<li><a href="products8.html">Car Wax &amp; Polish</a></li>
												<li><a href="products8.html">Cleaning Tools</a></li>
												<li><a href="products8.html">Detailing Kits </a></li>
											</ul>
										</li> 
									</ul><!-- .cd-secondary-dropdown --> 
								</li>
								<li class="has-children">
									<a href="#">Books, Music &amp; Movies</a>
									<ul class="cd-secondary-dropdown is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										<li class="see-all"><a href="products9.html">All Products</a></li>
										<li class="has-children">
											<a href="#">Books</a> 
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li class="has-children"><a href="#">Exam books </a>
													<ul class="is-hidden">
														<li class="go-back"><a href="#"> </a></li>
														<li><a href="products9.html">CAT/MAT/XAT</a></li>
														<li><a href="products9.html">Civil Services</a></li>
														<li><a href="products9.html">AFCAT</a></li>
														<li><a href="products9.html">New Releases</a></li>
													</ul>												
												</li>
												<li><a href="products9.html">Academic Text </a></li>
												<li><a href="products9.html">Romance Books </a></li>
												<li><a href="products9.html">Journals </a></li>
												<li><a href="products9.html">Children's &amp; Teen Books </a></li>
											</ul>
										</li> 
										<li class="has-children">
											<a href="#">Music</a> 
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products9.html">New Releases </a></li> 
												<li><a href="products9.html">Country Music </a></li>
												<li><a href="products9.html">Musical Instruments </a></li>
												<li><a href="products9.html">Collections</a></li>
												<li><a href="products9.html">Boxed Sets </a></li>
											</ul>
										</li> 
										<li class="has-children">
											<a href="#">Music Combo</a> 
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products9.html">Pop </a></li> 
												<li><a href="products9.html">Preorders </a></li>
												<li><a href="products9.html">Album Songs</a></li>
												<li><a href="products9.html">Top 50 CDs </a></li>
												<li><a href="products9.html">Music DVDs </a></li>
											</ul>
										</li>
										<li class="has-children">
											<a href="#">Movies</a> 
											<ul class="is-hidden"> 
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products9.html">New Releases </a></li> 
												<li><a href="products9.html">Children &amp; Family </a></li>
												<li><a href="products9.html">Action</a></li>
												<li><a href="products9.html">Classic Movies </a></li>
												<li><a href="products9.html">Bollywood Movies </a></li>
											</ul>
										</li> 
										<li class="has-children">
											<a href="#">Movies Combo</a> 
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products9.html">Hollywood Movies </a></li> 
												<li><a href="products9.html">Digital Movies </a></li>
												<li><a href="products9.html">Boxed Sets</a></li>
												<li><a href="products9.html">Animated</a></li>
												<li><a href="products9.html">Adventure</a></li>
											</ul>
										</li> 
										<li class="has-children">
											<a href="#">TV Shows</a> 
											<ul class="is-hidden">
												<li class="go-back"><a href="#"></a></li>
												<li><a href="products9.html">Serials</a></li> 
												<li><a href="products9.html">Best Programs</a></li>
												<li><a href="products9.html">Celebrations</a></li>
												<li><a href="products9.html">Top Shows</a></li> 
											</ul>
										</li> 
									</ul><!-- .cd-secondary-dropdown --> 
								</li>  
								<li><a href="sitemap.html">Full Site Directory </a></li>  
							</ul> <!-- .cd-dropdown-content -->
						</nav> <!-- .cd-dropdown -->
					</div> <!-- .cd-dropdown-wrapper -->	 
				</div>
				<div class="move-text">
					<div class="marquee"><div style="width: 100000px; margin-left: 630px; animation: marqueeAnimation-1202815 17.5159s linear 1s infinite running;" class="js-marquee-wrapper"><div class="js-marquee" style="margin-right: 0px; float: left;"><a href="offers.html"> New collections are available here...... <span>Get extra 10% off on everything | no extra taxes </span> <span> Try shipping pass free for 15 days with unlimited</span></a></div></div></div>
					<script type="text/javascript" src="js/jquery.marquee.min.js"></script>
					<script>
					  $('.marquee').marquee({ pauseOnHover: true });
					  //@ sourceURL=pen.js
					</script>
				</div>
			</div>
		</div>
	</div>
	<!-- //header --> 	
	<!-- sign up-page -->
	@section('content')    

    @show
	<!-- //sign up-page --> 
	<!-- footer-top -->
	<div class="w3agile-ftr-top">
		<div class="container">
			<div class="ftr-toprow">
				<div class="col-md-4 ftr-top-grids">
					<div class="ftr-top-left">
						<i class="fa fa-truck" aria-hidden="true"></i>
					</div> 
					<div class="ftr-top-right">
						<h4>FREE DELIVERY</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
					</div> 
					<div class="clearfix"> </div>
				</div> 
				<div class="col-md-4 ftr-top-grids">
					<div class="ftr-top-left">
						<i class="fa fa-user" aria-hidden="true"></i>
					</div> 
					<div class="ftr-top-right">
						<h4>CUSTOMER CARE</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
					</div> 
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 ftr-top-grids">
					<div class="ftr-top-left">
						<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
					</div> 
					<div class="ftr-top-right">
						<h4>GOOD QUALITY</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
					</div>
					<div class="clearfix"> </div>
				</div> 
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //footer-top --> 
	<!-- subscribe -->
	<div class="subscribe"> 
		<div class="container">
			<div class="col-md-6 social-icons w3-agile-icons">
				<h4>Keep in touch</h4>  
				<ul>
					<li><a href="#" class="fa fa-facebook icon facebook"> </a></li>
					<li><a href="#" class="fa fa-twitter icon twitter"> </a></li>
					<li><a href="#" class="fa fa-google-plus icon googleplus"> </a></li>
					<li><a href="#" class="fa fa-dribbble icon dribbble"> </a></li>
					<li><a href="#" class="fa fa-rss icon rss"> </a></li> 
				</ul>
				<ul class="apps"> 
					<li><h4>Download Our app : </h4> </li>
					<li><a href="#" class="fa fa-apple"></a></li>
					<li><a href="#" class="fa fa-windows"></a></li>
					<li><a href="#" class="fa fa-android"></a></li>
				</ul>
			</div> 
			<div class="col-md-6 subscribe-right">
				<h4>Sign up for email and get 25%off!</h4>  
				<form action="#" method="post"> 
					<input type="text" name="email" placeholder="Enter your Email..." required="">
					<input type="submit" value="Subscribe">
				</form>
				<div class="clearfix"> </div> 
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //subscribe --> 
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-info w3-agileits-info">
				<div class="col-md-4 address-left agileinfo">
					<div class="footer-logo header-logo">
						<h2><a href="index.html"><span>S</span>mart <i>Bazaar</i></a></h2>
						<h6>Your stores. Your place.</h6>
					</div>
					<ul>
						<li><i class="fa fa-map-marker"></i> 123 San Sebastian, New York City USA.</li>
						<li><i class="fa fa-mobile"></i> 333 222 3333 </li>
						<li><i class="fa fa-phone"></i> +222 11 4444 </li>
						<li><i class="fa fa-envelope-o"></i> <a href="mailto:example@mail.com"> mail@example.com</a></li>
					</ul> 
				</div>
				<div class="col-md-8 address-right">
					<div class="col-md-4 footer-grids">
						<h3>Company</h3>
						<ul>
							<li><a href="about.html">About Us</a></li>
							<li><a href="marketplace.html">Marketplace</a></li>  
							<li><a href="values.html">Core Values</a></li>  
							<li><a href="privacy.html">Privacy Policy</a></li>
						</ul>
					</div>
					<div class="col-md-4 footer-grids">
						<h3>Services</h3>
						<ul>
							<li><a href="contact.html">Contact Us</a></li>
							<li><a href="login.html">Returns</a></li> 
							<li><a href="faq.html">FAQ</a></li>
							<li><a href="sitemap.html">Site Map</a></li>
							<li><a href="login.html">Order Status</a></li>
						</ul> 
					</div>
					<div class="col-md-4 footer-grids">
						<h3>Payment Methods</h3>
						<ul>
							<li><i class="fa fa-laptop" aria-hidden="true"></i> Net Banking</li>
							<li><i class="fa fa-money" aria-hidden="true"></i> Cash On Delivery</li>
							<li><i class="fa fa-pie-chart" aria-hidden="true"></i>EMI Conversion</li>
							<li><i class="fa fa-gift" aria-hidden="true"></i> E-Gift Voucher</li>
							<li><i class="fa fa-credit-card" aria-hidden="true"></i> Debit/Credit Card</li>
						</ul>  
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //footer -->		
	<div class="copy-right"> 
		<div class="container">
			<p>Copyright © 2016.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">网页模板</a></p>
		</div>
	</div> 
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls.render();

        w3ls.cart.on('w3sb_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) {
        			items[i].set('shipping', 0);
        			items[i].set('shipping2', 0);
        		}
        	}
        });
    </script><div id="PPsbmincart"><form method="post" class="sbmincart-empty" action="https://www.paypal.com/cgi-bin/webscr" target="">    <button type="button" class="sbmincart-closer">×</button>    <ul>            </ul>    <div class="sbmincart-footer">                    <p class="sbmincart-empty-text">Your shopping cart is empty</p>            </div>    <input type="hidden" name="cmd" value="_cart">    <input type="hidden" name="upload" value="1">            <input type="hidden" name="bn" value="sbmincart_AddToCart_WPS_US">    </form></div>  
	<!-- //cart-js --> 	 
	<!-- menu js aim -->
	<script src="js/jquery.menu-aim.js"> </script>
	<script src="js/main.js"></script> <!-- Resource jQuery -->
	<!-- //menu js aim --> 
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>

<a href="#" id="toTop" style="display: block;"><span id="toTopHover"></span>To Top</a></body></html>