@extends('layouts.app')
@section('content')
<div class="col-md-9">
    <div class="content">
        <div class="ml-4">
            <div class="module-head">
                <h3>Students Assignments</h3>
            </div>
            <div class="module-body table">
                <table cellpadding="0" cellspacing="0" class="datatable-1 table table-bordered table-striped display" width="100%">
                    <thead>
                        <tr>
                            <th>File</th>
                            <th>Teacher's name</th>
                            <th>Class</th>
                            <th>Uploaded At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd gradeX">
                            <td><a href="#">file name</a></td>
                            <td>Bryan Austin</td>
                            <td class="center">Senior 1</td>
                            <td class="center">19/07/2020</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>File</th>
                            <th>Teacher's name</th>
                            <th>Class</th>
                            <th>Uploaded At</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection