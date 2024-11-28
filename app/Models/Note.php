<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Note extends Model
{
    //

    use HasFactory, HasUuids;


    // whatever is in this guarded can not be mass assigned
    protected $guarded = [
        'id'
    ];

    // set that each note belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
