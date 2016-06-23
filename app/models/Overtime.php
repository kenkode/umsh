<?php

class Overtime extends \Eloquent {
/*
	use \Traits\Encryptable;


	protected $encryptable = [

		'allowance_name',
	];
	*/

public static $rules = [
        'employee' => 'required',
<<<<<<< HEAD
        'type' => 'required',
        'period' => 'required|numeric'
		
=======
		'type' => 'required',
		'amount' => 'required'
>>>>>>> aaf24fd0b2c17e5b468f8834f2db2d1e9264f0c8
	];

	public static $messsages = array(
        'employee.required'=>'Please select employee!',
        'type.required'=>'Please select overtime type!',
<<<<<<< HEAD
        'period.required'=>'Please insert period worked!',
        'period.numeric'=>'Please insert a valid period!',
=======
        'amount.required'=>'Please insert amount!',
>>>>>>> aaf24fd0b2c17e5b468f8834f2db2d1e9264f0c8
    );

	// Don't forget to fill this array
	protected $fillable = [];


	public function employee(){

		return $this->belongsTo('Employee');
	}

}