<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Milestone;
use App\Models\MilestoneImage;

class MilestoneController extends Controller
{
    //

    public function index(){   
        $id =1;        
        $milestone = Milestone::findOrfail($id);  
        $data['mile1'] = $milestone;   
        return view('pages.milestones', $data);
    }
    public function create(){        
        return view('pages.milestones-update');
    }

    public function addMilestone(Request $request)
{
    try {
        $request->validate([
            'name' => 'required|string',
            'cost' => 'required|numeric',
            'description' => 'required|string',
            'comment' => 'required|string',
            'images' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $product = new Milestone();
        $product->name = $request->name;
        $product->cost = $request->cost;
        $product->description = $request->description;
        $product->save();

        $imageUrls = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = $image->store('posts', 'public');

                $productImage = new MilestoneImage();
                $productImage->milestone_image_id = $product->id;
                $productImage->url = $filename;
                $productImage->comment = $request->comment;
                $productImage->save();

                $imageUrls[] = $filename;
            }
        }
        return response()->json(['success' => true, 'message' => 'Prodcut Created Successfully', 'image_urls' => $imageUrls], 200);
    } catch (\Exception $e) {
        return response()->json(['error' => 'An error occurred while creating product: ' . $e->getMessage()], 400);
    }
}

public function update(Request $request, $id){
    // $id = $request->id;
    $milestone = Milestone::findOrfail($id);
    // dd($request);
    $imageUrls = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = $image->store('posts', 'public');

                $productImage = new MilestoneImage();
                $productImage->milestone_image_id = $id;
                $productImage->url = $filename;
                $productImage->comment = $request->comment;
                $productImage->save();

                $imageUrls[] = $filename;
            }
        }
        return response()->json(['success' => true, 'message' => 'Prodcut Created Successfully', 'image_urls' => $imageUrls], 200);
}

public function show(){
    return $milestone = Milestone::all();
    return $milestone;
}
}
