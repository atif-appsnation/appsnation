<?php

namespace App\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\MetaTrait;
use App\Traits\PageDataTrait;

class GccLocationController extends Controller
{
    //
    use MetaTrait, PageDataTrait;
    
     public function gcc()
    {
        $meta = $this->loadMeta('gcc');
        $common = $this->fetchCommonData();

        return view('app-development-gcc', array_merge(
            $meta,
            $common,
        ));
    }
     public function uae()
    {
        $meta = $this->loadMeta('uae');
        $common = $this->fetchCommonData();

        return view('app-development-uae', array_merge(
            $meta,
            $common,
        ));
    }
     public function bahrain()
    {
        $meta = $this->loadMeta('bahrain');
        $common = $this->fetchCommonData();

        return view('app-development-bahrain', array_merge(
            $meta,
            $common,
        ));
    }
     public function qatar()
    {
        $meta = $this->loadMeta('qatar');
        $common = $this->fetchCommonData();

        return view('app-development-qatar', array_merge(
            $meta,
            $common,
        ));
    }
     public function oman()
    {
        $meta = $this->loadMeta('oman');
        $common = $this->fetchCommonData();

        return view('app-development-oman', array_merge(
            $meta,
            $common,
        ));
    }
     public function saudi_arabia()
    {
        $meta = $this->loadMeta('saudi_arabia');
        $common = $this->fetchCommonData();

        return view('app-development-saudi-arabia', array_merge(
            $meta,
            $common,
        ));
    }
      public function kuwait()
    {
        $meta = $this->loadMeta('kuwait');
        $common = $this->fetchCommonData();

        return view('app-development-kuwait', array_merge(
            $meta,
            $common,
        ));
    }
    public function dubai()
    {
        $meta = $this->loadMeta('dubai');
        $common = $this->fetchCommonData();

        return view('app-development-dubai', array_merge(
            $meta,
            $common,
        ));
    }
    public function riyadh()
    {
        $meta = $this->loadMeta('riyadh');
        $common = $this->fetchCommonData();

        return view('app-development-riyadh', array_merge(
            $meta,
            $common,
        ));
    }

}
