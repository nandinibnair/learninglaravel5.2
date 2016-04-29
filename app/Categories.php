<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Products;

class Categories extends Model
{
    //
    protected $table = 'categories';
    protected $name;
    protected $description;
    protected $products;

    public function __construct($name,$description)
    {
        $this->name = $name;
        $this->description = $description;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','description'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hasManyproducts()
    {
        return $this->hasMany(Products::class);
    }

    public function getCategoryDescription()
    {
        return $this->description;
    }

    public function add(Products $product)
    {
        $this->products[] = $product;
    }

    public function products()
    {
        return $this->products;
    }
}
