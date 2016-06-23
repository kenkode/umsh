<?php

class Bank extends \Eloquent {

public static $rules = [
		'name' => 'required',
		'code' => 'required'
	];

public static $messages = array(
        'name.required'=>'Please insert bank name!',
        'code.required'=>'Please insert bank code!',
<<<<<<< HEAD
=======

>>>>>>> aaf24fd0b2c17e5b468f8834f2db2d1e9264f0c8
    );

	// Don't forget to fill this array
	protected $fillable = [];


	public function employees(){

		return $this->hasMany('Employee');
	}

	public function bankbranch(){

		return $this->hasMany('BBranch');
	}

}