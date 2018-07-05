// get year and append into footer
var getDate = new Date();
var footerYear = getDate.getFullYear();
var footerDateSelector = $('#footerDate');
$(footerDateSelector).text(footerYear);

// Mobile Nav
$('.mobile-nav__icon').click(function() {
	$(this).siblings('nav').slideToggle();
	$(this).find('.mobile-nav__icon-inner').toggleClass('mobile-nav__icon-inner--active');
})

