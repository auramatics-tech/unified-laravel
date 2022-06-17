<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jobs;
use Session;
use Mail;
use App\Models\Product;

class CartController extends Controller
{
    public function cart( Request $request)
    {
        $products = [];
        $session_products = $request->session()->get('products');
     
        $additional_info = $request->session()->get('additional_info');
        if(!empty($session_products)) {
			$product_ids = array_keys($session_products);
			$products = Product::find($product_ids);
		}
            return view('frontend.cart', compact('products', 'additional_info', 'session_products'));
        }

    public function submit(Request $request)
    {
        $user  = $request->all();
        $name = $request->file('image');
        if (isset($name)) {
            $imageName = time() . '.' . $name->extension();
            $name->move(public_path('assets\frontend\assets\Email_images'), $imageName);
        }
        $products = Session::get('products');
        Mail::send(
            'frontend.Email.order',
            compact('user', 'products', 'name'),
            function ($m) use ($products) {
                $m->to('info@unified.co.in')
                    ->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
                    ->subject(__('Payment Success'));
            }
        );
		return redirect()->back()->with('msg', 'contact form saved successfully');
    }
    public function add_cart($id = null, Request $request) {
		$requestProduct = $request->product_id;
		$requestQty = $request->quatity;
		$session = $request->getSession();
		$products = $request->session()->get('products');
		if(empty($products)){
			$products = array();
		}
		//if product already exists in session
		if(array_key_exists($requestProduct, $products)) {
			$products[$requestProduct]['qty'] = $products[$requestProduct]['qty'] + $requestQty;
			$products[$requestProduct]['price'] = $products[$requestProduct]['item_price'] * $products[$requestProduct]['qty'];
		} else {
			$productDetails = Product::find($requestProduct);
			$product = array(
				'product' => $requestProduct,
				'qty' => $requestQty,
				'cross_rerence' => 0,
				'name' => $productDetails->name,
				'manufacture' => $productDetails->manufuture_info->name,
				'item_price' => $productDetails->price,
				'price' => $requestQty * $productDetails->price,
			);
			$products[$requestProduct] = $product;
		}
		$request->session()->put('products', $products);
		return response()->json(['status'=>'success']);
	}
    public function remove_from_cart($id , Request $request)
    {
        $products_session = $request->session()->get('products');

		unset($products_session[$id]);
		$request->session()->forget('products');
		$request->session()->put('products', $products_session);
		return response()->json(['status'=>'success']);
    }

    
}
