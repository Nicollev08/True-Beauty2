<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::all();
        return view('user.crudopiniones.index', compact('comments'));
    }

    /* Método para mostrar formulario de creación */
    public function create()
    {
        return view('comments.create');
    }

    /* Método para almacenar un nuevo comentario */
    public function store(Request $request)
    {
        
        $comment=new Comment; 
        $comment->comment=$request->comment;
        $comment->rating=$request->rating;
        $comment->save();
        return redirect()->route('comments.index');

       
    }

    /* Método para mostrar un comentario específico */
    public function show($id)
    {
        $comment = Comment::findOrFail($id);
        return view('comments.show', compact('comment'));
    }

    /* Método para mostrar el formulario de edición */
    public function edit($id)
    {
        $comment = Comment::findOrFail($id);
        return view('user.crudopiniones.index', compact('comment'));
    }

    /* Método para actualizar un comentario */
    public function update(Request $request, $id)
    {
        $comment = Comment::findOrFail($id);
        $comment->comment=$request->input('comment'); 
        $comment->save();
        return redirect()->route('comments.index');
        
    }

    /* Método para eliminar un comentario */
    public function destroy($id)
{
    $comment = Comment::find($id);

    if (!$comment) {
        return redirect()->route('comments.index')->with('error', 'El comentario no se encontró o ya fue eliminado');
    }

    $comment->delete(); 

    return redirect()->route('comments.index')->with('success', 'Comentario eliminado con éxito');
}

}
