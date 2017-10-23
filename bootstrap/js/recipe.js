function openCat(catName, elmnt, color) {
    // Hide all elements with class="tabcontent" by default */
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Remove the background color of all tablinks/buttons
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }

    // Show the specific tab content
    document.getElementById(catName).style.display = "block";

    // Add the specific color to the button used to open the tab content
    elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();


$(document).ready(
    function() {
        $('.open').click(
            function() {
                var target=$(this).data('target');
                $('.overlay2').show('slow',
                    function() {
                        $('.container2.'+target).fadeIn('slow');
                        
                    }
                );
            }
        );
         $('.close').click(
            function() {
                $(this).parents('.container2').hide('slow',
                     function() {
                          $('.overlay2').fadeOut();          
                     }    
                );
            }
        );  
    }
);
