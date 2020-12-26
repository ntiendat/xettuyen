{{-- <!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
      body{
        text-align: center;
      }
      h1{
        text-align: center;
        color: Green;
      }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    
  <h1>{{$mess['title']}}</h1>
  <p>{{$mess['body']}}</p>
    @if ($mess['Đỗ'])
      <p style="color: greenyellow" >Chúc mừng bạn đã trúng tuyển trường đại học Thuỷ Lợi</p>

      
    @else
     <p style="color: red">Bạn chưa trúng tuyển đại học Thuỷ Lợi</p>
    @endif
  <p>{{$mess['nguyenvong1']}}</p>
  <p><?php 
  // echo $mess['nguyenvong2']; 
  ?></p>
  <p><?php 
  // echo $mess['nguyenvong3']; 
  ?></p>
  <p>Trân trọng</p>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>



 --}}


 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8"> <!-- utf-8 works for most cases -->
	<meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
	<title></title> <!-- The title tag shows in email notifications, like Android 4.4. -->

	<!-- Web Font / @font-face : BEGIN -->
	<!-- NOTE: If web fonts are not required, lines 9 - 26 can be safely removed. -->
	
	<!-- Desktop Outlook chokes on web font references and defaults to Times New Roman, so we force a safe fallback font. -->
	<!--[if mso]>
		<style>
			* {
				font-family: sans-serif !important;
			}
		</style>
	<![endif]-->
	
	<!-- All other clients get the webfont reference; some will render the font and others will silently fail to the fallbacks. More on that here: http://stylecampaign.com/blog/2015/02/webfont-support-in-email/ -->
	<!--[if !mso]><!-->
		<!-- insert web font reference, eg: <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'> -->
	<!--<![endif]-->

	<!-- Web Font / @font-face : END -->
	
	<!-- CSS Reset -->
    <style type="text/css">

		/* What it does: Remove spaces around the email design added by some email clients. */
		/* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
        body {
	        margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
        }
        
        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }
        
        /* What is does: Centers email on Android 4.4 */
        div[style*="margin: 16px 0"] {
            margin:0 !important;
        }
        
        /* What it does: Stops Outlook from adding extra spacing to tables. */
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }
                
        /* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            Margin: 0 auto !important;
        }
        table table table {
            table-layout: auto; 
        }
        
        /* What it does: Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode:bicubic;
        }
        
        /* What it does: A work-around for iOS meddling in triggered links. */
        .mobile-link--footer a,
        a[x-apple-data-detectors] {
            color:inherit !important;
            text-decoration: underline !important;
        }
      
    </style>
    
    <!-- Progressive Enhancements -->
    <style>
        
        /* What it does: Hover styles for buttons */
        .button-td,
        .button-a {
            transition: all 100ms ease-in;
        }
        .button-td:hover,
        .button-a:hover {
            background: #555555 !important;
            border-color: #555555 !important;
        }

        /* Media Queries */
        @media screen and (max-width: 600px) {

            .email-container {
                width: 100% !important;
                margin: auto !important;
            }

            /* What it does: Forces elements to resize to the full width of their container. Useful for resizing images beyond their max-width. */
            .fluid,
            .fluid-centered {
                max-width: 100% !important;
                height: auto !important;
                Margin-left: auto !important;
                Margin-right: auto !important;
            }
            /* And center justify these ones. */
            .fluid-centered {
                Margin-left: auto !important;
                Margin-right: auto !important;
            }

            /* What it does: Forces table cells into full-width rows. */
            .stack-column,
            .stack-column-center {
                display: block !important;
                width: 100% !important;
                max-width: 100% !important;
                direction: ltr !important;
            }
            /* And center justify these ones. */
            .stack-column-center {
                text-align: center !important;
            }
        
            /* What it does: Generic utility class for centering. Useful for images, buttons, and nested tables. */
            .center-on-narrow {
                text-align: center !important;
                display: block !important;
                Margin-left: auto !important;
                Margin-right: auto !important;
                float: none !important;
            }
            table.center-on-narrow {
                display: inline-block !important;
            }
                
        }

    </style>

</head>
<body bgcolor="#222222" width="100%" style="Margin: 0;">
    <center style="width: 100%; background: gray;">

        <!-- Visually Hidden Preheader Text : BEGIN -->
        <div style="display:none;font-size:1px;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;mso-hide:all;font-family: sans-serif;">
            (Optional) This text will appear in the inbox preview, but not the email body.
        </div>
        <!-- Visually Hidden Preheader Text : END -->

        <!-- Email Header : BEGIN -->
        <table cellspacing="0" cellpadding="0" border="0" align="center" width="600" style="margin: auto;" class="email-container">
			<tr>
				<td style="padding: 20px 0; text-align: center;padding-bottom:0px;">
				</td>
			</tr>
        </table>
        <!-- Email Header : END -->
        
        <!-- Email Body : BEGIN -->
        <table cellspacing="0" cellpadding="0" border="0" align="center" bgcolor="#ffffff" width="600" style="margin: auto;" class="email-container">
            
            <!-- Hero Image, Flush : BEGIN -->
            <tr>
				<td>
				
				</td>
            </tr>
            <!-- Hero Image, Flush : END -->

            <!-- 1 Column Text : BEGIN -->
            <tr>

                <td style="padding: 40px; text-align: center; font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #555555;">
					<img  src="http://www.tlu.edu.vn/Portals/_default/skins/tluvie/images/logo.png" width="100%" alt="alt_text" border="0">
                 
                    <h1>{{$mess['title']}}</h1>
                    <p>{{$mess['body']}}</p>
                      @if ($mess['trangthai']=='Đỗ')
                      <p style="color: greenyellow" >Chúc mừng bạn đã trúng tuyển trường đại học Thuỷ Lợi</p>
                      <p>{{$mess['nguyenvong1']}}</p>
                      <p><?php echo $mess['nguyenvong2'];?></p>
                      <p><?php echo $mess['nguyenvong3'];?></p>
                      <p>Đăng nhập vào trang trường để xem lại thông tin cá nhân với Tài khoản và mật khẩu là email và CMND của bạn đã đăng ký trong hồ sơ xét tuyển </p>
                        
                      @else
                       <p style="color: red">Bạn chưa trúng tuyển đại học Thuỷ Lợi</p>
                       <p>Cảm ơn bạn đã xét tuyển </p>
                      @endif
                    
                    <p>Trân trọng</p>
                        


                    <br><br>
                    <!-- Button : Begin -->
                    <table cellspacing="0" cellpadding="0" border="0" align="center" style="Margin: auto">
                        <tr>
                            <td style="border-radius: 3px; background: gray; text-align: center;" class="button-td">
                                <a href="{{route('login')}}" style="background: gray; border: 15px solid gray; font-family: sans-serif; font-size: 13px; line-height: 1.1; text-align: center; text-decoration: none; display: block; border-radius: 3px; font-weight: bold;" class="button-a">
                                    &nbsp;&nbsp;&nbsp;&nbsp;<span style="color:#ffffff">Đăng nhập</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                </a>
                            </td>
                        </tr>
                    </table>
                    <!-- Button : END -->
                </td>
            </tr>
            <!-- 1 Column Text : BEGIN -->

            <!-- Background Image with Text : BEGIN -->
            <tr>
                <!-- Bulletproof Background Images c/o https://backgrounds.cm -->
                <td bgcolor="gray" valign="middle" style="text-align: center; background-position: center center !important; background-size: cover !important;">

                    <!--[if gte mso 9]>
                    <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="width:600px;height:175px; background-position: center center !important;">
                    <v:fill type="tile" src="http://placehold.it/600x230/222222/666666" color="#222222" />
                    <v:textbox inset="0,0,0,0">
                    <![endif]-->
                    <div>
                        <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                                <td valign="middle" style="text-align: center; padding: 40px; font-family: sans-serif; font-size: 15px; mso-height-rule: exactly; line-height: 20px; color: #ffffff;">
                                  Cảm ơn bạn đã xét tuyển tại trường chúng tôi.
                                </td>
                            </tr>
                        </table>
                        </div>
                    <!--[if gte mso 9]>
                    </v:textbox>
                    </v:rect>
                    <![endif]-->
                </td>
            </tr>
            <!-- Background Image with Text : END -->
           
            <!-- 2 Even Columns : BEGIN -->
          
        <!-- Email Footer : BEGIN -->
        <table cellspacing="0" cellpadding="0" border="0" align="center" width="600" style="margin: auto;" class="email-container">
            <tr>
                <td style="padding: 40px 10px;width: 100%;font-size: 12px; font-family: sans-serif; mso-height-rule: exactly; line-height:18px; text-align: center; color: #888888;">
                    <webversion style="color:#cccccc; text-decoration:underline; font-weight: bold;"></webversion>
                    <br><br>
                   Đại Học Thuỷ Lợi<br><span class="mobile-link--footer">175 Tây Sơn Đống Đa Hà Nội</span><br><span class="mobile-link--footer">099999999999</span>
                    <br><br> 
                    <unsubscribe style="color:#888888; text-decoration:underline;">unsubscribe</unsubscribe>
                </td>
            </tr>
        </table>
        <!-- Email Footer : END -->

    </center>
</body>
</html>
