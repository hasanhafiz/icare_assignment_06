<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index() {
        return view('index');
    }

    public function experiences() {
        $experiences = Storage::disk('portfolio')->get('work_experiences.json');
        $experiences = json_decode($experiences);
        return view('experience', compact('experiences'));
    }

    public function projects() {
        $projects = Storage::disk('portfolio')->get('projects.json');
        $projects = json_decode($projects);
        return view('projects', compact('projects'));
    }

    public function singleProject( $id ) {
        $projects = Storage::disk('portfolio')->get('projects.json');
        $projects = json_decode($projects);

        $single_project = '';
        foreach ($projects as $project) {
            if ( $project->id == $id ) {
                $single_project = $project;
            }
        }
        return view('single_project', compact('single_project'));
    }
}
