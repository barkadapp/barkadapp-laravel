<?php

namespace App\Http\Controllers;

use App\Models\Bidding;
use Illuminate\Http\Request;

class barkadappController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('bidding.bidding_view', ['biddings' => Bidding::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bidding = new Bidding;
        $bidding->bidding_amount = $request->input('bidding_amount');
        $bidding->save();

        return view('bidding.bidding_view', ['biddings' => Bidding::all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bidding = Bidding::find($id);
        $bidding->description = $request->input('description');
        $bidding->save();

        return view('bidding.bidding_view', ['biddings' => Bidding::all()]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bidding = Bidding::find($id);
        $data = [
            $bidding->delete(),
        ];

        return redirect("/bidding", $data);
    }
}
