<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use Illuminate\Support\Facades\URL;
use App\Models\Career;
use Redirect;

use App\Traits\MetaTrait;
use App\Traits\PageDataTrait;
use App\Traits\BlogTrait;

class AboutController extends Controller
{
    use MetaTrait, PageDataTrait, BlogTrait;

    public function aboutus()
    {
        $meta = $this->loadMeta('Aboutus');
        return view('aboutus', array_merge(
            $meta
        ));
    }

    public function ourprocess()
    {
        $meta = $this->loadMeta('Ourprocess');
        return view('ourprocess', array_merge(
            $meta
        ));
    }

    public function career()
    {
        $meta = $this->loadMeta('Career');
        return view('career', array_merge(
            $meta
        ));
    }
    public function applicant(Request $request)
    {

        if ($request->file('filename')) {
            $filePath = $request->file('filename');
            $imageName = $filePath->getClientOriginalName();
            $fileName = md5(time()) . '.' . $request->file('filename')->extension();
            $fileName2 = URL::to('/') . '/uploads/uploads/' . $fileName;
            $path = $request->file('filename')->storeAs('uploads', $fileName, 'uploads');
        } else {
            $fileName2 = "";
        }

        $applicant = Career::create([

            'name' => $request->name,
            'email' =>  $request->email,
            'phone' => $request->phone,
            'jobrole' => $request->job,
            'file' => $fileName2,
            'position' => $request->position,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        
        ]);
        return Redirect::to('/thank-you')->with('success', 'Item created successfully!');
    }

    public function clients()
    {
        $meta = $this->loadMeta('Clients');
        $common = $this->fetchCommonData();
        $agencystack = $this->fetchAgencyStack();

        return view('clients', array_merge(
            $meta,
            $common,
            [
                'agencystack' => $agencystack,
                'data' => $this->blogApi(),
                // 'trustPilotTestimonial' => $this->fetchTestimonials(),
            ]
        ));
    }
    public function techStack()
    {
        $meta = $this->loadMeta('techStack');
        $common = $this->fetchCommonData();
        $agencystack = $this->fetchAgencyStack();

        return view('tech-stack', array_merge(
            $meta,
          
        ));
    }
    public function applicant(Request $request)
    {

        if ($request->file('filename')) {
            $filePath = $request->file('filename');
            $imageName = $filePath->getClientOriginalName();
            $fileName = md5(time()) . '.' . $request->file('filename')->extension();
            $fileName2 = URL::to('/') . '/uploads/uploads/' . $fileName;
            $path = $request->file('filename')->storeAs('uploads', $fileName, 'uploads');
        } else {
            $fileName2 = "";
        }



        $applicant = Career::create([


            'name' => $request->name,
            'email' =>  $request->email,
            'phone' => $request->phone,
            'jobrole' => $request->job,
            'file' => $fileName2,
            'position' => $request->position,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        return Redirect::to('/thank-you')->with('success', 'Item created successfully!');
    }

}
