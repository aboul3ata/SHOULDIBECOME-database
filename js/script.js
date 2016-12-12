$(document).ready(function() {

$(document).ready( function() {
$('.dropdown-toggle').dropdown();
});
    
    
    

// logged in page dynamically changing text and mentors 
    
var $jobselected = $('#txt1')    
 $("#engineer").click(function(){
        $('.eng-card') .css('display' , 'block');
        $('.fin-card') .css('display' , 'none');     
        if ( $jobselected.text() != 'Engineer' )    
            $jobselected.text('Engineer');  
            console.log('hi')
    });    
    
 $("#finance").click(function(){
        $('.fin-card') .css('display' , 'block');
        $('.eng-card') .css('display' , 'none');
        if ( $jobselected.text() != 'Finance' )    
            $jobselected.text('Finance');  
            console.log('hi2')
    });      
    
    
var $opacity_animation=0.1;
var $opacity_change=0.1;
//Animating How it works section using Tweene library
//create a TimelineLite instance
var tl = new TimelineLite();

tl.to($('#animation1'), 0.3, {display:"block",ease:Expo.easeOut} );
tl.to($('#animation1'), 0.1, {opacity:$opacity_animation});
$opacity_animation=$opacity_animation+$opacity_change


tl.to($('#animation2'), 0.3, {display:"block",ease:Expo.easeOut});
tl.to($('#animation2'), 0.1, {opacity:$opacity_animation});
$opacity_animation=$opacity_animation+$opacity_change
//tl.to($('#Search-howitworks'), 2, {display:"block", ease: Back.easeInOut.config(1.7), y: -300 });

tl.to($('#animation3'), 0.3, {display:"block",ease:Expo.easeOut});
tl.to($('#animation3'), 0.1, {opacity:$opacity_animation});
$opacity_animation=$opacity_animation+$opacity_change

tl.to($('#animation4'), 0.5, {display:"block",ease:Expo.easeOut});
tl.to($('#animation4'), 0.1, {opacity:$opacity_animation});
$opacity_animation=$opacity_animation+$opacity_change

tl.to($('#animation5'), 0.5, {display:"block",ease:Expo.easeOut});
tl.to($('#animation5'), 0.1, {opacity:$opacity_animation});
$opacity_animation=$opacity_animation+$opacity_change

tl.to($('#animation6'), 0.5, {display:"block",ease:Expo.easeOut});
tl.to($('#animation6'), 0.1, {opacity:$opacity_animation});
$opacity_animation=$opacity_animation+$opacity_change

tl.to($('#animation6'), 0.5, {display:"block",ease:Expo.easeOut});
tl.to($('#animation6'), 0.1, {opacity:$opacity_animation});
$opacity_animation=$opacity_animation+$opacity_change
tl.to($('#Connect-howitworks'), 1, {display:"block", ease: Back.easeInOut.config(1.7), y: -300 },'2.5');

tl.to($('#animation7'), 0.3, {display:"block",ease:Expo.easeOut});
tl.to($('#animation7'), 0.1, {opacity:$opacity_animation});
$opacity_animation=$opacity_animation+$opacity_change

tl.to($('#animation8'), 0.3, {display:"block",ease:Expo.easeOut});
tl.to($('#animation8'), 0.1, {opacity:$opacity_animation});
$opacity_animation=$opacity_animation+$opacity_change

tl.to($('#animation8'), 0.5, {display:"block",ease:Expo.easeOut});
tl.to($('#animation8'), 0.1, {opacity:$opacity_animation});
$opacity_animation=$opacity_animation+$opacity_change

tl.to($('#animation9'), 0.5, {display:"block",ease:Expo.easeOut});
tl.to($('#animation9'), 0.1, {opacity:$opacity_animation});
$opacity_animation=$opacity_animation+$opacity_change

tl.to($('#animation10'), 0.5, {display:"block",ease:Expo.easeOut});
tl.to($('#animation10'), 0.1, {opacity:$opacity_animation});
$opacity_animation=$opacity_animation+$opacity_change

tl.to($('#animation11'), 0.5, {display:"block",ease:Expo.easeOut});
tl.to($('#animation11'), 0.1, {opacity:$opacity_animation});
$opacity_animation=$opacity_animation+$opacity_change
tl.to($('#Engage-howitworks'), 1, {display:"block", ease: Back.easeInOut.config(1.7), y: -300 },'5.6');


//make animation happen at certain part of the page
$(window).on('scroll', function() {
    var y_scroll_pos = window.pageYOffset;
    var scroll_pos_test = 58;             // set to whatever you want it to be

    if(y_scroll_pos > scroll_pos_test) {
    tl.resume();
    console.log("hi")
    }else{
    tl.pause();  
        console.log("bye")    
    }
    

});
//dynamically changing font size as window is changed
$('#sign-up-text').flowtype({ 
 minimum   : 500, 
 maximum   : 1000,  
 minFont   : 6, 
 maxFont   : 30, 
 fontRatio : 20, 
});  
    
$('#sign-up-text-mobile').flowtype({ 
 minimum   : 500, 
 maximum   : 1000,  
 minFont   : 6, 
 maxFont   : 30, 
 fontRatio : 20, 
});  
    
$('#quote1').flowtype({ 
 minimum   : 500, 
 maximum   : 1000,  
 minFont   : 6, 
 maxFont   : 15, 
 fontRatio : 28, 
});      
$('#companies-featured,#How-works-text,#testimonies-text').flowtype({ 
 minimum   : 300, 
 maximum   : 1200, 
 minFont   : 6, 
 maxFont   : 30, 
 fontRatio : 30, 
});
      

   });


