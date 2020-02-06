<?php

namespace App\Http\Controllers;

use App\Groups;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function getGroups()
    {
        $groups = Groups::all();

        return response()->json(compact('groups')); 
    }
}
