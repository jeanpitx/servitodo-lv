<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use App\Models\Category;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    protected $singleName="Categoria";
    protected $pluralName="Categorias";
    protected $titles=[
        'Id',
        'Nombre',
        'Descripción',
        'Imagen',
    ];

    /**
     * Create a new controller instance.
     *
     * @param  \App\Repositories\CategoryRepository  $users
     * @return void
     */
    public function __construct() //CategoryRepository $category
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate(5);
        return Inertia::render('Category/Index', [
            'tableItems' => $categories,
            'tableTitles' => $this->titles,
            'singleName' => $this->singleName,
            'pluralName' => $this->pluralName
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return Inertia::render('Category/Form', [
            'singleName' => $this->singleName,
            'pluralName' => $this->pluralName,
            'formTitles' => $this->titles,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'uri_image' => 'required|mimes:jpg,jpeg,png|max:2048'
        ]);

        $input = $request->all();
        $input['uri_image'] = $request->file('uri_image')->storeAs(
            'public/categories', time().".".$request->file('uri_image')->extension()
        );

        Category::create($input);

        return Redirect::route('categories.index')->with('success', 'Categoría Creada.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return Inertia::render('Category/Show', [
            'Item' => $category,
            'showTitles' => $this->titles,
            'pluralName' => $this->pluralName
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return Inertia::render('Category/Form', [
            'singleName' => $this->singleName,
            'pluralName' => $this->pluralName,
            'formTitles' => $this->titles,
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();
        if ($image = $request->file('uri_image')) {
            $request->validate(['uri_image' => 'mimes:jpg,jpeg,png|max:2048']);

            Storage::delete($category->uri_image);
            $input['uri_image'] = $request->file('uri_image')->storeAs(
                'public/categories', time().".".$request->file('uri_image')->extension()
            );
        }

        $category->update($input);
        return Redirect::route('categories.index')->with('success', 'Categoría Actualizada.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return Redirect::route('categories.index')->with('success', 'Categoría Eliminada en papelera.');
    }

    /**
     * Display a listing of the resource with deleted_at.
     *
     * @return \Illuminate\Http\Response
     */
    public function trashbin()
    {
        $categories = Category::onlyTrashed()->paginate(5);
        return Inertia::render('Category/Trash', [
            'tableItems' => $categories,
            'tableTitles' => $this->titles,
            'singleName' => $this->singleName,
            'pluralName' => $this->pluralName
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    $id
     * @return \Illuminate\Http\Response
     */
    public function trashonly(Request $request)
    {
        if($request->method=="restore"){
            Category::onlyTrashed()->find($request->id)->restore();
        }else{
            $category=Category::onlyTrashed()->find($request->id);
            Storage::delete($category->uri_image);
            $category->forceDelete();
        }
        return Redirect::route('trash.categories')->with('success', 
            $request->method=="restore"?'Categoría restaurada.':"Categoría eliminada completamente"
        );
    }

    /**
     * Remove or Restore all elements
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function trashall(Request $request)
    {
        
        if($request->method=="restore"){
            Category::onlyTrashed()->restore();
        }else{
            $categories=Category::onlyTrashed();
            foreach($categories->get() as $category){
                Storage::delete($category->uri_image);
            }
            $categories->forceDelete();
        }
        return Redirect::route('trash.categories')->with('success', 
            $request->method=="restore"?'Todas las categorías han sido restauradas.':"Todas las categorías han sido eliminadas completamente"
        );
    }
}
