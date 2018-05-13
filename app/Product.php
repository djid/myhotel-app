<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Product extends Model
{
	use SearchableTrait;

	/**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'products.nom' => 10,
        ],
        /*'joins' => [
            'posts' => ['users.id','posts.user_id'],
        ],*/
    ];

     public function departement()
    {
    	return $this->belongsToMany('App\Departement');
    }
}
