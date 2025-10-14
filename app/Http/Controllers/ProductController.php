<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product()
    {
        $getData = Product::query()->get();
        return view('dashboard.product', compact('getData'));
    }
    public function addProduct(Request $req)
    {
        $data = $req->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);
        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $fileName = $file->getClientOriginalName();
            $file = $file->move('images', $fileName);
            $data['image'] = url('images/' . $fileName);
        }
        $addPro = Product::create($data);
        if ($addPro) {
            return redirect('/dashboard/product');
        } else {
            return redirect('/dashboard/product');
        }
    }
    public function deleteProduct($id)
    {
        $data = Product::find($id);
        if ($data->delete()) {
            return redirect('/dashboard/product');
        }
    }
    public function editProduct(Request $req, $id)
    {
        $edit = Product::find($id);
        if ($edit) {
            $data = $req->validate([
                'title' => 'required',
                'sub_title' => 'required',
                'price' => 'required',
                'description' => 'required',
            ]);
            if ($req->hasFile('image')) {
                $file = $req->file('image');
                $fileName = $file->getClientOriginalName();
                $file = $file->move('images', $fileName);
                $data['image'] = url('images/' . $fileName);
            }
            $edit->update($data);
            if($edit){
                return redirect('/dashboard/product');
            }
        }
    }
}
