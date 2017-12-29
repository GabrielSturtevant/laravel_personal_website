<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'person';

    public function projects() {
        return $this->hasMany('App\Models\Project')->orderBy('completion_date', 'DESC');
    }

    public function jobs() {
        return $this->hasMany('App\Models\Job')->orderBy('end_date', 'DESC');
    }

    public function picture() {
        return $this->hasOne('App\Models\Picture');
    }
}
