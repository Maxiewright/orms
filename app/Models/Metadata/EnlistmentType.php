<?php

namespace App\Models\Metadata;

use App\Models\Serviceperson;
use App\Traits\SluggableByName;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EnlistmentType extends Model
{
    use SluggableByName;

    protected $guarded = [];

    public function servicepeople(): HasMany
    {
        return $this->hasMany(Serviceperson::class);
    }
}
