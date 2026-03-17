<?php

namespace App\Traits;


use App\Models\Metatag;
use App\Models\Metatitle;

trait MetaTrait
{
     public function loadMeta(string $slug)
    {
        return [
            'metatag'    => Metatag::where('slug', $slug)->get(),
            'metatitle'  => Metatitle::where('slug', $slug)->get(),
        ];
    }
}
