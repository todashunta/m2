<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Company;

class AdminController extends Controller
{
    public function list()
    {
        $companies = Company::get();
        return view('list', compact('companies'));
    }
    public function edit(Request $request, $id)
    {
        $company = Company::where('id', $id)->first();
        return view('edit', compact('company'));
    }
    public function update(Request $request, $id)
    {
        $company = Company::where('id', $id)->first();
        if (!empty($request->company_name)) {
            $company->update([
                'name' => $request->company_name
            ]);
        }
        if (!empty($request->company_address)) {
            $company->update([
                'adress' => $request->company_address
            ]);
        }
        if (!empty($request->company_tel)) {
            $company->update([
                'tel' => $request->company_tel
            ]);
        }
        if (!empty($request->company_email)) {
            $company->update([
                'email' => $request->company_email
            ]);
        }
        if (!empty($request->company_remarks)) {
            $company->update([
                'remarks' => $request->company_remarks
            ]);
        }
        return view('edit', compact('company'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'adress' => 'required|string',
            'tel' => 'required',
            'email' => 'required|email',
            'remarks' => 'string',
        ]);

        $company = Company::create([
            'name' => $request->name,
            'adress' => $request->adress,
            'tel' => $request->tel,
            'email' => $request->email,
            'remarks' => $request->remarks,
        ]);
        return view('create_ok', compact('company'));
    }
}
