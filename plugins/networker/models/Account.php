<?php namespace Grinkomeda\Networker\Models;

use Model;

/**
 * Account Model
 */
class Account extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = '_grinkomeda_accounts';

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
    public $hasOne = [
        'account' => ['Grinkomeda\Networker\Models\Profile'],
    ];
    public $hasMany = [
        'head' => ['Grinkomeda\Networker\Models\Head'],
    ];
    public $belongsTo = [
        'user' => ['Rainlab\User\Models\User'],
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}