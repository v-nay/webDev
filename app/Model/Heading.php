<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Heading extends Model
{
    use LogsActivity;

    protected $guarded = ['id'];

    protected static $logAttributes = ['name'];

    protected static $logName = 'Heading';

    protected static $logOnlyDirty = true;

   
}
