<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    

    public function index(){
        //passing values into a blade template
        $title='Welcome to Church CMS';
        // *1st parameter*
        // that will look for a pages folder in the views folder for a file index.blade.php
             //The first method
                // return view('pages.index',compact('title'));
            //the 2nd metho of passing values into a blade template.
               return view('pages.index')->with('title',$title);
    }
    public function about(){
        $title='Welcome to Church CMS About Section';
        return view('pages.about')->with('title',$title);
        //that will look for a pages folder in the views folder for a file about.blade.php
    }
    public function logIn(){
        $title='Welcome to Church CMS About Section';
        return view('pages.about')->with('title',$title);
        //that will look for a pages folder in the views folder for a file about.blade.php
    }
    public function services(){
        $data= array(
            'title'=>'Services',
            'services'=>['Web Design', 'Programming', 'SEO']

        );
        return view('pages.services')->with($data);
    }
}
