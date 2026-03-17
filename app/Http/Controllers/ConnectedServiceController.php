<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\MetaTrait;
use App\Traits\PageDataTrait;
use App\Traits\BlogTrait;

class ConnectedServiceController extends Controller
{
    //
    use MetaTrait, PageDataTrait, BlogTrait;
    public function mainconnecteddevices()
    {
        $meta = $this->loadMeta('ConnectedDevice');
        $common = $this->fetchCommonData();

        return view('mainconnecteddevices', array_merge(
            $meta,
            $common,
            [
                'data' => $this->blogApi('connect-devices'),
            ]
        ));
    }
    public function iotApp()
    {
        $meta = $this->loadMeta('IotApp');
        $common = $this->fetchCommonData();
        $agencystack = $this->fetchAgencyStack();
        $techstack   = $this->fetchTechStack('iot');

        return view('iotapplicationdevelopment', array_merge(
            $meta,
            $common,
            [
                'agencystack' => $agencystack,
                'techstack'   => $techstack,
                'data' => $this->blogApi('iot-app'),
            ]
        ));
    }
    public function wearableApp()
    {
        $meta = $this->loadMeta('WearableApp');
        $common = $this->fetchCommonData();
        $agencystack = $this->fetchAgencyStack();
        $techstack   = $this->fetchTechStack('wearable');

        return view('wearableapplicationdevelopment', array_merge(
            $meta,
            $common,
            [
                'agencystack' => $agencystack,
                'techstack'   => $techstack,
                'data' => $this->blogApi('wearable-app'),
            ]
        ));
    }
    public function industrialAutomation()
    {
        $meta = $this->loadMeta('IndustrialAutomation');
        $common = $this->fetchCommonData();
        $agencystack = $this->fetchAgencyStack();
        $techstack   = $this->fetchTechStack('automation');

        return view('industrialautomation', array_merge(
            $meta,
            $common,
            [
                'agencystack' => $agencystack,
                'techstack'   => $techstack,
                'data' => $this->blogApi('automation'),
            ]
        ));
    }

}
