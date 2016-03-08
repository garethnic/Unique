<?php

namespace garethnic\Unique;

use Ramsey\Uuid\Uuid;

trait Unique {

    /**
     * Boot the trait for the model
     *
     * @return void
     */
    public static function bootUnique()
    {
        $field = config('unique.field');

        static::creating(function ($model) use ($field) {
            $model->$field = (string)Uuid::uuid4();
        });
    }

    /**
     * Get the casts array
     *
     * @return mixed
     */
    public function getCasts()
    {
        return $this->casts;
    }
}
