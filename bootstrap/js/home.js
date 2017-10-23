$(document).ready(
    function() {
        $('.open').click(
            function() {
                var target=$(this).data('target');
                $('.overlay').show('slow',
                    function() {
                        $('.container.'+target).fadeIn('slow');
                        
                    }
                );
            }
        );
         $('.close').click(
            function() {
                $(this).parents('.container').hide('slow',
                     function() {
                          $('.overlay').fadeOut();          
                     }    
                );
            }
        );  
    }
);