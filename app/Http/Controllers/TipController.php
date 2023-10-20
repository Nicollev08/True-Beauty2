<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tip;


class TipController extends Controller
{

  public function index()
  {
   $tips = Tip::all();
       return view('admin.crudtips.index', compact('tips'));
    }

   public function create()
   {
       //
   }

  
   public function store(Request $request)
   {

       $request->validate([
           'name' => 'required',
           'description' => 'required',
           'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
       ]);
   
       $tip = new Tip($request->except('image'));
   
       if ($request->hasFile('image')) {
           $imagePath = $request->file('image')->store('tips_images');
           $tip->image = 'tips_images/' . basename($imagePath);
       }
   
       $tip->save();
       return redirect()->route('tip.index')->with('success', 'Product created successfully.');

   }

   
   public function show(Tip $tips)
   {
     
   }

  
   public function edit(Tip $tips)
   {
    return view('admin.crudtips.index', compact('tips'));
   }


   public function update(Request $request, Tip $tip)
   {
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    
    $tip->name = $request->input('name');
    $tip->description = $request->input('description');

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('tips_images');
        $tip->image = 'tips_images/' . basename($imagePath);
    }

    $tip->save();

    return redirect()->route('tip.index')->with('success', 'Producto actualizado exitosamente.');
   }

   public function destroy(Tip $tip)
   {
       $tip->delete();
       return redirect()->route('tip.index')->with('success');
   }
}
