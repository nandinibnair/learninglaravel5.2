<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //
    protected $name;
    protected $price;
    protected $description;
    protected $qty;
    protected $table = 'products';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','description','cat_id','qty','price'];

    public function __construct($name,$price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Categories::class);
    }

    public function getProductName()
    {
        return $this->name;
    }

    public function getProductPrice()
    {
        return $this->price;
    }
}
