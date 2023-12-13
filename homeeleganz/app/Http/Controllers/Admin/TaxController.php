<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tax;
use Illuminate\Support\Facades\Storage;

class TaxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $taxes = Tax::all();
        $slug = "taxdashboard";
        $title = "List of Tax Rates by Province";
        return view('/admin/taxes/index', compact('taxes', 'title', 'slug'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Add New Province Tax Details";
        $slug = "taxdashboard";
        return view('/admin/taxes/create', compact('title', 'slug'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'province' => 'required|string|min:4|max:255',
            'pst' => 'required|numeric',
            'gst' => 'required|numeric',
            'hst' => 'required|numeric',
        ]);

        $taxes = Tax::create($valid);
        return redirect(route('taxlist'))->with('success','New Province Tax record created!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tax = Tax::find($id);
        $title = "Edit Tax" . "-" . $tax->province;
        $slug = "taxdashboard";
        $provinces = Tax::select('id', 'province', 'pst')->get();

        $pstValues = Tax::select('pst')->distinct()->pluck('pst');
        $gstValues = Tax::select('gst')->distinct()->pluck('gst');
        $hstValues = Tax::select('hst')->distinct()->pluck('hst');
         $filteredPstValues = $pstValues->reject(function ($value) {
        return $value === '0';
        });

        $filteredGstValues = $gstValues->reject(function ($value) {
            return $value === '0';
        });

        $filteredHstValues = $hstValues->reject(function ($value) {
            return $value === '0';
        });

        return view('/admin/taxes/edit', compact('tax', 'title', 'slug', 'provinces', 'filteredPstValues', 'filteredGstValues', 'filteredHstValues'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $valid = $request->validate([
            'province' => 'required|string',
            'pst' => 'required|numeric',
            'gst' => 'required|numeric',
            'hst' => 'required|numeric',
        ]);

        $tax = Tax::find($id);
        $tax->update($valid);

        return redirect(route('taxlist'))->with('success', 'Province Tax record updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tax = Tax::find($id);
        $tax->delete();
        return redirect(route('taxlist'))->with('danger', 'Province Tax rate deleted successfully!');
    }
}
