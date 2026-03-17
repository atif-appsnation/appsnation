<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\MetaTrait;

class CaseStudyController extends Controller
{
    //
    use MetaTrait;
     public function travelAgencyApp()
    {
        $meta = $this->loadMeta('travelAgencyApp');

        return view('travelagencyapp', array_merge(
            $meta,
        ));
    }
     public function travelAgencyWeb()
    {
        $meta = $this->loadMeta('travelAgencyWeb');

        return view('travelagencyweb', array_merge(
            $meta,
        ));
    }
     public function realEstateAppPortfolio()
    {
        $meta = $this->loadMeta('realEstateApp');

        return view('realestateapps', array_merge(
            $meta,
        ));
    }
     public function realEstateWeb()
    {
        $meta = $this->loadMeta('realEstateWeb');

        return view('realestateweb', array_merge(
            $meta,
        ));
    }
     public function loyaltyApps()
    {
        $meta = $this->loadMeta('loyaltyApps');

        return view('loyaltyapps', array_merge(
            $meta,
        ));
    }
     public function loyaltyWeb()
    {
        $meta = $this->loadMeta('loyaltyWeb');

        return view('loyaltyweb', array_merge(
            $meta,
        ));
    }
     public function gymApp()
    {
        $meta = $this->loadMeta('gymApp');

        return view('gymapp', array_merge(
            $meta,
        ));
    }
     public function gymWeb()
    {
        $meta = $this->loadMeta('gymWeb');

        return view('gymweb', array_merge(
            $meta,
        ));
    }
     public function moverApps()
    {
        $meta = $this->loadMeta('moverApps');

        return view('moverapps', array_merge(
            $meta,
        ));
    }
     public function moverWeb()
    {
        $meta = $this->loadMeta('moverWeb');

        return view('moverweb', array_merge(
            $meta,
        ));
    }
    public function royalRideApp()
    {
        $meta = $this->loadMeta('royalRideApp');

        return view('royalrideapp', array_merge(
            $meta,
        ));
    }
    public function boujeeBeachinApp()
    {
        $meta = $this->loadMeta('boujeeBeachinApp');

        return view('boujeebeachin', array_merge(
            $meta,
        ));
    }
        public function mikeMathisApp()
        {
            $meta = $this->loadMeta('mikeMathisApp');
    
            return view('mikemathisapp', array_merge(
                $meta,
            ));
        }
        public function graveLove()
        {
            $meta = $this->loadMeta('graveLove');
    
            return view('graveloveApp', array_merge(
                $meta,
            ));
        }
        public function bombDefuse()
        {
            $meta = $this->loadMeta('bombDefuse');
    
            return view('bombdefuse', array_merge(
                $meta,
            ));
        }
        public function coupleApp()
        {
            $meta = $this->loadMeta('coupleApp');
    
            return view('coupleapp', array_merge(
                $meta,
            ));
        }
        public function carMechanic()
        {
            $meta = $this->loadMeta('carMechanic');
    
            return view('carmechanic', array_merge(
                $meta,
            ));
        }
        public function toySortPuzzle()
        {
            $meta = $this->loadMeta('toysortpuzzle');
    
            return view('toysortpuzzle', array_merge(
                $meta,
            ));
        }
        public function royalrelaxspa()
        {
            $meta = $this->loadMeta('royalrelaxspa');
    
            return view('royalrelaxspa', array_merge(
                $meta,
            ));
        }
        public function Loadboard()
        {
            $meta = $this->loadMeta('Loadboard');
    
            return view('loadboard', array_merge(
                $meta,
            ));
        }
        public function alltraders()
        {
            $meta = $this->loadMeta('alltraders');
    
            return view('alltraders', array_merge(
                $meta,
            ));
        }
}
