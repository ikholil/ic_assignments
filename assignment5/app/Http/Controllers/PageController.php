<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PageController extends Controller
{
    public function index(){
        return view("home");
    }
    public function showProjectPage(){
        $filePath = storage_path('projects.json');
        if(File::exists($filePath)){
            $jsonData = File::get($filePath);
            $projects = json_decode($jsonData, true);
            return view("projects", ["projects"=>$projects]);
        } else{
            return view('projects');
        }
    }

    public function showProjectDetailsPage($id){
        $filePath = storage_path('projects.json');
        if(File::exists($filePath)){
            $jsonData = File::get($filePath);
            $projects = json_decode($jsonData, true);
            $project = collect($projects)->firstWhere('id', $id);
            return view("details", ["project"=>$project]);
        } else{
            return view('projects');
        }
    }
    public function showExperiencePage(){
        return view("experience");
    }
}
