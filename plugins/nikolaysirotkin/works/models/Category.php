<?php

namespace NikolaySirotkin\Works\Models;

use Model;

/**
 * Model
 */
class Category extends Model
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
    public $table = 'nikolaysirotkin_works_category';

    /**
     * @var array Validation rules
     */
    public $rules = [];

    /**
     * @var array Attribute names to encode and decode using JSON.
     */
    public $jsonable = [];

    public $belongsToMany = [
        'works' => [
            'Nikolaysirotkin\Works\Models\Work',
            'table' => 'nikolaysirotkin_works_works_categories',
            'order' => 'title'
        ]
    ];
}
