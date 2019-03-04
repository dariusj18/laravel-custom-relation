<?php

namespace LaravelCustomRelation;

use LaravelCustomRelation\Relations\Custom;
use Closure;

trait HasCustomRelations
{
    /**
     * Define a custom relationship.
     *
     * @param  string  $related
     * @param  string  $baseConstraints
     * @param  string  $eagerConstraints
     * @param  string  $getModelKey
     * @param  string  $getResultKey
     * @param  boolean $resultIsPlural
     * @return \App\Services\Database\Relations\Custom
     */
    public function custom($related, Closure $baseConstraints, Closure $eagerConstraints, Closure $getModelKey, Closure $getResultKey, $resultIsPlural = true)
    {
        $instance = new $related;
        $query = $instance->newQuery();

        return new Custom($query, $this, $baseConstraints, $eagerConstraints, $getModelKey, $getResultKey, $resultIsPlural);
    }
}
