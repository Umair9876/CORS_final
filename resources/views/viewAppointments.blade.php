@extends('layout.master')

@section('content')
<!-- table admin start  -->
@hasrole("police")
<section id="cyber">
<div class="conatiner-fluid bco pb-5 ml-2 mr-2" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4 text-center h2change">
                <h2 class="font-heading" style="color: black;">POLICE APPOINTMENT TABLE</h2>
            </div>
        </div>
        <!-- row end -->

    </div>
    <!-- container end -->


    <!-- table pagination start -->
    <div class="container mb-5 mt-3 bg-light tablerad table-responsive">
        <br>
        <table id="policeappointment" class="display nowrap" style="width:100%;">
        <thead class="mt-4" >
            <tr class="text-center headtable text-white text-center" style="background-color:#140D44">
                <th>Name</th>
                <th>Email</th>
                <th>CNIC</th>
                <th>Phone No</th>
                <th>Subject</th>
                <th>Status</th>
            </tr>
            </thead>

            <tbody>
            @foreach ($appoints as $appoint)
            <tr class="text-center text-center">
           
            <td>{{$appoint->name}}</td>
                <td>{{$appoint->email}} </td>
                <td>{{$appoint->cnic}} </td>
                <td>{{$appoint->phoneno}} </td>
                <td>{{$appoint->statusofmeeting}} </td>
                
                <td>          @if($appoint->isAcceptLocation == 1)
                <button type= "button" style="background-color:#D8050E " class="btn text-white">Done</button>
                @else
                <!-- <button type= "button"  style="background-color:#140D44 " class="btn text-white">Accepted</button> -->
                <a href="{{url('/police/accept/location',$appoint->id)}}" class="btn text-white" style="background-color:#140D44 ">Accept</a>
                @endif
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- table pagination end -->
</div>
</section>
@endhasrole
<!-- table police end -->



<!-- police table start -->
<!-- table admin start  -->
@hasrole("admin")
<section id="cyber">
<div class="conatiner-fluid bco pb-5 ml-2 mr-2" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4 text-center h2change">
                <h2 class="font-heading" style="color: black;"> ADMIN APPOINTMENT TABLE </h2>
            </div>
        </div>
        <!-- row end -->

    </div>
    <!-- container end -->


    <!-- table pagination start -->
    <div class="container mb-5 mt-3 bg-light tablerad table-responsive">
        <br>
        <table id="adminappointment" class="display nowrap" style="width:100%;">
        <thead class="mt-4" >
            <tr class="text-center headtable text-white text-center" style="background-color:#140D44">
                <th>Name</th>
                <th>Email</th>
                <th>CNIC</th>
                <th>Phone No</th>
                <th>Status of meeting</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($appoints as $appoint)
            <tr class="text-center text-center">
            <td>{{$appoint->name}}</td>
                <td>{{$appoint->email}} </td>
                <td>{{$appoint->phoneno}} </td>
                <td>{{$appoint->statusofmeeting}} </td>
                <td>{{$appoint->meetingdetails}} </td>
                <!-- modal start -->
                <td class="text-center">
                <section><button type="button" data-name="{{$appoint->name}}" data-email="{{$appoint->email}}" class="btn btn-success btn-sm" data-toggle="modal"
                                data-target="#proModal-{{$appoint->id}}">
                                Proceed
                            </button>
                            <!-- The Modal -->
                            <div class="modal fade text-left" id="proModal-{{$appoint->id}}">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header text-white" style="background-color:#140D44">
                                            <h4 class="modal-title ">Admin Appointment Table Report</h4>
                                            <button type="button " class="close text-white" data-dismiss="modal">&times;</button>
                                        </div>
 
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <div class="card card-primary">

                            <!-- /.card-header -->
                            <!-- form start -->
                            
                            <form action="{{url('/updateappoint',$appoint->id)}}" method="POST">
                                 @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                    <input type="hidden" name="id" class="form-control" id="name" value="{{$appoint->id}}">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" id="name" value="{{$appoint->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone NO</label>
                                        <input type="number" class="form-control" id="phone" name="phoneno" value="{{$appoint->phoneno}}"
                                            placeholder="Enter Phone no">
                                    </div>
                                    <div class="form-group">
                                        <label for="cinc">CNIC</label>
                                        <input type="number" class="form-control" name="cnic" value="{{$appoint->cnic}}" id="cinc" placeholder="Enter CNIC">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" name="email" value="{{$appoint->email}}" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter email">
                                    </div>
                                   
                                    <div class="form-group">
                                        <label for="subject">Status of Incident</label>
                                        <input type="text" name="statusofmeeting" value="{{$appoint->statusofmeeting}}" class="form-control" id="subject"
                                            placeholder="subjectof incident">
                                    </div>
                                    <div class="form-group">
                                        <label for="msg">Meeting Details</label>
                                        <textarea name="meetingdetails"  id="msg" cols="30" rows="5" class="form-control">{{$appoint->meetingdetails}}</textarea>
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" name="form1" class="btn btn-success">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn text-white" style="background-color:#D8050E" data-dismiss="modal">Close</button>
                    </div>
</form>
                </div>
            </div>
        </div>
          <!-- model end final -->
<!-- End  -->
@endforeach
</tr>

              
            </tbody>
        </table>
    </div>
    <!-- table pagination end -->
</div>
</section>
@endhasrole
<!-- table admin end -->
<!-- police table end -->

@endsection
