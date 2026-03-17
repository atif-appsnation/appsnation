<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Traits\MetaTrait;
use App\Traits\PageDataTrait;
use App\Traits\BlogTrait;
class MainController extends Controller
{
    use MetaTrait, PageDataTrait, BlogTrait;

    public function index()
    {
        $meta = $this->loadMeta('Main');
        $common = $this->fetchCommonData();
        $agencystack = $this->fetchAgencyStack();

        return view('index', array_merge(
            $meta,
            $common,
            [
                'agencystack' => $agencystack,
                'data' => $this->blogApi(),
            ]
        ));
    }
}
