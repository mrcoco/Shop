<?php

/*
 * This file is part of the Antvel Shop package.
 *
 * (c) Gustavo Ocanto <gustavoocanto@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Antvel\Product\Models;

use Illuminate\Database\Eloquent\Model;

class ProductFeatures extends Model
{
	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products_features';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'input_type', 'product_type', 'default_values',
        'validation_rules', 'help_message', 'status',
        'filterable'
    ];
}
