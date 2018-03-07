
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN""http://www.w3.org/TR/REC-html40/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="../css/homepage.css">
<script src="../js/jquery-3.3.1.min.js" type="text/javascript"></script>
<title>ParcelHub</title>
</head>
<body style='margin: 0; padding: 0;'>
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full header" style="position:fixed; top:0px;">
    <tbody><tr>
        <td width="100%" valign="top" align="center" bgcolor="#ffffff">
        
            <table width="1000" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
                <tbody><tr>
                    <td width="100%" align="center">
                    
                        <!-- Start Nav -->
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
                            <tbody><tr>
                                <td width="100%" height="5"></td>
                            </tr>
                            <tr>
                                <td width="100%" valign="middle" align="center">
                                    
                                    <!-- Logo -->
                                    <table width="150" border="0" cellpadding="0" cellspacing="0" align="left" class="fullCenter" style="text-align: left;">
                                        <tbody><tr>
                                            <td height="65" valign="middle" width="100%" class="fullCenter">
                                                <a href="#home"><img width="113" src="images/logo.png" alt="" border="0"></a>
                                            </td>
                                        </tr>
                                    </tbody></table>
                                    
                                    <!-- Nav --> 
                                    <table id="menu-list" width="800" border="0" cellpadding="0" cellspacing="0" align="right" style="text-align: right; font-size: 13px; letter-spacing: 1px;" class="fullCenter">    
                                        <tbody><tr>
                                            <td height="65" valign="middle" width="14%" style="font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 600;">
                                                <a href="#home" class="active" style="text-decoration: none; color: #191919;">HOME</a>
                                            </td>
                                            <td valign="middle" width="14%" style="font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 600;">
                                                <a href="#service" style="text-decoration: none; color: #191919;">SERVICE</a>
                                            </td>
                                            <td valign="middle" width="14%" style="font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 600;">
                                                <a href="#pricing" style="text-decoration: none; color: #191919;">PRICING</a>
                                            </td>
                                            @if(auth()->check())
                                                <td valign="middle" width="14%" style="font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 600;">
                                                    <a href="{{ url('/lots') }}" style="text-decoration: none; color: #191919;">
                                                        @role('admin')
                                                            ADMIN PANEL
                                                        @endrole
                                                        @role('user')
                                                            MY ACCOUNT
                                                        @endrole
                                                    </a>
                                                </td>
                                            @else
                                                <td valign="middle" width="14%" style="font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 600;">
                                                    <a href="{{ url('/register') }}" style="text-decoration: none; color: #191919;">REGISTER</a>
                                                </td>
                                                <td valign="middle" width="14%" style="font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 600;">
                                                    <a href="{{ url('/login') }}" style="text-decoration: none; color: #191919;">LOGIN</a>
                                                </td>
                                            @endif
                                            
                                        </tr>
                                    </tbody></table>
                                                                    
                                </td>
                            </tr>
                        </tbody></table><!-- End Nav -->
                        
                    </td>
                </tr>
            </tbody></table>
            
        </td>
    </tr>
</table>

<table id="home" width="100%" height="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
    <tbody><tr>
        <td align="center" bgcolor="#303030" style="background-image: url('images/home-1.jpg'); background-position: center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-attachment: fixed; background-size: cover; background-size: 100% auto;" id="animation" class="headerBG">
        <!--[if gte mso 9]> <v:rect xmlns:v="urn:schemas-microsoft-com:vml" fill="true" stroke="false" style="mso-width-percent:1000;"><v:fill type="tile" src="images/header_bg2.jpg"/><v:textbox style="mso-fit-shape-to-text:true" inset="0,0,0,0"><![endif]--><div>
        
            <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
                <tbody><tr>
                    <td width="100%" align="center">
                        
                        <!-- Start Header Text -->
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
                            <tbody>
                            <tr>
                                <td width="100%" valign="middle" align="center">
                                    
                                    <!-- Header Text --> 
                                    <table width="600" border="0" cellpadding="0" cellspacing="0" align="right" style="text-align: center;" class="fullCenter"> 
                                        <tbody><tr>
                                            <td valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 700; font-size: 33px; color: #ffffff; line-height: 38px;">
                                                Place Your Goods
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="12"></td>
                                        </tr>
                                        <tr>
                                            <td valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 400; font-size: 15px; color: #ffffff;">
                                                Keeping your goods in a tidy place.
                                            </td>
                                        </tr>
                                        <!-- End Button Center -->
                                    </tbody></table>
                                                                    
                                </td>
                            </tr>
                            <tr>
                                <td width="100%" height="150"></td>
                            </tr>
                        </tbody></table><!-- End Header Text -->
                        
                    </td>
                </tr>
            </tbody></table>
            </div><!--[if gte mso 9.]>
            </v:textbox>
            </v:fill></v:rect>
            <![endif]-->
            
        </td>
    </tr>
</table>

<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" id="service">
    <tbody><tr>
        <td width="100%" valign="top" bgcolor="#f6f6f6">

            <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
                <tbody><tr>
                    <td align="center">
                        
                        <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
                            <tbody><tr>
                                <td width="100%" align="center">
                                    
                                    <!-- Headline Header -->
                                    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full">
                                        <tbody><tr>
                                            <td width="100%" height="60"></td>
                                        </tr>
                                        <tr>
                                            <td width="100%" style="font-size: 18px; color: #191919; text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 600; line-height: 24px; vertical-align: top; text-transform: uppercase;" class="fullCenter">  
                                                OUR SERVICES                            
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="40"></td>
                                        </tr>
                                    </tbody></table><!-- End Headline Header -->
                                    
                                    <!-- Round Icon 1 -->
                                    <table width="150" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;" class="fullCenter">
                                        <tbody><tr>
                                            <td width="150">
                                                <table width="150" border="0" cellpadding="0" cellspacing="0" align="center" class="smallIcon">
                                                    <tbody><tr>
                                                        <td width="100%" height="150" bgcolor="#ffffff" style="border-radius: 100%; text-align: center;">
                                                            <a href="#" style="text-decoration: none;">
                                                                <img src="images/round_icon1.png" width="70" alt="" border="0" class="jump">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody></table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="25"></td>
                                        </tr>
                                        <tr>
                                            <td width="100%" style="font-size: 18px; color: #191919; text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 600;line-height: 24px; vertical-align: top;"> 
                                                Entertainment               
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="15"></td>
                                        </tr>
                                        <tr>
                                            <td width="100%" style="font-size: 13px; color: #969696; text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 400; line-height: 24px; vertical-align: top;">    
                                                Integer posuere erat a ante venenatis dapibus posuere velit aliquet sed posuere constet.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="30">                                   
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="22">                                   
                                            </td>
                                        </tr>
                                    </tbody></table>
                                    
                                    <table width="75" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full">
                                        <tbody><tr>
                                            <td width="100%" height="40">                                   
                                            </td>
                                        </tr>
                                    </tbody></table>
                                    
                                    <!-- Round Icon 2 -->
                                    <table width="150" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;" class="fullCenter">
                                        <tbody><tr>
                                            <td width="150">
                                                <table width="150" border="0" cellpadding="0" cellspacing="0" align="center" class="smallIcon">
                                                    <tbody><tr>
                                                        <td width="100%" height="150" bgcolor="#ffffff" style="border-radius: 100%; text-align: center;">
                                                            <a href="#" style="text-decoration: none;">
                                                                <img src="images/round_icon2.png" width="70" alt="" border="0" class="jump">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody></table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="25"></td>
                                        </tr>
                                        <tr>
                                            <td width="100%" style="font-size: 18px; color: #191919; text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 600; line-height: 24px; vertical-align: top;">    
                                                Experience
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="15"></td>
                                        </tr>
                                        <tr>
                                            <td width="100%" style="font-size: 13px; color: #969696; text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 400; line-height: 24px; vertical-align: top;">    
                                                Integer posuere erat a ante venenatis dapibus posuere velit aliquet sed posuere constet.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="30">                                   
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="22">                                   
                                            </td>
                                        </tr>
                                    </tbody></table>
                                    
                                    <table width="1" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full">
                                        <tbody><tr>
                                            <td width="100%" height="40">                                   
                                            </td>
                                        </tr>
                                    </tbody></table>
                                    
                                    <!-- Round Image 3 -->
                                    <table width="150" border="0" cellpadding="0" cellspacing="0" align="right" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;" class="fullCenter">
                                        <tbody><tr>
                                            <td width="150">
                                                <table width="150" border="0" cellpadding="0" cellspacing="0" align="center" class="smallIcon">
                                                    <tbody><tr>
                                                        <td width="100%" height="150" bgcolor="#ffffff" style="border-radius: 100%; text-align: center;">
                                                            <a href="#" style="text-decoration: none;">
                                                                <img src="images/round_icon3.png" width="70" alt="" border="0" class="jump">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody></table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="25"></td>
                                        </tr>
                                        <tr>
                                            <td width="100%" style="font-size: 18px; color: #191919; text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 600; line-height: 24px; vertical-align: top;">    
                                                Premium Quality                     
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="15"></td>
                                        </tr>
                                        <tr>
                                            <td width="100%" style="font-size: 13px; color: #969696; text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 400; line-height: 24px; vertical-align: top;">    
                                                Integer posuere erat a ante venenatis dapibus posuere velit aliquet sed posuere constet.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="30">                                   
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="22">                                   
                                            </td>
                                        </tr>
                                    </tbody></table>
                                    
                                </td>
                            </tr>
                        </tbody></table>
                        
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
                            <tbody><tr>
                                <td width="100%" height="40"></td>
                            </tr>
                        </tbody></table>
                    
                    </td>
                </tr>
            </tbody></table><!-- Nav Wrapper -->
        
        </td>
    </tr>
</table>

<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
    <tbody><tr>
        <td width="100%" valign="top" align="center" bgcolor="#ffffff">
            
            <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
                <tbody><tr>
                    <td align="center">
                        
                        <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
                            <tbody><tr>
                                <td width="100%" align="center">
                    
                                    <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
                                        <tbody><tr>
                                            <td width="100%" height="45"></td>
                                        </tr>
                                    </tbody></table>
                                    
                                    <!-- Image 1 -->
                                    <table width="270" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="table50Left">
                                        <tbody><tr>
                                            <td width="100%">
                                                <a href="#" style="text-decoration: none;">
                                                    <img src="images/row-3.jpg" alt="" border="0" width="262" height="auto" style="width: 262px; height: auto;">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="0" class="h25"></td>
                                        </tr>
                                    </tbody></table>
                                    
                                    <!-- Image 1 Text -->
                                    <table width="270" border="0" cellpadding="0" cellspacing="0" align="right" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="table50Right">
                                        <tbody><tr>
                                            <td width="100%" style="font-size: 18px; color: #191919; text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 600; line-height: 24px; vertical-align: top;">  
                                                Design and Development                      
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="15"></td>
                                        </tr>
                                        <tr>
                                            <td width="100%" style="font-size: 13px; color: #969696; text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 400; line-height: 24px; vertical-align: top;">  
                                                Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="30"></td>
                                        </tr>
                                    </tbody></table>
                                    
                                </td>
                            </tr>
                        </tbody></table>
                        
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
                            <tbody><tr>
                                <td width="100%" height="50"></td>
                            </tr>
                        </tbody></table>
                    
                    </td>
                </tr>
            </tbody></table>
        
        </td>
    </tr>
</table>

<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
    <tbody><tr>
        <td width="100%" valign="top" bgcolor="#f6f6f6" align="center">

            <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
                <tbody><tr>
                    <td align="center">
                        
                        <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
                            <tbody><tr>
                                <td width="100%" align="center">
                    
                                    <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
                                        <tbody><tr>
                                            <td width="100%" height="45"></td>
                                        </tr>
                                    </tbody></table>
                                    
                                    <!-- Image 2 -->
                                    <table width="270" border="0" cellpadding="0" cellspacing="0" align="right" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="table50Right">
                                        <tbody><tr>
                                            <td width="100%">
                                                <a href="#" style="text-decoration: none;">
                                                    <img src="images/row-4.jpg" alt="" border="0" width="262" height="auto" style="width: 262px; height: auto;">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="0" class="h25"></td>
                                        </tr>
                                    </tbody></table>
                                    
                                    <!-- Image 2 Text -->
                                    <table width="270" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="table50Left">
                                        <tbody><tr>
                                            <td width="100%" style="font-size: 18px; color: #191919; text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 600; line-height:24px; vertical-align: top;">   
                                                Simple is Better                        
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="15"></td>
                                        </tr>
                                        <tr>
                                            <td width="100%" style="font-size: 13px; color: #969696; text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 400; line-height: 24px; vertical-align: top;">  
                                                Maecenas faucibus mollis interdum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
                                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="30"></td>
                                        </tr>
                                    </tbody></table>
                                    
                                </td>
                            </tr>
                        </tbody></table>
                        
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
                            <tbody><tr>
                                <td width="100%" height="50"></td>
                            </tr>
                        </tbody></table>
                    
                    </td>
                </tr>
            </tbody></table>
        
        </td>
    </tr>
</table>

<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" id="pricing">
    <tbody><tr>
        <td width="100%" valign="top" bgcolor="#ffffff" align="center">
            
            <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
                <tbody><tr>
                    <td align="center">
                        
                        <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
                            <tbody><tr>
                                <td width="100%" align="center">
                                    
                                    <!-- Headline -->
                                    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full">
                                        <tbody><tr>
                                            <td width="100%" height="35"></td>
                                        </tr>
                                        <tr>
                                            <td width="100%" style="font-size: 18px; color: #191919; text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 600; line-height: 24px; vertical-align: top; text-transform: uppercase;" class="fullCenter">  
                                                Our Pricing                         
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="35"></td>
                                        </tr>
                                    </tbody></table><!-- End Headline -->
                                    
                                    <!-- Col 1 -->
                                    <table width="185" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center; background-color: #f6f6f6;" bgcolor="#f6f6f6" class="fullCenter">
                                        <tbody><tr>
                                            <td width="100%" height="30" bgcolor="#191919" style="font-size: 12px; color: #ffffff; text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 600; line-height: 24px; text-transform: uppercase; letter-spacing: 1px; padding-left: 20px; padding-right: 20px;">
                                                Basic
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="60" bgcolor="#67c890" style="font-size: 27px; color: #ffffff; text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; line-height: 24px; letter-spacing: 1px; padding-left: 20px; padding-right: 20px; background-color: #67c890; font-weight: 700;">
                                                $5.00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="40" style="font-size: 14px; color: #969696; text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 400; line-height: 24px; padding-left: 20px; padding-right: 20px;">
                                                5 Database
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="1" bgcolor="#f6f6f6" style="line-height: 1px; font-size: 0px;">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="40" style="font-size: 14px; color: #969696; text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 400; line-height: 24px; padding-left: 20px; padding-right: 20px;">
                                                5 Email Accounts
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="1" bgcolor="#f6f6f6" style="line-height: 1px; font-size: 0px;">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="40" style="font-size: 14px; color: #969696; text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 400; line-height: 24px; padding-left: 20px; padding-right: 20px;">
                                                1 Gb Storage
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="1" bgcolor="#f6f6f6" style="line-height: 1px; font-size: 0px;">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="40" style="font-size: 14px; color: #969696; text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 400; line-height: 24px; padding-left: 20px; padding-right: 20px;">
                                                1 User
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="1" bgcolor="#f6f6f6" style="line-height: 1px; font-size: 0px;">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="40" style="font-size: 14px; color: #969696; text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 400; line-height: 24px; padding-left: 20px; padding-right: 20px;">
                                                Backup Service
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="1" bgcolor="#f6f6f6" style="line-height: 1px; font-size: 0px;">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="25">                                   
                                            </td>
                                        </tr>
                                        <!-- Button Center -->
                                        <tr>
                                            <td align="center">
                                                <table border="0" cellpadding="0" cellspacing="0" align="center"> 
                                                    <tbody><tr> 
                                                        <td align="center" height="36" bgcolor="#67c890" style="padding-left: 19px; padding-right: 19px; font-weight: 700; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-transform: uppercase; background-color: #67c890; font-size: 12px;">
                                                            <a href="#" style="color: #ffffff; font-size:12px; text-decoration: none; line-height:34px; width:100%;">Buy Now!</a>
                                                        </td> 
                                                    </tr> 
                                                </tbody></table> 
                                            </td>
                                        </tr>
                                        <!-- End Button Center -->
                                        <tr>
                                            <td width="100%" height="40">
                                            </td>
                                        </tr>
                                    </tbody></table>
                                    
                                    <table width="23" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full">
                                        <tbody><tr>
                                            <td width="100%" height="40">                                   
                                            </td>
                                        </tr>
                                    </tbody></table>
                                    
                                    <!-- Col 2 -->
                                    <table width="185" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center; background-color: #f6f6f6;" bgcolor="#f6f6f6" class="fullCenter">
                                        <tbody><tr>
                                            <td width="100%" height="30" bgcolor="#191919" style="font-size: 12px; color: #ffffff; text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 600; line-height: 24px; text-transform: uppercase; letter-spacing: 1px; padding-left: 20px; padding-right: 20px;">
                                                Large
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="60" style="font-size: 27px; color: #ffffff; text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; line-height: 24px; letter-spacing: 1px; padding-left: 20px; padding-right: 20px; background-color: #67c890; font-weight: 700;">
                                                $9.00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="40" style="font-size: 14px; color: #969696; text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 400; line-height: 24px; padding-left: 20px; padding-right: 20px;">
                                                25 Database
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="1" bgcolor="#f6f6f6" style="line-height: 1px; font-size: 0px;">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="40" style="font-size: 14px; color: #969696; text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 400; line-height: 24px; padding-left: 20px; padding-right: 20px;">
                                                25 Email Accounts
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="1" bgcolor="#f6f6f6" style="line-height: 1px; font-size: 0px;">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="40" style="font-size: 14px; color: #969696; text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 400; line-height: 24px; padding-left: 20px; padding-right: 20px;">
                                                25 Gb Storage
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="1" bgcolor="#f6f6f6" style="line-height: 1px; font-size: 0px;">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="40" style="font-size: 14px; color: #969696; text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 400; line-height: 24px; padding-left: 20px; padding-right: 20px;">
                                                25 User
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="1" bgcolor="#f6f6f6" style="line-height: 1px; font-size: 0px;">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="40" style="font-size: 14px; color: #969696; text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 400; line-height: 24px; padding-left: 20px; padding-right: 20px;">
                                                Backup Service
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="1" bgcolor="#f6f6f6" style="line-height: 1px; font-size: 0px;">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="25">                                   
                                            </td>
                                        </tr>
                                        <!-- Button Center -->
                                        <tr>
                                            <td align="center">
                                                <table border="0" cellpadding="0" cellspacing="0" align="center"> 
                                                    <tbody><tr> 
                                                        <td align="center" height="36" bgcolor="#67c890" style="padding-left: 19px; padding-right: 19px; font-weight: 700; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-transform: uppercase; background-color: #67c890; font-size: 12px;">
                                                            <a href="#" style="color: #ffffff; font-size:12px; text-decoration: none; line-height:34px; width:100%;">Buy Now!</a>
                                                        </td> 
                                                    </tr> 
                                                </tbody></table> 
                                            </td>
                                        </tr>
                                        <!-- End Button Center -->
                                        <tr>
                                            <td width="100%" height="40">                                   
                                            </td>
                                        </tr>
                                    </tbody></table>
                                    
                                    <table width="1" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full">
                                        <tbody><tr>
                                            <td width="100%" height="40">                                   
                                            </td>
                                        </tr>
                                    </tbody></table>
                                    
                                    <!-- Col 3 -->
                                    <table width="185" border="0" cellpadding="0" cellspacing="0" align="right" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center; background-color: #f6f6f6;" bgcolor="#f6f6f6" class="fullCenter">
                                        <tbody><tr>
                                            <td width="100%" height="30" bgcolor="#191919" style="font-size: 12px; color: #ffffff; text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 600; line-height: 24px; text-transform: uppercase; letter-spacing: 1px; padding-left: 20px; padding-right: 20px;">
                                                Premium
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="60" style="font-size: 27px; color: #ffffff; text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; line-height: 24px; letter-spacing: 1px; padding-left: 20px; padding-right: 20px; background-color: #67c890; font-weight: 700;">
                                                $29.00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="40" style="font-size: 14px; color: #969696; text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 400; line-height: 24px; padding-left: 20px; padding-right: 20px;">
                                                100 Database
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="1" bgcolor="#f6f6f6" style="line-height: 1px; font-size: 0px;">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="40" style="font-size: 14px; color: #969696; text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 400; line-height: 24px; padding-left: 20px; padding-right: 20px;">
                                                100 Email Accounts
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="1" bgcolor="#f6f6f6" style="line-height: 1px; font-size: 0px;">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="40" style="font-size: 14px; color: #969696; text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 400; line-height: 24px; padding-left: 20px; padding-right: 20px;">
                                                100 Gb Storage
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="1" bgcolor="#f6f6f6" style="line-height: 1px; font-size: 0px;">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="40" style="font-size: 14px; color: #969696; text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 400; line-height: 24px; padding-left: 20px; padding-right: 20px;">
                                                Unlimited Users
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="1" bgcolor="#f6f6f6" style="line-height: 1px; font-size: 0px;">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="40" style="font-size: 14px; color: #969696; text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 400; line-height: 24px; padding-left: 20px; padding-right: 20px;">
                                                Backup Service
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="1" bgcolor="#f6f6f6" style="line-height: 1px; font-size: 0px;">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="25">                                   
                                            </td>
                                        </tr>
                                        <!-- Button Center -->
                                        <tr>
                                            <td align="center">
                                                <table border="0" cellpadding="0" cellspacing="0" align="center"> 
                                                    <tbody><tr> 
                                                        <td align="center" height="36" bgcolor="#67c890" style="padding-left: 19px; padding-right: 19px; font-weight: 700; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-transform: uppercase; background-color: #67c890; font-size: 12px;">
                                                            <a href="#" style="color: #ffffff; font-size:12px; text-decoration: none; line-height:34px; width:100%;">Buy Now!</a>
                                                        </td> 
                                                    </tr> 
                                                </tbody></table> 
                                            </td>
                                        </tr>
                                        <!-- End Button Center -->
                                        <tr>
                                            <td width="100%" height="40">
                                            </td>
                                        </tr>
                                    </tbody></table>
                                    
                                </td>
                            </tr>
                        </tbody></table>
                        
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
                            <tbody><tr>
                                <td width="100%" height="50"></td>
                            </tr>
                        </tbody></table>
                    
                    </td>
                </tr>
            </tbody></table><!-- Nav Wrapper -->
        
        </td>
    </tr>
</table>

<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
    <tbody><tr>
        <td width="100%" valign="top" bgcolor="#f6f6f6" align="center">

            <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
                <tbody><tr>
                    <td align="center">
                        
                        <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
                            <tbody><tr>
                                <td width="100%" align="center">
                    
                                    <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
                                        <tbody><tr>
                                            <td width="100%" height="60"></td>
                                        </tr>
                                    </tbody></table>
                                    
                                    <!-- Footer Left -->
                                    <table width="170" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
                                        <tbody><tr>
                                            <td width="100%" style="font-size: 14px; color: #191919; text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 600; line-height: 24px; vertical-align: top;" class="fullCenter">   
                                                About Us                        
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="10">                                   
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" style="font-size: 12px; color: #969696; text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 400; line-height: 20px; vertical-align: top;" class="fullCenter">   
                                                We are a team fusce dapibus, tellus ac cursus commodo.
                                                <br><br>
                                                Nulla vitae elit libero, a pharetra augue. Nullam quis risus eget urna mollis ornare vel eu leo.
                                            </td>
                                        </tr>
                                    </tbody></table>
                                    
                                    <table width="50" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full">
                                        <tbody><tr>
                                            <td width="100%" height="40">                                   
                                            </td>
                                        </tr>
                                    </tbody></table>
                                    
                                    <!-- Footer Middle -->
                                    <table width="170" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
                                        <tbody><tr>
                                            <td width="100%" style="font-size: 14px; color: #191919; text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 600; line-height: 24px; vertical-align: top;" class="fullCenter">   
                                                Social Media                    
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="10">                                   
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" style="font-size: 12px; color: #969696; text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 400; line-height: 20px; vertical-align: top;" class="fullCenter">   
                                                Donec id elit non mi porta gravida at eget metus.
                                                <br><br>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="5">                                    
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" class="icon24">
                                                <table width="170" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
                                                    <tbody><tr>
                                                        <td width="24" height="24" style="text-align: center; line-height: 1px;">
                                                            <a href="#" style="text-decoration: none;"><img src="images/icon1.jpg" width="24" alt="" border="0"></a>
                                                        </td>
                                                        <td width="6"></td>
                                                        <td width="24" height="24" style="text-align: center; line-height: 1px;">
                                                            <a href="#" style="text-decoration: none;"><img src="images/icon2.jpg" width="24" alt="" border="0"></a>
                                                        </td>
                                                        <td width="6"></td>
                                                        <td width="24" height="24" style="text-align: center; line-height: 1px;">
                                                            <a href="#" style="text-decoration: none;"><img src="images/icon3.jpg" width="24" alt="" border="0"></a>
                                                        </td>
                                                        <td width="6"></td>
                                                        <td width="24" height="24" style="text-align: center; line-height: 1px;">
                                                            <a href="#" style="text-decoration: none;"><img src="images/icon4.jpg" width="24" alt="" border="0"></a>
                                                        </td>
                                                        <td width="6"></td>
                                                        <td width="24" height="24" style="text-align: center; line-height: 1px;">
                                                            <a href="#" style="text-decoration: none;"><img src="images/icon5.jpg" width="24" alt="" border="0"></a>
                                                        </td>
                                                    </tr>
                                                </tbody></table>
                                            </td>
                                        </tr>
                                    </tbody></table>
                                    
                                    <table width="1" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full">
                                        <tbody><tr>
                                            <td width="100%" height="40">                                   
                                            </td>
                                        </tr>
                                    </tbody></table>
                                    
                                    <!-- Footer Right -->
                                    <table width="170" border="0" cellpadding="0" cellspacing="0" align="right" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
                                        <tbody><tr>
                                            <td width="100%" style="font-size: 14px; color: #191919; text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 600; line-height: 24px; vertical-align: top;" class="fullCenter">   
                                                Contact Us                  
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" height="10">                                   
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="100%" style="font-size: 12px; color: #969696; text-align: left; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 400; line-height: 20px; vertical-align: top;" class="fullCenter">   
                                                <a href="#" style="text-decoration: none; color: #969696;">www.yourwebsite.com</a>
                                                <br>
                                                1200AA Amsterdam
                                                <br><br>
                                                Nulla vitae elit libero, a pharetra augue. Nullam quis risus eget urna mollis ornare vel eu leo.
                                            </td>
                                        </tr>
                                    </tbody></table>
                                    
                                </td>
                            </tr>
                        </tbody></table>
                        
                        <!-- CopyRight -->
                        <table width="600" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
                            <tbody><tr>
                                <td width="100%" height="30"></td>
                            </tr>
                            <tr>
                                <td width="100%" style="font-size: 12px; color: #969696; text-align: center; font-family: Helvetica, Arial, sans-serif, 'Open Sans'; font-weight: 400; line-height: 20px; vertical-align: top;" class="fullCenter"> 
                                    Copyright © ParcelHub 2018, All rights reserved.
                                </td>
                            </tr>
                        </tbody></table>
                        
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full">
                            <tbody><tr>
                                <td width="100%" height="30"></td>
                            </tr>
                            <tr>
                                <td width="100%" height="1"></td>
                            </tr>
                        </tbody></table>
                    
                    </td>
                </tr>
            </tbody></table>
        
        </td>
    </tr>
</table>
</body>
</html>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});

$(document).ready(function () {
    $(document).on("scroll", onScroll);
    
    //smoothscroll
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");
        
        $('a').each(function () {
            $(this).removeClass('active');
        })
        $(this).addClass('active');
      
        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top+2
        }, 500, 'swing', function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });
});

function onScroll(event){
    var scrollPos = $(document).scrollTop();
    $('#menu-list a[href^="#"').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('#menu-list tbody tr td a').removeClass("active");
            currLink.addClass("active");
        }
        else{
            currLink.removeClass("active");
        }
    });
}


</script>
