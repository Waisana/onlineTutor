@extends('layouts.app')
@section('content')
<div class="col-md-9">
    <div class="content">
        <div class="ml-4">
            <div class="module-head">
                <h3>Teachers Account Managment</h3>
            </div>
            <div class="module-body table">
                <table cellpadding="0" cellspacing="0" class="datatable-1 table table-striped display" width="100%">
                    <thead>
                        <tr>
                            <th>Std Image</th>
                            <th>Name</th>
                            <th>Department</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd gradeX">
                            <td><img src="{{ asset('images/user.png')}}" width="40" alt="teacher Image" class="img-thumbnail"></td>
                            <td class="font-12">Bryan Austin</td>
                            <td class="center">Mathematics</td>
                            <td class="center">
                                <a href="#" class="font-12">password</a> | 
                                <i class="icon-trash trash-icon text-danger"></i>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Std Image</th>
                            <th>Name</th>
                            <th>Class</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection