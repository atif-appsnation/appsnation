<?php

namespace App\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\MetaTrait;
use App\Traits\PageDataTrait;

class CanadaLocationController extends Controller
{
    //
    use MetaTrait, PageDataTrait;
     public function canada()
    {
        $meta = $this->loadMeta('canada');
        $common = $this->fetchCommonData();

        return view('app-development-canada', array_merge(
            $meta,
            $common,
        ));
    }
     public function toronto()
    {
        $meta = $this->loadMeta('toronto');
        $common = $this->fetchCommonData();

        return view('app-development-toronto', array_merge(
            $meta,
            $common,
        ));
    }
}
