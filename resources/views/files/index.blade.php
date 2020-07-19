@extends('layouts.app')
@section('content')
<div class="col-md-9">
    <div class="content">
        <div class="module-head">
            <h3>Files Listing</h3>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="ml-4 mt-3">
                    <strong>Filter Data</strong>
                    <form>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">class: </label>
                            <select class="form-control form-control-sm" id="recipient-name">
                                <option value="S.1" selected>S.1</option>
                                <option value="S.2">S.2</option>
                                <option value="S.3">S.3</option>
                                <option value="S.4">S.4</option>
                                <option value="S.5">S.5</option>
                                <option value="S.6">S.6</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Year: </label>
                            <input class="form-control form-control-sm month" type="month" value="2018-11" id="example-month-input">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-sm btn-primary btn-block">Generate list</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-8">
                <div class="module-body table">
                    <table cellpadding="0" cellspacing="0" class="datatable-1 table table-striped display" width="100%">
                        <thead>
                            <tr>
                                <th>File Name</th>
                                <th>Subject</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd gradeX">
                                <td><a href="#">Mathematics-20-10</a></td>
                                <td class="center">
                                    Mathematics
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td><a href="#">Mathematics-20-10</a></td>
                                <td class="center">
                                    Mathematics
                                </td>
                            </tr>
                            <tr class="odd gradeX">
                                <td><a href="#">Mathematics-20-10</a></td>
                                <td class="center">
                                    Mathematics
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Subject</th>
                                <th>Subject</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection