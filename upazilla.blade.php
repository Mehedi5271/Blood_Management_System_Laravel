

@extends('admin.layout.master')
@section('content')
    
<div class="container-fluid">


    <!-- content for donor html file -->
    <div class="request_area">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="box-title">All Upazilla</h4>
                        <a href="{{route('division.create')}}" class="btn btn-info btn-sm"><i class="fa "></i>Add Upazilla</a>
                    </div>
                    <div class="card-body">
                        <div class="table-stats order-table ov-h">
                            <table class="table table-hover display" id="MyTable">
                                <thead>
                                    <tr>
                                        <th class="serial">#</th>
                                        
                                        <th>Upazilla Name</th>
                                        <th>District Name</th>
                                        <th>Division Name</th>
                                      
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="serial">1</td>
                                       
                                        <td>Ullapara</td>
                                        <td>Sirajganj</td>
                                        <td>Rajshahi</td>
                                        <td>
                                       
                                            <a href="donor-details.html" class="btn btn-success btn-sm">Delete</a>
                                        </td>
                                    </tr>

                                

                                </tbody>
                            </table>
                        </div> <!-- /.table-stats -->
                    </div>
                    <div class="card-footer">
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .request_area end -->



</div> <!-- .container-fluid end -->
		

     



  
@endsection



