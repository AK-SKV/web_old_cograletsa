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
      zoom: 50,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.HYBRID
    };
    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
  }	
</script> 


          
          <title>
              Cograletsa
          </title>
          
     </head>
     <body onLoad="initialize()">
          <header>
               <nav class='nav-company'>
                    <ul>
                         <li class="inicio"> <a href="http://www.gruposovi.com"> Inicio </a>  </li>
                         <li> <a href="http://www.gruposovi.com/contacto.html"> Contacto </a>  </li>
                    </ul>
               </nav>
               <figure class="banners">
               
                    <figure class="banner">
                    
                    </figure>
                    <figure>
                         <img class="logo" src="images/logo.png" alt="" />
                    
                    </figure>
                    
               </figure>
               <menu class="principal">
                    <nav>
                         <ul id="menu">
                         <li><a href="productosrecientes.php" title="">Recientes Trabajos</a></li>
                                   <li><a href="contacto.html" title="" class="current">Contacto</a></li>
                                   <li><a href="productos.html" title="" >Productos</a></li>
                                   <li><a href="quienes.html" title="">¿Quiénes somos?</a></li>
                                   <li><a href="index.html" title="">Inicio</a></li>
                         </ul>
                    </nav>
               </menu> 
          </header>
          <section class="page">
                    <article class="content-left">
                    
                    <map id="map_canvas" style="width:280px; height:280px" class="mapa"></map>
                    <table class="direccioncontacto"><tr><td>Av. Juan Tanca Marengo Km 1, frente al Mall del Sol.</td></tr></table>
                    <form action="mail.php" method="post">
                      <table class="contacto">
                      <tr><td><table height="320" class="contacto">
                        <tr>
                          <td>Nombre: </td>
                          <td><input type="text" name="nombre" id="nombre" /></td>
                        </tr>
                        <tr>
                          <td>Apellido: </td>
                          <td><input type="text" name="apellido" id="apellido" /></td>
                        </tr>
                        <tr>
                          <td>Empresa: </td>
                          <td><input type="text" name="empresa" id="empresa" /></td>
                        </tr>
                        <tr>
                          <td>Correo: </td>
                          <td><input type="text" name="correo" id="correo" /></td>
                        </tr>
                        <tr>
                          <td>Teléfono: </td>
                          <td><input type="text" name="telefono" id="telefono" /></td>
                        </tr>
                        <tr>
                          <td> Comentario </td>
                          <td><textarea name="comentario"></textarea></td>
                        </tr>
                        <tr>
                          <td>Producto: </td>
                          <td><select name="producto" size="1">
                            <option value="letreros">Letreros</option>
                            <option value="Impresiones">Impresiones</option>
                            <option value="Señaletica">Señaletica</option>
                            <option value="Totems">Totems</option>
                            <option value="Vallas">Vallas</option>
                            <option value="Neon">Neón</option>
                            <option value="Placas">Placas</option>
                            <option value="Roll up">Roll up</option>
                            <option value="Displays">Displays</option>
                          </select>&nbsp;</td>
                        </tr>
                        <tr>
                          <td>Desea visita de nuestros asesores: </td>
                          <td><select name="visita" size="1">
                            <option value="desea visita">Si, deseo</option>
                            <option value="sin visita">No, deseo</option>
                          </select>&nbsp;</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td><input type="submit" name="enviar2" id="enviar2"/></td>
                        </tr>
                      </table></td></tr>
                      </table>
                    </form>
                    <div><?php if(isset($_GET['msg'])) echo $_GET['msg']; ?></div>
               </article>
          </section>
          <footer>
               <article>
               
                    <nav>
                         <ul class="menu-footer"> 
                              <li> <a href="index.html"> Inicio </a></li>
                              <li> <a href="quienes.html"> ¿Quiénes somos? </a></li>
                              <li> <a href="productos.html"> Productos </a></li>
                              <li> <a href="contacto.html"> Contáctanos </a></li>
                              <li> <a href="http://www.gruposovi.com"> Grupo Sovi </a></li>
                              <li> <a href="images/logros.png" title="Logros" rel="gb_page_center[261, 360]"> Logros </a></li>
                         </li>
                    </nav> 
                    
                    <nav>
                         <ul class="menu-productos"> 
                              <li> <a href="letreros.html"> Letreros </a></li>
                              <li> <a href="impresiones.html"> Impresiones </a></li>
                              <li> <a href="estructura.html"> Estructuras </a></li>
                              <li> <a href="senaletica.html"> Señalética </a></li>
                         </ul>
                    </nav> 
                    <nav>
                         <ul class="menu-productos2"> 
                              <li> <a href="http://www.cograletsa.gruposovi.com"> Cograletsa </a></li>
                              <li> <a href="http://www.medialte.gruposovi.com"> Medialte </a></li>
                              <li> <a href="http://www.aura.gruposovi.com"> Aura </a></li>
                         </ul>
                    </nav> 
               </article> 
               <article class="derechos">
                    <telefono>Telefono: (04) - 2294555  Ecuador - Guayaquil</telefono> 
                    <img src="images/logoabajo.png" /> 
               </article>
               
          </footer>
          
          
          
          
          
     
     </body>
</html>  
<style>
     body{
          padding-top:30px;
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
    width: 128px;
}
     .nav-company ul li a{
          font-size:10px;
          padding-left:10px;
          padding-right:10px;
          color:grey;
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
          margin-left:auto;
          margin-right:auto;
          box-shadow: 2px 2px 5px #999;
          -moz-border-radius: 7px;
          -webkit-border-radius:7px;
          margin-bottom:10px;
     }
     section{
          height:352px;
     }
     
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
margin-right: 475px;
margin-top: 16px;
}
          .derechos {
margin-left: 12px;
margin-top: 27px;
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
          height:132px;
     }
     .jMyCarousel{
          -moz-border-radius: 7px;
          -webkit-border-radius:7px;
          margin-bottom:-9px;
     }
     .formulario, input, textarea{font-size:9px;}
     .formulario{ color:white; font-size:9px;}
     .contactanos1{
          font-size:10px;
          float:right;    
          margin-right: 41px;
          color:white;
          margin-top: 12px;
          
     }
     .contacto{ color:black; font-size:15px;}
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

 .direccioncontacto {
 font-size:13px;
float: left;
margin-left: -475px;
margin-top: 309px;
}
          
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