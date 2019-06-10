<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = array(
        'vehicle_id',
        'model_id',
        'price',
        'price_vat',

        'author_id',
        'editor_id'
    );

    /*
     * Značka vozidla
     * */
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    /*
     * Model vozidla
     * */
    public function model()
    {
        return $this->belongsTo(\App\Model::class);
    }

    /*
     * Barevné varianty vozdila
     * */
    public function colors()
    {
        return $this->hasMany(Color::class, 'cars_colors');
    }

    /*
     * Autor - Kdo založil
     * */
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    /*
     * Editor - Kdo naposledy upravil
     * */
    public function editor()
    {
        return $this->belongsTo(User::class, 'editor_id');
    }
}
