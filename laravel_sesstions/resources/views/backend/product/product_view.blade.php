@extends('admin.admin_master')
@section('admin')

@section('title')
Product List
@endsection



    <link rel="stylesheet" type="text/css" href="{{asset('backend/app-assets/css/core/menu/menu-types/vertical-menu.cs')}}">
    


 
        <div class="main-menu-content">
 <!-- Add rows table -->
                <section id="add-row">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Product Manage</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                       
                                        <a href="{{route('product.store')}}" id="addRow" class="btn btn-success mb-2"><i class="feather icon-plus"></i>&nbsp; Add new Product</a>
                                        <div class="table-responsive">
                                            <table class="table add-rows">
                                                <thead>
                                                    <tr>
                                                        <th>Category Title</th>
                                                        <th>User Name</th>
                                                        <th>Product number</th>
                                                         <th>Product slug</th>
                                                        <th>Product title</th>
                                                         <th>Product description</th>
                                                        <th>Product order</th>
                                                         <th>Product status</th>
                                                         <th>Prodect price</th>
                                                        <th>The Currency</th>

                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
 @foreach($products as $pro)
                                                    <tr>
                                                         <th>{{$pro->category_id}}</th>
                                                        <th>{{$pro->user_id}}</th>
                                                        <th>{{$pro->unicode}}</th>
                                                         <th>{{$pro->slug}}</th>
                                                        <th>{{$pro->title}}</th>
                                                         <th>{{$pro->description}}</th>
                                                        <th>{{$pro->order}}</th>
                                                         <th>{{$pro->status}}</th>
                                                         <th>{{$pro->prc}}</th>
                                                        <th>{{$pro->cid}}</th>
                                                        <th>
  <a href="{{route('product.edit',$pro->id)}}" class="btn btn-primary" title="Edit Data"><i class="fa fa-pencil"></i> </a>

 <a href="{{route('product.delete')}}" class="btn btn-danger" title="Delete Data" id="delete"><i class="fa fa-trash"></i></a>

  

                                                        </th>
                                                    </tr>
    @endforeach

                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                     <th>Category Title</th>
                                                        <th>User Name</th>
                                                        <th>Product number</th>
                                                         <th>Product slug</th>
                                                        <th>Product title</th>
                                                         <th>Product description</th>
                                                        <th>Product order</th>
                                                         <th>Product status</th>
                                                         <th>Prodect price</th>
                                                        <th>The Currency</th>

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