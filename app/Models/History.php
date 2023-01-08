<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $appends = ['st_date', 'nd_date'];

    public function getStDateAttribute()
    {
        return Carbon::parse($this->attributes['start_date'])->translatedFormat('d F Y');
    }

    public function getNdDateAttribute()
    {
        if ($this->attributes['end_date']) {
            return Carbon::parse($this->attributes['end_date'])->translatedFormat('d F Y');
        } else {
            return 'present';
        }
    }
}
