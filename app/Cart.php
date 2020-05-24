<?php

namespace App;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    public function add($item , $ISBN){
        $storedItem = ['qty' => 0, 'Price' => $item->Price, 'item' => $item];
        if ($this->items){
            if (array_key_exists($ISBN, $this->items)){
                $storedItem = $this ->items[$ISBN];
            }
            $storedItem['qty']++;
            $storedItem['Price'] = $item->Price * $storedItem['qty'];
            $this->items[$ISBN] = $storedItem;
            $this->totalQty++;
            $this->totalPrice += $item->Price;
        }

    }
}