<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

    <head>
        <title>{{ $email->subject }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=1">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <!--[if !mso]><!-->
            <meta http-equiv="x-ua-compatible" content="IE=edge">
        <!--<![endif]-->

        <style>
            body, html {
                height:100%
            }
            .btn.primary:hover {
                background-color: #5eca60 !important;
            }
            .btn.secondary:hover {
                background-color: #ebebeb !important;
            }
            /* latin */
            @font-face {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 300;
                src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v15/DXI1ORHCpsQm3Vp6mXoaTegdm0LZdjqr5-oayXSOefg.woff2) format('woff2');
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2212, U+2215;
            }
            /* latin */
            @font-face {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 400;
                src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v15/cJZKeOuBrn4kERxqtaUH3VtXRa8TVwTICgirnJhmVJw.woff2) format('woff2');
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2212, U+2215;
            }
            /* latin */
            @font-face {
                font-family: 'Oswald';
                font-style: normal;
                font-weight: 300;
                src: local('Oswald Light'), local('Oswald-Light'), url(https://fonts.gstatic.com/s/oswald/v16/HqHm7BVC_nzzTui2lzQTDVtXRa8TVwTICgirnJhmVJw.woff2) format('woff2');
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2212, U+2215;
            }

            @media screen and (max-width: 700px) {
                #main-container {
                    background: #e4e4e4;
                }

                #sub-container {
                    margin-top: 5% !important;
                }

                .full {
                    width: 90% !important;
                }

                .half {
                    width: 50% !important;
                }

                .half .half {
                    width: 100% !important;
                }
            }
        </style>
    </head>

    <body marginwidth="0" marginheight="0" leftmargin="0" topmargin="0" yahoo="fix" style="
        width: 100%;
        background-color: #f6f6f6;
        margin: 0;
        padding: 0;
        -webkit-font-smoothing: antialiased;
        font-family: 'Open Sans', Arial, Times, serif;
    ">
        <!-- Start Background -->
        <table id="main-container" cellpadding="0" cellspacing="0" border="0" style="
            width: 100%;
            height: 100%;
            background: url('https://gallery.mailchimp.com/3ff9cada9e744cf340920d94a/images/2e4c5bc2-8d36-453c-a1e0-96dd8a536bb1.png');
            background-color: #e4e4e4;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            background-attachment: fixed;
            background-position: center bottom;
            background-repeat: no-repeat;

        ">
            <tr>
                <td style="width: 100%;" valign="top" align="center">
                    <!-- Start Wrapper  -->
                    <table id="sub-container" class="full" cellpadding="0" cellspacing="0" border="0" class="wrapper" bgcolor="#fff" style="
                        width: 650px;
                        margin-top: 80px;
                        margin-bottom: 80px;
                        -webkit-box-shadow: 0px 0 30px -5px rgba(0, 0, 0, 0.2);
                        border-width: 1px;
                        border-style: solid;
                        border-color: #e2e2e2;
                    ">
                        <tr>
                            <!-- Spacer -->
                            <td height="40" style="font-size: 40px; line-height: 40px;"></td>
                        </tr>
                        <tr>
                            <td>
                                <!-- Start Container  -->
                                <table cellpadding="0" cellspacing="0" border="0" class="container" style="width: 100%;">
                                    <tr>
                                        <td class="full" style="
                                            width: 650px;
                                            text-align: center;
                                            padding-left: 40px;
                                            padding-right: 40px;
                                            font-weight: 100;
                                            font-size: 14px;
                                            line-height: 28px;
                                            font-weight: 400;
                                            color: #999;
                                        ">
                                            {{ $email->text }}
                                        </td>
                                    </tr>
                                </table>
                                <!-- End Container  -->
                            </td>
                        </tr>
                        <tr>
                            <!-- Spacer -->
                            <td height="40" style="font-size: 40px; line-height: 40px;"></td>
                        </tr>
                    </table>
                    <!-- End Wrapper  -->
                    <table id="sub-container" class="full" cellpadding="0" cellspacing="0" border="0" class="wrapper" style="
                        width: 650px;
                        margin-top: 20px;
                        margin-bottom: 40px;
                    ">
                        <tr>
                            <td>
                                <p style="
                                    margin: 0;
                                    color: #999999;
                                    font-size: 12px;
                                    line-height: 18px;
                                    overflow-wrap: break-word;
                                    word-wrap: break-word;
                                    -ms-word-break: break-all;
                                    word-break: break-all;
                                    word-break: break-word;
                                ">
                                    This email was sent through a coding challenge sample application.
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <!-- End Background -->
    </body>
</html>