<?php

namespace App\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\MetaTrait;
use App\Traits\PageDataTrait;
class UsaLocationController extends Controller
{
    use MetaTrait, PageDataTrait;
    
     public function usa()
    {
        $meta = $this->loadMeta('usa');
        $common = $this->fetchCommonData();

        return view('app-development-usa', array_merge(
            $meta,
            $common,
        ));
    }
     public function new_york()
    {
        $meta = $this->loadMeta('new_york');
        $common = $this->fetchCommonData();

        return view('app-development-new-york', array_merge(
            $meta,
            $common,
        ));
    }
     public function san_francisco()
    {
        $meta = $this->loadMeta('san_francisco');
        $common = $this->fetchCommonData();

        return view('app-development-san-francisco', array_merge(
            $meta,
            $common,
        ));
    }
     public function los_angeles()
    {
        $meta = $this->loadMeta('los_angeles');
        $common = $this->fetchCommonData();

        return view('app-development-los-angeles', array_merge(
            $meta,
            $common,
        ));
    }
     public function miami()
    {
        $meta = $this->loadMeta('miami');
        $common = $this->fetchCommonData();

        return view('app-development-miami', array_merge(
            $meta,
            $common,
        ));
    }
     public function houston()
    {
        $meta = $this->loadMeta('houston');
        $common = $this->fetchCommonData();

        return view('app-development-houston', array_merge(
            $meta,
            $common,
        ));
    }
     public function dallas()
    {
        $meta = $this->loadMeta('dallas');
        $common = $this->fetchCommonData();

        return view('app-development-dallas', array_merge(
            $meta,
            $common,
        ));
    }
     public function austin()
    {
        $meta = $this->loadMeta('austin');
        $common = $this->fetchCommonData();

        return view('app-development-austin', array_merge(
            $meta,
            $common,
        ));
    }
     public function washington()
    {
        $meta = $this->loadMeta('washington');
        $common = $this->fetchCommonData();

        return view('app-development-washington', array_merge(
            $meta,
            $common,
        ));
    }
     public function montana()
    {
        $meta = $this->loadMeta('montana');
        $common = $this->fetchCommonData();

        return view('app-development-montana', array_merge(
            $meta,
            $common,
        ));
    }

}
