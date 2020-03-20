<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $guarded = [];

    public function ship()
    {
        return $this->canShip();
    }
    // 1- make encapsulation
    protected function canShip():bool
    {
        return (!((($this->shipping_country) == "GB") || (strcmp($this->status, "Valid") !== 0)));
    }
}
