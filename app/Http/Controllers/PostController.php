<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allPosts = Post::all();
       // dump($allPosts);verifica che veda tutti -ok li vede!
      
       return view('posts.index', compact('allPosts'));

    }

    /**
     * Show the form for creating a new resource.
     * Mostra un form vuoto che permtte di popolare il nostro modello.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     * Riceve i dati dal form DOPO il Submit e 
     * e salva l ' oggetto nel database 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //dump e die = dd ovvero fa il dump e chiude il processo
      //             vediamo cosa è  $request

      // dd($request); <- QUESTO 

      // e vediamo che Request è esattamente il modello e quindi
      //l' oggetto che rappresenta TUTTI gli elementi che definiscono
      // la chiamata http  
      // ========== ORA FACCIAMO DAVVERO STORE, COME?=========
      // -recupero i dati con request 
      // -creo l oggetto dal modello Post
      // -popolo i parametri con i dati della request (ovvero il form)
      // - li salvo !! 

      $data = $request->all(); //la funzione all ritorna  tutti i valori del form in un array associativo

      $post = new Post;
      $post->title = $data['title'];   
      $post->content = $data['content']; 
      $post->img = $data['img']; 
      $post->save();  

      //dd('funziona sta roba qui sopra?');SI!!!
      
      return redirect()->rout('posts.show', )

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     // dump($id);
     $allPosts = Post::find($id);
      //dump($allPosts);
      
      return view('posts.show', compact('allPosts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
