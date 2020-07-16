@extends('layouts.app')
@section('content')
    <div class="span9">
        <div class="content">
            <div class="btn-controls">
                <div class="btn-box-row row-fluid">
                    <a href="#" class="btn-box big span4"><i class=" icon-random"></i><b>65%</b>
                        <p class="text-muted">
                            Growth</p>
                    </a><a href="#" class="btn-box big span4"><i class="icon-user"></i><b>15</b>
                        <p class="text-muted">
                            New Students</p>
                    </a><a href="#" class="btn-box big span4"><i class="icon-money"></i><b>15,152</b>
                        <p class="text-muted">
                            Total Students</p>
                    </a>
                </div>
                <div class="btn-box-row row-fluid">
                    <div class="span8">
                        <div class="row-fluid">
                            <div class="span12">
                                <a href="#" class="btn-box small span4"><i class="icon-envelope"></i><b>Notifications</b>
                                </a><a href="#" class="btn-box small span4"><i class="icon-group"></i><b>Teachers</b>
                                </a><a href="#" class="btn-box small span4"><i class="icon-exchange"></i><b>School Year</b>
                                </a>
                            </div>
                        </div>
                        <div class="row-fluid">
                            <div class="span12">
                                <a href="#" class="btn-box small span4"><i class="icon-save"></i><b>Departments</b>
                                </a><a href="#" class="btn-box small span4"><i class="icon-bullhorn"></i><b>Social Feed</b>
                                </a><a href="#" class="btn-box small span4"><i class="icon-sort-down"></i><b>Bounce
                                    Rate</b> </a>
                            </div>
                        </div>
                    </div>
                    <ul class="widget widget-usage unstyled span4">
                        <li>
                            <p>
                                <strong>2023</strong> <span class="pull-right small muted">78%</span>
                            </p>
                            <div class="progress tight">
                                <div class="bar" style="width: 78%;">
                                </div>
                            </div>
                        </li>
                        <li>
                            <p>
                                <strong>2022</strong> <span class="pull-right small muted">56%</span>
                            </p>
                            <div class="progress tight">
                                <div class="bar bar-success" style="width: 56%;">
                                </div>
                            </div>
                        </li>
                        <li>
                            <p>
                                <strong>2021</strong> <span class="pull-right small muted">44%</span>
                            </p>
                            <div class="progress tight">
                                <div class="bar bar-warning" style="width: 44%;">
                                </div>
                            </div>
                        </li>
                        <li>
                            <p>
                                <strong>2020</strong> <span class="pull-right small muted">67%</span>
                            </p>
                            <div class="progress tight">
                                <div class="bar bar-danger" style="width: 67%;">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--/#btn-controls-->
            <div class="module">
                <div class="module-head">
                    <h3>
                        Total Student Chart</h3>
                </div>
                <div class="module-body">
                    <div class="chart inline-legend grid">
                        <div id="placeholder2" class="graph" style="height: 500px">
                        </div>
                    </div>
                </div>
            </div>
            <!--/.module-->
            <div class="module hide">
                <div class="module-head">
                    <h3>
                        Adjust Budget Range</h3>
                </div>
                <div class="module-body">
                    <div class="form-inline clearfix">
                        <a href="#" class="btn pull-right">Update</a>
                        <label for="amount">
                            Price range:</label>
                        &nbsp;
                        <input type="text" id="amount" class="input-" />
                    </div>
                    <hr />
                    <div class="slider-range">
                    </div>
                </div>
            </div>
            <div class="module">
                <div class="module-head">
                    <h3>
                        DataTables</h3>
                </div>
                <div class="module-body table">
                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                        width="100%">
                        <thead>
                            <tr>
                                <th>
                                    Rendering engine
                                </th>
                                <th>
                                    Browser
                                </th>
                                <th>
                                    Platform(s)
                                </th>
                                <th>
                                    Engine version
                                </th>
                                <th>
                                    CSS grade
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd gradeX">
                                <td>
                                    Trident
                                </td>
                                <td>
                                    Internet Explorer 4.0
                                </td>
                                <td>
                                    Win 95+
                                </td>
                                <td class="center">
                                    4
                                </td>
                                <td class="center">
                                    X
                                </td>
                            </tr>
                            <tr class="even gradeC">
                                <td>
                                    Trident
                                </td>
                                <td>
                                    Internet Explorer 5.0
                                </td>
                                <td>
                                    Win 95+
                                </td>
                                <td class="center">
                                    5
                                </td>
                                <td class="center">
                                    C
                                </td>
                            </tr>
                            <tr class="odd gradeA">
                                <td>
                                    Trident
                                </td>
                                <td>
                                    Internet Explorer 5.5
                                </td>
                                <td>
                                    Win 95+
                                </td>
                                <td class="center">
                                    5.5
                                </td>
                                <td class="center">
                                    A
                                </td>
                            </tr>
                            <tr class="even gradeA">
                                <td>
                                    Trident
                                </td>
                                <td>
                                    Internet Explorer 6
                                </td>
                                <td>
                                    Win 98+
                                </td>
                                <td class="center">
                                    6
                                </td>
                                <td class="center">
                                    A
                                </td>
                            </tr>
                            <tr class="odd gradeA">
                                <td>
                                    Trident
                                </td>
                                <td>
                                    Internet Explorer 7
                                </td>
                                <td>
                                    Win XP SP2+
                                </td>
                                <td class="center">
                                    7
                                </td>
                                <td class="center">
                                    A
                                </td>
                            </tr>
                            <tr class="even gradeA">
                                <td>
                                    Trident
                                </td>
                                <td>
                                    AOL browser (AOL desktop)
                                </td>
                                <td>
                                    Win XP
                                </td>
                                <td class="center">
                                    6
                                </td>
                                <td class="center">
                                    A
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>
                                    Gecko
                                </td>
                                <td>
                                    Firefox 1.0
                                </td>
                                <td>
                                    Win 98+ / OSX.2+
                                </td>
                                <td class="center">
                                    1.7
                                </td>
                                <td class="center">
                                    A
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>
                                    Gecko
                                </td>
                                <td>
                                    Firefox 1.5
                                </td>
                                <td>
                                    Win 98+ / OSX.2+
                                </td>
                                <td class="center">
                                    1.8
                                </td>
                                <td class="center">
                                    A
                                </td>
                            </tr>
                            <tr class="gradeA">
                                <td>
                                    Gecko
                                </td>
                                <td>
                                    Firefox 2.0
                                </td>
                                <td>
                                    Win 98+ / OSX.2+
                                </td>
                                <td class="center">
                                    1.8
                                </td>
                                <td class="center">
                                    A
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>
                                    Rendering engine
                                </th>
                                <th>
                                    Browser
                                </th>
                                <th>
                                    Platform(s)
                                </th>
                                <th>
                                    Engine version
                                </th>
                                <th>
                                    CSS grade
                                </th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <!--/.module-->
        </div>
        <!--/.content-->
    </div>
    <!--/.span9-->
@endsection