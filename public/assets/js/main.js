/*
to send ajax request to methods use the $base_url variable and append the admin if it is for admin and controller/function
keep in mind that the routes file also needs to have the route specified or else it will throw an error
use php artisan routes to see all the routes and the http methods
*/
$(document).ready(function(){
	//set a global variable for base url
	$base_url = window.location.origin;

	$('.delete-photo').click(function(){
		var container = $(this).parent();
		var photo_id = $(this).data('fileid');
		$.ajax({
			url : $base_url + '/admin/gallery/destroy',
			type: 'delete',
			data:{
				photo_id : photo_id
			},
			success: function(data){
				if(data.success)
				{
					container.html(data.msg);
				}
				else
				{
					container.append(data.msg);
				}
			}
		});
	});

	$('.topmenus li').each( function(){
		console.log($(this));

		$(this).mouseenter(function(event){
			$(this).children('div').show();
		}).mouseleave(function(event) {
			/* Act on the event */
			$(this).children('div').hide();
		});
	})
});