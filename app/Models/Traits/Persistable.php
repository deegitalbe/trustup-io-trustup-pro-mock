<?php

namespace App\Models\Traits;

trait Persistable
{
    /**
     * Persisting instance.
     *
     * @param  array<string, mixed>  $options Options to give with
     * @return static
     */
    public function persist(array $options = []): self
    {
        $this->save($options);

        return $this;
    }
}
