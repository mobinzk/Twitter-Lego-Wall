$(function(){

	var Ptext = '';

	var twitter = {
		init: function(data) {
			twitter.get(data);
		},
		get: function(data) {
			$.ajax({
				url: '/get',
				type: 'get',
				data: "text=" +  encodeURIComponent(data),
				dataType: 'html',

				success: function(response){

					if(data) {
						twitter.firstLoad(response);
					} else if(Ptext != response) {
						Ptext = response;
						twitter.load(response);
					}

				},
				error:function(){
					console.log('failed');
				}
			});
		},
		firstLoad: function(data){
			$('.wrapper').hide().html(data);
			setTimeout( function(){
				$('.wrapper').fadeIn('slow');

				twitter.get();
			}, 1000);
		},
		load: function(data) {
			$('.wrapper').fadeOut("slow", function() {
				$('.wrapper').html(data);
			});

			setTimeout( function(){
				$('.wrapper').fadeIn('slow');
			}, 1000);
		}
	};

	twitter.init("initialisation... ABCDEFGHIJKLMNOPQRSTVWUXYZ?!:)#");

	setInterval(function(){
      twitter.get();
    }, 30000);
});

