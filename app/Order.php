<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $guarded = [];

    public function ship()
    {
        // make special cases in the top
        if (!$this->canShip()) //<======== special case
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
    protected function canShip(): bool
    {
        // put in the top => special cases
        if($this->shipping_country==="GB") // <=== special case
        {
            return false;
        }

        if($this->status !=="Valid") // <=== special case
        {
            return false;
        }


        // put success cases the the bottom
        return true;
    }
}
