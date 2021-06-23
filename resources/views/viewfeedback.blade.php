@extends('layout.master')

@section('content')
<!-- table police start -->
<section id="cyber">
<div class="conatiner-fluid bco pb-5 ml-2 mr-2" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4 text-center h2change">
                <h2 class="font-heading" style="color: black;">Feedback</h2>
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
                <th>Query</th>
                
            </tr>
            </thead>
            <tbody>
            @foreach ($feedbacks as $feedback)
            <tr class="text-center text-center">
            <td> 
            <textarea name="" id="" cols="100" rows="1">{{$feedback->feedback}}</textarea>
            </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <!-- table pagination end -->
</div>
</section>
<!-- table police end end -->




@endsection