<?php

namespace App\Traits;

use App\Models\Audit;
use Illuminate\Support\Facades\Auth;

trait Auditable
{
    protected static function bootAuditable()
    {
        foreach (['created', 'updated', 'deleted'] as $event) {
            static::$event(function ($model) use ($event) {
                $user = Auth::user();

                $oldValue = $event === 'updated' ? $model->getOriginal() : ($event === 'deleted' ? $model->toArray() : null);
                $newValue = $event === 'updated' ? $model->getDirty() : ($event === 'created' ? $model->toArray() : null);

                Audit::create([
                    'auditable_type' => get_class($model),
                    'auditable_id' => $model->id,
                    'user_id' => $user?->id,
                    'action' => $event,
                    'old_value' => $oldValue,
                    'new_value' => $newValue,
                    'ip_address' => request()->ip(),
                ]);
            });
        }
    }
}