<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Person;
use App\Models\Picture;
use App\Models\Project;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function resume(Request $request)
    {
        $person = Person::with('projects', 'jobs', 'picture')->where('first_name', 'Gabriel')->where('last_name', 'Sturtevant')->first();
        foreach ($person->jobs as $job) {
            $job->responsibilities = explode(';', $job->responsibilities);
        }
        $person->websites = explode(',', $person->websites);
//        dd($person);
        $months = [
            '1' => 'January',
            '2' => 'February',
            '3' => 'March',
            '4' => 'April',
            '5' => 'May',
            '6' => 'June',
            '7' => 'July',
            '8' => 'August',
            '9' => 'September',
            '10' => 'October',
            '11' => 'November',
            '12' => 'December',
        ];
//        dd($person);
        if ($request->route()->getName() == 'api_foo')
            return response()->json([$person, $months]);
        else
            return view('layouts.resume.resume', compact('person', 'months'));
    }

    /******************************************************
     * API Calls
     * ----------------------------------------------------
     * The following section is for GET calls
     ******************************************************/
    public function person($email = null)
    {
        if (is_null($email))
            $person = Person::find(1);
        else
            $person = Person::where('email', $email)->first();
        return response()->json($person);
    }

    public function projects($id) {
        $projects = Project::where('person_id', $id)->get()->toArray();
        return response()->json($projects);
    }

    public function jobs($id) {
        $jobs = Job::where('person_id', $id)->get()->toArray();
        return response()->json($jobs);
    }
    
    public function pictures($id) {
        $pictures = Picture::where('person_id', $id)->get()->toArray();
        return response()->json($pictures);
    }
}
