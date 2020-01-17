<?php

namespace App;

use App\Authentication\Customer;
use App\Authentication\Employee;
use Illuminate\Database\Eloquent\Model;

class Repair extends Model
{
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'user_id');
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'id');
    }

    public function parts()
    {
        return $this->belongsToMany(Part::class, 'repair_parts')->using(RepairParts::class)->withPivot('quantity');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}
