<?php namespace Grinkomeda\Networker\Models;

use Model;

/**
 * Profile Model
 */
class Profile extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = '_grinkomeda_profiles';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [
            'account' => ['Grinkomeda\Networker\Models\Account'],
        ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}