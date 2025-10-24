<%
Response.ContentType = "text/html"
Response.AddHeader "Content-Type", "text/html;charset=UTF-8"
Response.CodePage = 65001
Response.CharSet = "UTF-8"
Session.CodePage=65001

Set Mail = CreateObject("CDO.Message")
Name = Request("name")
Email = Request("email")
Phone = Request("phone")
Message = Request("message")

If Request("name") = "" Then
 Response.End
End If

If Request("phone") = "" Then
 Response.End
End If
'This section provides the configuration information for the remote SMTP server.


'Send the message using the network (SMTP over the network).
Mail.Configuration.Fields.Item ("http://schemas.microsoft.com/cdo/configuration/sendusing") = 2 

Mail.Configuration.Fields.Item ("http://schemas.microsoft.com/cdo/configuration/smtpserver") ="194.213.4.25"
Mail.Configuration.Fields.Item ("http://schemas.microsoft.com/cdo/configuration/smtpserverport") = 25

'Use SSL for the connection (True or False)
Mail.Configuration.Fields.Item ("http://schemas.microsoft.com/cdo/configuration/smtpusessl") = False 

Mail.Configuration.Fields.Item ("http://schemas.microsoft.com/cdo/configuration/smtpconnectiontimeout") = 60

'If your server requires outgoing authentication, uncomment the lines below and use a valid email address and password.
'Basic (clear-text) authentication
Mail.Configuration.Fields.Item ("http://schemas.microsoft.com/cdo/configuration/smtpauthenticate") = 1 
'Your UserID on the SMTP server
Mail.Configuration.Fields.Item ("http://schemas.microsoft.com/cdo/configuration/sendusername") ="evolve@25.wee.co.il"
Mail.Configuration.Fields.Item ("http://schemas.microsoft.com/cdo/configuration/sendpassword") ="123ZXCASD"

Mail.Configuration.Fields.Update

'End of remote SMTP server configuration section

Mail.Subject="התקבלה פניה מעמוד צור קשר - pisgat-makosh.co.il"
Mail.From="donotreply@pisgat-makosh.co.il"
Mail.To="sales@pisgat-makosh.co.il"
'Mail.CC = ""

    MailBody = "<div style='font-family:arial;font-size:12px;color:#333;direction:rtl;text-align:right'>"
    MailBody = MailBody & "<div style='font-weight:bold;padding-bottom:10px;'>שם</div>"
    MailBody = MailBody & "<div style='padding-bottom:10px;'>" & Name & "</div>"
    MailBody = MailBody & "<div style='font-weight:bold;padding-bottom:10px;'>אימייל</div>"
    MailBody = MailBody & "<div style='padding-bottom:10px;'>" & Email & "</div>"
    MailBody = MailBody & "<div style='font-weight:bold;padding-bottom:10px;'>טלפון</div>"
    MailBody = MailBody & "<div style='padding-bottom:10px;'>" & Phone & "</div>"
    MailBody = MailBody & "<div style='font-weight:bold;padding-bottom:10px;'>הודעה</div>"
    MailBody = MailBody & "<div style='padding-bottom:10px;'>" & Message & "</div>"
    MailBody = MailBody & "</div>"

Mail.BodyPart.charset = "utf-8"  


Mail.HTMLBody = MailBody
Mail.Send
Set Mail = Nothing


Response.Redirect "contact-return.asp"
%>