(function ( $ ) {
	$.fn.categoryFilter=function(selector){
		this.click( function() {
			var categoryValue = $(this).attr('data-filter');
			$(this).addClass('active').siblings().removeClass('active');
			if(categoryValue=="all") {
				$('.filter').show();
			} else {
				$(".filter").not('.'+categoryValue).hide();
            	$('.filter').filter('.'+categoryValue).show();
			}
		});
	}
}( jQuery ));