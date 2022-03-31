<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $product = Product::all();
        $category = Category::all();
        return view('home', compact('product', 'category'));
    }

    public function store_category(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3|max:30'
        ]);

        try {
            $data = new Category;
            $data->nama = $request->nama;
            $data->save();

            return redirect()->route('home');
        } catch (\Throwable $th) {
            return redirect()->route('home');
        }
    }

    public function update_category(Request $request, $id)
    {
        $request->validate([
            'nama-' . $id => 'required|min:3|max:30'
        ]);

        try {
            $data = Category::find($id);
            $data->nama = $request['nama-' . $id];
            $data->save();

            return redirect()->route('home');
        } catch (\Throwable $th) {
            return redirect()->route('home');
        }
    }

    public function delete_category($id)
    {
        try {
            Product::where('category_id', $id)->delete();
            Category::destroy($id);
        } catch (\Throwable $th) {
        }

        return redirect()->route('home');
    }

    public function store_product(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:3|max:30',
            'category_id' => 'required|exists:categories,id',
            'harga' => 'required|min:3|max:10|regex:/^[0-9,]*$/',
        ]);

        try {
            $data = new Product;
            $data->nama = $request->nama;
            $data->category_id = $request->category_id;
            $data->harga = Str::of($request->harga)->replace(',', '');
            $data->save();

            return redirect()->route('home');
        } catch (\Throwable $th) {
            return redirect()->route('home');
        }
    }

    public function update_product(Request $request, $id)
    {
        $request->validate([
            'nama-' . $id => 'required|min:3|max:30',
            'category_id-' . $id => 'required|exists:categories,id',
            'harga-' . $id => 'required|min:3|max:10|regex:/^[0-9,]*$/',
        ]);

        try {
            $data = Product::find($id);
            $data->nama = $request['nama-' . $id];
            $data->category_id = $request['category_id-' . $id];
            $data->harga = Str::of($request['harga-' . $id])->replace(',', '');
            $data->save();

            return redirect()->route('home');
        } catch (\Throwable $th) {
            return redirect()->route('home');
        }
    }

    public function delete_product($id)
    {
        try {
            Product::destroy($id);

            return redirect()->route('home');
        } catch (\Throwable $th) {
        }
    }
}
