<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Http\Requests\StoreGroupRequest;
use App\Http\Requests\UpdateGroupRequest;
use Illuminate\Http\Request;


class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Group $group)
    {
        // dd(action([GroupController::class , 'edit'], ['id' => 1]));
        $groups = $group::all();
        return view('group.index', ["groups" => $groups]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGroupRequest $request)
    {
        //
        $grp = new Group();
        $grp->name = "newgroup";
        $grp->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group)
    {
        return view('group.edit', [
            'group' => $group
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Group $group)
    {
        return view('group.edit', [
            'user' => $request->user(),
            'group' => $group
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGroupRequest $request, Group $group)
    {
        $group->fill($group->validated);
        $group->save();
        // redirect
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
        //
    }
}
