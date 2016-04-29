<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Categories;
use App\Products;

class CategoriesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    protected $category;

    public function setUp()
    {
        $this->category = new Categories('Clothing', 'Some clothes');
    }

    public function category_has_description()
    {
        $this->assertEquals('Some',$this->category->getCategoryDescription());
    }

    public function testCategoryHasProducts()
    {
        //$category = new Categories;
        $product1 = new Products('Test',102);
        $product2 = new Products('Test123',100);
        $product3 = new Products('Teddf3',1000);

        $this->category->add($product1);
        $this->category->add($product2);
        $this->category->add($product3);

        $this->assertCount(3,$this->category->products());
    }
}