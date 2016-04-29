<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Products;

class ProductsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    protected $product;

    //called b4 every method
    public function setUp()
    {
        $this->product = new Products('Test Product','sdsddsdsd',100,2);
    }


    public function product_has_name()
    {
        $this->assertEquals('Test Product',$this->product->getProductName());
    }

    public function product_has_cost()
    {
        $this->assertEquals(10,$this->product->getProductPrice());
    }

    public function testBasicExample()
    {
        $this->assertTrue(true);
    }
}
