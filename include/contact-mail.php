<?php
	if(isset($_POST['submit2'])=='Send')
	{
		$headers  = "From: ".$_POST['email']."\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1 \r\n";
		$headers .= "MIME-Version: 1.0 ";
		$msg1  = '<table width="100%" border="0" cellspacing="2" cellpadding="2">';
		$msg1 .=    '<tr><td align="left" valign="top" colspan="3" width="15%"><b>Name:</b> '.$_POST['name'].'</td></tr>';
		$msg1 .=    '<tr><td align="left" valign="top" colspan="3" width="15%"><b>Email:</b> '.$_POST['email'].'</td></tr>';
		$msg1 .=    '<tr><td align="left" valign="top" colspan="3" width="55%"><b>Message:</b> '.$_POST['message'].'</td></tr>';
		$msg1 .= '</table>';
		$sub = 'Contact Request from your Website';
		$ret = mail('author@aadeshverma.com', $sub, $msg1, $headers);
		header("Location: http://aadeshverma.com/thanks.php");
		exit();

	}
?>