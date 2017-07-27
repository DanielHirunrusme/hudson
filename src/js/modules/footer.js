var footer = module.exports = {

	toggleBtn: $('.footer-nav__link'),
	footerContent: $('.footer-nav__page-content'),

init: function(){
	
	footer.toggleBtn.on('click', footer.toggleFooter);
	
},

toggleFooter: function(e){
	
	e.preventDefault();
	
	if( !$('body').hasClass('footer-open') ) {
		
		footer.showFooter();
		
	} else {
		
		footer.hideFooter();
		
	}
	
},

showFooter: function(){
	
	$('body').addClass('footer-open');	
	footer.footerContent.addClass('open').slideDown();
	$('body').animate({ scrollTop: $('body')[0].scrollHeight }, 1000);
	
},

hideFooter: function(){
	
	$('body').removeClass('footer-open');	
	footer.footerContent.removeClass('open').slideUp();
	
},

windowClickMenu: function(e){
	
	
	
}
	
};
