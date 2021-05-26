<?php
use App\Registerpolice;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegpoliceController extends Controller
{
    public function policeregComplaint(Request $request)
    {
        
            //handle form1
         $police = new Registerpolice();
        $police->name = $request->name;
        $police->phoneno = $request->phoneno;
        $police->cnic = $request->cnic;
        $police->email = $request->email;
        $police->address = $request->address;
        $police->subjectofincident = $request->subjectofincident;
        $police->rank = $request->rank;
        $police->batchno = $request->batchno;
        $police->dateofjoining = $request->dateofjoining;
        $police->date = $request->date;
        $police->isAcceptLocation = 0;
        $police->save();
        return redirect()->back();
        
    }
}
