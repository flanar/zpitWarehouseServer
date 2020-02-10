<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function getGroups()
    {
        $groups = Group::orderBy('group_id', 'asc')->get();

        return response()->json(compact('groups')); 
    }
}
