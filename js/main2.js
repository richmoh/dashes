var x = 0;
//var xClicked = 0;
var y = 0;
//var yClicked = 0;

$(document).ready(function(){
    
//    $(document).bind('mousemove',function(e){ 
//        
//        x = e.pageX;
//        
//        y =  e.pageY;
//        
//        $('#cursor').css('top', y).css('left', x);
//        
//    });
//    
//    
//    $(document).mousemove(function(e){ 
//        
//        x = e.pageX;
//        
//        y =  e.pageY;
//        
//        $('#cursor').css('top', y).css('left', x);
//    });

    $(document).click(function(e){
        
        xClicked = e.pageX;
        
        yClicked =  e.pageY;
        
//        $(e.target).css('background', 'red');
        
        var position = $(e.target).offset();
        
        setPosition(xClicked, yClicked);
        
        return false;
    });
    
    $('a').click(function(){
        
//        $(this).css('background', 'red');
        
        var position = $(this).offset();
        
        setPosition(position.left+($(this).width()/2), position.top+($(this).height()/2));
        
        return false;
    });
    
});


function setPosition(x, y)
{
//    alert(x+' - '+y);
    $.get("http://127.0.0.1:1337/", { x: x, y: y } );
    
    $( "#cursor" ).animate({
    
        left: x+'px',
        top: y+'px'
    
    }, 500, function() {
      // Animation complete.
    });
}

function getRemotePosition()
{
    
}
