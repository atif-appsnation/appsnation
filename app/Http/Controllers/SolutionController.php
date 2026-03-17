<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\MetaTrait;
use App\Traits\PageDataTrait;
use App\Traits\BlogTrait;
class SolutionController extends Controller
{
    //
    use MetaTrait, PageDataTrait, BlogTrait;
    public function solutions()
    {
        $meta = $this->loadMeta('Solutions');
        $common = $this->fetchCommonData();

        return view('solutions', array_merge(
            $meta,
            $common,
        ));
    }

    public function bookingApp()
    {
        $meta = $this->loadMeta('BookingApp');
        return view('bookingapp', array_merge(
            $meta,
        ));
    }

    public function fitnessApp()
    {
        $meta = $this->loadMeta('FitnessApp');
        return view('fitnessapp', array_merge(
            $meta,
        ));
    }
    public function fleetApp()
    {
        $meta = $this->loadMeta('FleetApp');
        return view('fleetapp', array_merge(
            $meta,
        ));
    }

    public function loyaltyApp()
    {
        $meta = $this->loadMeta('LoyaltyApp');
        return view('loyaltyapp', array_merge(
            $meta,
        ));
    }

    public function moverApp()
    {
        $meta = $this->loadMeta('MoverApp');
        return view('moverapp', array_merge(
            $meta,
        ));
    }
    public function realEstateApp()
    {
        $meta = $this->loadMeta('RealEstateApp');
        return view('realestateapp', array_merge(
            $meta,
        ));
    }

    public function restaurantApp()
    {
        $meta = $this->loadMeta('RestaurantApp');
        return view('restaurantapp', array_merge(
            $meta,
        ));
    }

    public function shoppingExpressApp()
    {
        $meta = $this->loadMeta('ShoppingExpressApp');
        return view('shoppingexpressapp', array_merge(
            $meta,
        ));
    }
    public function sportApp()
    {
        $meta = $this->loadMeta('SportApp');
        return view('sportapp', array_merge(
            $meta,
        ));
    }

    
}
