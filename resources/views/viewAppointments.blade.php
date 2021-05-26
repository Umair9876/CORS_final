@extends('layout.master')

@section('content')
<!-- table admin start  -->
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
            @foreach ($firs as $fir)
            <tr class="text-center text-center">
           
            <td>{{$fir->name}}</td>
                <td>{{$fir->email}} </td>
                <td>{{$fir->cnic}} </td>
                <td>{{$fir->phoneno}} </td>
                <td>{{$fir->statusofmeeting}} </td>
                
                <td>          @if($fir->isAcceptLocation == 1)
                <button type= "button" style="background-color:#D8050E " class="btn text-white">Done</button>
                @else
                <!-- <button type= "button"  style="background-color:#140D44 " class="btn text-white">Accepted</button> -->
                <a href="{{url('/police/accept/location',$fir->id)}}" class="btn text-white" style="background-color:#140D44 ">Accept</a>
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



<!-- police table start -->
<!-- table admin start  -->
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
                <th>Subject</th>
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
                <td>{{$fir->statusofmeeting}} </td>
                
                <td>        
                 @if($fir->isAcceptLocation == 1)
                <button type= "button" style="background-color:#D8050E " class="btn text-white">Done</button>
                @else
                <!-- <button type= "button"  style="background-color:#140D44 " class="btn text-white">Accepted</button> -->
                <a href="{{url('/police/accept/location',$fir->id)}}" class="btn text-white" style="background-color:#140D44 ">Accept</a>
                @endif
                </td>
                </tr>
                @endforeach
            <tbody>
            <tr>

            </tbody>
        </table>
    </div>
    <!-- table pagination end -->
</div>
</section>
<!-- table admin end -->
<!-- police table end -->

@endsection
