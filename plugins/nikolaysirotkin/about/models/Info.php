<?php

namespace NikolaySirotkin\About\Models;

use Model;

/**
 * Model
 */
class Info extends Model
{
    use \Winter\Storm\Database\Traits\Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'nikolaysirotkin_about_info';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'home_about_images'   => 'required',
        'home_about_images.*' => 'image'
    ];

    /**
     * @var array Attribute names to encode and decode using JSON.
     */
    public $jsonable = [];



    public $attachMany = [
        'home_about_images' => 'System\Models\File',
    ];
}
