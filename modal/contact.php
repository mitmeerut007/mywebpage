<?php

// Put contacting email here
$php_main_email = "utkarshk495@gmail.com";

//Fetching Values from URL
$php_name = $_POST['ajax_name'];
$php_email = $_POST['ajax_email'];
$php_number = $_POST['ajax_number'];
$php_subject = $_POST['ajax_subject'];
$php_message = $_POST['ajax_message'];



//Sanitizing email
$php_email = filter_var($php_email, FILTER_SANITIZE_EMAIL);


//After sanitization Validation is performed
if (filter_var($php_email, FILTER_VALIDATE_EMAIL)) {
	
	
		$php_subject1 = "Message from contact form";
		
		// To send HTML mail, the Content-type header must be set
		$php_headers = 'MIME-Version: 1.0' . "\r\n";
		$php_headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$php_headers .= "From: My Bussiness " . $php_email; // Sender's Email
		


	
		
		$php_template = '<div style="padding:50px;">Hello ' . $php_name . ',<br/>'
		. 'Thank you for contacting us.<br/><br/>'
		. '<strong style="color:#f00a77;">Name:</strong>  ' . $php_name . '<br/>'
		. '<strong style="color:#f00a77;">Subject:</strong>  ' . $php_subject . '<br/>'
		. '<strong style="color:#f00a77;">Email:</strong>  ' . $php_email . '<br/>'
		. '<strong style="color:#f00a77;">Number:</strong>  ' . $php_number . '<br/>'
		. '<strong style="color:#f00a77;">Message:</strong>  ' . $php_message . '<br/><br/>'
		. 'This is a Contact Confirmation mail.'
		. '<br/>'
		. 'We will contact you as soon as possible .</div>';
		$php_sendmessage = "<div style=\"background-color:#f5f5f5; color:#333;\">" . $php_template . "</div>";
		
		// message lines should not exceed 70 characters (PHP rule), so wrap it
		$php_sendmessage = wordwrap($php_sendmessage, 70);
		
		// Send mail by PHP Mail Function
		mail($php_main_email, $php_subject1, $php_sendmessage, $php_headers);
		echo "";
		
	
		
		// To send HTML mail, the Content-type header must be set
		$php_headers2 = 'MIME-Version: 1.0' . "\r\n";
		$php_headers2 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$php_headers2 .=  "From: Utkarsh Kushwaha " . $php_main_email; // Client email, I will receive
		
		$htmlContent = '<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="x-apple-disable-message-reformatting">
  <!--[if mso]>
  <style>
    table {border-collapse:collapse;border-spacing:0;border:none;margin:0;}
    div, td {padding:0;}
    div {margin:0 !important;}
  </style>
  <noscript>
    <xml>
      <o:OfficeDocumentSettings>
        <o:PixelsPerInch>96</o:PixelsPerInch>
      </o:OfficeDocumentSettings>
    </xml>
  </noscript>
  <![endif]-->
  <style>
    
    @media screen and (max-width: 530px) {
      .unsub {
        display: block;
        padding: 8px;
        margin-top: 14px;
        border-radius: 6px;
        background-color: #555555;
        text-decoration: none !important;
        font-weight: bold;
      }
      .col-lge {
        max-width: 100% !important;
      }
    }
    @media screen and (min-width: 531px) {
      .col-sml {
        max-width: 27% !important;
      }
      .col-lge {
        max-width: 73% !important;
      }
    }
    
    .h1-font {
      font-family: Lobster;
      text-align: center;
    }

    .contact-font {
      font-family: Indie Flower;
      font-style: italic;
      text-align: center;
      color: rgb(111, 111, 111);
    }

    .p-font {
      margin: 20px 10px 20px;
      font-size: 20px;
      text-align: center;
      line-height: 1.4;
    }

    .p-footer {
      margin: 20px 10px 20px;
      padding: 10px 50px 0px;
      font-size: 11px;
      font-family: Arial, Helvetica, sans-serif;
      text-align: center;
    }

.social-buttons {
      margin: auto;
      font-size: 0;
      text-align: center;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
    }

    .social-button {
      display: inline-block;
      background-color: #fff;
      width: 50px;
      height: 50px;
      line-height: 50px;
      margin: 0 10px;
      text-align: center;
      position: relative;
      overflow: hidden;
      opacity: .99;
      border-radius: 50%;
      box-shadow: 0 0 30px 0 rgba(0, 0, 0, 0.05);
      -webkit-transition: all 0.35s cubic-bezier(0.31, -0.105, 0.43, 1.59);
      transition: all 0.35s cubic-bezier(0.31, -0.105, 0.43, 1.59);
    }

    .social-button:before {
      background-color: #000;
      width: 120%;
      height: 120%;
      position: absolute;
      top: 90%;
      left: -110%;
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg);
      -webkit-transition: all 0.35s cubic-bezier(0.31, -0.105, 0.43, 1.59);
      transition: all 0.35s cubic-bezier(0.31, -0.105, 0.43, 1.59);
    }

  </style>
</head>
<body style="margin:0;padding:0;word-spacing:normal;background-color:#939297;">
  <div role="article" aria-roledescription="email" lang="en" style="text-size-adjust:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;background-color:#939297;">
    <table role="presentation" style="width:100%;border:none;border-spacing:0;">
      <tr>
        <td align="center" style="padding:0;">
          <!--[if mso]>
          <table role="presentation" align="center" style="width:600px;">
          <tr>
          <td>
          <![endif]-->
          <table role="presentation" style="width:94%;max-width:600px;border:none;border-spacing:0;text-align:left;font-size:16px;line-height:22px;color:#363636;">
            <tr>
                        <td align="center" style="padding: 0 5px 8px 5px;background:#88BDBF;" valign="top"><br><br><br>
                        <a style="color: #3498DB; text-decoration: none;" href="https://sandandpeaks.com/dizme/" target="_blank">
                      <img src="https://sandandpeaks.com/img/my.png" width="350" alt="" style="width:350px;max-width:80%;margin-bottom:20px;">
                          </a>
                          <h1 class="h1-font">Thankyou ❤️</h1>
                          <p class="p-font">
                            Thank you for subscribing to Weekly newsletter of <strong> CyanVariable360
                              Studios</strong>!Hey, you are almost ready to start enjoying Elephantry.
                            Simply click the BIG yellow button below to verify your email address.</p>

                          <br><br>
                          <p style="margin:0;"><a href="https://sandandpeaks.com/dizme/" style="background: #ff3884; text-decoration: none; padding: 10px 25px; color: #ffffff; border-radius: 4px; display:inline-block; mso-padding-alt:0;text-underline-color:#ff3884"><!--[if mso]><i style="letter-spacing: 25px;mso-font-width:-100%;mso-text-raise:20pt">&nbsp;</i><![endif]--><span style="mso-text-raise:10pt;font-weight:bold;">Claim Now</span><!--[if mso]><i style="letter-spacing: 25px;mso-font-width:-100%">&nbsp;</i><![endif]--></a></p>

                        </td>
                      </tr>
            
            
            <tr>
                <td align="center" style="background-color:#3C999C;" valign="top">
                          <div>
                            <h3 class="contact-font">Stay in touch<h3>

                                <div class="social-buttons">
                                  <a class="social-button facebook" href="#">
                                    <i class="fa fa-facebook">
                                    </i>
                                  </a>

                                  <a class="social-button twitter" href="#">
                                    <i class="fa fa-linkedin">
                                    </i>
                                  </a>

                                  <a class="social-button google" href="#">
                                    <i class="fa fa-instagram">
                                    </i>
                                  </a>
                                </div>

                        
              </td>
            </tr>
            <tr>
              <td style="padding:30px;text-align:center;font-size:12px;background-color:#404040;color:#cccccc;">
                                                <p class="p-footer">Email sent by Elephantry.com <br>
                                  Copyright © 2017 Elephantry Inc. All rights reserved</p>
              </td>
            </tr>
          </table>
          <!--[if mso]>
          </td>
          </tr>
          </table>
          <![endif]-->
        </td>
      </tr>
    </table>
  </div>
</body>
</html>';
		
		// message lines should not exceed 70 characters (PHP rule), so wrap it

		
		// Send mail by PHP Mail Function
		mail($php_email, $php_subject, $htmlContent, $php_headers2);
		echo "";
	
	
} else {
	echo "<span class='contact_error'>* Invalid email *</span>";
}

?>