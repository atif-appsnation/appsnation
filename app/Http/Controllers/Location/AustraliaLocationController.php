<?php

namespace App\Http\Controllers\Location;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\MetaTrait;
use App\Traits\PageDataTrait;
class AustraliaLocationController extends Controller
{
    //
    use MetaTrait, PageDataTrait;
        public function australia()
        {
            $meta = $this->loadMeta('australia');
            $common = $this->fetchCommonData();
    
            return view('app-development-australia', array_merge(
                $meta,
                $common,
            ));
        }
        public function melbourne()
        {
            $meta = $this->loadMeta('melbourne');
            $common = $this->fetchCommonData();
    
            return view('app-development-melbourne', array_merge(
                $meta,
                $common,
            ));
        }
        public function sydney()
        {
            $meta = $this->loadMeta('sydney');
            $common = $this->fetchCommonData();
    
            return view('app-development-sydney', array_merge(
                $meta,
                $common,
            ));
        }
}
