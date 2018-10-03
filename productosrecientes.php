<html>
     <head> 
    <script type="text/javascript">
        var GB_ROOT_DIR = "./greybox/";
    </script>

    <script type="text/javascript" src="greybox/AJS.js"></script>
    <script type="text/javascript" src="greybox/AJS_fx.js"></script>
    <script type="text/javascript" src="greybox/gb_scripts.js"></script>
    <link href="greybox/gb_styles.css" rel="stylesheet" type="text/css" media="all" />

    <script type="text/javascript" src="static_files/help.js"></script>
          <meta charset="utf-8" />
          <meta name="robots" content="noodp,noydir" />
          <link rel="icon" href="favicon.png" type="image/x-icon" />
          <link rel="stylesheet" href="menu_style.css" type="text/css" media="screen" />
          <link rel="stylesheet" type="text/css" href="css/style.css" />

          <style>
	          ul.lof-main-wapper li {
		          position:relative;	
	          }
          </style>
          <link rel="stylesheet" type="text/css" href="recuadro/css/recuadro.css" />
<link rel="stylesheet" type="text/css" href="css/estilo.css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="recuadro/js/jquery.lightbox-0.5.pack.js"></script>
<script type="text/javascript" src="js/scriptgaleria.js"></script>
          <!-- scrip para click derecho -->
<script language=JavaScript> 
var message="Función Desactivada! Derechos Reservados por Grupo Sovi."; 

/////////////////////////////////// 
function clickIE4(){ 
if (event.button==2){ 
alert(message); 
return false; 
} 
} 

function clickNS4(e){ 
if (document.layers||document.getElementById&&!document.all){ 
if (e.which==2||e.which==3){ 
alert(message); 
return false; 
} 
} 
} 

if (document.layers){ 
document.captureEvents(Event.MOUSEDOWN); 
document.onmousedown=clickNS4; 
} 
else if (document.all&&!document.getElementById){ 
document.onmousedown=clickIE4; 
} 

document.oncontextmenu=new Function("alert(message);return false" ) 


</script>
      
        
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
  function initialize() {
    var latlng = new google.maps.LatLng(-2.156429,-79.89426);
    var myOptions = {
      zoom: 75,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.HYBRID
    };
    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
  }	
</script> 
          <title>
              Cograletsa
          </title>
          <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-25456616-1']);
  _gaq.push(['_setDomainName', '.gruposovi.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
          
     </head>
     <body>
	<div style="margin: 0 auto; text-align: center; position: relative">
          <div style="width: 900px; margin: 0 auto;">
               <div class="banners">
               
                    <div class="banner">
                    
                    </div>
                    <div>
                         <img class="logo" src="images/logo.png" alt="" />
                    
                    </div>
                    
               </div>
               <menu class="principal">
                    <div>
                         <ul id="menu">
                         <li><a href="oportunidad.html" title="">Oportunidades de trabajo</a></li>
                                    <li><a href="productosrecientes.php" title="" class="current">Trabajos Recientes</a></li>
				   <li><a href="contacto.html" title="" >Contacto</a></li>
                                   <li><a href="productos.html" title="" >Productos</a></li>
                                   <li><a href="quienes.html" title="">¿Quiénes somos?</a></li>
                                   <li><a href="index.html" title="">Inicio</a></li>
                         </ul>
                    </div>
               </menu> 
          </div>

          <section class="page">
          
<!--                  <div id="heading">
<h1> Trabajos Recientes <h1>
</div> -->
<div id="galeria">
<table width="100%" align="center">
<tr>
<td width="100%">

<?php

$directory = 'trabajosrecientes';

$allowed_types=array('jpg','jpeg','gif','png');
$file_parts=array();
$ext='';
$title='';
$i=0;

$dir_handle = @opendir($directory) or die("No se encontro ninguna imagen!");

while ($file = readdir($dir_handle)) 
{
	if($file=='.' || $file == '..') continue;
	
	$file_parts = explode('.',$file);
	$ext = strtolower(array_pop($file_parts));

	$title = implode('.',$file_parts);
	$title = htmlspecialchars($title);
	
	$nomargin='';
	
	if(in_array($ext,$allowed_types))
	{
		if(($i+1)%4==0) $nomargin='nomargin';
	
		echo '
		<div class="pic '.$nomargin.'" style="background:url('.$directory.'/'.$file.') no-repeat 50% 50%;">
		<a href="'.$directory.'/'.$file.'" title="'.$title.'" target="_blank">'.$title.'</a>
		</div>';
		
		$i++;
	}
}

closedir($dir_handle);

?>

  </td>
  </tr>
    </table>
    </div>
          </section>

          


          
               
          
     </div>
     </body>
          <!--ShareSidebar.com BEGINS-->
<style>
.FBConnectButton_Small{background-position:-5px -232px !important;border-left:1px solid #1A356E}.FBConnectButton_Text{margin-left:12px !important;padding:2px 3px 3px !important}#ShareSidebar{top: 25%;width:69px;Left: 0 !important;overflow:hidden;position: fixed;z-index: 100000;text-align:center;line-height:normal;_position: absolute;font-size:9px;}#ShareSidebar a,#ShareSidebar a:hover,#ShareSidebar a:visited{text-decoration:none;font-size:9px;}</style><div id="ShareSidebar">
<iframe style="float:left; margin:10px 0 0 12px; height:61px;" src="http://www.facebook.com/plugins/like.php?app_id=141440452603597&href=www.gruposovi.com&send=false&layout=box_count&show_faces=false&action=like&colorscheme=light&locale=en_US" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowTransparency="true"></iframe>
<div style="float:left; margin:10px 0 0 10px;"><a name="fb_share" type="box_count" href="http://www.facebook.com/sharer.php">Share</a><script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script></div>
<div style="float:left; margin:10px 0 0 10px;"><script type="text/javascript" src="http://apis.google.com/js/plusone.js"></script><g:plusone size="tall"></g:plusone></div>
<div style="float:left; margin:10px 0 0 10px;"><a href="http://twitter.com/share" class="twitter-share-button" data-count="vertical">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></script></div>
<div style="float:left; margin:10px 0 0 5px; color:#000000; font-family:Arial, Helvetica, sans-serif; background-color:#F4295C; padding:2px 3px;"><a href="http://gruposovi.com" target="_blank"><font color="#ffffff">Grupo</font><font color="#000000">Sovi</font></a></div></div>
<!--ShareSidebar.com ENDS-->
     
</html>  








<style>
ul#menu {
border-bottom: 5px solid #0079B2;
width: 100%;
height: 33px;
background: white;
font-size: 0.85em;
font-family: "Lucida Grande", Verdana, sans-serif;
font-weight: bold;
list-style-type: none;
margin: 0;
padding: 0;
}

     body{
          padding-top:10px;
     }.logo {
    margin-bottom: 30px;
    margin-top: 21px;}
     *{
          font-family:verdana;
          margin:0px;
          padding:0px;
     }
     .letreros1{
          margin-left:-71px;
     }
     .inicio{
          border-right:solid 1px black;
          
     }.nav-company {
	float: right;
	margin-right: -12px;
	margin-top: 5px;
	width: 180px;
}
     .nav-company ul li a{
	font-size:10px;
	padding-left:10px;
	padding-right:10px;
	color:grey;
	text-decoration: underline;
     }
     .nav-company ul li {
          display:inline;
     }
     #slides{
          float:right;
          width:233px;
          -moz-border-radius: 7px;
          -webkit-border-radius:7px;
          box-shadow: 0px 0px 15px #0072bc;
          color:#0072bc;
          padding:10px;
          margin-right:64px;    
          margin-top: 21px;
     }
     .senales1{
          margin-bottom:1px;
     }
     .content nav ul{
          margin-top:5px;
          }
     .content nav ul li a{
          color:black;
          width:210px;
          height:40px;display: block;
          text-align:center;
          text-decoration:none;
          padding-top:5px;
          
     }
     .content nav ul li a:hover{
          color:#0072bc;
          
          background:#d7d2d2;
          -moz-border-radius: 7px;
          -webkit-border-radius:7px;
     }
     .content nav ul li{
          list-style:none;
          margin-bottom:50px;
          font-size:26px;
     }
     .content nav{
          float:right;    
          margin-right: 187px;
          width: 89px;
     }
     .principal{margin-top:-23px;}
     .menu-footer li{
          display:inline;
          
          padding-right:10px;
          padding-left:10px;
     }
     .content-left p{    
          font-size: 11px;
          padding-bottom: 1px;
          padding-left: 30px;
          padding-right: 9px;
          padding-top: 5px;
          text-align : justify;
     }
     .content-left h3{
          color:#00a1e4;
          padding-left:10px;
          width: 192px;
          padding-top:10px;    
          margin-right: 12px;
          margin-top: 10px;
     } 
     .content-left{
          float:right;
          width:400px;
          -moz-border-radius: 7px;
          -webkit-border-radius:7px;
          margin-right: 13px;
          margin-top: 12px;
     }
     .menu-productos {    
          font-size: 10px;
          margin-left: 226px;
          margin-top: -9px;
     }
     .menu-productos2 {
font-size: 10px;
margin-left: 426px;
margin-top: -48px;
}

     .quienes{    
          margin-left: 24px;
          margin-right: 21px;
          margin-top: 25px;
          float:right;
          width:162px;
     }
     .menu-productos li{
          color:#546F7D;
          list-style:square;
          
     }
     .menu-productos li a{
          color: #546F7D;
          text-decoration:none;
     }
     .menu-productos2 li{
          color:#546F7D;
          list-style:square;
         } 
     .menu-productos2 li a{
          color: #546F7D;
          text-decoration:none;
     }
     .menu-footer{
          padding:10px;
          font-size: 13px;
          
     }
     .menu-footer li a{
          color:#0079B2;
          text-decoration:none;
     }
     footer{
     }
     header{
         padding-bottom: 10px;
         padding-left: 2px;
         padding-right: 2px;
     }
      header, .page, footer{
          width:900px;
height: 150px;
          margin-left:auto;
          margin-right:auto;
          box-shadow: 0px 0px 10px #000000;
          -moz-border-radius: 7px;
          -webkit-border-radius:7px;
          margin-bottom:10px;
     }
     .page {
     align:center;
     height:auto;
     }
     
 <--!    section{
          height:352px;
     }
     -->
     .banner {
         background: url("images/banner.png") repeat scroll 0 0 transparent;
         float: right;
         height: 100px;
         margin-right: 0;
         width: 454px;
     }
     .banners{
          heght:130px;
          }
          .derechos telefono {
float: right;
font-family: verdana;
font-size: 11px;
margin-right: 145px;
margin-top: 11px;
}
          .derechos {
margin-left: 12px;
margin-top: 11px;
color: white;
}
     footer{
          background: #060606; /* Old browsers */
          background: -moz-linear-gradient(left, #060606 0%, #2e2e2e 100%); /* FF3.6+ */
          background: -webkit-gradient(linear, left top, right top, color-stop(0%,#060606), color-stop(100%,#2e2e2e)); /* Chrome,Safari4+ */
          background: -webkit-linear-gradient(left, #060606 0%,#2e2e2e 100%); /* Chrome10+,Safari5.1+ */
          background: -o-linear-gradient(left, #060606 0%,#2e2e2e 100%); /* Opera11.10+ */
          background: -ms-linear-gradient(left, #060606 0%,#2e2e2e 100%); /* IE10+ */
          filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#060606', endColorstr='#2e2e2e',GradientType=1 ); /* IE6-9 */
          background: linear-gradient(left, #060606 0%,#2e2e2e 100%); /* W3C */
          -moz-border-radius: 7px;
          -webkit-border-radius: 7px;
          height: 150px;
     }
     .jMyCarousel{
          -moz-border-radius: 7px;
          -webkit-border-radius:7px;
          margin-bottom:-9px;
     }
     .formulario, input, textarea{font-size:9px; width: 141px; }
     .formulario{ color:white; font-size:9px;}
     .contactanos1{
          font-size:10px;
          float:right;    
          margin-right: 41px;
          color:white;
          margin-top: 12px;
          
     }
     .contacto{
	color:black;
	font-size:15px;
}
     .contacto input, textarea{font-size:15px;}
     .contacto{
          font-size:15px;
          float:right;    
          margin-right: 41px;
          color:black;
          margin-top: 2px;
          
     }
     .mapa{
          float: left;
margin-left: -475px;
margin-top: 15px;
          
     }
     .content{
          padding:10px;
     }
     .TituloContenido{
          color:white;
          padding-left:5px;
     }
     
     
     
     
     
#lofslidecontent45{
     padding:5px;
     
    background: none repeat scroll 0 0 white;
    border: 4px solid #0072bc;
         -moz-border-radius: 7px;
    -webkit-border-radius: 7px;
}
.lof-main-wapper img{
          border: 1 solid #457DDA; 
          -moz-border-radius-bottomleft: 7px;
          -webkit-border-top-left-radius: 7px;
          -moz-border-radius-topleft: 7px;
          -webkit-border-top-bottom-radius: 7px;
}
</style>