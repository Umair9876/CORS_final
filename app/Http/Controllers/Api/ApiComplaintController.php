<?php

namespace App\Http\Controllers\Api;

use App\Feedback;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Complaint;
use App\Category;

class ApiComplaintController extends Controller
{
    public function registerComplaint(Request $request)
    {
        try {
            $complaint = new Complaint();
            $complaint->subject = $request->subject;
            $complaint->details = $request->details;
            $complaint->area = $request->area;
            $complaint->address = $request->address;
            $complaint->contact = $request->contact;
            $complaint->user_id = $request->user_id;
            $complaint->save();
            return ['success' => true, 'message' => 'Complaint added successfully', 'complaint' => $complaint];
        } catch (\Exception $exception){
            return ['error' => $exception->getMessage()];
        }
    }

    public function getComplaints($user_id){
        return response()->json(Complaint::where('user_id', $user_id)->get());
    }

    public function addFeedback(Request $request){
        try {
            $feedback = new Feedback();
            $feedback->feedback = $request->feedback;
            $feedback->save();
            return ['success' => true, 'message' => 'Feedback added successfully', 'complaint' => $feedback];

        } catch (\Exception $exception){
            return ['error' => $exception->getMessage()];
        }
    }

    public function updateProfile(Request $request){
        try {
            $user = User::find($request->id);
            $user->name = $request->name;
            $user->save();
            return ['success' => true, 'message' => 'Profile Updated Successfully', 'user' => $user];

        } catch (\Exception $exception){
            return ['error' => $exception->getMessage()];
        }
    }
}
