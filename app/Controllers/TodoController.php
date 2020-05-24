<?php


namespace App\Controllers;


use App\Models\Todo;
use Klein\ResponseCookie;

class TodoController
{
    function index() {

        $id = request()->cookies()->get('user');

        if ( empty($id) )
            $id = $this->generateUserId();

        $todos = Todo::find('all', [
            'conditions' => [ 'user_id=?', $id ]
        ]);

        usort($todos, function (Todo $a, Todo $b) {
            return ($b->id < $a->id) ? 1: -1;
        });

        return view('index', [
            'title' => config('app.name'),
            'todos' => Todo::find('all', [
                'conditions' => [ 'user_id=?', $id ]
            ])
        ]);

    }
    protected function generateUserId(){
        $id = md5(hexdec(uniqid()));
        $expire =365 * (24*3600);
        $cookie = new ResponseCookie("user", $id, $expire);
        response()->cookies()->set("user", $id);
        return $id;
    }

    function store(){
        $item = new Todo();
        $item->user_id = request()->cookies()->get("user");
        $item->done = false;
        $item->name = request()->param("name");
        $item->save();
        return response()->redirect("/");
    }
    function findOrFail($id){
        $todo = Todo::find_by_id($id);
        if(empty($todo)){
            response()->code(404)->send();
        }
        return $todo;
    }

    function delete(){
        $todo = $this->findOrFail(request()->param("id"));
        $todo->delete();

        return response()->redirect('/');
    }

    function update(){
        $todo = $this->findOrFail(request()->param("id"));
        $todo->name = request()->param("name");
        $todo->save();
        response()->redirect("/");
    }

    function toggle(){
        $todo = $this->findOrFail(request()->param("id"));
    if($todo->done = !$todo->done)
    {$todo->save();
    response()->redirect('/');
return true;}
    else{
return false;}
    }
}