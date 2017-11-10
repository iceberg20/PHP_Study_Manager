<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studysection extends Model
{
    protected $fillable = ['subject', 'description','minutes', 's_date'];

    public function goals(){
    	return $this->hasMany(Goal::class);
    }

    public function addGoal($name){
    	$this->goals()->create(compact('name'));
    }
}
