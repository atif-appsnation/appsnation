<?php

namespace App\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\MetaTrait;
use App\Traits\PageDataTrait;

class PakistanLocationController extends Controller
{
    //
    use MetaTrait, PageDataTrait;
        public function pakistan()
        {
            $meta = $this->loadMeta('pakistan');
            $common = $this->fetchCommonData();
    
            return view('app-development-pakistan', array_merge(
                $meta,
                $common,
            ));
        }
        public function karachi()
        {
            $meta = $this->loadMeta('karachi');
            $common = $this->fetchCommonData();
    
            return view('app-development-karachi', array_merge(
                $meta,
                $common,
            ));
        }
}
