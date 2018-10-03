<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Galería Trabajos</title>

<link rel="stylesheet" type="text/css" href="recuadro/css/recuadro.css" />
<link rel="stylesheet" type="text/css" href="css/estilo.css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="recuadro/js/jquery.lightbox-0.5.pack.js"></script>
<script type="text/javascript" src="js/scriptgaleria.js"></script>
 <link rel="icon" href="favicon.png" type="image/x-icon" />
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

<div id="container">
<a name="let" id="let"></a>

<div id="heading">
  <h1>Galeria Letreros</h1>
</div>
<div id="gallery">

<?php

$directory = 'galeria/letreros';

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
</div>
<div class="clear"></div>
<div id="footer">
<h2><a href="productos.html" target="_self">Regresar a Productos</a></h2>
</div>
<a name="imp" id="imp"></a>
<div id="heading">
  <h1>Galeria Impresiones</h1>
</div>

<div id="gallery">

<?php

$directory = 'galeria/impresiones';

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
</div>
<div class="clear"></div>
<div id="footer">
<h2><a href="productos.html" target="_top">Regresar a Productos</a></h2>
</div>
<a name="est" id="est"></a>
<div id="heading">
  <h1>Galeria Estructuras</h1>
</div>

<div id="gallery">

<?php

$directory = 'galeria/estructura';

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
</div>

<div class="clear"></div>
<div id="footer">
<h2><a href="productos.html" target="_self">Regresar a Productos</a></h2>
</div>
<a name="sen" id="sen"></a>
<div id="heading">
  <h1>Galeria Señaletica</h1>
</div>

<div id="gallery">

<?php

$directory = 'galeria/senaletica';

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
<div class="clear"></div>


<div id="footer">
<h2><a href="productos.html" target="_self">Regresar a Productos</a></h2>
</div>

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
