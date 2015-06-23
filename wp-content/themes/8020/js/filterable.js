/*
* Copyright (C) 2009 Joel Sutherland.
* Liscenced under the MIT liscense
*/

(function($) {
	$.fn.filterable = function(settings) {
		settings = $.extend({
			useHash: false,
			animationSpeed: 500,
			show: { width: 'show', opacity: 'show' },
			hide: { width: 'hide', opacity: 'hide' },
			useTags: true,
			tagSelector: '#cat-team-menu a',
			selectedTagClass: 'current',
			allTag: 'all'
		}, settings);
		
		return $(this).each(function(){
		
			/* FILTER: select a tag and filter */
			$(this).bind("filter", function( e, tagToShow ){
				if(settings.useTags){
					$(settings.tagSelector).removeClass(settings.selectedTagClass);
					$(settings.tagSelector + '[href=' + tagToShow + ']').addClass(settings.selectedTagClass);
				}
				$(this).trigger("filterportfolio", [ tagToShow.substr(1) ]);			
			});
		
			/* FILTERPORTFOLIO: pass in a class to show, all others will be hidden */
			$(this).bind("filterportfolio", function( e, classToShow ){
				if(classToShow == settings.allTag){
					$(this).trigger("show");
					$(".detail .close").click();				
				}else{
					$(this).trigger("show", [ '.' + classToShow ] );
					$(this).trigger("hide", [ ':not(.' + classToShow + ')' ] );				
					$(".detail .close").click();					
				}
				if(settings.useHash){
					//location.hash = '#' + classToShow;				
				}
			});
			
			/* SHOW: show a single class*/
			$(this).bind("show", function( e, selectorToShow ){
				$(this).children(selectorToShow).animate(settings.show, settings.animationSpeed, function(){
					$("ul#team-list li").removeClass("last");
					$('ul#team-list li:visible').each(function(idx) {
						if (idx%6 == 5){
							$(this).addClass("last");
						}
					});
				});				
			});
			
			/* SHOW: hide a single class*/
			$(this).bind("hide", function( e, selectorToHide ){
				$(this).children(selectorToHide).animate(settings.hide, settings.animationSpeed, function(){
					$("ul#team-list li").removeClass("last");
					$('ul#team-list li:visible').each(function(idx) {
						if (idx%6 == 5){
							$(this).addClass("last");
						}
					});
				});	
			});
			
			/* ============ Check URL Hash ====================*/
			if(settings.useHash){
				if(location.hash != '')
					$(this).trigger("filter", [ location.hash ]);
				else
					$(this).trigger("filter", [ '#' + settings.allTag ]);
			}
			
			/* ============ Setup Tags ====================*/
			if(settings.useTags){
				$(settings.tagSelector).click(function(e){
					$('#team-list').trigger("filter", [ $(this).attr('href') ]);
					
					$(settings.tagSelector).removeClass('current');
					$(this).addClass('current');
					e.preventDefault();					
					return false;
				});
			}
		});
	}
})(jQuery);