<?php

namespace App;

use App\Authentication\User;
use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'id');
    }

    public function parts()
    {
        return $this->belongsToMany(Part::class, 'repair_parts')->using(RepairParts::class)->withPivot('quantity');
    }
}
