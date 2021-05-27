@extends('layout.master')
@section('content')
<!-- table admin start  -->
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
<!-- table police end -->




<!-- Admmin Table Start -->

<section id="cyber">
<div class="conatiner-fluid bco pb-5 ml-2 mr-2" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4 text-center h2change">
                <h2 class="font-heading" style="color: black;">ADMIN FIRST INVESTIGATION REPORT</h2>
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
            @foreach ($firs as $fir)
            <tr class="text-center text-center">
            <td>{{$fir->name}}</td>
                <td>{{$fir->email}} </td>
                <td>{{$fir->cnic}} </td>
                <td>{{$fir->phoneno}} </td>
                <td>{{$fir->subjectofincident}} </td>
                <!-- modal start -->
                <td class="text-center">
                <section><button type="button" data-name="{{$fir->name}}" data-email="{{$fir->email}}" id="uma" class="btn btn-success btn-sm" data-toggle="modal"
                                data-target="#proModal">
                                Proceed
                            </button>
                            <!-- The Modal -->
                            <div class="modal fade text-left" id="proModal">
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
                                                <form action="{{route('register-fir')}}" method="POST">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="name float-left">Name</label>
                                                            <input  type="text"  class="form-control" id="name"
                                                                value="{{$fir->name.$fir->id}}">
                                                                
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="phone">Phone No</label>
                                                            <input  type="number" class="form-control"
                                                                id="phone" value="{{$fir->phoneno}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="cinc">CNIC</label>
                                                            <input  type="number" class="form-control" id="cinc"
                                                            value="{{$fir->cnic}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Email address</label>
                                                            <input  type="email" class="form-control"
                                                                id="exampleInputEmail1" value="{{$fir->email}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="subject">Address</label>
                                                            <input  type="text" class="form-control"
                                                                id="subject" value="{{$fir->address}}">
                                                        </div> 
                                                         
                                                        <div class="form-group">
                                                            <label for="status">PLace of Incident</label>
                                                            <input type="text" class="form-control" id="v"
                                                            value="{{$fir->placeofincident}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="msg"> Data/Time of Incident </label>
                                                            <input type="text" class="form-control" id="v"
                                                            value="{{$fir->date}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="subject">Subject of Incident</label>
                                                            <input  type="text" class="form-control"
                                                                id="subject" value="{{$fir->subjectofincident}}">
                                                        </div>
                                                      

                                                        <div class="form-group">
                                                            <label for="appointment">Detail of Incident</label>
                                                            <input type="text" class="form-control" id="v"
                                                            value="{{$fir->detailofincident}}"  >
                                                        </div>

                                                    </div>
                                                    <!-- /.card-body -->
                                                   

                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-success">Confirm
                                                            Proceed</button>
                                                    </div>
                                                </form>
                                                
                                            </div>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button type="button"  class="btn text-white" style="background-color:#D8050E"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </section></td>
            <!-- modal end -->
            </tr>
            </tbody>
        </table>
    </div>
    <!-- table pagination end -->
</div>
</section>
<!-- Admin Table End -->

<script>$('#uma').('on', 'click', function(){
   let data = $(this).dataset;
   console.log("hi");

   $('#name').val(data.name);
   $('#exampleInputEmail1').val(data.email); //here modal-name and modal-email are ids of input fields of that modal

})</script>



@endsection