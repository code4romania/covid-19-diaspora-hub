<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\CategoryCollection;
use App\Http\Resources\v1\CategoryResource;
use App\Http\Resources\v1\EntityCollection;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(): CategoryCollection
    {
        return new CategoryCollection(Category::paginate());
    }

    public function show(Category $category): CategoryResource
    {
        return new CategoryResource($category);
    }

    public function entities(Category $category): EntityCollection
    {
        return new EntityCollection($category->entities()->paginate());
    }
}
