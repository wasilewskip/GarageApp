<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class RepairParts extends Pivot
{
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;

    protected $table = 'repair_parts';
}
