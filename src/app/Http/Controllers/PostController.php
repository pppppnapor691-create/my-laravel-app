<?php

namespace App\Http\Controllers;

use App\Models\Cybersport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class PostController extends Controller
{

    public function index(){
        $posts = Cybersport::all();
        return view('post.index',compact('posts'));
    }
    public function create(){
        return view('post.create');
    }
    public function store(){
        $data = request()->validate([
            'name' => 'string',
            'elo_cs' => 'integer',
            'length_of_service_years' => 'integer',
        ]);
        Cybersport::create($data);
        return redirect()->route('post.index');
    }

    public function show(Cybersport $cyber){
        dd($cyber->elo_cs);
    }
}
