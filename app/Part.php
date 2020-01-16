<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    public function repairs()
    {
        return $this->belongsToMany(Repair::class, 'repair_parts')->using(RepairParts::class)->withPivot('quantity');
    }
}
