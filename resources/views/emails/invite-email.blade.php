<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Define Charset -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Responsive Meta Tag -->
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
    <style type="text/css">
        body {
            width: 100%;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            -webkit-text-size-adjust: none;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            mso-margin-top-alt: 0px;
            mso-margin-bottom-alt: 0px;
            mso-padding-alt: 0px 0px 0px 0px;
        }

        p,
        h1,
        h2,
        h3,
        h4 {
            margin-top: 0;
            margin-bottom: 0;
            padding-top: 0;
            padding-bottom: 0;
        }


        html {
            width: 100%;
        }

        /* iOS BLUE LINKS */

        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }


        /* ----------- responsivity ----------- */

        @media only screen and (max-width: 640px) {

            /*----- main image -------*/
            *[class=hide] {
                display: none !important;
            }

            *[class=center] {
                text-align: center !important;
                padding-left: 0px !important;
                padding-right: 0px !important;
            }

            *[class=button] img {
                width: 100% !important;
            }

            *[class=button100] img {
                width: 100% !important;
                height: auto !important;
            }

            *[class=padding2] {
                padding-left: 0px !important;
                padding-top: 40px !important;
            }

            *[class=font16] {
                font-size: 12px !important;
                line-height: 18px !important;
            }

            /*-------- Container --------*/
            *[class=min_width] {
                min-width: 100% !important;
                max-width: 440px !important;
            }

            *[class=container600] {
                width: 100% !important;
                max-width: 440px !important;
            }

            *[class=container400] {
                width: 100% !important;
                max-width: 338px !important
            }

            *[class=container500] {
                width: 92% !important
            }

            *[class=width30] {
                width: 30% !important
            }

        }

    </style>
</head>


<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" style="width: 100%; -webkit-font-smoothing: antialiased; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; mso-margin-top-alt: 0px; mso-margin-bottom-alt: 0px; mso-padding-alt: 0px 0px 0px 0px; margin: 0; padding: 0;">

    <table border="0" width="100%" cellpadding="0" cellspacing="0">

        <tbody>
            <tr>
                <td align="center" style="padding-top: 60px; padding-bottom: 50px;">
                    <table class="container500" align="center" border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">

                    </table>
                    <table align="center" bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" style="text-align: center; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" class="user-info">
                        <tbody>
                            <tr>
                                <td align="center" style="line-height: 24px; font-weight: normal; font-style: normal; color: #70707a; padding: 0;">
                                    <img width="120px" alt="Image" src="https://media.licdn.com/dms/image/C560BAQErz9a4BhFeig/company-logo_200_200/0?e=2130710400&v=beta&t=acMYvG6dokgodr1PtI2OpMUwFCY94Ti3FxwD_ZuThCk" height="120" border="0" style="border-radius: 100%; margin-bottom: 8px;" class="avatar">
                                </td>
                            </tr>
                            <tr>
                                <td align="center" style="font-family: HelveticaNeue, Helvetica, Arial, sans-serif; font-stretch: normal; font-size: 16px; line-height: 24px; font-weight: normal; font-style: normal; color: #70707a; padding: 0;">
                                    <strong style="font-size: 14px; line-height: 1.43; color: #2c2b3f;">{{ $full_name }}</strong><br>
                                    <small style="font-size: 12px; line-height: 1.67; text-align: center; color: #95959f;"></small>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    @if($invite_type == 'generate_invoice')
                    <h2 style="max-width: 400px; font-size: 28px; line-height: 1.29; letter-spacing: -0.1px; text-align: center; color: #2c2b3f; font-family: HelveticaNeue, Helvetica, Arial, sans-serif; font-stretch: normal; font-weight: 500; padding-top: 0; padding-bottom: 0; margin: 25px auto;" align="center">{{ $full_name }} invited you to<br>generate an invoice for your product</h2>
                    @elseif($invite_type == 'preview_invoice')
                    <h2 style="max-width: 400px; font-size: 28px; line-height: 1.29; letter-spacing: -0.1px; text-align: center; color: #2c2b3f; font-family: HelveticaNeue, Helvetica, Arial, sans-serif; font-stretch: normal; font-weight: 500; padding-top: 0; padding-bottom: 0; margin: 25px auto;" align="center">{{ $full_name }} invited you to<br>preview an invoice for the product you wish to purchase</h2>
                    @endif

                    <table align="center" bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" style="text-align: center; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" class="user-info">
                        <tbody>
                            <tr>
                                <td align="center" style="font-family: HelveticaNeue, Helvetica, Arial, sans-serif; font-size: 16px; line-height: 1.5; letter-spacing: -0.3px; text-align: center; color: #70707a; max-width: 400px; padding: 0;">
                                    <p style="margin-top: 0; margin-bottom: 0; padding-top: 0; padding-bottom: 0;">Join over 2 million people in the fastest growing platform for buyers and sellers to make transactions without fear. </p>
                                </td>
                            </tr>
                            <tr>
                                <td align="center">
                                    @if($invite_type == 'generate_invoice')
                                    <a href="{{ route('signin') }}/seller/{{ $token }}" style="font-family: Verdana, Arial, Tahoma; font-style: normal; border-radius: 100px; background: linear-gradient(-135deg, #78E5D7, #23C5DD); text-decoration: none; color: #FFFFFF; display: block; width: 250px; height: 50px; line-height: 50px; font-size: 16px; font-weight: bold; margin-top: 30px;" target="_blank">Accept Invitation</a>
                                    @elseif($invite_type == 'preview_invoice')
                                    <a href="{{ route('signin') }}/buyer/{{ $token }}" style="font-family: Verdana, Arial, Tahoma; font-style: normal; border-radius: 100px; background: linear-gradient(-135deg, #78E5D7, #23C5DD); text-decoration: none; color: #FFFFFF; display: block; width: 250px; height: 50px; line-height: 50px; font-size: 16px; font-weight: bold; margin-top: 30px;" target="_blank">Accept Invitation</a>
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </td>
            </tr>
        </tbody>
    </table>

    <table class="container600" align="center" border="0" width="600" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
        <tbody>
            <tr>
                <td align="center">
                    <table class="container500" align="center" border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt;">
                        <tbody>
                            <tr>
                                <td align="center" style="padding-top: 33px;">
                                    <img src="https://media.licdn.com/dms/image/C560BAQErz9a4BhFeig/company-logo_200_200/0?e=2130710400&v=beta&t=acMYvG6dokgodr1PtI2OpMUwFCY94Ti3FxwD_ZuThCk" style="display: block;" width="181" height="41" border="0" alt="Image">
                                </td>
                            </tr>

                            <tr>
                                <td align="center" style="font-family: Arial, Tahoma; font-size: 12px; line-height: 14px; font-weight: normal; font-style: normal; color: #BEBDC3; padding-top: 30px;">
                                    Phase 3 Eliminigwe Housing Estate, Elelenwo, Port Harcourt.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>

    <div style="display: none; white-space: nowrap; font: 15px courier;">
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
    </div>

</body>
</html>
