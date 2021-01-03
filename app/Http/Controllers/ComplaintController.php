<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Complaint;
use App\Category;

class ComplaintController extends Controller
{
    public function registerComplaintView()
    {
        $categories = Category::all();
        return view('complaintRegistrationView', compact('categories'));
    }

    public function registerComplaint(Request $request)
    {
         $complaint = new Complaint();
        $complaint->subject = $request->subject;
        $complaint->details = $request->details;
        $complaint->area = $request->area;
        $complaint->address = $request->address;
        $complaint->contact = $request->contact;
        $complaint->isAcceptLocation = 0;
        $complaint->save();
        return redirect()->back();
    }

    // public function 
}
