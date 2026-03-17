<?php

namespace App\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\MetaTrait;
use App\Traits\PageDataTrait;

class AfricaLocationController extends Controller
{
    //
    use MetaTrait, PageDataTrait;
     public function africa()
    {
        $meta = $this->loadMeta('africa');
        $common = $this->fetchCommonData();

        return view('app-development-africa', array_merge(
            $meta,
            $common,
        ));
    }
    public function johannesburg()
    {
        $meta = $this->loadMeta('johannesburg');
        $common = $this->fetchCommonData();

        return view('app-development-johannesburg', array_merge(
            $meta,
            $common,
        ));
    }
    public function morocco()
    {
        $meta = $this->loadMeta('morocco');
        $common = $this->fetchCommonData();

        return view('app-development-morocco', array_merge(
            $meta,
            $common,
        ));
    }
}
