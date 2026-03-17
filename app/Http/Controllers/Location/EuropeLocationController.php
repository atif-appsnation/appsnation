<?php

namespace App\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\MetaTrait;
use App\Traits\PageDataTrait;

class EuropeLocationController extends Controller
{
    //
    use MetaTrait, PageDataTrait;
     public function europe()
    {
        $meta = $this->loadMeta('europe');
        $common = $this->fetchCommonData();

        return view('app-development-europe', array_merge(
            $meta,
            $common,
        ));
    }
    public function italy()
    {
        $meta = $this->loadMeta('italy');
        $common = $this->fetchCommonData();

        return view('app-development-italy', array_merge(
            $meta,
            $common,
        ));
    }
    public function germany()
    {
        $meta = $this->loadMeta('germany');
        $common = $this->fetchCommonData();

        return view('app-development-germany', array_merge(
            $meta,
            $common,
        ));
    }
    public function rome()
    {
        $meta = $this->loadMeta('rome');
        $common = $this->fetchCommonData();

        return view('app-development-rome', array_merge(
            $meta,
            $common,
        ));
    }
    
}
