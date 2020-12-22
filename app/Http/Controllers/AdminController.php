<?php

namespace App\Http\Controllers;
use App\User;
use App\Screening;
use App\Feedback;
use App\Forum;
use Redirect;
use App\Comment;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $users = User::where('role','user')->get();
        $i = 1;

        return view('admin/index', compact('users','i'));

    }

    public function feedback(){

        $feedbacks = Feedback::all();
        $i = 1;

        return view('admin/feedback', compact('feedbacks','i'));

    }

    public function screening(){

        $screenings = Screening::all();
        $i = 1;

        return view('admin/screening', compact('screenings','i'));

    }

    public function forum(){
        $finalarray = array();
        $forums = Forum::all();
        $i = 1;

        foreach($forums as $data){

            $userdetails = User::where('id',$data->userId)->first();
            if($userdetails){
                $username = $userdetails->name;
            } else {
                $username = '-';
            }

            $userarray = [
                'id' => $data->id,
                'username' => $username,
                'title' => $data->title,
                'body' => $data->body,
            ];

            array_push($finalarray,$userarray);

        }

        return view('admin/forum', compact('finalarray','i'));

    }

    public function destroyforum($id){

        $forum = Forum::find($id);
        $forum->delete($forum->id);

        \Session::flash('flash_message_delete', 'successfully deleted.');
        return Redirect::route('adminforum');

    }

    public function detailforum($id){
        $forum = Forum::find($id);
        
        //this comment only belong for comment ID
    	$listcomment = Comment::where('forumId',$forum->id)->get();

        return view('/admin/detailforum', compact('forum','listcomment'));
    }

    public function destroycomment($id){
    	$comment = Comment::find($id);
        $comment->delete($comment->id);

        \Session::flash('flash_message_delete', 'successfully deleted.');
        return Redirect::back();

    }

    public function storecomment(Request $request){
    	$content = $request->input('content');
        $forumid = $request->input('forumid');

        $comment = new Comment;
        $comment->content = $content;
        //forumId : databse data
        //forumid : input
        $comment->forumId = $forumid;

        $id = $forumid;

        $comment->save();
        return Redirect::route('admindetailforum', compact('id'));

    }

}
