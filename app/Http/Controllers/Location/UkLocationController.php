<?php

namespace App\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\MetaTrait;
use App\Traits\PageDataTrait;

class UkLocationController extends Controller
{
    //
    use MetaTrait, PageDataTrait;
    public function uk()
    {
        $meta = $this->loadMeta('uk');
        $common = $this->fetchCommonData();

        return view('app-development-uk', array_merge(
            $meta,
            $common,
        ));
    }
    public function london()
    {
        $meta = $this->loadMeta('london');
        $common = $this->fetchCommonData();

        return view('app-development-london', array_merge(
            $meta,
            $common,
        ));
    }
    public function leeds()
    {
        $meta = $this->loadMeta('leeds');
        $common = $this->fetchCommonData();

        return view('app-development-leeds', array_merge(
            $meta,
            $common,
        ));
    }
    public function birmingham()
    {
        $meta = $this->loadMeta('birmingham');
        $common = $this->fetchCommonData();

        return view('app-development-birmingham', array_merge(
            $meta,
            $common,
        ));
    }

}
