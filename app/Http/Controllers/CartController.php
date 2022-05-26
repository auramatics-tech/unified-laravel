<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Jobs;
use App\Models\Session;
use App\Models\Product;

class CartController extends Controller
{
    public function cart($id = null, Request $request)
    {
        $requestProduct = $request->request->get('product_id');
        $requestQty = $request->request->get('quatity');
        $session = $request->getSession();
        $additional_info = $session->get('additional_info');
        $products = $session->get('products');


        $session = new Session();
        $products_session = $session->get('products');
        if(!empty($products_session)) {
            $productService =  count($products_session);
        }
        $productService =  0;

        // echo"<pre>";print_r($products);die; 
        if (empty($products)) {
            $products = array();
        }
        //if product already exists in session
        if (array_key_exists($requestProduct, $products)) {
            $products[$requestProduct]['qty'] = $products[$requestProduct]['qty'] + $requestQty;
            $products[$requestProduct]['price'] = $products[$requestProduct]['item_price'] * $products[$requestProduct]['qty'];
        } else {
            $productDetails = Product::Find(526297);
            // echo"<pre>";print_r($requestProduct);die;
            // $repository = $this->getDoctrine()->getRepository(Products::class);
            // $productDetails = $repository->findOneby(array('id' => $requestProduct));
            // if (isset($productDetails)) {
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
                // $session->set('products', $products);
            // }
            $data = json_encode(array('status' => 'success'));
            return view('frontend.cart',compact('products','additional_info','productService'));
        }
    }


}
