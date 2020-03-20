<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $guarded = [];

    public function ship()
    {
        // make special cases in the top
        if(!$this->canShip()) //<======== special case
        {
            return false;
        }

        // the normal work goes here
        /**
         * some work being performed
         */
        return true;
    }
    // 1- make encapsulation
    protected function canShip():bool
    {
        return (!((($this->shipping_country) == "GB") || (strcmp($this->status, "Valid") !== 0)));
    }
}
