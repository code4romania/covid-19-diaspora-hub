<?php

use App\Models\Category;
use App\Models\Entity;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categories = factory(Category::class, 10)->create()->pluck('id');

        factory(Entity::class, 20)->create()->each(function ($entity) use ($categories) {
            $entity->categories()->attach(
                $categories->random(rand(1, 5))->toArray()
            );
        });
    }
}
