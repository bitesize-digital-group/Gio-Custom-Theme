$('.thumbnail').click(function(e) {
  var clicked = $(this);
  var newSelection = clicked.data('big');
  var $img = $('.primary').css("background-image","url(" + newSelection + ")");
  clicked.parent().find('.thumbnail').removeClass('selected');
  clicked.addClass('selected');
  $('.primary').empty().append($img.hide().fadeIn('slow'));
  e.preventDefault();
});

$(document).ready(function(){
	var magcust = JSON.parse(localStorage.getItem('MagCust'));

	if(magcust) {
		$('.header-sigin-link').removeClass('d-md-inline-block');
		console.log(magcust.firstname);
		$('.header-name-cont span').text(magcust.firstname + " " + magcust.lastname);
		$('.header-name-cont').addClass('d-md-inline-block');
	} else {
		$('.header-name-cont').removeClass('d-md-inline-block');
	}
});

$('.sign-out-link').click(function(){
	localStorage.removeItem('MagCust');
	localStorage.removeItem('StoreIDToken');
	window.location.replace("/");
});


$('#submitLogin').click(function(e){
	if(validateForms()) {
		submitLogin();
	}
});

function validateForms() {
	var emailInput = document.querySelector('#login-email');
	var passwordInput = document.querySelector('#login-pass');
	var form = document.querySelector('.login-form');
	form.classList.add('was-validated');

	if(!validateEmail(emailInput.value)) {
		var emailFeedback = document.querySelector('.email-feedback');
		emailFeedback.innerHTML = 'Please enter a valid email address (Ex: johndoe@domain.com)';
		return false;
	}
	return true;
}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function submitLogin() {
  var emailInput = document.querySelector('#login-email');
  var passwordInput = document.querySelector('#login-pass');
  
  $('.pure-material-progress-circular').show();
  $('.lbl-signin').hide();

  axios({
  	method: 'post',
 	url: 'http://store.paykame.com/rest/V1/integration/customer/token',
  	data: {
    username: emailInput.value,
    password: passwordInput.value,
  	}
 }).then(res => {
 	var idToken = res.data;
	setCustomerInfo(idToken);
 }).catch(error => {
 	$('.pure-material-progress-circular').hide();
  	$('.lbl-signin').show();
 	$(".login-error-notice").text(error.response.data.message);
 });
}

function setCustomerInfo(idToken) {
	var custinfo;
	axios({
		  	method: 'get',
		 	url: 'http://store.paykame.com/rest/V1/customers/me',
		  	data: {},
		  	headers: {'Authorization': "bearer " + idToken}
		 }).then(res => {
			localStorage.setItem('StoreIDToken', idToken);
			localStorage.setItem('MagCust', JSON.stringify(res.data));
			window.location.replace("/account");
		 });
}
