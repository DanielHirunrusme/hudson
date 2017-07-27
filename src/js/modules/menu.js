var settings = require( "modules/settings" ),
	throttle = require("modules/throttle");

var menu = module.exports = {

hamburger: $('#hamburger'),
lastScrollTop: 0,

init: function(){
	
	/*
	menu.hamburger.on('click', menu.toggleMenu);
	$('.site-header__logo-link').on('click', menu.logoClick);
	
	if($('.site-nav__link').length > 0) {
		$('.site-nav__link').on('click', menu.logoClick);
		 
	}
	*/
	console.log('menu init')
	$('.home-link').on('click', menu.homeLinkClick);
	$('.menu-link').on('click', menu.menuLinkClick);
	
	$(window).on('scroll', menu.winScroll);
	
},

homeLinkClick: function(){
	//$('header').addClass('hero-menu');
},

menuLinkClick: function(){
	console.log('menu link clicked')
	//$('header').removeClass('hero-menu');
},

logoClick: function(e){
	e.preventDefault();
	
	console.log('logoClick')
	if($('body').hasClass('menu-open')){
		menu.hideMenu();
	} else {
		$('body').animate({scrollTop:0}, 1000);
	}
	
},

toggleMenu: function(){
	
	if( !$('body').hasClass('menu-open') ) {
		
		menu.showMenu();
		
	} else {
		
		menu.hideMenu();
		
	}
	
},

toggleSiteNav: function(e){
	
	e.preventDefault();
	
	if( !$(e.currentTarget).parent().hasClass('open') && $(e.currentTarget).parent().find('.site-nav__page-content').length > 0 ){
		$('.site-nav li.open').removeClass('open');
		$(e.currentTarget).parent().addClass('open');
	}
	
},

showMenu: function(){
	
	$('body').addClass('menu-open');	
	this.hamburger.addClass('menu-open');
	$(window).on('click', menu.windowClickMenu);
},

hideMenu: function(){
	
	$(window).off('click', menu.windowClickMenu);
	$('body').removeClass('menu-open');	
	this.hamburger.removeClass('menu-open');
	$('.site-nav li.open').removeClass('open');
	
},

winScroll: function(e) {
	if($('body').hasClass('scrolling')) return true;
	var st = $('body').scrollTop();
    if (st > menu.lastScrollTop){
        if(!$('header').hasClass('hidden')) $('header').addClass('hidden');
    } else {
		if($('header').hasClass('hidden')) $('header').removeClass('hidden');
    }
    menu.lastScrollTop = st;
	   
	 
	if(settings.page == 'home' || settings.page == 'project'){
		if($('body').scrollTop() > $(window).height()){
			$('header').removeClass('hero-menu');
		} else {
			$('header').addClass('hero-menu');
		}
	} else {
		
	}
},

windowClickMenu: function(e){
	
	if(e.clientX > $(window).width()/2) {
		menu.hideMenu();
	}
	
}
	
};
