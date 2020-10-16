
      $(document).ready(function(){
 		  var str=location.href.toLowerCase();
        $('.ddsmoothmenu li a').each(function() {
                if (str.indexOf(this.href.toLowerCase()) > -1) {
						$("li.selected").removeClass("selected");
                        $(this).parent().addClass("selected"); 
                   }
              	 							}); 
		$('li.selected').parents().each(function(){
												  
					if ($(this).is('li')){
						$(this).addClass("selected"); 
						}							  
												  });
	   })