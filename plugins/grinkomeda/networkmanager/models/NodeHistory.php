<?php namespace Grinkomeda\NetworkManager\Models;

use Model;

/**
 * NodeHistory Model
 */
class NodeHistory extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = '_yovelife_node_histories';

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
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}