<?php

namespace App\Http\Controllers;
use App\User;
use App\Forum;
use App\Comment;
use Redirect;
use Illuminate\Http\Request;

class ForumController extends Controller
{

    public function getinfo() {

  $username = session()->get('username');
  $password = session()->get('password');
  $role = session()->get('role');

  $user = User::all()->where('username', $username)
   ->where('password', $password)
   ->first();
  return $user;
    }

    public function addforum(){

        $user = $this->getinfo();

        return view('forum/addforum', compact('user'));
    }

    public function listforum(){
    	$forum = forum::orderBy('created_at','DESC')->get();
    	$i=1;
        $userinfo = $this->getinfo();

        return view('/forum/listforum', compact('forum','i','userinfo'));


    }

    public function detailforum($id){
    	$forum = Forum::find($id);
        
        //this comment only belong for comment ID
    	$listcomment = Comment::where('forumId',$forum->id)->get();
        return view('/forum/detailforum', compact('forum','listcomment'));
    }

    public function store(Request $request){

        $user = $this->getinfo();
        
        $title = $request->input('title');
        $body = $request->input('body');
        $userid = $request->input('userid');

        $forum = new Forum;
        $forum->title = $title;
        $forum->body = $body;
        $forum->userid = $userid;

        $forum->save();

        \Session::flash('flash_message', 'successfully added.');
        return Redirect::route('listforum', compact('user'));


    }

      public function edit($id){

        $user = $this->getinfo();

        $detailforum = Forum::find($id);

        return view('/forum/editforum', compact('detailforum'));


    }

    public function destroy($id){
        
        //find : for example Select * from forum where ID= id @ eloquent find id 
        $forum = Forum::find($id);
        $forum->delete($forum->id);
        
        //return view : terus ke page
        //return redirect : ex redirect addforum,so dia akan ke route addforum
        \Session::flash('flash_message_delete', 'successfully deleted.');
        return Redirect::route('listforum');

    }


 public function update(Request $request,$id){

        $title = $request->input('title');
        $body = $request->input('body');

        $forum = Forum::find($id);

        $forum->title = $title;
        $forum->body = $body;

        $forum->save();

        \Session::flash('flash_message', 'successfully updated.');
        return Redirect::route('detailforum', compact('id'));


    }
}
