<?php
	$path = 'assets/img/sistema.png';
	$type = pathinfo($path, PATHINFO_EXTENSION);
	$data = file_get_contents($path);
	$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
?>
<img src="<?php echo $base64; ?>">