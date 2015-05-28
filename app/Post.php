<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Post
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $title
 * @property string $body
 * @property string $verse_book
 * @property integer $verse_chapter
 * @property integer $verse_verse
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\User')->firstOrFail( $user
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Tag')->withTimestamps()->get([] $tags
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereBody($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereVerseBook($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereVerseChapter($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereVerseVerse($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereUpdatedAt($value)
 */
class Post extends Model {

	protected $fillable = [
		'title',
		'body'
	];


	public function user()
	{
        return $this->belongsTo('App\User')->firstOrFail();
	}


	public function tags()
	{
        return $this->belongsToMany('App\Tag')->withTimestamps()->get();
	}
}
