<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\PortfolioTrait;
use App\Traits\MetaTrait;



class PortfolioController extends Controller
{
    //
    use PortfolioTrait, MetaTrait;
    public function portfolio()
    {
       return view('portfolio', array_merge(
            $this->getPortfolioData(),
            $this->loadMeta('Portfolio')
        ));
    }
}
