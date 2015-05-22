<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{

    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['email', 'displayName', 'contributor'];
    protected $contributorFillable = ['name','password'];
    protected $viewerFillable = [];

    /**
     * @param array $attributes
     */
    public function __construct(array $attributes = array())
    {
        $append = array_key_exists('contributor', $attributes) && $attributes['contributor'] == true ? $this->contributorFillable : $this->viewerFillable;

        $this->fillable = array_merge($this->fillable, $append);

        parent::__construct($attributes);
    }

    public static function createContributor(array $attributes)
    {
        $attributes['contributor'] = true;
        User::create($attributes);
    }
    public static function createViewer(array $attributes)
    {
        $attributes['contributor'] = false;
        User::create($attributes);
    }

    public static function contributors()
    {
        return User::where('contributor', true)->get();
    }
    public static function viewers()
    {
        return User::where('contributor', false)->get();
    }
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function posts()
    {
        return $this->hasMany('App\Post');
    }




}



