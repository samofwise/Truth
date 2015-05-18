<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Viewer extends User {

	public function __construct(array $attributes)
    {
        $attributes['contributor'] = false;
        parent::__construct($attributes);
    }

}
