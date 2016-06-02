		$(document).ready(function(){
			$(".more").click(function(){
				 $(".text" + $(this).attr('t')).toggle(); 
			}); 
		});
		$(document).ready(function(){
			$(".less").click(function(){
				 $(".text" + $(this).attr('t')).toggle(); 
			}); 
		});