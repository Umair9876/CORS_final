<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Complaint;
use App\Category;

class ApiComplaintController extends Controller
{
    public function registerComplaintView()
    {
        $categories = Category::all();
        return view('complaintRegistrationView', compact('categories'));
    }

    public function registerComplaint(Request $request)
    {
        try {
            $complaint = new Complaint();
            $complaint->subject = $request->subject;
            $complaint->details = $request->details;
            $complaint->area = $request->area;
            $complaint->address = $request->address;
            $complaint->contact = $request->contact;
            $complaint->save();
            return ['success' => true, 'message' => 'Complaint added successfully', 'complaint' => $complaint];
        } catch (\Exception $exception){
            return ['error' => $exception->getMessage()];
        }

    }
}
