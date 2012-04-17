<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nixy Banner</title>
<link type="text/css" rel="stylesheet" href="banner.css" />
<script type="text/javascript" src="banner.js" ></script>
</head>
<body>
<div class="container">
	<div class="banner">
    	<div class="scroll">
			<?php
			
				$dir = './images/banner1';
				$allowed_type = array('jpg','jpeg','png','gif');
		
				$d = dir($dir);
				$pics_len=0;
				while( $f = $d->read() ){
					$file_type = end(explode('.',$f));
					if( !in_array(strtolower($file_type),$allowed_type) ) continue;
					echo "<div><img src='$dir/$f' /></div>";
					$pics_len ++;
				}
		
			?>
        </div>
        <ul class="btn">
        	<?php
				for($i=0;$i<$pics_len;$i++) echo '<li></li>';
			?>
        </ul>
        
    </div>
    <input type="button" value="back" onclick="prvSlide()" />
    <input type="button" value="next" onclick="nextSlide()" />
</div>
</body>
</html>