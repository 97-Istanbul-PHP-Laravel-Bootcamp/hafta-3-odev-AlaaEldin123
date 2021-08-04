@extends('admin.admin_master')
@section('admin')

@section('title')
Add New Category
@endsection

<div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add New Category</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                    <form class="form form-horizontal" method="post" action="{{route('category.create')}}">
                        @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Category Title</span>
                                                            </div>
                <div class="col-md-8">
                    <div class="position-relative has-icon-left">
                        <input type="text" id="fname-icon" class="form-control" name="title" placeholder="Category Title">
                        <div class="form-control-position">
                            <i class="feather icon-user"></i>
                        </div>
                    </div>
                </div>
                                                        </div>
                                                    </div>
                                                  
                                                    <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Category Description</span>
                                                            </div>
        <div class="col-md-8">
                    <div class="position-relative has-icon-left">
                        <input type="text" id="contact-icon" class="form-control" name="description" placeholder="Category Description">
                        <div class="form-control-position">
                            <i class="feather icon-smartphone"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                                      
                                             <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Category Slug</span>
                                                            </div>
        <div class="col-md-8">
                    <div class="position-relative has-icon-left">
                        <input type="text" id="contact-icon" class="form-control" name="slug" placeholder="Category Slug">
                        <div class="form-control-position">
                            <i class="feather icon-smartphone"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

               <div class="col-12">
                                                        <div class="form-group row">
                                                            <div class="col-md-4">
                                                                <span>Category Status</span>
                                                            </div>
        <div class="col-md-8">
                    <div class="position-relative has-icon-left">
                        <input type="text" id="contact-icon" class="form-control" name="status" placeholder="Category Status">
                        <div class="form-control-position">
                            <i class="feather icon-smartphone"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


                                                   
                                                    <div class="col-md-8 offset-md-4">
                                                        <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>



@endsection