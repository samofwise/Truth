<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\Model;

/**
 * App\User
 *
 * @property integer $id
 * @property boolean $contributor
 * @property string $name
 * @property string $displayName
 * @property string $email
 * @property string $password
 * @property boolean $admin
 * @property boolean $blockedViewer
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Post[] $posts
 * @method static \Illuminate\Database\Query\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereContributor($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereDisplayName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereAdmin($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereBlockedViewer($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUpdatedAt($value)
 */
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
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

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

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function type()
    {
        return $this->contributor ?
            $this->admin ? "Admin" : "Contributor"
            : "Viewer";
    }


}



