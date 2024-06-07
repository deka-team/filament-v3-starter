<?php

namespace App\Loggers;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractModelLogger extends \Z3d0X\FilamentLogger\Loggers\AbstractModelLogger
{
    protected function getLoggableAttributes(Model $model, mixed $values = []): array
    {
        if (! is_array($values)) {
            return [];
        }

        if (count($model->getVisible()) > 0) {
            $values = array_intersect_key($values, array_flip($model->getVisible()));
        }

        if (count($model->getHidden()) > 0) {
            $values = array_diff_key($values, array_flip($model->getHidden()));
        }

        if (config('filament-logger.save_old_value', false)) {
            $new = $values;
            $old = [];
    
            foreach ($new as $key => $value) {
                $old[$key] = $model->getOriginal($key);
            }
            
            return [
                'attributes' => $new,
                'old' => $old,
            ];
        }else{
            return $values;
        }
    }
}
