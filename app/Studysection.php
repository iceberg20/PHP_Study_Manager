<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studysection extends Model
{
    protected $fillable = ['subject', 'description','minutes', 's_date', 'user_id'];

    public function goals(){
    	return $this->hasMany(Goal::class);
    }

    public function addGoal($name){
    	$this->goals()->create(compact('name'));
    }

    public function user(){
    	return $this->belongsTo(User::class);	
    }
}
