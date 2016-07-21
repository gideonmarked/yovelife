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
    public $table = 'grinkomeda_networkmanager_accounts';

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
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}