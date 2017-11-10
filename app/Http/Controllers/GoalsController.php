<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Studysection;
use App\Goal;

class GoalsController extends Controller
{
	

    public function store(Studysection $studysection){
    	$this->validate(request(),['name','required|min:2']);
    	
    	$studysection->addGoal(request('name'));

    	return back();
    } 
}
