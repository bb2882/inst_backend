<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProfileContentResource;
use App\Models\ProfileContent;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProfileContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $followings = ProfileContent::all();

        return ProfileContentResource::collection($followings);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!$request->username) {
            return \response('No Username', Response::HTTP_NOT_FOUND);
        }

        $following = ProfileContent::create($request->only('username', 'description', 'profile'));

        return response($following, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     */
    public function show($id)
    {
        if (ProfileContent::find($id)) {
            return response('User Not Found', Response::HTTP_NOT_FOUND);
        }
        return new ProfileContentResource(ProfileContent::find($id));
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
        $following = ProfileContent::find($id);

        $following->update($request->only('username', 'description', 'profile'));

        return response($following, Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProfileContent::destroy($id);

        return response('deleted', Response::HTTP_NO_CONTENT);
    }
}
