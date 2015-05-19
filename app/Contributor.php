<?php namespace App;

class Contributor extends User {

    protected $contributorFillable = ['name','password'];
    private $parent = [];

    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = array())
    {
        $this->fillable = array_merge($this->fillable, $this->contributorFillable);
        $attributes['contributor'] = true;
        parent::__construct($attributes);
    }
}
