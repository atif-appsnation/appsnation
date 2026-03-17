<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Traits\MetaTrait;
use App\Traits\PageDataTrait;
use App\Traits\BlogTrait;
class MarketingServiceController extends Controller
{
    //
    use MetaTrait, PageDataTrait, BlogTrait;

    
     public function digitalMarketing()
    {
        $meta = $this->loadMeta('DigitalMarketing');
        $common = $this->fetchCommonData();
        $agencystack = $this->fetchAgencyStack();
        $techstack   = $this->fetchTechStack('xr');

        return view('digitalmarketing', array_merge(
            $meta,
            $common,
            [
                'agencystack' => $agencystack,
                'techstack'   => $techstack,
                'data' => $this->blogApi('xr-app'),
            ]
        ));
    }

    // public function digitalMarketing()
    // {
    //     $meta = $this->loadMeta('DigitalMarketing');
    //     $common = $this->fetchCommonData();
    //     $agencystack = $this->fetchAgencyStack();
    //     $techstack   = $this->fetchTechStack('xr');

    //     return view('digitalmarketing', array_merge(
    //         $meta,
    //         $common,
    //         [
    //             'agencystack' => $agencystack,
    //             'techstack'   => $techstack,
    //             'data' => $this->blogApi('xr-app'),
    //         ]
    //     ));
    // }

    // public function digitalMarketing()
    // {
    //     $meta = $this->loadMeta('DigitalMarketing');
    //     $common = $this->fetchCommonData();
    //     $agencystack = $this->fetchAgencyStack();
    //     $techstack   = $this->fetchTechStack('xr');

    //     return view('digitalmarketing', array_merge(
    //         $meta,
    //         $common,
    //         [
    //             'agencystack' => $agencystack,
    //             'techstack'   => $techstack,
    //             'data' => $this->blogApi('xr-app'),
    //         ]
    //     ));
    // }
}
