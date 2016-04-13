<!--resources/views/announcements/index.blade.php-->

@extends('layouts.app')

@section('content')


  <div class="container">
      <div class="col-sm-offset-2 col-sm-8">
          <div class="panel panel-default">
              <div class="panel-heading">
               Create New Announcement
                 <div class="panel-body">
                 <!--Display Validation Errors-->
                 @include('common.errors')
                 </div>    
                   <!--New Announcement Form-->
                   <form action="/task" method="POST" class="form-horizontal">
                   {!! csrf_field() !!}
        
                   <!--Announcement Name-->
                      <div class="form-group">
                        <label for="task-name" class="col-sm-3 control-label">Announcement</label>
            
                        <div class="col-sm-6">
                          <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
                        </div>
                      </div>
        
                      <!--Add Announcement Button-->
                      <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                          <button type="submit" class="btn btn-default">
                            <i class="fa fa-btn fa-plus"></i>Add Announcement
                          </button>
                        </div>
                      </div>
                   </form>
                </div>
              </div>

              <!--Current Announcements-->

              @if (count($tasks) > 0)
               <div class="panel panel-default">
                 <div class="panel-heading">
                   Current Announcements
                 </div>

                 <div class="panel-body">
                   <table class="table table-striped task-table">
                     <thead>
                        <th>Announcment</th>
                        <th>&nbsp;</th>
                     </thead>
                     <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <td class="table-text"><div>{{ $task->name }}</div></td>
                                
                                <!--Delete Button-->
                                <td>
                                  <form action="{{ url('task/'.$task->id) }}" method="POST">
                                    {!! csrf_field() !!}
                                    {!! method_field('DELETE') !!}
                                    
                                    <button type="submit" id="delete-task-{{ $task->id }}" class="btn btn-danger">
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
    </div>
</div>


@endsection
