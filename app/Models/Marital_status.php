<?php

namespace App\Models;
use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marital_status extends Model
{
    use Uuids;
    use HasFactory;
    protected $primaryKey = "id_marital_statuses";
}
