<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;


class Teacher extends Model
{
    protected $table = 'teachers';
    
    public function is_teacher()
    {
       	$role = $this->role;
		if($role == 'teacher')
		{
			return true;
		}
		return false;
    }
}
