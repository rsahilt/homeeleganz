<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tax;

class TaxController extends Controller
{
    /**
     * Display a listing of tax rates.
     *
     * Retrieves and displays a list of all tax rates from the database.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $taxes = Tax::all();
        $slug = "taxdashboard";
        $title = "List of Tax Rates by Province";
        return view('/admin/taxes/index', compact('taxes', 'title', 'slug'));
    }

    /**
     * Show the form for creating a new tax rate.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $title = "Add New Province Tax Details";
        $slug = "taxdashboard";
        return view('/admin/taxes/create', compact('title', 'slug'));
    }

    /**
     * Store a newly created tax rate in storage.
     *
     * Validates the request and creates a new tax rate in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'province' => 'required|string|min:4|max:255',
            'pst' => 'required|numeric',
            'gst' => 'required|numeric',
            'hst' => 'required|numeric',
        ]);

        Tax::create($valid);
        return redirect(route('taxlist'))->with('success', 'New Province Tax Record created!');
    }

    /**
     * Show the form for editing a specified tax rate.
     *
     * Retrieves a specific tax rate by ID for editing.
     *
     * @param  string  $id
     * @return \Illuminate\View\View
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
     * Update the specified tax rate in storage.
     *
     * Validates the request and updates the specified tax rate in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     * @return \Illuminate\Http\RedirectResponse
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

        return redirect(route('taxlist'))->with('success', 'Province Tax Record updated successfully!');
    }

     /**
     * Remove the specified tax rate from storage.
     *
     * Deletes a specific tax rate by ID from the database.
     *
     * @param  string  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(string $id)
    {
        $tax = Tax::find($id);
        $tax->delete();
        return redirect(route('taxlist'))->with('danger', 'Province Tax Record deleted successfully!');
    }
}
