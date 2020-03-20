<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $guarded = [];

    public function ship()
    {
        if (!((($this->shipping_country) == "GB") || (strcmp($this->status, "valid") !== 0))) {
            return true;
        }
        return false;
    }
}
