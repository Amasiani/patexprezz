<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
//use App\Helpers\Helper;
use App\Models\Customer;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        //$packages = Package::with('customers')->get();
        $packages = Package::all();
        //dd($packages->customers);
        //return view('admin.packages.index')->with('packages', $packages);
       return view('admin.packages.index', ['packages'=>Package::paginate(10)]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.packages.create', ['customers' => Customer::all()]);
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
            'tracking_number' => 'required|string',
            'customer' => 'required|string',
            'current_location' => 'required|string',
            'destination'=> 'required|string',
            'amount' => 'required|',
            'description' => 'required|string',
        ]);

        $package = Package::create($request->except(['_token', 'customer']));

        $package->customers()->sync($request->customer);

        return redirect(route('admin.packages.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */ 
    
    public function destroy($id)
    {
        Package::destroy($id);

       return redirect(route('admin.packages.index'));
    }
}
