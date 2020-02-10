<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function getMembers()
    {
        $members = Member::orderBy('member_id', 'asc')->get();

        return response()->json(compact('members'));
    }

    public function getMembersByGroup($id)
    {
        $members = Member::where('group_id', $id)->orderBy('member_id', 'asc')->get();

        return response()->json(compact('members'));
    }

    public function addNewMember(Request $request)
    {
        $member_name = $request->name;
        $member_surname = $request->surname;
        $member_email = $request->email;
        $group_id = $request->group;

        $member = new Member;

        $member->member_name = $member_name;
        $member->member_surname = $member_surname;
        $member->member_email = $member_email;
        $member->group_id = $group_id;

        $member->save();
    }

    public function editMember($id, Request $request)
    {
        $member = Member::find($id);

        $member_name = $request->name;
        $member_surname = $request->surname;
        $member_email = $request->email;
        $group_id = $request->group;

        $member->member_name = $member_name;
        $member->member_surname = $member_surname;
        $member->member_email = $member_email;
        $member->group_id = $group_id;

        $member->save();
    }

    public function deleteMember($id)
    {
        $member = Member::find($id);

        $member->delete();
    }
}
