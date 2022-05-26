<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Title -->
        <title>Unified</title>

        <!-- Required Meta Tags Always Come First -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="theme-color" content="#0082CC">

        <!-- Favicon -->
        <link rel="shortcut icon" href="{{asset('assets/frontend/brand.webp')}}">

        <!-- Font -->
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap"
            rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('assets/frontend/assets/vender/fontawesome/css/all.css')}}">

        <!-- CSS Implementing Plugins -->
        <link rel="stylesheet" href="{{asset('assets/frontend/assets/vender/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/frontend/assets/vender/swiper/css/swiper.css')}}">
        <link rel="stylesheet" href="{{asset('assets/frontend/assets/vender/fancybox/css/jquery.fancybox.min.css')}}">
        <!-- DATATABLE -->
        <link rel="stylesheet" href="{{asset('assets/frontend/assets/vender/datatable/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/frontend/assets/vender/datatable/responsive.bootstrap4.min.css')}}">
        <!-- CSS Front Template -->
        <script src="{{asset('assets/frontend/assets/vender/jquery/jquery-3.5.1.min.js')}}"></script>
        @yield('css')
        <link rel="stylesheet" href="{{asset('assets/frontend/assets/vender/jquery-ui/jquery-ui.css')}}">
        <link rel="stylesheet" href="{{asset('assets/frontend/assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/frontend/assets/css/custom.css')}}">
        <link rel="stylesheet" href="{{asset('assets/frontend/assets/css/responsive.css')}}">
        <script src='https://www.google.com/recaptcha/api.js' async defer ></script>
    </head>

    <body>
        <!-- Header -->
        @include('layouts.header')
        <!-- End Footer -->
        @yield('content')
         <!-- Footer -->
         @include('layouts.footer')
        <!-- End Footer -->
        <!-- JS Global Compulsory -->
        <script defer src="{{asset('assets/frontend/assets/vender/bootstrap/js/bootstrap.min.js')}}"></script>
        <!-- Swiper js -->
        @yield('script')
        <script defer src="{{asset('assets/frontend/assets/vender/swiper/js/swiper.min.js')}}"></script>
        <!--Fancybox -->
        <script defer src="{{asset('assets/frontend/assets/vender/fancybox/js/jquery.fancybox.min.js')}}"></script>
        <!--DATATABLE -->
        <script defer src="{{asset('assets/frontend/assets/vender/datatable/jquery.dataTables.min.js')}}"></script>
        <script defer src="{{asset('assets/frontend/assets/vender/datatable/dataTables.bootstrap4.min.js')}}"></script>
        <script defer src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>
        <script defer src="{{asset('assets/frontend/assets/vender/datatable/responsive.bootstrap4.min.js')}}"></script>
        <!-- SVG inject -->
        <script defer src="{{asset('assets/frontend/assets/vender/svg-inject/svg-injector.min.js')}}"></script>
        <!-- AUTOCOMPLETE JS Front -->
        <script defer src="{{asset('assets/frontend/assets/vender/jquery-ui/jquery-ui.min.js')}}"></script>
        <!-- Validation JS -->
        {{--<script defer src="{{url('/')}}/js/jquery.validate.min.js"></script>
        <!-- JS Front -->
        <script defer src="{{asset('assets/frontend/assets/js/custom.js}}"></script>--}}
        
        {{-- Zoho chat integration --}}
        <script defer type="text/javascript" id="zsiqchat">
            var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || 
            {widgetcode:"bfa66eac1366706d3522800a167f574a52d434462786f69d527a811bdef506450513f78de63e7d3918454b30e8fb8680", values:{},ready:function(){}};
            var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;
            s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);
        </script>
                <script defer src="https://unified.co.in/theme/frontend/assets/js/custom.js"></script>
                        <script>
            $(document).ready(function() {
                $('.disableRightClick').bind('contextmenu', function(e) {
                    return false;
                });
                $('.add-to-cart').on('click', function() {
                    $(this).siblings('.error').hide();
                    $(this).siblings('.error').text('');
                    var product_id = $(this).attr('data-id');
                    var quantity = $(this).attr('data-qty');
                    var input_quantity = $(this).siblings('.input-quantity').val();
                    if(quantity == '' || quantity === undefined || quantity === null) {
                        quantity = 1;
                    }
                    if(input_quantity != '' && (parseInt(input_quantity) < parseInt(quantity))) {
                        $(this).siblings('.error').show();
                        $(this).siblings('.error').text('Min Quantity is '+quantity);
                    } else {
                        if(input_quantity != '') {
                            quantity = input_quantity;
                        }
                        $.ajax({
                            url: 'https://unified.co.in/add/cart',
                            type: 'POST',
                            data: jQuery.param({ quatity: quantity, product_id : product_id}) ,
                            contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
                            success: function (response) {
                                if(response.status == 'success') {
                                    var count = parseInt($('#cart_count').text()) + 1;
                                    $('#cart_count').text(count);
                                    alert('Product added to cart.');
                                }
                            },
                            error: function () {
                                //alert("error");
                            }
                        }); 
                    }
                })

                //AutoComplete js to search product
                $( "#search-box" ).autocomplete({
                    source: function( request, response ) {
                        // Fetch data
                        $.ajax({
                            url: "https://unified.co.in/search/item",
                            type: 'post',
                            dataType: "json",
                            data: {
                                searchByValue: request.term
                            },
                            success: function( data ) {
                                response($.map(data.status, function (item) {
                                    var AC = new Object();
                                    AC.label = item.name;
                                    AC.value = item.id;
                                    //extend values
                                    AC.type = item.option_type;
                                    return AC;
                                }));
                            }
                        });
                    },
                    minLength: 3,
                    select: function (event, ui) {
                        $('#search-box').val(ui.item.label);
                        $('#selected-search-id').val(ui.item.value) // display the selected text
                        $('#selected-search-type').val(ui.item.type);
                        $('#search-form').submit();
                        return false;
                    }
                });

                $('#search-form').each(function() {
                    $(this).find('input').keypress(function(e) {
                        // Enter pressed?
                        if(e.which == 10 || e.which == 13) {
                            window.location.href = '/product-list/'+$('#search-box').val()
                        }
                    });

                    $(this).find('input[type=submit]').hide();
                });

                $('#search-form').submit(function(e) {
                    e.preventDefault();
                    var selected_product_id = $('#selected-search-id').val();
                    var search_type = $('#selected-search-type').val();
                    if(selected_product_id) {
                        if(search_type == 'product') {
                            window.location.href = "https://unified.co.in/product-detail/"+selected_product_id;
                        } else {
                            window.location.href = "https://unified.co.in/manufacturer-detail/"+selected_product_id;
                        }
                    }
                }) 
                $('.category_click').on('click', function() {
                    var type = $(this).attr('data-type');
                    var group_category = $(this).attr('data-group-category');
                    if(type == 'category') {
                        $('#searchByProductCategory').val(parseInt($(this).attr('data-id')));
                        $('#searchByProductsSubCategory').attr('disabled', true);
                    } else {
                        $('#searchByProductsSubCategory').val(parseInt($(this).attr('data-id')));
                        $('#searchByProductCategory').attr('disabled', true);
                    }
                    $('#baseGroupCategory').val(group_category);
                    console.log(parseInt($(this).attr('data-id')));
                    $('.categoryFilterForm').submit();
                                        $('#searchByProductsSubCategory').val();
                    $('#searchByProductCategory').val();
                })
                
                $('.subscribe-button').on('click', function() {
                    $('.image-loader').show();
                    $('.subscribe-res').removeClass('success error');
                    $('.subscribe-res').text('');
                    var email = $('#subscriber_email').val();
                    var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i
                    if(email != '' && email != null && pattern.test(email)) {
                        $.ajax({
                            url: "https://unified.co.in/subscribe/user",
                            type: 'post',
                            dataType: "json",
                            data: {
                                email: email,
                            },
                            success: function( data ) {
                                if(data.status == 1) {
                                    $('.image-loader').hide();
                                    $('.subscribe-res').addClass('success');
                                    $('.subscribe-res').text('Successfully subscribed.');
                                } else {
                                    $('.image-loader').hide();
                                    $('.subscribe-res').addClass('error');
                                    $('.subscribe-res').text('Something went wrong.');
                                }
                            }
                        });
                    } else {
                        $('.image-loader').hide();
                        $('.subscribe-res').addClass('error');
                        $('.subscribe-res').text('Please enter the valid email address.');
                    }
                })
            })
        </script>
                <script defer type="text/javascript" id="zsiqchat">
            var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || 
            {widgetcode:"bfa66eac1366706d3522800a167f574a52d434462786f69d527a811bdef506450513f78de63e7d3918454b30e8fb8680", values:{},ready:function(){}};
            var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;
            s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);
        </script>
    </body>

</html>
