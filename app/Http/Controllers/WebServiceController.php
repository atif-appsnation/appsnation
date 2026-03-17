<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Traits\MetaTrait;
use App\Traits\PageDataTrait;
use App\Traits\BlogTrait;

class WebServiceController extends Controller
{
    use MetaTrait, PageDataTrait, BlogTrait;
    //
    public function mainwebapp()
    {
        $meta = $this->loadMeta('WebPortalApp');
        $common = $this->fetchCommonData();

        return view('mainwebapp', array_merge(
            $meta,
            $common,
            [
                'data' => $this->blogApi('cross-platform-app'), //isko change karna hai
            ]
        ));
    }

    public function ecommerceApp()
    {
        $meta = $this->loadMeta('E-commerceApp');
        $common = $this->fetchCommonData();
        $agencystack = $this->fetchAgencyStack();
        $techstack   = $this->fetchTechStack('ecommerce');

        return view('ecommerceapplicationdevelopment', array_merge(
            $meta,
            $common,
            [
                'agencystack' => $agencystack,
                'techstack'   => $techstack,
                'data' => $this->blogApi('e-commerce-app'),
            ]
        ));
    }
    public function webApp()
    {
        $meta = $this->loadMeta('WebApp');
        $common = $this->fetchCommonData();
        $agencystack = $this->fetchAgencyStack();
        $techstack   = $this->fetchTechStack('web');

        return view('webapplicationdevelopment', array_merge(
            $meta,
            $common,
            [
                'agencystack' => $agencystack,
                'techstack'   => $techstack,
                'data' => $this->blogApi('web-app'),
            ]
        ));
    }

}
