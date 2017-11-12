<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
	protected $fillable = ['name', 'studysection_id', 'goal_id'];

	public function studysection(){
		return $this->belongsToMany(Studysection::class);
	}
	
    public function user(){
    	return $this->belongsTo(User::class);	
    }
}
