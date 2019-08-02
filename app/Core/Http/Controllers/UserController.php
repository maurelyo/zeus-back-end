<?php

namespace App\Core\Http\Controllers;

use App\Core\Domain\UserEntity;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Core\Domain\UserEntity  $userEntity
     * @return \Illuminate\Http\Response
     */
    public function show(UserEntity $userEntity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Core\Domain\UserEntity  $userEntity
     * @return \Illuminate\Http\Response
     */
    public function edit(UserEntity $userEntity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Core\Domain\UserEntity  $userEntity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserEntity $userEntity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Core\Domain\UserEntity  $userEntity
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserEntity $userEntity)
    {
        //
    }
}
