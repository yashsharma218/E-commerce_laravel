<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\cart;
use Session;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //For Product Function
    function index()
    {
        $data = product::all();
        return view('product', ['product' => $data]);
    }

    //For Product Detail Data
    function detail($id)
    {
        $data = product::find($id);
        return view('detail', ['detail' => $data]);
    }

    //Fro Search Details
    function search(Request $req)
    {
        $data = product::where('name', 'like', '%' . $req->input('search') . '%')->get();
        return view('search', ['search' => $data]);
    }

    //For add to cart
    function add_to_cart(Request $req)
    {
        if ($req->session()->has('user')) {
            $cart = new cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }

    //For Cart Count
    static function cartcount()
    {
        $userid = Session::get('user')['id'];
        return cart::where('user_id', $userid)->count();
    }

    //For Cart list page
    function cartlist()
    {
        $userid = Session::get('user')['id'];
        $data= DB::table('cart')
        ->join('products', 'cart.product_id', 'products.id')
        ->select('products.*','cart.id as cart_id')
        ->where('user_id', $userid)->get();

        return view('cartlist',['cartdata'=>$data]);
    }

    function removecart($id)
    {
        Cart::destroy($id);
        return redirect('/cartlist');
    }
}
