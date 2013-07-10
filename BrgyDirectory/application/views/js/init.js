$(function(){
	
	$('.dist1').scroller({
		container: {
			easing: 'easeOutQuad'
		},
		options: {
			margin: 10,
			zoom: 2,
			easing: ['easeInBounce', 'easeOutBounce'],
			duration: [200, 1000]
		},
		onclick: function(a, img){
			var alt = "District 1 - " + img.attr('alt'), h2 = $('.title1');
			h2.text(alt);
		}
	});
        
        $('.dist2').scroller({
		container: {
			easing: 'easeOutQuad'
		},
		options: {
			margin: 10,
			zoom: 2,
			easing: ['easeInBounce', 'easeOutBounce'],
			duration: [200, 1000]
		},
		onclick: function(a, img){
			var alt = "District 2 - " + img.attr('alt'), h2 = $('.title2');
			h2.text(alt);
		}
	});
        
        $('.dist3').scroller({
		container: {
			easing: 'easeOutQuad'
		},
		options: {
			margin: 10,
			zoom: 2,
			easing: ['easeInBounce', 'easeOutBounce'],
			duration: [200, 1000]
		},
		onclick: function(a, img){
			var alt = "District 3 - " + img.attr('alt'), h2 = $('.title3');
			h2.text(alt);
		}
	});
	
	
});
