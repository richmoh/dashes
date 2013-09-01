<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <script>
//        
//        var x = 0;
////var xClicked = 0;
//var y = 0;
//        $(document).ready(function(){
//        
//            $(this).click(function(e){
//                
//                 var xClicked = e.pageX;
//        
//                var yClicked =  e.pageY;
//                
//                setPosition(xClicked, yClicked);
//                
//                $.get("http://127.0.0.1:1337/", { x: xClicked, y: yClicked } );
//                
//                return false;
//            });
//            
//            $('a').click(function(){
//        
////        $(this).css('background', 'red');
//        
//        var position = $(this).offset();
//        
//        setPosition(position.left+($(this).width()/2), position.top+($(this).height()/2));
//        
//        
//        $.get("http://127.0.0.1:1337/", { x: position.left+($(this).width()/2), y: position.top+($(this).height()/2) } );
//        
//        
//        
//        return false;
//    });
//        
//        });
    </script>
    </head>
    <body>
        
        <?php ?>

        <div id="control-area">
            <div id="cursor"></div>
            <?php 
$url = 'http://bbc.co.uk';

$html = file_get_contents($url);

echo $html;
?>

            <!--iframe src="http://bugpurge.com" style="width: 100%; height: 1000px;"></iframe-->
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main2.js"></script>
        

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
