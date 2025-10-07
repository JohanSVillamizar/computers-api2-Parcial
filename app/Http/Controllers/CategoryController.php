<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Resources\CategoryResource;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Category::query();

        if ($request->has('status')) {
            // Convierte el string 'true' o 'false' a booleano
            $status = filter_var($request->status, FILTER_VALIDATE_BOOLEAN);
            $query->where('categories_status', $status);
        }

        $categories = $query->paginate(10);

        return response()->json($categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $category = Category::create($request->validated());
        return (new CategoryResource($category))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return new CategoryResource($category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update($request->validated());
        return new CategoryResource($category);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $id = $category->id;
        $category->delete();

        return response()->json([
            'message' => "La categoría con id {$id} se eliminó correctamente."
        ], 200);
    }

    public function activeCategoriesWithComputers()
    {
        $categories = Category::where('categories_status', true)->with('computers')->get();
        return CategoryResource::collection($categories);
    }
}
