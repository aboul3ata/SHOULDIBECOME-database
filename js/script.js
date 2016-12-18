$(document).ready(function() {

$('.dropdown-toggle').dropdown();

    //basic functionalities of home page sign up button and logged in drop down
$(function(){
    $('#sign-up-btn').click(function(){
        window.location='register.php'
        console.log('button')
    });
});    

$(function(){
    $('#sign-up-btn-mob').click(function(){
        window.location='register.php'
        console.log('button')
    });
});    
    

    
//dynamically changing backgrund image    
var images = ['image1.jpg', 'image2.jpg', 'image3.jpg', 'image4.jpg', 'image5.jpg'];
$('.top').css({'background-image': 'url(pics/' + images[Math.floor(Math.random() * images.length)] + ')'});    

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
    
    
//changing buttons for pending status, check to see if there is there a more efficient way to do it    
var $becomepending = $('#btn1')
    $('#btn1').click(function(){
       $('#btn1').removeClass('bg-primary')  ;       
       $('#btn1').addClass('color-secondary') ;
        if ( $becomepending.text() != 'Pending' )    
            $becomepending.text('Pending');  
            console.log('hi3')
    });
    
    
var $becomepending2 = $('#btn2')
    $('#btn2').click(function(){
       $('#btn2').removeClass('bg-primary')  ;       
       $('#btn2').addClass('color-secondary') ;
        if ( $becomepending2.text() != 'Pending' );    
            $becomepending2.text('Pending');  
            console.log('hi3')
    });    
    
    
    
var $becomepending3 = $('#btn3')
    $('#btn3').click(function(){
       $('#btn3').removeClass('bg-primary')  ;       
       $('#btn3').addClass('color-secondary') ;
        if ( $becomepending3.text() != 'Pending' );    
            $becomepending3.text('Pending');  
            console.log('hi3')
    }); 
    
    
var $becomepending4 = $('#btn4')
    $('#btn4').click(function(){
       $('#btn4').removeClass('bg-primary')  ;       
       $('#btn4').addClass('color-secondary') ;
        if ( $becomepending4.text() != 'Pending' );    
            $becomepending4.text('Pending');  
            console.log('hi3')
    });  
    
    
var $becomepending5 = $('#btn5')
    $('#btn5').click(function(){
       $('#btn5').removeClass('bg-primary')  ;       
       $('#btn5').addClass('color-secondary') ;
        if ( $becomepending5.text() != 'Pending' );    
            $becomepending5.text('Pending');  
            console.log('hi3')
    });     
    
var $becomepending6 = $('#btn6')
    $('#btn6').click(function(){
       $('#btn6').removeClass('bg-primary')  ;       
       $('#btn6').addClass('color-secondary') ;
        if ( $becomepending6.text() != 'Pending' );    
            $becomepending6.text('Pending');  
            console.log('hi3')
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
    console.log("hi animation")
    }else{
    tl.pause();  
        console.log("bye animation")    
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


