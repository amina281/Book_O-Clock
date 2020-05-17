<?php

use Carbon\Carbon;


function getNumbers()
{
    $tax = config('cart.tax') / 100;
    $newSubtotal = (Cart::subtotal());
    if ($newSubtotal < 0) {
        $newSubtotal = 0;
    }
    $newTax = $newSubtotal * $tax;
    $newTotal = $newSubtotal * (1 + $tax);

    return collect([
        'tax' => $tax,
        'newSubtotal' => $newSubtotal,
        'newTax' => $newTax,
        'newTotal' => $newTotal,
    ]);
}

