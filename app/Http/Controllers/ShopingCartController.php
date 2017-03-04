<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Good;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use App\Cart;
class ShopingCartController extends Controller
{
    protected $id;
    protected $qnt;
    protected $product;

    //
    public function addToCart($id){
    session_start();
    dump($id);
    dump($_GET['qnt']);
    dump($_SESSION);
       
        $good=Good::find($id);
       $this->product=$good['original'];
        $this->product['qnt']=(int)$_GET['qnt'];
       
        if (isset($_SESSION['cart'])) {
            dump('has_cart');
            dump($_SESSION['cart']);
            $oldCart =$_SESSION['cart'];
            dump('old_cart after prisvoeniya');
            dump($oldCart);
        }
        else{$oldCart = null;
        }
        
        $cart=new Cart($oldCart);
        

        $cart->add($this->product,$this->product['id']);
        
        /*session()->put('cart',$cart);*/
        $_SESSION['cart']=$cart;
        dump('cart puted');

        dd($_SESSION);
        return redirect()->route('good/'.$id);
        
    }
}
