<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\CategoryCollection;
use App\Http\Resources\v1\CategoryResource;
use App\Models\Category;

/**
 * @group Categories
 */
final class CategoryController extends Controller
{
    /**
     * Get all categories
     *
     * @queryParam page The page number. Example: 1
     */
    public function index(): CategoryCollection
    {
        return new CategoryCollection(Category::paginate($this->perPage()));
    }

    /**
     * Get a single category
     * Retrieves a collection of entities that belong to the current category
     *
     * @urlParam category required The ID of the category. Example: 5
     */
    public function show(Category $category): CategoryResource
    {
        return new CategoryResource($category);
    }
}
