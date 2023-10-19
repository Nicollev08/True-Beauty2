<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{

  public function index()
  {
   $services = Service::all();
       return view('admin.crudservices.index', compact('services'));
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
   
       $service = new Service($request->except('image'));
   
       if ($request->hasFile('image')) {
           $imagePath = $request->file('image')->store('services_images');
           $service->image = 'services_images/' . basename($imagePath);
       }
   
       $service->save();
       return redirect()->route('service.index')->with('success', 'Product created successfully.');

   }

   
   public function show(Service $services)
   {
     
   }

  
   public function edit(Service $services)
   {
    return view('admin.crudservices.index', compact('services'));
   }


   public function update(Request $request, Service $service)
   {
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    
    $service->name = $request->input('name');
    $service->description = $request->input('description');

    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('services_images');
        $service->image = 'services_images/' . basename($imagePath);
    }

    $service->save();

    return redirect()->route('service.index')->with('success', 'Producto actualizado exitosamente.');
   }

   public function destroy(Service $service)
   {
       $service->delete();
       return redirect()->route('service.index')->with('success');
   }
}
