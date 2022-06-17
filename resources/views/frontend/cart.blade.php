@extends('layouts.master')
@section('content')
	<!-- Main Content -->
    <main>

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header text-left">
                            <h2>
                                RFQ Cart
                            </h2>
                        </div>
                    </div>
					<form method="POST" action="{{route('submit')}}" class="" id="cart-form" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12">
                        <div class="rfw-form mt-4">
                            <h4>1. Parts List/upload</h4>
                                <div class="mt-4 mb-5" style="margin-bottom:-4px !important"> 
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Part Number*</th>
                                                        <th>Manufacturer*</th>
                                                        <th>Quantity*</th>
                                                        <th>Price</th>
                                                        <th>Target Price</th>
                                                        <th>Remove</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if(count($session_products))
                                                    @foreach($session_products as $key => $product)
                                               
														<tr class="product-listing">
															<td>
																<input type="text" class="form-control"
																	placeholder="Part number" name="product" value="@if(isset($product['name'])){{$product['name']}}@endif" >
															</td>
															<td>
																<input type="text" class="form-control"
																	placeholder="Manufacturer" name="product[{{$key}}]['manufacture']"  value="@if(isset($product['manufacture'])){{$product['manufacture']}}@endif" >
															</td>
															<td>
																<!-- <input type="hidden" class="form-control item-price" name="product[{{$key}}][item_price]" value="{{isset( $product->item_price) }}"> -->
																<input type="number" min="1" class="form-control quantity" name="product[{{$key}}][qty]" placeholder="QTY" value="@if(isset($product['qty'])){{$product['qty']}}@endif" >
															</td>
                                                            <td>
                                                                <!-- <input type="text" readonly class=" form-control quantity" name="product[{{$key}}][item_price]" value="{{ isset($product->item_price) }}" placeholder="Price" required> -->
                                                                <!-- <input type="number" min="1" class="form-control quantity" name="product[{{$key}}][item_price]" placeholder="Price"  value="@if(isset($product['item_price'])){{$product['item_price']}}@endif" >     -->
                                                                <input type="text" readonly class=" form-control" name="product[{{$key}}][item_price]" value="@if(isset($product['item_price'])){{$product['item_price']}}@endif" placeholder="Price" required>    
                                                            </td>
															<td>
                                                                <input type="number" min="1" class="form-control final-price" name="product[{{$key}}][price]" placeholder="Target Price" value="@if(isset($product['price'])){{$product['price']}}@endif" >
															</td>
															<td>
																<a href="javascript:;" class="remove-btn" data-id="{{ $key }}">
																	<i class="far fa-times-circle"></i>
																</a>
															</td>
														</tr>
                                                        @endforeach
                                                        @else
													<tr class="no-data">
														<td colspan="6">
															No data available
														</td>
													</tr>
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-5">
                                        <div class="form-group mb-0 mr-5 mt-3">
                                            <label for="exampleFormControlFile1">Or Upload BOM</label>
                                            <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
                                        </div>
                                        
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-7 btngroup-a-r">
                                        <a href="{{route('product_list')}}" class="btn btn-primary mr-3 mt-3 save-sessions">Continue shopping</a>
                                        <a href="javascript:void(0);" class="btn btn-primary mt-3 add-part">+ Add a part</a>
									</div>
                                </div>
                                </div>
                            <br />
                            <h4 class="mt-md-4"><span class="text-primary">Form 2:</span> Contact Information</h4>
                            <div class="mt-4 mb-5">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <input type="text" name="first_name" class="form-control" placeholder="First Name*" >
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <input type="text" name="last_name" class="form-control" placeholder="Last Name*" >
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <input type="text" name="country" class="form-control" placeholder="Country*" >
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <input type="text" name="city" class="form-control" placeholder="City*" >
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="Email Address*" >
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <input type="text" name="phone" class="form-control" placeholder="Phone Number*" >
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">
                                        <div class="form-group">
                                            <input type="text"name="company" class="form-control" placeholder="Company*" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="">Additional Information</label>
                                            <textarea class="form-control" name="additional_info" rows="10">@if(isset($additional_info)){{$additional_info}} @endif</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-primary">Submit Quote</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </section>
        
    </main>

    <script>
        $(document).ready(function() {
            var cart_item = "{{getCartValues()}}";
            $(document).on('click', '.remove-btn', function() {
				var product_id = $(this).attr('data-id');
                if(product_id == 'added-part') {
                    $(this).closest('.product-listing').remove();
                } else {
                    $.ajax({
						url: '{{url('/')}}/remove/item/'+product_id,
						type: 'get',
						data: {},
						contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
						success: function (response) {
							if(response.status == 'success') {
								location.reload();
							}
						},
						error: function () {
							//alert("error");
						}
					});
                }
			})
            $(document).on('change', '.quantity', function() {
				var price = $(this).closest('.product-listing').find('.item-price').val();
				var qty = $(this).val();
				$(this).closest('.product-listing').find('.final-price').val(price * qty);
			})
			$('.save-sessions').on('click', function() {
				$.ajax({
					url: '{{url('/')}}/update/items',
					type: 'POST',
					data: $("#cart-form").serialize(),
					success: function (response) {
						if(response.status == 'success') {
							window.location.href = "{{url('/')}}/product-list";
						}
					},
					error: function () {
						//alert("error");
					}
				});
			})
            $(document).on('change', '.added-item-price', function() {
                var value = $(this).val();
                $(this).closest('.product-listing').find('.item-price').val(value);
                if($(this).closest('.product-listing').find('.quantity').val() != '') {
                    $(this).closest('.product-listing').find('.quantity').trigger('change');
                }
            })
            $('.add-part').on('click', function() {
                var length = parseInt(cart_item);
                cart_item = parseInt(cart_item) + 1;
                var html = '';
                html += '<tr class="product-listing">';
                html += '<td><input type="text" class="form-control" placeholder="Part number" name="product['+cart_item+'][name]" required></td>';
                html += '<td><input type="text" class="form-control" placeholder="Manufacturer" name="product['+cart_item+'][manufacture]" required></td>';
                html += '<td><input type="hidden" class="item-price" name="product['+cart_item+'][item_price]" value=""><input type="number" min="1" class="form-control quantity" name="product['+cart_item+'][qty]" placeholder="QTY" required></td>';
                html += '<td><input type="number" class=" form-control added-item-price" name="product['+cart_item+'][item_price]" placeholder="Price" required></td>';
                html += '<td><input type="number" class="form-control final-price" name="product['+cart_item+'][price]" placeholder="Target Price" required></td>';
                html += '<input type="hidden" name="product['+cart_item+'][added_part]" value="">';
                html += '<td><a href="javascript:void(0);" class="remove-btn" data-id="added-part"><i class="far fa-times-circle"></i></a></td>';
                html += '</tr>';
                if(length != 0) {
                    $(html).insertAfter($('[class^="product-listing"]').last());
                } else {
                    $('.no-data').closest('tbody').append(html);
                    $('.no-data').hide();
                }
                
            })
            if(cart_item === "0") {
                $('.add-part').trigger('click');
            }
        });
    </script>
@endsection