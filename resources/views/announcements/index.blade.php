<!--resources/views/announcements/index.blade.php-->

@extends('layouts.app')

@section('content')

<!--Boostrap Boilerplate...-->

<div class="panel-body">
    <!--Display Validation Errors-->
    @include('common.errors')
    
    <!--New Announcement Form-->
    <form action="{{ url('announcement') }}" method="POST" class="form-horizontal">
        {!! csrf_field() !!}
        
        <!--Input Announcement-->
        <div class="form-group">
            <label for="teacher_name" class="col-sm-3 control-label">Teacher Name</label>
            
            <div class="col-sm-6">
                <input type="text" name="teacher_name" id="teacher_name" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="academy_name" class="col-sm-3 control-label">Academy Name</label>
            
            <div class="col-sm-6">
                <input type="text" name="academy_name" id="academy_name" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="announce" class="col-sm-3 control-label">Announcement</label>
            
            <div class="col-sm-6">
                <input type="text" name="announce" id="announce" class="form-control">
            </div>
        </div>
        
        <!--Add Announcement Button-->
        <div class="form-group">
            <button type="submit" class="btn btn-default">
                <i class="fa fa-plus"></i>Add Announcement
            </button>
        </div>
    </form>
</div>

@if (count($announcements) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Announcements
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Announcement</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($announcements as $announcement)
                            <tr>
                                <!-- Announcement Name -->
                                <td class="table-text">
                                    <div>{{ $announcement->name }}</div>
                                </td>

                                    <td>
        <form action="{{ url('announcement/'.$announcement->id) }}" method="POST">
            {!! csrf_field() !!}
            {!! method_field('DELETE') !!}

            <button type="submit" id="delete-announcement-{{ $announcement->id }}" class="btn btn-danger">
                <i class="fa fa-btn fa-trash"></i>Delete
            </button>
        </form>
    </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection
