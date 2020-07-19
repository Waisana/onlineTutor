@extends('layouts.app')
@section('content')
<div class="col-md-9">
    <div class="content">
        <div class="ml-4">
            <div class="module-head">
                <h3>Teacher's Listing</h3>
            </div>
            <div class="module-body table">
                <table cellpadding="0" cellspacing="0" class="datatable-1 table table-bordered table-striped	 display"
                    width="100%">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Department</th>
                            <th>status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd gradeX">
                            <td><img src="{{ asset('images/user.png')}}" width="40" alt="teacher Image" class="img-thumbnail"></td>
                            <td>Bryan Austin</td>
                            <td><I class="txt-small">bryanovicaustenove@gmail.com</I></td>
                            <td class="center">0781098283</td>
                            <td class="center">Chemistry</td>
                            <td class="center">
                                <button class="btn btn-small btn-primary">Activate</button>
                            </td>
                            <td class="center">
                                <i class="icon-edit edit-icon primary" data-toggle="modal" data-target="#department"></i> | 
                                <i class="icon-trash trash-icon text-danger"></i>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Department</th>
                            <th>status</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection