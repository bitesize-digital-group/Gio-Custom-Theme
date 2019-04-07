<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<link rel="shortcut icon" href="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicon.ico" type="image/x-icon">

	<title><?php echo get_bloginfo( 'name' ); ?></title>
</head>
<body>
<?php wp_head(); ?>
<div class="all-headers-cont sticky-top">

<div class="first-header d-none d-md-inline-block">
  <div class="first-cont container d-flex flex-row">
    <div>
    	<span class="py-2 d-md-inline-block float-left contact-top-info" style="margin-left: 100px;" href="#">Have any questions? 1-800-934-9479  |  installer locator</span>
    </div>
   	<div class="username-cont d-none d-md-inline-block">
   		 <a class="py-2 d-none d-md-inline-block header-sigin-link" href="#">Sign In</a>
   		 <font class="py-2 d-none header-name-cont" href="#">Welcome, <span>John Doe</span></font>
   	</div>

  <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark">
	<a class="py-3 pr-5 mr-auto d-block d-md-none" href="/">
		 <img class="buyete-logo" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/buyete-logo.png">
	</a>

	<div class="d-none d-flex d-md-none flex-fill justify-content-center">
    	<span class="pl-5 d-md-inline-block float-left text-white text-center" href="#" style="font-size: 0.9rem;"> Have any questions? <br>1-800-934-9479</span>
    </div>

  <button class="navbar-toggler ml-auto" type="button" data-toggle="slide-collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="container d-flex flex-row justify-content-center align-items-center">
     <ul class="navbar-nav mr-auto site-header">
    	<li class="nav-item" style="margin-right: 50px;">
    		<a class="py-3 pr-5 navbar-brand d-none d-md-block" href="/">
		     <img class="buyete-logo" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/buyete-logo.png">
		    </a>
    	</li>
   <?php 
    $args = array(
    	"theme_location" => "primary",
    	'menu_class'     => 'py-3 d-none d-md-inline-block',
    );

    $menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)
                                           // This returns an array of menu locations ([LOCATION_NAME] = MENU_ID);

	$menuID = $menuLocations['primary']; // Get the *primary* menu ID

	$primaryNav = wp_get_nav_menu_items($menuID); //
    
    foreach ( $primaryNav as $navItem ) {

    echo '<li class="nav-item"><a class="nav-link ml-2" href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a></li>';

} ?>
    </ul>
    <div class="store-main-utils">
	    <div class="dropdown accountDropdown">
		 <a class="d-none d-md-inline-block dropdown-toggle" id="dropdownAccountButton" href="#" data-toggle="dropdown">
	    	<svg id="i-user" viewBox="0 0 32 32" width="20" height="20" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
			    <path d="M22 11 C22 16 19 20 16 20 13 20 10 16 10 11 10 6 12 3 16 3 20 3 22 6 22 11 Z M4 30 L28 30 C28 21 22 20 16 20 10 20 4 21 4 30 Z" />
			</svg>
	      </a>
		  <div class="dropdown-menu" aria-labelledby="dropdownAccountButton">
		    <div class="row">
		    	<div class="col">
		    		<a href="#" class="d-none header-name-cont sign-out-link">Sign Out</a>
		    	</div>
		    </div>
		    <div class="row">
		    	<div class="col">
		    		<a href="#" class="d-none d-md-inline-block header-sigin-link">Sign In</a>
		    	</div>
		    </div>
		  </div>
		</div>
	   
	    <div class="dropdown ddSearch">
		  <a class="d-none d-md-inline-block dropdown-toggle" id="dropdownMenuButton" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    	<svg id="i-search" viewBox="0 0 32 32" width="20" height="20" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
			    <circle cx="14" cy="14" r="12" />
			    <path d="M23 23 L30 30"  />
			</svg>
	    </a>
		  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
		    <h6>Magic Search</h6>
		    <div class="form-group">
			   <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Part#/Tag/Interchange">
			</div>
			<button type="submit" class="btn btn-primary" style="font-size:0.9rem;background-color: #df0909 !important;border-color: rgba(0,0,0,0) !important; width: 100% !important; border-radius: 0 !important;text-transform:uppercase;padding: 10px 10px !important;">SEARCH</button>
			<br>
			<h6 style="margin-top: 20px;">VIN</h6>
		    <div class="form-group">
			   <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Vin Number">
			</div>
			<button type="submit" class="btn btn-primary" style="font-size:0.9rem;background-color: #df0909 !important;border-color: rgba(0,0,0,0) !important; width: 100% !important; border-radius: 0 !important;text-transform:uppercase;padding: 10px 10px !important;">SEARCH</button>
			<br>
			<h6 style="margin-top: 20px;">Vehicle Application</h6>
			<div class="form-group">
			   <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Select Part Type">
			</div>
			<div class="form-group">
			   <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Select Year">
			</div>
			<div class="form-group">
			   <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Select Make">
			</div>
			<div class="form-group">
			   <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Select Model">
			</div>
			<div class="form-group">
			   <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Select Engine Size">
			</div>
			<div class="form-group">
			   <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Select Drive Size">
			</div>
			<button type="submit" class="btn btn-primary" style="font-size:0.9rem;background-color: #df0909 !important;border-color: rgba(0,0,0,0) !important; width: 100% !important; border-radius: 0 !important;text-transform:uppercase;padding: 10px 10px !important;">SEARCH</button>
		  </div>
		</div>
	    <a class="d-none d-md-inline-block" href="#">
	    	<svg id="i-heart" viewBox="0 0 32 32" width="20" height="20" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
		    <path d="M4 16 C1 12 2 6 7 4 12 2 15 6 16 8 17 6 21 2 26 4 31 6 31 12 28 16 25 20 16 28 16 28 16 28 7 20 4 16 Z" />
		</svg>
	    </a>
	    <a class="d-none d-md-inline-block" href="#">
	    	<svg id="i-cart" viewBox="0 0 32 32" width="20" height="20" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
		    <path d="M6 6 L30 6 27 19 9 19 M27 23 L10 23 5 2 2 2" />
		    <circle cx="25" cy="27" r="2" />
		    <circle cx="12" cy="27" r="2" />
		</svg>
		<span class="buyete-badge-count">9</span>
	    </a>
    </div>
    	
    </div>
  </div>
</nav>
	
</div>

<div class="navbar-right-side-cont d-block d-md-none">

<div class="navbar-right-side px-4 py-4">
<a href="#" class="float-right side-nav-close fas fa-times text-light mb-3"></a>
<div class="store-main-utils mobile mb-3">
		 <a class="flex-fill" id="dropdownAccountButton" href="#" data-toggle="dropdown">
	    	<svg id="i-user" viewBox="0 0 32 32" width="20" height="20" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
			    <path d="M22 11 C22 16 19 20 16 20 13 20 10 16 10 11 10 6 12 3 16 3 20 3 22 6 22 11 Z M4 30 L28 30 C28 21 22 20 16 20 10 20 4 21 4 30 Z" />
			</svg>
	      </a>
		  <a class="flex-fill" id="dropdownMenuButton" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    	<svg id="i-search" viewBox="0 0 32 32" width="20" height="20" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
			    <circle cx="14" cy="14" r="12" />
			    <path d="M23 23 L30 30"  />
			</svg>
	    </a>
	    <a class="flex-fill" href="#">
	    	<svg id="i-heart" viewBox="0 0 32 32" width="20" height="20" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
		    <path d="M4 16 C1 12 2 6 7 4 12 2 15 6 16 8 17 6 21 2 26 4 31 6 31 12 28 16 25 20 16 28 16 28 16 28 7 20 4 16 Z" />
		</svg>
	    </a>
	    <a class="flex-fill" href="#">
	    	<svg id="i-cart" viewBox="0 0 32 32" width="20" height="20" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
		    <path d="M6 6 L30 6 27 19 9 19 M27 23 L10 23 5 2 2 2" />
		    <circle cx="25" cy="27" r="2" />
		    <circle cx="12" cy="27" r="2" />
		</svg>
		<span class="buyete-badge-count">9</span>
	    </a>
    </div>



	 <ul class="navbar-nav mr-auto">
    	<li class="nav-item" style="margin-right: 50px;">
    		<a class="py-3 pr-5 navbar-brand d-none d-md-block" href="/">
		     <img class="buyete-logo" src="<?php echo get_bloginfo('template_directory'); ?>/assets/images/buyete-logo.png">
		    </a>
    	</li>
   <?php 
    $args = array(
    	"theme_location" => "primary",
    	'menu_class'     => 'py-3 d-none d-md-inline-block',
    );

    $menuLocations = get_nav_menu_locations(); // Get our nav locations (set in our theme, usually functions.php)
                                           // This returns an array of menu locations ([LOCATION_NAME] = MENU_ID);

	$menuID = $menuLocations['primary']; // Get the *primary* menu ID

	$primaryNav = wp_get_nav_menu_items($menuID); //
    
    foreach ( $primaryNav as $navItem ) {

    echo '<li class="nav-item"><a class="nav-link ml-2 text-light" href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a></li>';

} ?>
    </ul>
	<hr style="border: 1px solid rgba(255,255,255,0.4);">
	<ul class="navbar-nav mr-auto">
		<li class="nav-item"><a class="nav-link ml-2 text-light" href="#">Installer Locator</a></li>
	</ul>

</div>
	
</div>



