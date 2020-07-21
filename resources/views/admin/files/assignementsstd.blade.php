@extends('layouts.stdapp')
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
                            <th class="text-danger">Deadline</th>
                            <th>Submitted At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd gradeX">
                            <td><a href="#">file name</a></td>
                            <td>Bryan Austin</td>
                            <td class="center">Senior 1</td>
                            <td class="center">19/07/2020</td>
                            <td class="center text-danger">19/07/2020</td>
                            <td class="center">19/07/2020</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>File</th>
                            <th>Teacher's name</th>
                            <th>Class</th>
                            <th>Uploaded At</th>
                            <th class="text-danger">Deadline</th>
                            <th>Submitted At</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="uploadassig mt-4">
                <form>
                    <div class="custom-file w-50">
                      <input type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</div>
@endsection