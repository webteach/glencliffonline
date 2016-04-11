<?php

namespace App\Http\Controllers;

use App\Announcement;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\AnnouncementRepository;



class AnnouncementController extends Controller
{
    /**
     * Create a new controller instance.
     * 
     * @return void
     */
     public function __construct(AnnouncementRepository $announcements)
     {
         $this->middleware('auth');
         
         $this->announcements = $announcements;
     }
     
     /**
      * Display a list of all of the user's announcements.
      * 
      * @param Request $request
      * @return Response
      */
      public function index(Request $request)
      {
          $announcements = Announcement::where('user_id', $request->user()->id)->get();
          
          return view('announcements.index', [
              'announcements' => $this->announcements->forUser($request->user()),
              ]);
      }
      
      /**
       * Create a new announcement.
       * 
       * @param Request $request
       * @return Response
       */
       public function store(Request $request)
       {
           $this->validate($request, [
               'teacher_name' => 'required|max:255',
               'academy_name' => 'required|max:255',
               'announce' => 'required',
               ]);
              
            $request->user()->announcements()->create([
                'teacher_name' => $request->teacher_name,
                ]);
                
                return redirect('/announcements');
       }
       
       public function destroy(Request $request, Announcement $announcements)
       {
           $this->authorize('destroy', $announcements);
           
           $announcements->delete();
           
           return redirect('/announcements');
       }
}
