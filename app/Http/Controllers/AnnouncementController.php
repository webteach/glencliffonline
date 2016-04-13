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
     * The announcement repository instance;
     * 
     * @var AnnouncementRepository
     */
     protected $announcements;
     
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
               'name' => 'required|max:255',
               ]);
              
            $request->user()->announcements()->create([
                'name' => $request->name,
                ]);
                
                return redirect('/announcements');
       }

       
       public function destroy(Request $request, Announcement $announcement)
       {
           $this->authorize('destroy', $announcement);
           
           $announcement->delete();
           
           return redirect('/announcements');
       }
}
