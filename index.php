<?php
/*
iPhyle
@version 1.0

Copyright (c) 2010, Chris Iufer <chris@iufer.com>
All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
Neither the name of Chris Iufer nor the names of its contributors may be used to endorse or promote products derived from this software without specific prior written permission.
THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

*/

	$image = array();
	$image['next'] = 'iVBORw0KGgoAAAANSUhEUgAAACUAAAAjCAYAAAATx8MeAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAjtJREFUeNpiLF7B8J+BRkCEV/VlhdetjUDmZyBuKlnJ+AldTU84pvVMDDQEbz7fFj94s1cJyOQF4kBi9dHUUSBw4Ea32d9/vxmBTCtgqEgPCkd9/vGSb8flGk0o12tQOAoETtybbfjt11tWINMEGFoag8JR33+95958oVQXynUbFI4CgfMPl+m/+3qfA8jUBoaWyaBw1J9/P1k3ni8whnJtB4WjQOD6s22aj96e5AMyNYCh5TgoHPXv/x+mzRdKTKFci0HhKBC4/+aI8vVnW0WATAVgaPkPCkeBwJaLZZZIocU5KBz18tM1yWN3pssBmUJAHDwoHAUC+290mkKrH1BOFBkUjnr/9aHwvusdKlBu4KBwFAgcutVv9vvvN5AbQIWp0qBwFFr1YzsoHAUCl5+shbUgVAaNo3SkA25AmXcGhaM42QS/+hn2XYJyjw4KR9mq5p1mZeb6B2SeGRQhJcAl+85Zq/o2lLtxUBQJTpqVp5iZWEFdmcNA/GrAHSXOp/XcSiXzEZD5DojXDopqxkuv7SSs+Q4qrgbcUQoiVve0pf1B0fUQ2DndOOBNFyZGln9+Bn2noNyTg6KRpy7pfkNO2BzUdb8BDKW9A+4oFib238BQOodeUA6oowzloy6K8qp9AzKvAkPp1IA7ioOV/5uvQfdlKHfXoOiMWiqnn+NiE/4NZJ4DhtKNAXcUL4f4JzedephDtgyKAQ4HjdJT0Er3GDCUng64o4R5lF/ZqxffY4CM5K0nVh9AgAEAipC1QPOMzR0AAAAASUVORK5CYII=';
	$image['arrow'] = 'iVBORw0KGgoAAAANSUhEUgAAABkAAAAUCAYAAAB4d5a9AAAACXBIWXMAAAsTAAALEwEAmpwYAAAKT2lDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjanVNnVFPpFj333vRCS4iAlEtvUhUIIFJCi4AUkSYqIQkQSoghodkVUcERRUUEG8igiAOOjoCMFVEsDIoK2AfkIaKOg6OIisr74Xuja9a89+bN/rXXPues852zzwfACAyWSDNRNYAMqUIeEeCDx8TG4eQuQIEKJHAAEAizZCFz/SMBAPh+PDwrIsAHvgABeNMLCADATZvAMByH/w/qQplcAYCEAcB0kThLCIAUAEB6jkKmAEBGAYCdmCZTAKAEAGDLY2LjAFAtAGAnf+bTAICd+Jl7AQBblCEVAaCRACATZYhEAGg7AKzPVopFAFgwABRmS8Q5ANgtADBJV2ZIALC3AMDOEAuyAAgMADBRiIUpAAR7AGDIIyN4AISZABRG8lc88SuuEOcqAAB4mbI8uSQ5RYFbCC1xB1dXLh4ozkkXKxQ2YQJhmkAuwnmZGTKBNA/g88wAAKCRFRHgg/P9eM4Ors7ONo62Dl8t6r8G/yJiYuP+5c+rcEAAAOF0ftH+LC+zGoA7BoBt/qIl7gRoXgugdfeLZrIPQLUAoOnaV/Nw+H48PEWhkLnZ2eXk5NhKxEJbYcpXff5nwl/AV/1s+X48/Pf14L7iJIEyXYFHBPjgwsz0TKUcz5IJhGLc5o9H/LcL//wd0yLESWK5WCoU41EScY5EmozzMqUiiUKSKcUl0v9k4t8s+wM+3zUAsGo+AXuRLahdYwP2SycQWHTA4vcAAPK7b8HUKAgDgGiD4c93/+8//UegJQCAZkmScQAAXkQkLlTKsz/HCAAARKCBKrBBG/TBGCzABhzBBdzBC/xgNoRCJMTCQhBCCmSAHHJgKayCQiiGzbAdKmAv1EAdNMBRaIaTcA4uwlW4Dj1wD/phCJ7BKLyBCQRByAgTYSHaiAFiilgjjggXmYX4IcFIBBKLJCDJiBRRIkuRNUgxUopUIFVIHfI9cgI5h1xGupE7yAAygvyGvEcxlIGyUT3UDLVDuag3GoRGogvQZHQxmo8WoJvQcrQaPYw2oefQq2gP2o8+Q8cwwOgYBzPEbDAuxsNCsTgsCZNjy7EirAyrxhqwVqwDu4n1Y8+xdwQSgUXACTYEd0IgYR5BSFhMWE7YSKggHCQ0EdoJNwkDhFHCJyKTqEu0JroR+cQYYjIxh1hILCPWEo8TLxB7iEPENyQSiUMyJ7mQAkmxpFTSEtJG0m5SI+ksqZs0SBojk8naZGuyBzmULCAryIXkneTD5DPkG+Qh8lsKnWJAcaT4U+IoUspqShnlEOU05QZlmDJBVaOaUt2ooVQRNY9aQq2htlKvUYeoEzR1mjnNgxZJS6WtopXTGmgXaPdpr+h0uhHdlR5Ol9BX0svpR+iX6AP0dwwNhhWDx4hnKBmbGAcYZxl3GK+YTKYZ04sZx1QwNzHrmOeZD5lvVVgqtip8FZHKCpVKlSaVGyovVKmqpqreqgtV81XLVI+pXlN9rkZVM1PjqQnUlqtVqp1Q61MbU2epO6iHqmeob1Q/pH5Z/YkGWcNMw09DpFGgsV/jvMYgC2MZs3gsIWsNq4Z1gTXEJrHN2Xx2KruY/R27iz2qqaE5QzNKM1ezUvOUZj8H45hx+Jx0TgnnKKeX836K3hTvKeIpG6Y0TLkxZVxrqpaXllirSKtRq0frvTau7aedpr1Fu1n7gQ5Bx0onXCdHZ4/OBZ3nU9lT3acKpxZNPTr1ri6qa6UbobtEd79up+6Ynr5egJ5Mb6feeb3n+hx9L/1U/W36p/VHDFgGswwkBtsMzhg8xTVxbzwdL8fb8VFDXcNAQ6VhlWGX4YSRudE8o9VGjUYPjGnGXOMk423GbcajJgYmISZLTepN7ppSTbmmKaY7TDtMx83MzaLN1pk1mz0x1zLnm+eb15vft2BaeFostqi2uGVJsuRaplnutrxuhVo5WaVYVVpds0atna0l1rutu6cRp7lOk06rntZnw7Dxtsm2qbcZsOXYBtuutm22fWFnYhdnt8Wuw+6TvZN9un2N/T0HDYfZDqsdWh1+c7RyFDpWOt6azpzuP33F9JbpL2dYzxDP2DPjthPLKcRpnVOb00dnF2e5c4PziIuJS4LLLpc+Lpsbxt3IveRKdPVxXeF60vWdm7Obwu2o26/uNu5p7ofcn8w0nymeWTNz0MPIQ+BR5dE/C5+VMGvfrH5PQ0+BZ7XnIy9jL5FXrdewt6V3qvdh7xc+9j5yn+M+4zw33jLeWV/MN8C3yLfLT8Nvnl+F30N/I/9k/3r/0QCngCUBZwOJgUGBWwL7+Hp8Ib+OPzrbZfay2e1BjKC5QRVBj4KtguXBrSFoyOyQrSH355jOkc5pDoVQfujW0Adh5mGLw34MJ4WHhVeGP45wiFga0TGXNXfR3ENz30T6RJZE3ptnMU85ry1KNSo+qi5qPNo3ujS6P8YuZlnM1VidWElsSxw5LiquNm5svt/87fOH4p3iC+N7F5gvyF1weaHOwvSFpxapLhIsOpZATIhOOJTwQRAqqBaMJfITdyWOCnnCHcJnIi/RNtGI2ENcKh5O8kgqTXqS7JG8NXkkxTOlLOW5hCepkLxMDUzdmzqeFpp2IG0yPTq9MYOSkZBxQqohTZO2Z+pn5mZ2y6xlhbL+xW6Lty8elQfJa7OQrAVZLQq2QqboVFoo1yoHsmdlV2a/zYnKOZarnivN7cyzytuQN5zvn//tEsIS4ZK2pYZLVy0dWOa9rGo5sjxxedsK4xUFK4ZWBqw8uIq2Km3VT6vtV5eufr0mek1rgV7ByoLBtQFr6wtVCuWFfevc1+1dT1gvWd+1YfqGnRs+FYmKrhTbF5cVf9go3HjlG4dvyr+Z3JS0qavEuWTPZtJm6ebeLZ5bDpaql+aXDm4N2dq0Dd9WtO319kXbL5fNKNu7g7ZDuaO/PLi8ZafJzs07P1SkVPRU+lQ27tLdtWHX+G7R7ht7vPY07NXbW7z3/T7JvttVAVVN1WbVZftJ+7P3P66Jqun4lvttXa1ObXHtxwPSA/0HIw6217nU1R3SPVRSj9Yr60cOxx++/p3vdy0NNg1VjZzG4iNwRHnk6fcJ3/ceDTradox7rOEH0x92HWcdL2pCmvKaRptTmvtbYlu6T8w+0dbq3nr8R9sfD5w0PFl5SvNUyWna6YLTk2fyz4ydlZ19fi753GDborZ752PO32oPb++6EHTh0kX/i+c7vDvOXPK4dPKy2+UTV7hXmq86X23qdOo8/pPTT8e7nLuarrlca7nuer21e2b36RueN87d9L158Rb/1tWeOT3dvfN6b/fF9/XfFt1+cif9zsu72Xcn7q28T7xf9EDtQdlD3YfVP1v+3Njv3H9qwHeg89HcR/cGhYPP/pH1jw9DBY+Zj8uGDYbrnjg+OTniP3L96fynQ89kzyaeF/6i/suuFxYvfvjV69fO0ZjRoZfyl5O/bXyl/erA6xmv28bCxh6+yXgzMV70VvvtwXfcdx3vo98PT+R8IH8o/2j5sfVT0Kf7kxmTk/8EA5jz/GMzLdsAAAAgY0hSTQAAeiUAAICDAAD5/wAAgOkAAHUwAADqYAAAOpgAABdvkl/FRgAAAOxJREFUeNrs1L0KglAUB/B/3mywwUdIQZ+hXVx8hKBHaGpocHIIB1/Ah7kX2oSgR1C8FFRDgg/gR0uCoU1dC6IznTP9OJyPUV3XGDokfCB+FGGMzRljc9HIuA1QSldNbdv2XjhSluXkkS4ppZAkqbQs6yACIZ7nAQAMwzhWVXVL01QGsEySRCGEnHRdPwtDGqgoipxzThpIlmWuadpVGAIApmnyNhTH8fRdqHeFHcfZKYqSN3UURYt3Ohn1vZUgCLZZls0AQFXVi+u6G6HHKBroIEMAT0gYhushgM5MfN8PAEAk8HLw/1f/VeQ+AEHodLPkz7FSAAAAAElFTkSuQmCC';

	if(isset($_GET['image'])){
		if($image[$_GET['image']]) {
			header('content-type:image/png');
			echo base64_decode($image[$_GET['image']]);
		}
		return true;
	}
?>
	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta name="viewport" content="width=320; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;"/>	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>iPhyle</title>
	<style type="text/css" media="screen">
		body {
			font:18pt/20pt Helvetica, Arial;
			margin:0;
			padding:0 0 0 0;
			-webkit-text-size-adjust: none;
			background:white;
			color:black;
			overflow:hidden;
			min-height:420px;
		}
		.none {display:block; width:100%; position:relative; height:44px; text-decoration:none; color:black; background:white;}
		.none .name { position:absolute; top:10px; left:10px; text-overflow:ellipsis; overflow:hidden; white-space:nowrap; height:44px; right:0%; bottom:0; font-weight:bold; color:#ddd; text-decoration:none; text-align:center; font-size:14pt;}

		.file,
		.folder {display:block; width:100%; border-bottom:1px solid rgb(217,217,217); position:relative; height:44px; text-decoration:none; color:black; background:white url(?image=arrow) right 15px no-repeat;}

		.file .name,
		.folder .name { position:absolute; top:10px; left:10px; text-overflow:ellipsis; overflow:hidden; white-space:nowrap; height:44px; right:30%; bottom:0; font-weight:bold; color:black; text-decoration:none; font-size:14pt;}

		.file .size,
		.folder .size { position:absolute; top:13px; right:40px;  bottom:0; font-size:12pt;}

		.folder { background-color:#efefef;}
		.folder .name {font-size:18pt;}
		
		.location { width:100%; height:35px; border-bottom:1px solid black; overflow:hidden; }
		.location a.home { background-image:none; padding-left:10px; }
		.location a { display:block; float:left; padding:5px 10px 0 16px; height:35px; color:white; background:#73a800 url(?image=next) -24px top no-repeat; text-decoration:none; min-width:60px; }
		.location a.home { background-image:none; }
		.location a.inactive { color: #999; background:#ffffff url(?image=next) -24px top no-repeat; }
		
	</style>
	<script type="text/javascript">
		window.onload = function() { setTimeout( function() { window.scrollTo(0, 1); }, 1000); }
	</script>
</head>
<body>

<?php 

	$p = (isset($_GET['path'])) ? $_GET['path'] : '';	
	$script_source = $_SERVER['SCRIPT_FILENAME'];	
	$path_info = pathinfo($script_source);
	$iphile_script = $path_info['basename'];
	$root = $path_info['dirname'] .'/';
	
	$d = rawurldecode($p);
	$output[] = "<div class='location'>";
	$output[] = "<a class='home' href='./'>Home</a>";
	$e = explode('/', $d);
	
	for($i=0; $i < count($e); $i++){
		$c[] = $e[$i];
		if($i == count($e)-1) $output[] = "<a class='inactive' href='?path=". rawurlencode(implode('/',$c)) ."'>{$c[$i]} </a>";
		else $output[] = "<a href='?path=". rawurlencode(implode('/',$c)) ."'>{$c[$i]}</a>";
	}
	
	$output[] = "</div>";
	$dh = opendir($root . $d);

	while (($file_name = readdir($dh)) !== false) {
		static $total = 0;
		$file_path = $root . $d .'/'. $file_name;		
		if ($file_name == $iphile_script || $file_name == 'iPhoneArrow.png' || $file_name == 'next.png' || $file_name == "." || $file_name == "..") continue;
		if (substr($file_name,0,1) == '.') continue;
		$g = ($d !== '') ? $d .'/'. $file_name : $file_name;
		if(filetype($file_path) == 'dir') {
			$output[] = sprintf('<a href="%s" class="folder"><span class="name">%s</span><span class="size">%s</span></a>',
									"?path=". rawurlencode($g), $file_name, "Folder" );
		}
		else {
			$output[] = sprintf('<a href="%s" class="file"><span class="name">%s</span><span class="size">%s</span></a>',
								$g, $file_name, format_size(filesize($file_path)) );
			$total++;
		}
	}
	$output[] = '<a class="none"><span class="name">'. $total .' files</span></a>';
	echo implode("\n", $output);	

	function format_size($size){
		if( is_null($size) || $size === FALSE || $size == 0 )
			return $size;

		if( $size > 1024*1024*1024 )
	   		$size = sprintf( "%.1f GB", $size / (1024*1024*1024) );
		elseif( $size > 1024*1024 )
	   		$size = sprintf( "%.1f MB", $size / (1024*1024) );
		elseif( $size > 1024 )
	   		$size = sprintf( "%d KB", $size / 1024 );
		elseif( $size < 0 )
	   		$size = '0';
		else
			$size = sprintf( "%d B", $size );
		return $size;
	}
	
?>

</body>
</html>