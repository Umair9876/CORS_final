@extends('layout.master')
@section('content')
<!-- table admin start  -->
@hasrole("police")
<section id="cyber">
<div class="conatiner-fluid bco pb-5 ml-2 mr-2" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4 text-center h2change">
                <h2 class="font-heading" style="color: black;">POLICR FIRST INVESTIGATION REPORT</h2>
            </div>
        </div>
        <!-- row end -->

    </div>
    <!-- container end -->
    
    <!-- table pagination start -->
    <div class="container mb-5 mt-3 bg-light tablerad table-responsive">
        <br>
        <table id="policefir" class="display nowrap" style="width:100%;">
        <thead class="mt-4" >
            <tr class="text-center headtable text-white text-center" style="background-color:#140D44">
                <th>Name</th>
                <th>CNIC</th>
                <th>Subject</th>
                <th>Place of Incident</th>
                <th>Data/Time of Incident</th>
                <th>Status</th>
            </tr>
            </thead>

            <tbody>
            @foreach ($firs as $fir)
            <tr class="text-center text-center">

            <td>{{$fir->name}}</td>
                <td>{{$fir->email}} </td>
                <td>{{$fir->cnic}} </td>
                <td>{{$fir->phoneno}} </td>
                <td>{{$fir->subjectofincident}} </td>
                <td>          @if($fir->isAcceptLocation == 1)
                <button type= "button" style="background-color:#D8050E " class="btn text-white">Done</button>
                @else
                <!-- <button type= "button"  style="background-color:#140D44 " class="btn text-white">Accepted</button> -->
                <a href="{{url('/police/accept/fir',$fir->id)}}" class="btn text-white" style="background-color:#140D44 ">Accept</a>
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




<!-- Admmin Table Start -->
@hasrole("admin")

<section id="cyber">
<div class="conatiner-fluid bco pb-5 ml-2 mr-2" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4 text-center h2change">
                <h2 class="font-heading" style="color: black;">ADMIN FIRST INVESTIGATION Table Report</h2>
            </div>
        </div>
        <!-- row end -->

    </div>
    <!-- container end -->


    <!-- table pagination start -->
    <div class="container mb-5 mt-3 bg-light tablerad table-responsive">
        <br>
        <table id="adminfir" class="display nowrap" style="width:100%;">
        <thead class="mt-4" >
            <tr class="text-center headtable text-white text-center" style="background-color:#140D44">
                <th>Name</th>
                <th>CNIC</th>
                <th>Subject</th>
                <th>Place of Incident</th>
                <th>Data/Time of Incident</th>
                <th>Status</th>
            </tr>
            </thead>

            <tbody>

<!-- New insert -->
            @foreach ($adminfirs as $adminfir)
            <tr class="text-center text-center">
            <td>{{$adminfir->name}}</td>
                <td>{{$adminfir->email}} </td>
                <td>{{$adminfir->cnic}} </td>
                <td>{{$adminfir->phoneno}} </td>
                <td>{{$adminfir->subjectofincident}} </td>
                <!-- modal start -->
                <td class="text-center">
                <section><button type="button" data-name="{{$adminfir->name}}" data-email="{{$adminfir->email}}" class="btn btn-success btn-sm" data-toggle="modal"
                                data-target="#proModal-{{$adminfir->id}}">
                                Proceed
                            </button>
                            <!-- The Modal -->
                            <div class="modal fade text-left" id="proModal-{{$adminfir->id}}">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header text-white" style="background-color:#140D44">
                                            <h4 class="modal-title ">FIRST INVESTIGATION REPORT</h4>
                                            <button type="button " class="close text-white" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <div class="card card-primary">

                            <!-- /.card-header -->
                            <!-- form start -->

                            <form action="{{url('/updatefir',$adminfir->id)}}" method="POST">
                                 @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                    <input type="hidden" name="id" class="form-control" id="name" value="{{$adminfir->id}}">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" id="name" value="{{$adminfir->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone NO</label>
                                        <input type="number" class="form-control" id="phone" name="phoneno" value="{{$adminfir->phoneno}}"
                                            placeholder="Enter Phone no">
                                    </div>
                                    <div class="form-group">
                                        <label for="cinc">CNIC</label>
                                        <input type="number" class="form-control" name="cnic" value="{{$adminfir->cnic}}" id="cinc" placeholder="Enter CNIC">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" name="email" value="{{$adminfir->email}}" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="address" name="address" value="{{$adminfir->address}}" class="form-control" id="address1" placeholder="Address">
                                    </div>
                                    <div class="form-group">
                                        <label for="placeofinci">Place of Incident</label>
                                        <input type="text" class="form-control" name="placeofincident" value="{{$adminfir->placeofincident}}" id="placeofinci"
                                            placeholder="Place of incident">
                                    </div>
                                    <div class="form-group">
                                        <label for="dateofinci">Date/Time of Incident</label>
                                        <input type="datetime-local" name="date" value="{{$adminfir->date}}" class="form-control" id="dateofinci"
                                            placeholder="Date/Time of incident">
                                    </div>
                                    <div class="form-group">
                                        <label for="subject">Subject of Incident</label>
                                        <input type="text" name="subjectofincident" value="{{$adminfir->subjectofincident}}" class="form-control" id="subject"
                                            placeholder="subjectof incident">
                                    </div>
                                    <div class="form-group">
                                        <label for="msg">Detail of Incident</label>
                                        <textarea name="detailofincident"  id="msg" cols="30" rows="5" class="form-control">{{$adminfir->detailofincident}}</textarea>
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
<!-- Admin Table End -->

@endsection
