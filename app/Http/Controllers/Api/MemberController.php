<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json(Member::get());

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'address' => 'nullable|string|filled',
            'gander' => 'required|string|filled',
            'phone_number' => 'required|string|filled',
            'plat_no' => 'required|string',
            'card_no' => 'required|string',
            'vehicle_id' => 'required|string',
            'group' => 'nullable|string',
            'start_at' => 'required|date_format:d/m/Y H:i:s',
            'end_at' => 'required|date_format:d/m/Y H:i:s',
            'payment_method_id' => 'required|string',
            'in' => 'nullable|date_format:d/m/Y H:i:s',
            'out' => 'nullable|date_format:d/m/Y H:i:s',
            'user_id' => 'required|string'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
