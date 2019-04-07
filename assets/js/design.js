$('[data-toggle="slide-collapse"]').on('click', function() {
    $navMenuCont = $('.navbar-right-side-cont');
    $navMenuCont.addClass('active');
});

$(".navbar-right-side-cont").click(function(){
	$navMenuCont = $('.navbar-right-side-cont');
    $navMenuCont.removeClass('active');
});