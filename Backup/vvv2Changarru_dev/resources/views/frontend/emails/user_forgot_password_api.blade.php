<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="content-type" content="text/html; charset=windows-1252">
    <title>Hagel Team</title>
        <style type="text/css">
            body{font-family: Helvetica,sans-Serif;color: #77798c;font-size: 14px;}
        </style>
    </head>
    <body>        
        <table style="padding: 0;" width="100%" cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                    <td>
                        <table style="margin: 0px auto 0px; text-align: center; box-shadow: 0px 0px 15px 0px rgba(0, 0, 0, 0.1); border-radius: 4px;background-color:#fff9ed; padding: 20px;" width="500px" cellspacing="0" cellpadding="0">
                            <tbody>
                                <tr>
                                    <td>
                                        <table style="margin: 10px auto; text-align: center; box-shadow: 0px 0px 3px 0px rgba(0, 0, 0, 0.1); background-color: #fff; border-radius: 4px;" width="100%" cellspacing="0" cellpadding="0">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h1 style="font-weight:normal;margin:20px 0 0;color:#664b13;">Forgot Password</h1>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h4 style="text-align:center; margin-bottom:0;color: #525252;"> Hello, {{ ucfirst(@$data['full_name'])}} </h4>

                                                        <p style="padding: 9px 30px 20px; line-height:22px; font-size:14px; color: #505050; letter-spacing: 1px; margin: 0;text-align: left;">You are receiving this email because we received a password reset request for your account.</p>          

                                                        <a href="{{@$data['email_verification_link']}}" style="padding: 8px 30px; color: #cc3f2f; margin-top: 10px;text-decoration: none; letter-spacing: 1px; border: 5px double #9f9f9f; border-radius: 0px;font-size: 18px; display: inline-block;font-weight: 800;outline: none;">Reset Password
                                                        </a>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="height:60px">
                                                    </td>
                                                </tr>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>