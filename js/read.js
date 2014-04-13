
$(document).ready(function(){
			$(".button").click(function(){
					id = $(this).attr('id');console.log(id);
					$('div#page_4 .read').fadeIn('slow');
					$('div.inside_'+id).show();
			});
			
			$('div#page_4 .read').click(function(e){
				
				if(e.target.id != "read")return;
				$(this).fadeOut("slow");
				$('div.inside').hide();
			});
});

