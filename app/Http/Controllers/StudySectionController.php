<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Studysection;

class StudySectionController extends Controller
{
    public function __contruct(){
        $this->midware('auth')->except(['index','show']);
    }

    public function index(){
    	$s_sections = Studysection::latest()->get();

    	return view('studysection.index', compact('s_sections'));
    }
    
    public function show(Studysection $studysection){

    	return view('studysection.show', compact('studysection'));
    }

    public function create(Studysection $studysection){

    	return view('studysection.create', compact('studysection'));
    }

    public function store() {
        $this->validate(request(),[
            'subject' => 'required',
            'description' => 'required',
            'minutes' => 'required',
            's_date' => 'required'
            ]);

        Studysection::create(['subject' => request('subject'), 
                              'description' => request('description'),
                                     'minutes' => request('minutes'), 
                                     's_date' => request('s_date'),
                                     'user_id' => auth()->user()->id
                                     ]);


        return redirect('/studysection');
    }
}
