<?php

namespace App\Http\Controllers;

use App\Group;
use App\Http\Requests\CreateGroupRequest;
use App\Http\Requests\DeleteGroupByNameRequest;
use App\Http\Requests\GetGroupByName;
use App\Http\Requests\GetGroupByNameRequest;
use App\Http\Requests\GetGroupsRequest;
use App\Http\Requests\GroupPageRequest;
use Illuminate\Http\Request;

class GroupController extends Controller
{

    public function createGroupPage(GroupPageRequest $request)
    {
        return view('create-group');
    }

    public function createGroup(CreateGroupRequest $request)
    {
        $displayName = $request->display_name;

        $group = Group::create(['display_name' => $displayName]);

        return $group ? redirect("/groups/{$group->name}") : redirect('/groups');
    }

    public function getGroupByName(GetGroupByNameRequest $request)
    {
        $group = Group::where('name', '=', $request->name)->first();
        $students = $group->students;

        return view('group', ['group' => $group, 'students' => $students]);
    }

    /**
     * @param GetGroupsRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getGroups(GetGroupsRequest $request)
    {
        $groups = Group::all();

        return view('all-groups', ['groups' => $groups]);
    }

    public function deleteGroupByName(DeleteGroupByNameRequest $request)
    {
        $group = Group::where('name', '=', $request->name)->first();

        return $group->delete() ? redirect("/groups") : redirect('/');
    }
}
