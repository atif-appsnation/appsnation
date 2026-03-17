<?php
namespace App\Traits;

use App\Models\Agencystack;
use App\Models\Award;
use App\Models\Client;
use App\Models\Casestudyapp;
use App\Models\Testimonial;
use App\Models\Techstack;

trait PageDataTrait
{
    public function fetchCommonData()
    {
        return [
            'awards'       => Award::orderBy('lft', 'asc')->get(),
            'clients'      => Client::orderBy('lft', 'asc')->get(),
            'casestudy'    => Casestudyapp::all(),
            'testimonials' => Testimonial::orderBy('lft', 'asc')->get(),
        ];
    }

    public function fetchAgencyStack()
    {
        return Agencystack::where('main', 1)
            ->orderBy('lft', 'asc')
            ->get();
    }
    public function fetchTechStack(string $type)
    {
        return Techstack::where($type, 1)
            ->orderBy('lft', 'asc')
            ->get();
    }
}
