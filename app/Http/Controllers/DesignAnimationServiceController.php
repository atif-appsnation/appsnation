<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\MetaTrait;
use App\Traits\PageDataTrait;
use App\Traits\BlogTrait;

class DesignAnimationServiceController extends Controller
{
    //
    use MetaTrait, PageDataTrait, BlogTrait;
    public function maindesignandanimation()
    {
        $meta = $this->loadMeta('DesignAndAnimation');
        $common = $this->fetchCommonData();

        return view('maindesignandanimationservices', array_merge(
            $meta,
            $common,
            [
                'data' => $this->blogApi('android-app'),
            ]
        ));
    }
    public function animationServices()
    {
        $meta = $this->loadMeta('Animation');
        $common = $this->fetchCommonData();
        $agencystack = $this->fetchAgencyStack();
        $techstack   = $this->fetchTechStack('animation');

        return view('animationservices', array_merge(
            $meta,
            $common,
            [
                'agencystack' => $agencystack,
                'techstack'   => $techstack,
                'data' => $this->blogApi('animation'),
            ]
        ));
    }
     public function exterior3d()
    {
        $meta = $this->loadMeta('Exterior-3d');
        $common = $this->fetchCommonData();
        $agencystack = $this->fetchAgencyStack();
        $techstack   = $this->fetchTechStack('exterior');

        return view('exterior3d', array_merge(
            $meta,
            $common,
            [
                'agencystack' => $agencystack,
                'techstack'   => $techstack,
                'data' => $this->blogApi('exterior-3d'),
            ]
        ));
    }
     public function interior3d()
    {
        $meta = $this->loadMeta('Interior-3d');
        $common = $this->fetchCommonData();
        $agencystack = $this->fetchAgencyStack();
        $techstack   = $this->fetchTechStack('interior');

        return view('interior3d', array_merge(
            $meta,
            $common,
            [
                'agencystack' => $agencystack,
                'techstack'   => $techstack,
                'data' => $this->blogApi('interior-3d'),
            ]
        ));
    }
     public function floorPlan()
    {
        $meta = $this->loadMeta('FloorPlan');
        $common = $this->fetchCommonData();
        $agencystack = $this->fetchAgencyStack();
        $techstack   = $this->fetchTechStack('floorplan');

        return view('floorplan-2d-3d', array_merge(
            $meta,
            $common,
            [
                'agencystack' => $agencystack,
                'techstack'   => $techstack,
                'data' => $this->blogApi('floorplan'),
            ]
        ));
    }

     public function art2d()
    {
        $meta = $this->loadMeta('Art-2D');
        $common = $this->fetchCommonData();
        $agencystack = $this->fetchAgencyStack();
        $techstack   = $this->fetchTechStack('mr');

        return view('2d-art', array_merge(
            $meta,
            $common,
            [
                'agencystack' => $agencystack,
                'techstack'   => $techstack,
                'data' => $this->blogApi('art-2d'),
            ]
        ));
    }

    public function art3d()
    {
        $meta = $this->loadMeta('Art-3D');
        $common = $this->fetchCommonData();
        $agencystack = $this->fetchAgencyStack();
        $techstack   = $this->fetchTechStack('mr');

        return view('3d-art', array_merge(
            $meta,
            $common,
            [
                'agencystack' => $agencystack,
                'techstack'   => $techstack,
                'data' => $this->blogApi('art-3d'),
            ]
        ));
    }

}
