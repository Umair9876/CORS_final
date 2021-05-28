@extends('layout.master')

@section('content')
<!-- table police start -->
@hasrole("police")
<section id="cyber">
<div class="conatiner-fluid bco pb-5 ml-2 mr-2" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4 text-center h2change">
                <h2 class="font-heading" style="color: black;">POLICE EMERGENCY COMPLAINT</h2>
            </div>
        </div>
        <!-- row end -->
    </div>
    <!-- container end -->
    <!-- table pagination start -->
    <div class="container mb-5 mt-3 bg-light tablerad table-responsive">
        <br>
        <table id="example" class="display nowrap" style="width:100%;">
        <thead class="mt-4" >
            <tr class="text-center headtable text-white text-center" style="background-color:#140D44">
                <th>Subject</th>
                <th>Area</th>
                <th>Address</th>
                <th>Contact No</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($complaints as $complaint)
            <tr class="text-center text-center">

            <td>{{$complaint->subject}}</td>
                <td>{{$complaint->area}} </td>
                <td>{{$complaint->address}} </td>
                <td>{{$complaint->contact}}</td>
                <td>         
                 @if($complaint->isAcceptLocation == 1)
                <button type= "button" style="background-color:#D8050E " class="btn text-white">Done</button>
                @else
                <a href="{{url('/police/accept/emergency',$complaint->id)}}" class="btn text-white" 
                style="background-color:#140D44 ">Accept</a>
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
<!-- table police end end -->




@endsection