<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Categories::class,1)->create();
       /* factory(App\Categories::class, 3)
            ->create()
            ->each(function($p) {
                $p->products()->save(factory(App\Products::class)->create());
            });*/
    }
}
