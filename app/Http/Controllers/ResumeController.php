<?php

namespace App\Http\Controllers;

use App\Models\Person;

class ResumeController extends Controller
{
    public function resume() {
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
        return view('layouts.resume.resume', compact('person', 'months'));
    }
}
