<?php

namespace App\Http\Controllers;
use App\Services\TechbehemothsService;
use App\Services\TrustPilotService;
use App\Services\TrustListService;
use App\Traits\MetaTrait;
use App\Traits\PageDataTrait;

use Illuminate\Http\Request;

class TestimonialController extends Controller

{
    use MetaTrait, PageDataTrait;
    //
     protected $trustpilotservice;
    protected $techbehemothsService;
    protected $trustlistservice;


    public function __construct(TrustPilotService $trustpilotservice, TechbehemothsService $techbehemothsService, TrustListService $trustlistservice)
    {
        $this->trustpilotservice = $trustpilotservice;
        $this->techbehemothsService = $techbehemothsService;
        $this->trustlistservice = $trustlistservice;
    }
   

     public function fetchTestimonials()
    {
        $url = "https://www.trustpilot.com/review/appsnation.co";

        try {
            $testimonials = $this->trustpilotservice->scrapeTestimonials($url);
            return response()->json($testimonials);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    // Techbehemoths
    public function techbehemothsTestimonials()
    {
        $url = "https://techbehemoths.com/company/appsnation";

        try {
            $techbehemothsTestimonials = $this->techbehemothsService->scrapeTestimonials($url);
            return response()->json($techbehemothsTestimonials);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    public function trustlistTestimonials()
    {
        $url = "https://trustlist.uk/app-development-company/appsnation";

        try {
            $trustlistTestimonials = $this->trustlistservice->scrapeTestimonials($url);
            return response()->json($trustlistTestimonials);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    public function testimonials()
    {
        $meta = $this->loadMeta('Testimonial');
        $common = $this->fetchCommonData();
 
        $trustPilotTestimonial = $this->fetchTestimonials()->getData();
        $techBehemothsTestimonials = $this->techbehemothsTestimonials()->getData();
        $trustlistTestimonials = $this->trustlistTestimonials()->getData();
        return view('testimonials', array_merge(
            $meta,
            $common,
            [
                'trustPilotTestimonial' => $trustPilotTestimonial, 'techBehemothsTestimonials' => $techBehemothsTestimonials, 'trustlistTestimonials'=>$trustlistTestimonials
            ]
        ));
    }
}
