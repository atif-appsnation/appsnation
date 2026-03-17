<?php

namespace App\Traits;

use Illuminate\Support\Facades\Http;

trait BlogTrait
{
    public function blogApi($category = null)
    {
        $url = 'https://blog.appsnation.co/api/get-blogs-api.php';

        if ($category) {
            $url .= '?category=' . urlencode($category);
        }

        return Http::get($url)->json();
    }
}
