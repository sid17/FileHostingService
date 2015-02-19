<?php
// $file='download.jpg';
// $filename = 'download.jpg'; /* Note: Always use .pdf at the end. */
// $file=getcwd() . "/$file";
// header('Content-type: image/jpeg');
// // header('Content-Disposition: attachment; filename="'.$file.'"');
// header('Content-Disposition: inline; filename="' . $filename . '"');
// header('Content-Transfer-Encoding: binary');
// header('Content-Length: ' . filesize($file));
// header('Accept-Ranges: bytes');
// @readfile($file);
?>

<?php
  // $file = 'path/to/PDF/file.pdf';
  // $filename = 'filename.pdf';
  // header('Content-type: application/pdf');
  // header('Content-Disposition: inline; filename="' . $filename . '"');
  // header('Content-Transfer-Encoding: binary');
  // header('Accept-Ranges: bytes');
  // @readfile($file);
?>
<?php


// // The location of the PDF file on the server.
// $filename ='original1111.pdf';

// // Let the browser know that a PDF file is coming.
// header("Content-type: application/pdf");
// header("Content-Length: " . filesize($filename));

// // Send the file to the browser.
// readfile($filename);
// exit;


?>
<?php
					$filepath='download.jpg';
					$contents = file_get_contents($filepath);
					header('Content-Type: ' . mime_content_type($filepath));
					echo $contents;

?>

