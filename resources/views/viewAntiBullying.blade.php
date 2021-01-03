@extends('layout.master')

@section('content')
<!-- Police Anti Bulying Table Start -->
<section id="cyber">
<div class="conatiner-fluid bco pb-5 ml-2 mr-2" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4 text-center h2change">
                <h2 class="font-heading" style="color: black;">POLICE ANTI-BULLYING REPORT</h2>
            </div>
        </div>
        <!-- row end -->

    </div>
    <!-- container end -->


    <!-- table pagination start -->
    <div class="container mb-5 mt-3 bg-light tablerad table-responsive">
        <br>
        <table id="policeantibullying" class="display nowrap" style="width:100%;">
        <thead class="mt-4" >
            <tr class="text-center headtable text-white text-center" style="background-color:#140D44">
                <th>Name</th>
                <th>Subject</th>
                <th>Phone No</th>
                <th>Place of Incident</th>
                <th>Status</th>
            </tr>
            </thead>

            <tbody>
            <tr>

                <td  class="text-center ">Abdul Rafay</td>
                <td  class="text-center ">Student Harrasment</td>
                <td  class="text-center ">0300-12345678 </td>
                <td  class="text-center ">Wah Cantt</td>
                 <!-- modal start -->
                 <td class="text-center">
                <section><button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                                data-target="#rModal">
                                Proceed
                            </button>
                            <!-- The Modal -->
                            <div class="modal fade text-left" id="rModal">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header text-white" style="background-color:#140D44">
                                            <h4 class="modal-title ">ANTI-BULLYING</h4>
                                            <button type="button " class="close text-white" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <div class="card card-primary">

                                                <!-- /.card-header -->
                                                <!-- form start -->
                                                <form role="form">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="name float-left">Name</label>
                                                            <input disabled  type="text" class="form-control" id="name"
                                                                placeholder="Enter Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="phone">Phone No</label>
                                                            <input disabled type="number" class="form-control"
                                                                id="phone" placeholder="Enter Phone no">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="cinc">CNIC</label>
                                                            <input disabled type="number" class="form-control" id="cinc"
                                                                placeholder="Enter CNIC">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Email address</label>
                                                            <input disabled type="email" class="form-control"
                                                                id="exampleInputEmail1" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="subject">Address</label>
                                                            <input disabled type="text" class="form-control"
                                                                id="subject" placeholder="Address">
                                                        </div> 
                                                         <div class="form-group">
                                                            <label for="subject">Subject of Crime</label>
                                                            <input disabled type="text" class="form-control"
                                                                id="subject" placeholder="Subject of incident">
                                                        </div> 
                                                        <div class="form-group">
                                                            <label for="subject">Place of Incident</label>
                                                            <input disabled type="text" class="form-control"
                                                                id="subject" placeholder="Place of incident">
                                                        </div> 
                                                        <div class="form-group">
                                                            <label for="subject">Status of Incident</label>
                                                            <input disabled type="text" class="form-control"
                                                                id="subject" placeholder="Place of incident">
                                                        </div> 
                                                       
                                                        <div class="form-group">
                                                            <label for="msg"> Data/Time of Crime </label>
                                                            <input disabled type="text" class="form-control" id="v"
                                                                placeholder="Date/Time">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="msg">Incident Details</label>
                                                            <textarea disabled name="" id="msg" cols="30" rows="5"
                                                                class="form-control"></textarea>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="appointment">Meeting Time</label>
                                                            <input disabled type="datetime-local" class="form-control" id="v"
                                                                placeholder="appointment">
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
<!-- Police Anti Bulyyying Table End  -->


<!-- Admin Anti Bullying Table Startt -->
<section id="cyber">
<div class="conatiner-fluid bco pb-5 ml-2 mr-2" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4 text-center h2change">
                <h2 class="font-heading" style="color: black;">ADMIN ANTI-BULLYING REPORT</h2>
            </div>
        </div>
        <!-- row end -->

    </div>
    <!-- container end -->


    <!-- table pagination start -->
    <div class="container mb-5 mt-3 bg-light tablerad table-responsive">
        <br>
        <table id="adminantibullying" class="display nowrap" style="width:100%;">
        <thead class="mt-4" >
            <tr class="text-center headtable text-white text-center" style="background-color:#140D44">
                <th>Name</th>
                <th>Subject</th>
                <th>Phone No</th>
                <th>Place of Incident</th>
                <th>Status</th>
            </tr>
            </thead>

            <tbody>
            <tr>

                <td  class="text-center ">Abdul Rafay</td>
                <td  class="text-center ">Student Harrasment</td>
                <td  class="text-center ">0300-12345678 </td>
                <td  class="text-center ">Wah Cantt</td>
                 <!-- modal start -->
                 <td class="text-center">
                <section><button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                                data-target="#prModal">
                                Proceed
                            </button>
                            <!-- The Modal -->
                            <div class="modal fade text-left" id="prModal">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header text-white" style="background-color:#140D44">
                                            <h4 class="modal-title ">ANTI-BULLYING</h4>
                                            <button type="button " class="close text-white" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <div class="card card-primary">

                                                <!-- /.card-header -->
                                                <!-- form start -->
                                                <form role="form">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="name float-left">Name</label>
                                                            <input  type="text" class="form-control" id="name"
                                                                placeholder="Enter Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="phone">Phone No</label>
                                                            <input type="number" class="form-control"
                                                                id="phone" placeholder="Enter Phone no">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="cinc">CNIC</label>
                                                            <input type="number" class="form-control" id="cinc"
                                                                placeholder="Enter CNIC">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Email address</label>
                                                            <input type="email" class="form-control"
                                                                id="exampleInputEmail1" placeholder="Enter email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="subject">Address</label>
                                                            <input type="text" class="form-control"
                                                                id="subject" placeholder="Address">
                                                        </div> 
                                                         <div class="form-group">
                                                            <label for="subject">Subject of Crime</label>
                                                            <input type="text" class="form-control"
                                                                id="subject" placeholder="Subject of incident">
                                                        </div> 
                                                        <div class="form-group">
                                                            <label for="subject">Place of Incident</label>
                                                            <input type="text" class="form-control"
                                                                id="subject" placeholder="Place of incident">
                                                        </div> 
                                                        <div class="form-group">
                                                            <label for="subject">Status of Incident</label>
                                                            <input type="text" class="form-control"
                                                                id="subject" placeholder="Place of incident">
                                                        </div> 
                                                       
                                                        <div class="form-group">
                                                            <label for="msg"> Data/Time of Crime </label>
                                                            <input type="text" class="form-control" id="v"
                                                                placeholder="Date/Time">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="msg">Incident Details</label>
                                                            <textarea name="" id="msg" cols="30" rows="5"
                                                                class="form-control"></textarea>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="appointment">Meeting Time</label>
                                                            <input type="datetime-local" class="form-control" id="v"
                                                                placeholder="appointment">
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

<!-- Admin Anti Bullying Table end  -->

@endsection