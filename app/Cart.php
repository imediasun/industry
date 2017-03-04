<?php

namespace App;


class Cart
{
    //
    public $items=null;
    public $totalQty=0;
    public $totalPrice=0;

    public function  __construct($oldCart)
    {

        if($oldCart){
            dump($oldCart);
            $this->items=$oldCart->items;
            $this->totalQty=$oldCart->totalQty;
            $this->totalPrice=$oldCart->totalPrice;
            dump('old_cart_in_Cartclass');
        }
    }
    public function add($item,$id){
    $storedItem=['summ_quantaty'=>0, 'price'=>$item['price'], 'qnt'=>$item['qnt'],  'item'=>$item, 'summ'=>0];
        dump('this->item before checking the array');
        dump($this->items);
    if($this->items){
        dump($this->items);
        if(array_key_exists($id,$this->items)){
            $storedItem=$this->items[$id];

        }
    }

        $storedItem['qnt']=$item['qnt'];
        $storedItem['summ_quantaty']=$storedItem['summ_quantaty']+$storedItem['qnt'];

        $storedItem['price']=$item['price'];
        $storedItem['summ']+=$item['price'] * $storedItem['summ_quantaty'];
        $this->items[$id]=$storedItem;
        $this->totalQty+=$storedItem['qnt'];
        $this->totalPrice +=$item['price'] * $storedItem['qnt'] ;
        dump('prepare to put'.$id.'=>');
        dump($this->items[$id]);
    }
}
