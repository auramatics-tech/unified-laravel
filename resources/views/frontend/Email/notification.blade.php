<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification</title>
</head>
<body>
<p style="margin-top:30px;">Hello {{$full_name}},</p>

<p style="margin-top:10px;">A new property status update is available for {{$property->propertyName}}.</p>


<p style="margin-top:10px;">Current Status: {{oldPropertyStatus is defined ? newPropertyStatus : property.propertyStatus.propertyStatusName}}</p>

@if(isset($oldPropertyStatus)) oldPropertyStatus is not defined
<p style="margin-top:10px;">For additional information, please visit the NREMG app on <a href="https://apps.apple.com/us/app/nremg/id1508689928" target="_blank">iOS</a> or <a href="https://play.google.com/store/apps/details?id=com.nremgroup&hl=en_IN" target="_blank">Android</a>.</p>
@endif

@if(isset(oldPropertyStatus)) oldPropertyStatus is defined 
<p style="margin-top:10px;">For additional information, please visit <a href="https://mob.nremg.com/" target="_blank">mob.nremg.com</a>.</p>
    @endif

@if(isset($oldPropertyStatus)) oldPropertyStatus is not defined 
<p style="margin-top:30px;">Want to change how you receive notifications? Update your notifications settings in your profile.</p>
@endif

<p style="margin-top:30px;">Thanks!</p>

<p style="margin-top:10px;">The NREMG Team</p>

<p style="margin-top:10px;display:inline-block;font-size:10px">Please do not reply to this email. This message was sent from a notification-only address that cannot accept incoming email.</p>

</body>
</html>