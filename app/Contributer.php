<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Contributor extends Eloquent {

    protected $table = "users_contributors";

    public function user()
    {
        return $this->morphOne('User', 'userable');
    }

}
