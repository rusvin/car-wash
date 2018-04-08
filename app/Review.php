<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Gate;

class Review extends Model
{

    use SoftDeletes;
    public $table = 'reviews';


    public function user()
    {
        return $this->hasOne('App\CMS_User', 'id', 'cms_user_id');
    }
}
