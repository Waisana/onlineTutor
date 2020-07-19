@extends('layouts.app')
@section('content')
<div class="col-md-9">
    <div class="content">
        <div class="module-head">
            <h3>Students Listing</h3>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="ml-4 mt-3">
                    <strong>Add new subject</strong>
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Subject: </label>
                            <input type="text" class="form-control form-control-sm" placeholder="Subject Name" id="subject-name">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-sm btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Add</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-8">
                <div class="module-body table">
                    <table cellpadding="0" cellspacing="0" class="datatable-1 table table-bordered table-striped display" width="100%">
                        <thead>
                            <tr>
                                <th>Subject</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd gradeX">
                                <td>Mathematics</td>
                                <td class="center">
                                    <i class="icon-edit edit-icon primary" data-toggle="modal" data-target="#department"></i> | 
                                    <i class="icon-trash trash-icon text-danger"></i>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>Chemistry</td>
                                <td class="center">
                                    <i class="icon-edit edit-icon primary" data-toggle="modal" data-target="#department"></i> | 
                                    <i class="icon-trash trash-icon text-danger"></i>
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>History</td>
                                <td class="center">
                                    <i class="icon-edit edit-icon primary" data-toggle="modal" data-target="#department"></i> | 
                                    <i class="icon-trash trash-icon text-danger"></i>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Subject</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection