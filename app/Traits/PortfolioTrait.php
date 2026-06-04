<?php

namespace App\Traits;

use App\Models\Portfolio;

trait PortfolioTrait
{
    public function getPortfolioData()
    {
        if (request()->filled('a')) {
            $portfolio = Portfolio::where('type', request('a'))
                ->orderBy('lft', 'asc')
                ->paginate(6)
                ->appends(['a' => request('a')]);
        } else {
            $portfolio = Portfolio::orderBy('lft', 'asc')->paginate(6);
        }

        return compact('portfolio');
    }
}
