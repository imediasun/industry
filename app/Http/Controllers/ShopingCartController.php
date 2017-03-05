<?php

namespace App\Http\Controllers;

use App\MailService;
use Illuminate\Http\Request;
use App\Good;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;
use App\Cart;
use Auth;
class ShopingCartController extends Controller
{
    protected $id;
    protected $qnt;
    protected $product;

    //
    public function addToCart($id){

        if(!Auth::guest()) {
        /*    session_start();*/
            $good = Good::find($id);
            $this->product = $good['original'];
            $this->product['qnt'] = (int)$_GET['qnt'];

            /*if (isset($_SESSION['cart'])) {
                $oldCart = $_SESSION['cart'];
            } else {
                $oldCart = null;
            }*/
            $cart = new Cart($oldCart);
            $cart->add($this->product, $this->product['id']);
            /*session()->put('cart',$cart);*/
            /*$_SESSION['cart'] = $cart;*/
            return redirect()->route('good', $id);
        }
        else{
            return view('auth.login');
        }
    }

    public function getCart(){
    /*session_start();*/
      /*  if(!isset($_SESSION['cart'])){
            return view('shop.shoping_cart',['products'=> null]);


        }
        $oldCart = $_SESSION['cart'];*/
        $cart=new Cart($oldCart);
        return view('shop.shoping_cart',['products'=> $cart->items, 'totalPrice'=>$cart->totalPrice]);
    }

    public function getCheckout(){
       /* if(!isset($_SESSION['cart'])){
            return view('shop.shoping_cart',['products'=> null]);
        }
        $oldCart=$_SESSION['cart'];*/
        $cart=new Cart($oldCart);
        $total = $cart->totalPrice;
        $mail['subject']='Оформлення заказу';
        $mail['message']='Ви оформили наступний заказ';
        /*MailService::sendMail($mail);*/
        /*return view('shop.checkout', ['total'=>$total]);*/
        
    }
}
