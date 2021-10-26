<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Cart;
use App\Models\Categories;
use App\Models\Order;

class ProductController extends Controller
{
    public function index() {
        //Getting all the products that I created in my seeder, from my database
        $products = Products::all();
        $categories = Categories::all();

        // return view('index', [compact('products', $products), compact('categories', $categories)]);
        return view('index', compact('products', $products), compact('categories', $categories));
        
    }

    public function AddToCart(Request $request, $id) {
        $products = Products::find($id);
        $cart = new Cart($request);
        $cart->add($products, $id);

        $request->session()->put('cart', $cart);
        return redirect()->route('index');
    }

    public function getCart(Request $request) {
        if (!$request->session()->has('cart')) {
            return view('shoppingCart', ['products' => null]);
        }
        $cart =  new Cart($request);
        return view('shoppingCart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getCheckout (Request $request) {
        if (!$request->session()->has('cart')) {
            return view('ShoppingCart');
        }
        $cart = new Cart($request);
        $total = $cart->totalPrice;
        return view('checkout', ['total' => $total]);
    }

    public function postCheckout(Request $request) {
        $hasCart = $request->session()->has('cart');
        $cart = new Cart($request);
        $total = $cart->totalPrice;

        if ( ! $hasCart)
        {
            return view('shoppingCart');
        }

        $order = new Order();
        //serialize = a way to store the values in an object into a text string format(similar to JSON)
        $order->cart = serialize($cart);
        $order->address = $request->input('address');
        $order->name = $request->input('name');
        $order->save();

        $request->session()->forget('cart');

        return redirect()->route('index')->with($request->session()->flash('success', 'Payment successful!'));
    }

    public function filter(Request $request) {
        // Getting all products where category_id == input category
        $products = Products::where('category_id', $request->categories)->get();
        $categories = Categories::all();
        return view('index', compact('products', $products), compact('categories', $categories));
    }
    
    public function getReduceByOne(Request $request, $id) {
        $cart = new Cart($request);
        $cart->reduceByOne($id);
        return redirect()->route('cart');
    }

    public function getAddByOne(Request $request, $id) {
        $cart = new Cart($request);
        $cart->addByOne($id);
        return redirect()->route('cart');
    }

    public function getRemoveItem(Request $request, $id) {
        $cart = new Cart($request);
        $cart->removeItem($id);
        return redirect()->route('cart');
    }
}
