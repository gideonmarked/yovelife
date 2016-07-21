<?php namespace Grinkomeda\NetworkManager\Models;

use Model;

/**
 * Account Model
 */
class Account extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = '_yovelife_accounts';

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
        'profile' => ['Grinkomeda\NetworkManager\Models\Profile'],
    ];
    public $hasMany = [
        'head' => ['Grinkomeda\NetworkManager\Models\Head'],
    ];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}