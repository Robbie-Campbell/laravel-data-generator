<?php

namespace App\Http\Controllers;

use App\Models\staff;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $showall = staff::all();

        return view("names", ['showall' => $showall]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|RedirectResponse
     */
    public function create()
    {
        $showall = staff::all();

        return view("create_name", ['showall' => $showall]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
//        echo "Hello there!";
//         print_r($request->input());
        $staff = new staff;
        $staff->first_name = $request->firstname;
        $staff->last_name = $request->lastname;
        $staff->email = $request->email;
        $staff->save();
        return redirect()->to('/')->with("message", "Successfully Created Staff");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\staff  $staff
     * @return Application|Factory|View|Response
     */
    public function edit()
    {
        $showall = staff::all();

        return view("update_name", ['showall' => $showall]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\staff  $staff
     * @return RedirectResponse
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $staff = staff::find($id);
        $staff->email = $request->email;
        $staff->save();

        return redirect()->to('/')->with("message", "Successfully Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @return Application|Factory|View|void
     */
    public function showdestroy()
    {
        $showall = staff::all();

        return view("delete_name", ['showall' => $showall]);
    }

    public function destroy(Request $request)
    {
        $id = $request->id;
        $staff = staff::find($id);
        $staff->delete();
        return redirect()->to('/')->with("message", "Successfully Deleted");
    }
}
