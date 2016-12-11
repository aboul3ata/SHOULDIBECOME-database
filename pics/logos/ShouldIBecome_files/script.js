//changing size of font dynamically using flowtype library

$(document).ready(function() {
$('#sign-up-text').flowtype({ 
 minimum   : 500, 
 maximum   : 1000,  
 minFont   : 6, 
 maxFont   : 30, 
 fontRatio : 20, 
});  
    

    
$('#companies-featured,#How-works-text').flowtype({ 
 minimum   : 300, 
 maximum   : 1200, 
 minFont   : 6, 
 maxFont   : 30, 
 fontRatio : 30, 
});  
        });
