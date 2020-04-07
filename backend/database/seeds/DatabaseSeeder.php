<?php

use App\Models\Category;
use App\Models\Entity;
use App\Models\Type;
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
        $types = factory(Type::class, 3)->create();

        factory(Entity::class, 500)->create()->each(function ($entity) use ($categories, $types) {
            $entity->categories()->attach(
                $categories->random(rand(1, 5))->toArray()
            );

            $entity->type()->associate($types->random())->save();
        });
    }
}
