<?php

namespace App\Models;
use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class conventions extends Model
{
    use Uuids;
    use HasFactory;
    protected $primaryKey = "id_conventions";
}
