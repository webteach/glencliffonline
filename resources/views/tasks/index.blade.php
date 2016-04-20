<!--resources/views/announcements/index.blade.php-->

@extends('layouts.app')

@section('content')

<div class="flex-container">
    <h1>Welcome to the teacher's area of Glencliff Online</h1>
    <p>Here you can post announcements to just your academy or the whole school.  Enter your announcement
    then select where you would like to publsh it.  Click post to publish your announcement.  Announcements 
    will remain posted until you delete them. Please make sure to delete your announcements after the event 
    has passed or once the announcement is no longer relevant. At this time, to update your announcement you
    must delete the old one and create a new one then post it.  We are working on an edit function.  We are
    also working on a repost function so that you can send your announcement back to the top of the list.</p>
</div>

  <div class="flex-container container">
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
                          <textarea name="name" id="task-name" class="form-control" rows="2" value="{{ old('task') }}"></textarea>
                        </div>
                      </div>
                      <!--Select Academy-->
                      <form action="task" method="POST" role="form">
                            <div class="radio flex-container">
                                 <label class="radio-inline"><input type="radio" name="optradio">School Wide</label>
                                 <label class="radio-inline"><input type="radio" name="optradio">Freshmen</label>
                                 <label class="radio-inline"><input type="radio" name="optradio">FABI</label>
                                 <label class="radio-inline"><input type="radio" name="optradio">EUP</label>
                                 <label class="radio-inline"><input type="radio" name="optradio">AMSR</label>
                            </div>
                      </form>
                      <!--Add Announcement Button-->
                      <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                          <button type="submit" class="btn btn-default">
                            <i class="fa fa-btn fa-plus"></i>Post
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
                                <td class="table-text"><div class="scroll">{{ $task->name }}</div></td>
                                
                                <!--Delete Button-->
                                <td>
                                  <form action="{{ url('task/'.$task->id) }}" method="POST">
                                    {!! csrf_field() !!}
                                    {!! method_field('DELETE') !!}
                                     <button type="submit" id="delete-task-{{ $task->id }}" class="btn btn-danger button">
                                      <i class="fa fa-btn fa-trash"></i>Delete Announcement
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

 <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

@endsection
