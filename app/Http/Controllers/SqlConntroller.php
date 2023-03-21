<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SqlConntroller extends Controller
{
    //  left join
    public function allUsersPostL()
    {

        // $data = User::value('id');
        $data = DB::select("SELECT users.id, users.name, posts.id as postId, posts.post, comments.id as commentId, comments.comment FROM `users`
        LEFT JOIN posts ON users.id = posts.user_id
        LEFT JOIN comments ON posts.id = comments.post_id");
              return $data;
     }

    // right join
    public function allUsersPostR()
    {
        $data = DB::select("SELECT users.id, users.name, posts.id as postId, posts.post, comments.id as commentId, comments.comment FROM `users`
        RIGHT JOIN posts ON users.id = posts.user_id
        RIGHT JOIN comments ON posts.id = comments.post_id ORDER BY users.id ASC");
        return $data;
    }


    public function authUserPost()
    {
        $id = Auth::id();
        $data = DB::select("SELECT users.id, users.name, posts.id as postId, posts.post, comments.id as commentId, comments.comment FROM `users`
         JOIN posts ON users.id = posts.user_id
         JOIN comments ON posts.id = comments.post_id WHERE users.id = $id");
         return $data;
    }


    // innner join
    public function getPostComm()
    {
        $data = DB::select("SELECT posts.id as postId, posts.post, comments.id as commId, comments.comment  FROM `posts` INNER JOIN comments ON posts.id = comments.post_id  ORDER BY posts.id ASC");
         return $data;
    }


    public function studentCount(){
        $data = DB::select("SELECT COUNT(id) FROM `students` WHERE name = 'john'");
        return $data;
    }

    public function classSec()
    {
       $data = DB::select("SELECT class.name AS class_name, section.name as section_name
       FROM student_classes class, student_classes section
       WHERE class.name = '1st' AND section.id = class.student_class_id ");
       return $data;
    }

    public function del($id){
        return $id;
    }
}
