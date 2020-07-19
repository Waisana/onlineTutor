@extends('layouts.app')
@section('content')
<div class="col-md-9">
    <div class="content">
        <div class="ml-4">
            <div class="module-head">
                <h3>User Logs</h3>
            </div>
            <div class="module-body table">
                <table cellpadding="0" cellspacing="0" class="datatable-1 table table-bordered display" width="100%">
                    <thead>
                        <tr>
                            <th>Login date</th>
                            <th>Logout date</th>
                            <th>User Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd gradeX">
                            <td class="center">19/07/2020</td>
                            <td class="center">19/07/2020</td>
                            <td>Bryan Austin</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Login date</th>
                            <th>Logout date</th>
                            <th>User Name</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection