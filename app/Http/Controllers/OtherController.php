<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\MetaTrait;
use App\Traits\PageDataTrait;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Redirect;
use Carbon\Carbon;
use App\Models\Lead;



class OtherController extends Controller
{
    //
    use MetaTrait, PageDataTrait;
    
    public function leads(Request $request)
    {
        $visit = new Lead;
        $field = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'mobile' => 'required|max:15',
            'subject' => 'required|max:255',
            'service' => 'max:255',
            'company' => 'max:255',
            'message' => '',
            'g-recaptcha-response' => 'required|captcha'
        ], [
            'captcha.required' => 'Please complete the CAPTCHA.',
            'captcha.captcha' => 'The CAPTCHA verification failed. Please try again.',
        ]);

        $visit->name = $field['name'];
        $visit->email = $field['email'];
        $visit->mobile = $field['mobile'];
        $visit->subject = $field['subject'];
        $visit->service = $field['service'];
        $visit->company = $field['company'];
        $visit->message = $field['message'];
        $visit->save();

        $details = [
            "name" => $field['name'],
            "email" => $field['email'],
            "mobile" => $field['mobile'],
            "service" => $field['service'],
            "company" => $field['company'],
            "subject" => $field['subject'],
            "message" => $field['message'],
        ];

        // Send to admin(s)
        Mail::to("webdevappsnation@gmail.com")->send(new \App\Mail\ReceivedMail($details));
    
        // Send confirmation to user
        // Mail::to($field['email'])->send(new SendMail($details));

        return Redirect::to('/thank-you')->withSuccess('Great! Form successfully submit.');
    }
    public function leadsmobile(Request $request)
    {
        // return "hello world";
        // dd($request);

        $visit = new Lead;
        $field = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'mobile' => 'required|max:15',
            // 'mobile' => 'required|regex:/(01)[0-9]{9}/'
            'subject' => 'required|max:255',
            // 'service' => 'max:255',
            // 'company' => 'max:255',
            'message' => ''
        ]);
        $visit->name = $field['name'];
        $visit->email = $field['email'];
        $visit->mobile = $field['mobile'];
        $visit->subject = $field['subject'];
        $visit->service = '-';
        $visit->company = '-';
        $visit->message = $field['message'];
        $visit->save();

        $details = [

            "name" => $field['name'],
            "email" => $field['email'],
            "mobile" => $field['mobile'],
            "service" => "-",
            "company" => "-",
            "subject" => $field['subject'],
            "message" => $field['message'],

        ];
        // Mail::to("waqar@futurealiti.com")->send(new ReceivedMail($details));
        // Mail::to("info@appsnation.co")->send(new ReceivedMail($details));
        // Mail::to("sales@appsnation.co")->send(new ReceivedMail($details));
        Mail::to("webdevappsnation@gmail.com")->send(new \App\Mail\ReceivedMail($details));

      
        // Mail::to($field['email'])->send(new SendMail($details));
        return Redirect::to('/thank-you')->withSuccess('Great! Form successfully submit.');
        // // return view('welcome');
    }
     public function leadsservices(Request $request)
    {
        // return "hello world";
        // dd($request);

        $visit = new Lead;
        $field = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'mobile' => 'required|max:15',
            // 'mobile' => 'required|regex:/(01)[0-9]{9}/'
            // 'subject' => 'required|max:255',
            // 'service' => 'max:255',
            // 'company' => 'max:255',
            'message' => '',
            'g-recaptcha-response' => 'required|captcha'
        ], [
            'captcha.required' => 'Please complete the CAPTCHA.',
            'captcha.captcha' => 'The CAPTCHA verification failed. Please try again.',
        ]);
        $visit->name = $field['name'];
        $visit->email = $field['email'];
        $visit->mobile = $field['mobile'];
        $visit->subject = '-';
        $visit->service = '-';
        $visit->company = '-';
        $visit->message = $field['message'];
        $visit->save();

        $details = [

            "name" => $field['name'],
            "email" => $field['email'],
            "mobile" => $field['mobile'],
            "service" => "-",
            "company" => "-",
            "subject" => "-",
            "message" => $field['message'],

        ];

        // Mail::to("info@digitroopers.com")->send(new ReceivedMail($details));
        // Mail::to($field['email'])->send(new SendMail($details));

        // Mail::to("waqar@futurealiti.com")->send(new ReceivedMail($details));
        // Mail::to("info@appsnation.co")->send(new ReceivedMail($details));
        // Mail::to("sales@appsnation.co")->send(new ReceivedMail($details));
        Mail::to("webdevappsnation@gmail.com")->send(new \App\Mail\ReceivedMail($details));


        return Redirect::to('/thank-you')->with('success', 'Item created successfully!');
        // // return view('welcome');
    }
   
    public function privacypolicy()
    {
        $meta = $this->loadMeta('Main');

        return view('privacypolicy', array_merge(
            $meta,
        ));
    }
        public function companypolicy()
    {
        $meta = $this->loadMeta('CompanyPolicy');

        return view('company-policy', array_merge(
            $meta,
        ));
    }
    public function locations()
    {
        $meta = $this->loadMeta('locations');

        return view('locations', array_merge(
            $meta,
        ));
    }
    public function cost_calculator()
    {
        $meta = $this->loadMeta('costcalculator');

        return view('costcalculator', array_merge(
            $meta,
        ));
    }
    
}
