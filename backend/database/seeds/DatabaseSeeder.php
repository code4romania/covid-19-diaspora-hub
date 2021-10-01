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
        $categories = Category::factory()->count(10)->create();
        $types = Type::factory()->count(3)->create();

        Entity::factory()
            ->count(500)
            ->create()
            ->each(function (Entity $entity) use ($categories, $types) {
                $entity->categories()->attach(
                    $categories->random(mt_rand(1, 5))
                );

                $entity->type()->associate($types->random());

                $entity->save();
            });
    }
}
