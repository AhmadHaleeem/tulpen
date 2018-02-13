<?php namespace Beeldr\Tulpen\Models;

use Model;

/**
 * Model
 */
class Home extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'beeldr_tulpen_home';
    public $attachOne = [
        'poster' => 'System\Models\File'
    ];
    public $attachMany = [
        'posterGroup'  => 'System\Models\File'
    ];

}
