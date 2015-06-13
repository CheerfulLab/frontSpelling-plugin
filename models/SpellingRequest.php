<?php namespace Haegemon\Frontendspelling\Models;

use Model;

/**
 * SpellingRequest Model
 */
class SpellingRequest extends Model
{

    const SpellingRequestStatusNew = 0;
    const SpellingRequestStatusProceed = 1;
    /**
     * @var string The database table used by the model.
     */
    public $table = 'haegemon_frontendspelling_spelling_requests';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['id', 'status'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['text', 'comment', 'url'];

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