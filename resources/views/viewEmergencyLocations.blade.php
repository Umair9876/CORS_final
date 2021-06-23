@extends('layout.master')

@section('content')
<style>

  #btn-change:hover{
    
    color:red;

  }
}


</style>
<!-- table police start -->

@if(Auth::user()->hasRole('police') or Auth::user()->hasRole('admin'))
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
                <th>Image</th>
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
                
                <!-- <td>{{$complaint->filename}}</td> -->
                 
                 <td>
                 <a  class="modal-view"  id="btn-change" data-toggle="modal" data-target="#myModal-{{$complaint->id}}"> 
                 <i  class="fa fa-eye">
                 </i>
                  </a>
                

                <div id="myModal-{{$complaint->id}}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        
      </div>
      <div class="modal-body">
      <img id="myImg" class="primary-image clearfix"
          src="{{ asset('uploads/Complaints/'. $complaint->filename) }}" 
            alt="epmloyee" width="100px" class="img-circle" style="height: 450px; width: 350px;"/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
               </td>
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
@endif
<!-- table police end end -->


 

<script>
// Get the modal
var modal = document.getElementById("myModal");
// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
// var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>


@endsection