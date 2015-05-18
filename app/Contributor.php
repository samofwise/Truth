<?php namespace App;

class Contributor extends User {

    private $parent = [];
    protected $contributorFillable = ['name','password'];

    /**
     * @param array $attributes
     */
    public function __construct(array $attributes)
    {
        $this->fillable = array_merge($this->fillable, $this->contributorFillable);
        $attributes['contributor'] = true;
        parent::__construct($attributes);
    }
}
