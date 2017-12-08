<?php namespace App\Traits; // /laravel/app/Updater.php

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

use Auth;

trait Updater {

    use SoftDeletes;

    // protected $dates = [
    //     'created_at', 'updated_at', 'deleted_at'
    // ];

    protected static function boot() {
        parent::boot();

        /* * During a model create Eloquent will also update the updated_at field so * need to have the updated_by field here as well * */

        static::creating(function($model) {
            $model->created_by = Auth::user() ? Auth::user()->id: $model->created_by;
            $model->updated_by = Auth::user() ?  Auth::user()->id: $model->updated_by;
        });

        static::updating(function($model)  {
            $model->updated_by = Auth::user() ? Auth::user()->id : $model->updated_by;
        });
        /*
         * Deleting a model is slightly different than creating or deleting. For
         * deletes we need to save the model first with the deleted_by field
         * */
        static::deleting(function($model)  {
            $model->deleted_by = Auth::user()->id;
            $model->save();
        });
    }

    public function created_by(){
        return $this->belongsTo('App\Models\Users\User', 'created_by');
    }

    public function updated_by(){
        return $this->belongsTo('App\Models\Users\User', 'updated_by');
    }

    public function deleted_by(){
        return $this->belongsTo('App\Models\Users\User', 'deleted_by');
    }
}
