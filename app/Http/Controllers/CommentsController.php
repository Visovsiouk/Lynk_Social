<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
class CommentsController extends Controller
{
    //

    public function index($id) {
        //get post by id
        $post = DB::table('posts')->where('id',$id)->first();

        //fetch all post replies where post id is $id and comment_parent_id is null
        $replies = DB::table('comments')

         ->join('users','comments.user_id','=','users.id')

         ->select('comments.*','users.username','users.avatar')

         ->where(['post_id'=>$id,'comment_parent_id'=>null])

         ->orderBy('id','DESC')
         
         ->paginate(10);

        return view('replies')->with(['post'=>$post,'replies'=>$replies]);
    }


    public function create(Request $request) {
        $this->validator($request);
        $user_id = Auth::user()->id;

        DB::table('comments')->insert([
            'user_id' => $user_id,
            'post_id' => $request->post_id,
            'comment' => $request->comment
        ]);

        return back();
    }

    public function validator($request) {
        $this->validate($request,[
            'comment' => 'required',
            'post_id' => 'required'

        ]);
    }
}
