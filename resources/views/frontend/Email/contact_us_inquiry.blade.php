<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contact Us Inquiry</title>
</head>
<body>
<p>Hi Admin,</p>

<p>You have received a new contact us request from the {{ $Contact['name'] }}.</p>

<table rules="all" bordercolor="#4d4c4d" border="1" bgcolor="#FFFFFF" cellpadding="10"  align="center" width="800">
	<tr>
    	<th colspan="2" style="text-align:center"><h2>User Details</h2></th>
  	</tr>
  	<tr>
    	<th>Name:</th>
    	<td>{{ $Contact->name }}</td>
  	</tr>
	  @if(isset($Contact->email))
  	<tr>
    	<th>Email Id:</th>
    	<td>{{ $Contact->email }}</td>
  	</tr> 
	  @endif
	@if(isset($contact_number->phone))
  	<tr>
    	<th>Phone number:</th>
    	<td>{{ $Contact['phone'] }}</td>
  	</tr>
    @endif
	@if(isset($city->city))
	<tr>
    	<th>City:</th>
    	<td>{{ $Contact['city'] }}</td>
  	</tr>
	@endif
	@if(isset($country->country))
	<tr>
    	<th>Country:</th>
    	<td>{{ $Contact['country'] }}</td>
  	</tr>
	@endif
	@if(isset($country->company))
	<tr>
    	<th>Company:</th>
    	<td>{{ $Contact['company'] }}</td>
  	</tr>
	@endif
	@if(isset($Contact->comments))
	<tr>
    	<th>Comments:</th>
    	<td>{{ $Contact['comments'] }}</td>
  	</tr>
	  @endif
	  @if(isset($Contact->attachment))
	<tr>
    	<th>Attachment:</th>
    	<td><a href="{{ asset('assets\frontend\assets\Email_images/'.$Contact->attachment) }}" download>Show</a></td>
  	</tr>
	@endif
</table>
<br><br>
<p>Thanks!</p>
</body>
</html>