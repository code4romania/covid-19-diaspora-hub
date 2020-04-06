<?php

namespace App\Models;

use App\Models\Entity;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    /**
     * The number of models to return for pagination.
     *
     * @return int
     */
    protected function perPage()
    {
        return config('app.env') === 'documentation' ? 5 : 50;
    }
}
