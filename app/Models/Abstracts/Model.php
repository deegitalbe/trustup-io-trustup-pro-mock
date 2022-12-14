<?php

namespace App\Models\Abstracts;

use App\Models\Traits\HasUuid;
use App\Models\Traits\Persistable;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Base model for this project.
 */
abstract class Model extends EloquentModel
{
    use
        HasUuid,
        SoftDeletes,
        Persistable;

    /**
     * Getting id.
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
}
