@extends('layouts.app')
@section('content')
<div class="col-md-9">
    <div class="content">
        <div class="ml-4">
            <div class="module-head">
                <button class="btn btn-sm btn-primary float-right" style="margin-top: -5px;" data-toggle="modal" data-target="#class">
                    <i class="icon-plus shaded" style="color: white"></i> Add Class
                </button>
                <h3>Classes</h3>
            </div>
            <div class="module-body table">
                <table cellpadding="0" cellspacing="0" class="datatable-1 table table-bordered table-striped display" width="100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Students</th>
                            <th>Subjects</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd gradeX">
                            <td>Senior two</td>
                            <td>670</td>
                            <td>math, physics, biology, chemistry</td>
                            <td class="center">
                                <i class="icon-edit edit-icon primary" data-toggle="modal" data-target="#class"></i> | 
                                <i class="icon-trash trash-icon text-danger"></i>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>Senior three</td>
                            <td>670</td>
                            <td>math, physics, biology, chemistry</td>
                            <td class="center">
                                <i class="icon-edit edit-icon primary" data-toggle="modal" data-target="#class"></i> | 
                                <i class="icon-trash trash-icon text-danger"></i>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>Senior four</td>
                            <td>670</td>
                            <td>math, physics, biology, chemistry</td>
                            <td class="center">
                                <i class="icon-edit edit-icon primary" data-toggle="modal" data-target="#class"></i> | 
                                <i class="icon-trash trash-icon text-danger"></i>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Students</th>
                            <th>Subjects</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection