@extends('admin.admin_master')
@section('admin')

@section('title')
User List
@endsection



    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/core/menu/menu-types/vertical-menu.cs')}}">
    


 
        <div class="main-menu-content">
 <!-- Add rows table -->
                <section id="add-row">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> User</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                       
                                        <a href="{{route('user.register')}}" id="addRow" class="btn btn-success mb-2"><i class="feather icon-plus"></i>&nbsp; Add new User</a>
                                        <div class="table-responsive">
                                            <table class="table add-rows">
                                                <thead>

                                                    <tr>
                                                        
                                                        <th>User Name</th>
                                                        <th>User Email</th>
                                                         <th>Phone</th>
                                                        <th>Status</th>
                                                         <th>Create at</th>

                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
 @foreach($users as $user)
                                                    <tr>


                                                          <th>{{$user->name}}</th>
                                                        <th>{{$user->email}}</th>
                                                         <th>{{$user->phone}}</th>
                                                        <th>{{$user->status}}</th>
                                                         <th>{{$user->create_at}}</th>

                                                        <th>Action</th>
                                                               

                                                        
                                                        <th>
  <a href="" class="btn btn-primary" title="Edit Data"><i class="fa fa-pencil"></i> </a>

 <a href="" class="btn btn-danger" title="Delete Data" id="delete"><i class="fa fa-trash"></i></a>

  

                                                        </th>
                                                    </tr>
  @endforeach

                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                    <th>User Name</th>
                                                        <th>User Email</th>
                                                         <th>Phone</th>
                                                        <th>Status</th>
                                                         <th>Create at</th>

                                                        <th>Action</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> 
                 </div>
                <!--/ Add rows table -->




    <!-- BEGIN Vendor JS-->
  <script src="{{asset('backend/app-assets/vendors/js/vendors.min.js')}}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('backend/app-assets/vendors/js/extensions/dropzone.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/tables/datatable/dataTables.select.min.js')}}"></script>
    <script src="{{asset('backend/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js')}}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('backend/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{asset('backend/app-assets/js/core/app.js')}}"></script>
    <script src="{{asset('backend/app-assets/js/scripts/components.js')}}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('backend/app-assets/js/scripts/ui/data-list-view.js')}}"></script>


@endsection