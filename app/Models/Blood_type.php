<?php

namespace App\Models;
use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blood_type extends Model
{
    use Uuids;
    use HasFactory;
    protected $primaryKey = "id_blood_types";
}
