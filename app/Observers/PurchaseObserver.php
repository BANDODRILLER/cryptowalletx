<?php
// app/Observers/PurchaseObserver.php

namespace App\Observers;

use App\Models\Purchases;

class PurchaseObserver
{
    public function updated(Purchases $purchase)
    {
        if ($purchase->isDirty('withdrawn')) {
            $difference = $purchase->withdrawn -  $purchase->getOriginal('withdrawn');
            $purchase->user->increment('money', $difference);
        }
    }
}
