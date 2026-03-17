<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\MetaTrait;

class ContactController extends Controller
{
    //
    use MetaTrait;
    public function contactus()
    {
        $meta = $this->loadMeta('ContactUs');
        return view('contactus', array_merge(
            $meta,
        ));
    }
}
