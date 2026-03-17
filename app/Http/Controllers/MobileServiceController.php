<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\MetaTrait;
use App\Traits\PageDataTrait;
use App\Traits\BlogTrait;
class MobileServiceController extends Controller
{
    //
    use MetaTrait, PageDataTrait, BlogTrait;
    public function androidApp()
    {
        $meta = $this->loadMeta('androidApp');
        $common = $this->fetchCommonData();
        $agencystack = $this->fetchAgencyStack();
        $techstack   = $this->fetchTechStack('android');

        return view('androidapplicationdevelopment', array_merge(
            $meta,
            $common,
            [
                'agencystack' => $agencystack,
                'techstack'   => $techstack,
                'data' => $this->blogApi('android-app'),
            ]
        ));
    }
    public function iosApp()
    {
        $meta = $this->loadMeta('iosApp');
        $common = $this->fetchCommonData();
        $agencystack = $this->fetchAgencyStack();
        $techstack   = $this->fetchTechStack('ios');

        return view('iosapplicationdevelopment', array_merge(
            $meta,
            $common,
            [
                'agencystack' => $agencystack,
                'techstack'   => $techstack,
                'data' => $this->blogApi('ios-app'),
            ]
        ));
    }
    public function gameApp()
    {
        $meta = $this->loadMeta('GameApp');
        $common = $this->fetchCommonData();
        $agencystack = $this->fetchAgencyStack();
        $techstack   = $this->fetchTechStack('game');

        return view('gameapplicationdevelopment', array_merge(
            $meta,
            $common,
            [
                'agencystack' => $agencystack,
                'techstack'   => $techstack,
                'data' => $this->blogApi('game-app'),
            ]
        ));
    }
    public function crossApp()
    {
        $meta = $this->loadMeta('crossApp');
        $common = $this->fetchCommonData();
        $agencystack = $this->fetchAgencyStack();
        $techstack   = $this->fetchTechStack('crossapp');

        return view('crossplatformapplicationdevelopment', array_merge(
            $meta,
            $common,
            [
                'agencystack' => $agencystack,
                'techstack'   => $techstack,
                'data' => $this->blogApi('cross-platform-app'),
            ]
        ));
    }
    public function mainmobileapp()
    {
        $meta = $this->loadMeta('MobileApp');
        $common = $this->fetchCommonData();
        $agencystack = $this->fetchAgencyStack();

        return view('mainmobileapp', array_merge(
            $meta,
            $common,
            [
                'agencystack' => $agencystack,
                'data' => $this->blogApi('mobile-app'),
            ]
        ));
    }
    
}
