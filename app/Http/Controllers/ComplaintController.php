<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Complaint;
use App\Category;
use App\Fir;
use App\Cybercrime;
use App\Antibullying;
use App\Appointment;
use App\Registerpolice;
use App\User;


class ComplaintController extends Controller
{
    public function registerComplaintView()
    {
        $categories = Category::all();
        return view('complaintRegistrationView', compact('categories'));
    }

    public function registerComplaint(Request $request)
    {
        
            //handle form1
         $complaint = new Complaint();
        $complaint->subject = $request->subject;
        $complaint->details = $request->details;
        $complaint->area = $request->area;
        $complaint->address = $request->address;
        $complaint->contact = $request->contact;
// image work
        $file = $request->file('filename');
        // $slug = SlugService::createSlug(Complaint::class, 'slug', $request->filename);
        $file_path = 'uploads/'.'Complaints'.'/';
        if(isset($file))
        {
    $file_name = $file->getClientOriginalName();

    //File::makeDirectory($file_path, $mode = 0777, true, true);

    $file->move($file_path, $file_name);

    $complaint->filename = $file_name;
            }
        $complaint->isAcceptLocation = 0;
        $user=auth()->user();
        $user->complaints()->save($complaint);
        $complaint->save();
        return redirect()->back();
        

    }
    public function registerFir(Request $request)
    {
   
            //handle form1
         $fir = new Fir();
        $fir->name = $request->name;
        $fir->phoneno = $request->phoneno;
        $fir->cnic = $request->cnic;
        $fir->email = $request->email;
        $fir->address = $request->address;
        $fir->placeofincident = $request->placeofincident;
        $fir->date = $request->date;
        $fir->subjectofincident = $request->subjectofincident;
        $fir->detailofincident = $request->detailofincident;
        $fir->isAcceptLocation = 0;
        $user=auth()->user();
        $user->firs()->save($fir);
        $fir->save();
        return redirect()->back();
        
    }

    public function updateFir(Request $request){


        // $page=PagesDescription::find($request->page_id);
        $fir = Fir::find($request->id);
        $fir->name = $request->input('name');
        $fir->phoneno = $request->input('phoneno');
        $fir->cnic = $request->input('cnic');
        $fir->email = $request->input('email');
        $fir->address = $request->input('address');
        $fir->placeofincident = $request->input('placeofincident');
        $fir->date = $request->input('date');
        $fir->subjectofincident = $request->input('subjectofincident');
        $fir->detailofincident = $request->input('detailofincident');
        $fir->isAcceptLocation = 0;
        $fir->save();
        return redirect()->back();
    }
    // public function 

    public function registerCyber(Request $request)
    {
      
            //handle form1
         $cyber = new Cybercrime();
        $cyber->name = $request->name;
        $cyber->phoneno = $request->phoneno;
        $cyber->cnic = $request->cnic;
        $cyber->email = $request->email;
        $cyber->address = $request->address;
        $cyber->date = $request->date;
        $cyber->subjectofcrime = $request->subjectofcrime;
        $cyber->detailofcrime = $request->detailofcrime;
        $cyber->isAcceptLocation = 0;
        $user=auth()->user();
        $user->cybercrimes()->save($cyber);
        $cyber->save();
        return redirect()->back();
        
    }


    public function updateCyber(Request $request){


        // $page=PagesDescription::find($request->page_id);
        $fir = Cybercrime::find($request->id);
        $fir->name = $request->input('name');
        $fir->phoneno = $request->input('phoneno');
        $fir->cnic = $request->input('cnic');
        $fir->email = $request->input('email');
        $fir->address = $request->input('address');
        $fir->date = $request->input('date');
        $fir->subjectofcrime = $request->input('subjectofcrime');
        $fir->detailofcrime = $request->input('detailofcrime');
        $fir->isAcceptLocation = 0;
        $fir->save();
        return redirect()->back();
    }

    public function registerAnti(Request $request)
    {
        
            //handle form1
         $anti = new Antibullying();
        $anti->name = $request->name;
        $anti->phoneno = $request->phoneno;
        $anti->cnic = $request->cnic;
        $anti->email = $request->email;
        $anti->address = $request->address;
        $anti->place = $request->place;
        $anti->date = $request->date;
        $anti->statusofincident = $request->statusofincident;
        $anti->detailofincident = $request->detailofincident;
        $anti->isAcceptLocation = 0;
        $user=auth()->user();
        $user->bullyings()->save($anti);
        $anti->save();
        return redirect()->back();
        
    }

    public function updateBullying(Request $request){


        // $page=PagesDescription::find($request->page_id);
        $fir = Antibullying::find($request->id);
        $fir->name = $request->input('name');
        $fir->phoneno = $request->input('phoneno');
        $fir->cnic = $request->input('cnic');
        $fir->email = $request->input('email');
        $fir->address = $request->input('address');
        $fir->place = $request->input('place');
        $fir->date = $request->input('date');
        $fir->statusofincident = $request->input('statusofincident');
        $fir->detailofincident = $request->input('detailofincident');
        $fir->isAcceptLocation = 0;
        $fir->save();
        return redirect()->back();
    }


    public function registerAppointment(Request $request)
    {
       
            //handle form1
         $appointment = new Appointment();
        $appointment->name = $request->name;
        $appointment->phoneno = $request->phoneno;
        $appointment->cnic = $request->cnic;
        $appointment->email = $request->email;
        $appointment->statusofmeeting = $request->statusofmeeting;
        $appointment->meetingdetails= $request->meetingdetails;
        $appointment->isAcceptLocation = 0;
        $user=auth()->user();
        $user->appointments()->save($appointment);
        $appointment->save();
        return redirect()->back();
        }

        public function updateAppoint(Request $request){


            // $page=PagesDescription::find($request->page_id);
            $fir = Appointment::find($request->id);
            $fir->name = $request->input('name');
            $fir->phoneno = $request->input('phoneno');
            $fir->cnic = $request->input('cnic');
            $fir->email = $request->input('email');
            $fir->statusofmeeting = $request->input('statusofmeeting');
            $fir->meetingdetails= $request->input('meetingdetails');
            $fir->isAcceptLocation = 0;
            $fir->save();
            return redirect()->back();
        }
    

        public function policeregComplaint(Request $request)
    {
        // dd($request);
            //handle form1
         $police = new User();
        $police->name = $request->name;
        $police->phoneno = $request->phoneno;
        $police->cnic = $request->cnic;
        $police->email = $request->email;
        $police->address = $request->address;
        $police->rank = $request->rank;
        $police->batchno = $request->batchno;
        $police->dateofjoining = $request->dateofjoining;
        $police->date = $request->date;
        $police->password = bcrypt('password');
        $police->assignrole('police');
        $police->save();
        return redirect()->back();
        
    }

    // $police = new Registerpolice();
    // $police->name = $request->name;
    // $police->phoneno = $request->phoneno;
    // $police->cnic = $request->cnic;
    // $police->email = $request->email;
    // $police->address = $request->address;
    // $police->rank = $request->rank;
    // $police->batchno = $request->batchno;
    // $police->dateofjoining = $request->dateofjoining;
    // $police->date = $request->date;
    // $police->save();
    // return redirect()->back();



}
