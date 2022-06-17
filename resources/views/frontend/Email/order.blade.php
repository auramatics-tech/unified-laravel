<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Hi Admin,</p>

<p>You have received a new order request from the {{ $user['first_name'] }} {{ $user['last_name'] }}.</p>

<table rules="all" bordercolor="#4d4c4d" border="1" bgcolor="#FFFFFF" cellpadding="10"  align="center" width="800">
	<tr>
    	<th colspan="2" style="text-align:center"><h2>User Details</h2></th>
  	</tr>
  	<tr>
    	<th>Name:</th>
    	<td>{{ $user['first_name'] }} {{ $user['last_name'] }}</td>
  	</tr>
  	<tr>
    	<th>Email Id:</th>
    	<td>{{$user['email']}}</td>
  	</tr>
  	<tr>
    	<th>Phone number:</th>
    	<td>{{$user['phone']}}</td>
  	</tr>
	<tr>
    	<th>City:</th>
    	<td>{{$user['city']}}</td>
  	</tr>
	<tr>
    	<th>Country:</th>
    	<td>{{$user['country']}}</td>
  	</tr>
	<tr>
    	<th>Company:</th>
    	<td>{{$user['company']}}</td>
  	</tr>
	<tr>
    	<th>Additional Information:</th>
    	<td>{{$user['additional_info']}}</td>
  	</tr>
    @if(isset($image))
	<tr>
    	<th>BOM IMAGE:</th>
    	<td><img style="width: 100%;" src="{{ $image }}" alt="BOM Image"></td>
  	</tr>
      @endif
</table>
<br><br>
<table rules="all" bordercolor="#4d4c4d" border="1" bgcolor="#FFFFFF" cellpadding="10"  align="center" width="800">
	<tr>
    	<th colspan="2" style="text-align:center"><h2>Product Details</h2></th>
  	</tr>
      @if(isset($products) && count($products))
    @foreach($products as $key => $product)
		<tr>
			<th>Product: {{ $key }}</th>
			<td>
				<h2>{{$product['name']}}</h2>
				<h4>manufacture: {{$product['manufacture']}}</h4>
				<h4>price: {{$product['item_price']}}</h4>
				<h4>quantity: {{$product['qty']}}</h4>
				<h4>total_price: {{$product['price']}}</h4>
				<h4>Cross Referrence: @if(!isset($product['refrence']))YES @else No @endif</h4>
			</td>
		</tr>
        @endforeach
        @endif
</table>
<p>Thanks!</p>
</body>
</html>