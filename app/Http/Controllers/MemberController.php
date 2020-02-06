<?php

namespace App\Http\Controllers;

use App\Members;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function getMembers()
    {
        $members = Members::all();

        return response()->json(compact('members'));
    }

    public function getMembersByGroup($id)
    {
        $members = Members::where('group_id', $id)->get();

        return response()->json(compact('members'));
    }
}
