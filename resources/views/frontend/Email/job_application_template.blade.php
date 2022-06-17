<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Job Application Template</title>
</head>
<body>
<p>Hi Admin,</p>

<h3>You have received a new job application request from the {{ $firstname }} {{ $lastname }} for {{$jobtitle}}.</h3>

<table rules="all" bordercolor="#4d4c4d" border="1" bgcolor="#FFFFFF" cellpadding="10"  align="center" width="800">
	<tr>
    	<th colspan="2" style="text-align:center"><h2>Candidate Details</h2></th>
  	</tr>
  	<tr>
    	<th>Name:</th>
    	<td>{{ $firstname }} {{ $lastname }}</td>
  	</tr>
	<tr>
    	<th>Applied For:</th>
    	<td>{{ $jobtitle }}</td>
  	</tr>
  	<tr>
    	<th>Email Id:</th>
    	<td>{{$email}}</td>
  	</tr>
  	<tr>
    	<th>Phone number:</th>
    	<td>{{$phone}}</td>
  	</tr>
    <tr>
        <th>Experience:</th>
        <td>{{$experience}}</td>
      </tr>
    <tr>
    	<th>Skills:</th>
    	<td>{{$skills}}</td>
  	</tr>
	@if(isset($resume))
	<tr>
    	<th>Resume:</th>
    	<td>
			<a href="{{$resume}}" download target="_blank"
						class="btn btn-primary btn-white mt-4 mb-5"><i
							class="fas fa-file-download mr-2"></i> Download
						Resume</a>
		</td>
  	</tr>
	  @endif
</table>
<br><br>
<p>Thanks!</p>
</body>
</html>