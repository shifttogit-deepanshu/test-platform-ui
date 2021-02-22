<?php


$con = mysqli_connect("localhost:3307","root","","class");
// if (isset($_FILES['pdfdata']) && $_FILES['pdfdata']['error'] === UPLOAD_ERR_OK) {
// $fileTmpPath = $_FILES['pdfdata']['tmp_name'];
// $fileName = $_FILES['pdfdata']['name'];
// $fileSize = $_FILES['pdfdata']['size'];
// $fileType = $_FILES['pdfdata']['type'];
// $fileNameCmps = explode(".", $fileName);
// $fileExtension = strtolower(end($fileNameCmps));
// 	};

// $mpdf_link = '
// <script language="javascript" type="text/javascript">
//     /* <![CDATA[ */
//     document.write(\'<form method="POST" action="makepdf.php?url=\' + encodeURIComponent(location.href) +\'">\');';

// foreach ($_POST as $name => $post) {
//     $mpdf_link .= 'document.write(\'<input type="hidden" name="' . $name . '" value="' . $post . '" />\'); '."\n";
// }
$username=$_GET['user'];
// $mpdf_link .= '
//     document.write(\'<input type="submit" name="submit" value="Create PDF file of this page" />\');
//     document.write(\'</form>\');
// /* ]]> */
// </script>';

// echo $mpdf_link;

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>HTML to PDF Eample</title>
	<link rel="stylesheet" href="style2.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<script src="html2pdf.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"/>
</head>
<body>
	<div id="invoice" class="container">
	  	<div><?php include 'score1.php'; ?></div>	
		  <div class="html2pdf__page-break"></div>
		<!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> -->
		<div><?php include 'score4.php'; ?></div>
		<div class="html2pdf__page-break"></div>
		<!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> -->
		<div><?php include 'score5.php'; ?></div>
		<div class="html2pdf__page-break"></div>
		<!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> -->
		<div><?php include 'score6.php'; ?></div>
		<div class="html2pdf__page-break"></div>
		<!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> -->
		<div><?php include 'score7.php'; ?></div>
		<div class="html2pdf__page-break"></div>
		<!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> -->
		<div><?php include 'score8.php'; ?></div>
		<div class="html2pdf__page-break"></div>
		<!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> -->
		<div><?php include 'score9.php'; ?></div>
		<div class="html2pdf__page-break"></div>
		<!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> -->
		<div><?php include 'myjob.php'; ?></div>
		<div class="html2pdf__page-break"></div>
	</div>
	<!-- <a href="makepdf.php?url=http://localhost/testplatform/score3.php?user=de08882339929">Make pdf</a> -->
	<button id="pdfbtn">Save as PDF</button>
	<script>
		document.getElementById('pdfbtn').addEventListener('click',()=>{
			var element = document.getElementById('invoice');
			var opt = {
  filename:     'myfile.pdf',
  image:        { type: 'jpeg', quality: 1 },
  html2canvas:  { scale:0.5},
  jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
};
 
// New Promise-based usage:
html2pdf().from(element).set(opt).save();
 
		})
	</script>
</body>
</html>

