<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\MetaTrait;
use App\Traits\PageDataTrait;
use App\Traits\BlogTrait;
class XRServiceController extends Controller
{
    //
    use MetaTrait, PageDataTrait, BlogTrait;
    public function xrAppDevelopment()
    {
        $meta = $this->loadMeta('XrApp');
        $common = $this->fetchCommonData();
        $agencystack = $this->fetchAgencyStack();
        $techstack   = $this->fetchTechStack('xr');

        return view('extendedrealityapplicationdevelopment', array_merge(
            $meta,
            $common,
            [
                'agencystack' => $agencystack,
                'techstack'   => $techstack,
                'data' => $this->blogApi('xr-app'),
            ]
        ));
    }
    public function mrAppDevelopment()
    {
        $meta = $this->loadMeta('MrApp');
        $common = $this->fetchCommonData();
        $agencystack = $this->fetchAgencyStack();
        $techstack   = $this->fetchTechStack('mr');

        return view('mixedrealityapplicationdevelopment', array_merge(
            $meta,
            $common,
            [
                'agencystack' => $agencystack,
                'techstack'   => $techstack,
                'data' => $this->blogApi('mr-app'),
            ]
        ));
    }
    public function vrApp()
    {
        $meta = $this->loadMeta('VrApp');
        $common = $this->fetchCommonData();
        $agencystack = $this->fetchAgencyStack();
        $techstack   = $this->fetchTechStack('vr');

        return view('vrapplicationdevelopment', array_merge(
            $meta,
            $common,
            [
                'agencystack' => $agencystack,
                'techstack'   => $techstack,
                'data' => $this->blogApi('vr-app'),
            ]
        ));
    }
    public function arApp()
    {
        $meta = $this->loadMeta('ArApp');
        $common = $this->fetchCommonData();
        $agencystack = $this->fetchAgencyStack();
        $techstack   = $this->fetchTechStack('ar');

        return view('arapplicationdevelopment', array_merge(
            $meta,
            $common,
            [
                'agencystack' => $agencystack,
                'techstack'   => $techstack,
                'data' => $this->blogApi('ar-app'),
            ]
        ));
    }
   
}
