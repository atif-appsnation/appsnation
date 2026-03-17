<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\MetaTrait;
use App\Traits\PageDataTrait;
use App\Traits\BlogTrait;
class IndustryController extends Controller
{
    //
    use MetaTrait, PageDataTrait, BlogTrait;
     public function industries()
    {
        $meta = $this->loadMeta('Industries');
        $common = $this->fetchCommonData();
        $agencystack = $this->fetchAgencyStack();
        $techstack   = $this->fetchTechStack('mr');

        return view('industries', array_merge(
            $meta,
            $common,
            [
                'agencystack' => $agencystack,
                'techstack'   => $techstack,
                // 'data' => $this->blogApi('android-app'),
            ]
        ));
    }

     public function advertising()
    {
        $meta = $this->loadMeta('Advertising');
        return view('advertising', array_merge(
            $meta,
        ));
    }
     public function healthCareAndlifeScience()
    {
        $meta = $this->loadMeta('HealthCareAndLifeScience');
        return view('healthcareandlifescience', array_merge(
            $meta,
        ));
    }
     public function ecommerceAndRetail()
    {
        $meta = $this->loadMeta('E-commerceAndRetail');
        return view('ecommerceandretail', array_merge(
            $meta,
        ));
    }
     public function education()
    {
        $meta = $this->loadMeta('Education');
        return view('education', array_merge(
            $meta,
        ));
    }
     public function softwareAndHighTech()
    {
        $meta = $this->loadMeta('SoftwareAndHighTech');
        return view('softwareandhightech', array_merge(
            $meta,
        ));
    }
    public function automativeAndtransport()
    {
        $meta = $this->loadMeta('AutomativeAndTransport');
        return view('automativeandtransport', array_merge(
            $meta,
        ));
    }

    public function gamingAndLeisure()
    {
        $meta = $this->loadMeta('GamingAndLeisure');
        return view('gamingandleisure', array_merge(
            $meta,
        ));
    }

    public function financialSoftwareDevelopment()
    {
        $meta = $this->loadMeta('FinancialSoftwareDevelopment');
        return view('financialsoftwaredevelopment', array_merge(
            $meta,
        ));
    }
     public function mediaAndEntertainment()
    {
        $meta = $this->loadMeta('MediaAndEntertainment');
        return view('mediaandentertainment', array_merge(
            $meta,
        ));
    }
    public function travelAndHospitality()
    {
        $meta = $this->loadMeta('TravelAndHospitality');
        return view('travelandhospitality', array_merge(
            $meta,
        ));
    }
     public function realStateAndProperty()
    {
        $meta = $this->loadMeta('RealEstateAndProperty');
        return view('realstateandproperty', array_merge(
            $meta,
        ));
    }
     public function sportsTeamsAndLeagues()
    {
        $meta = $this->loadMeta('SportTeamAndLeagues');
        return view('sportsteamsandleagues', array_merge(
            $meta,
        ));
    }
}
