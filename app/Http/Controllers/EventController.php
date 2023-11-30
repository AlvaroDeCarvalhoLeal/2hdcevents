<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//importando o modelo Event
use App\Models\Event;

class EventController extends Controller
{
    public function index(){
        //esta pegando todos os dados dentro da tabela Event dentro do Banco dados
        $events=Event::all();
        return view('welcome',['events'=>$events]);
    }

    public function create(){
        //events.create pois a view esta dentro da pasta events
        return view('events.create');
    }

    public function store(Request $request){
        //funcao para salvar os arquivos no banco de dados
        $event = new Event;
        //cada variavel eh a coluna dentro do banco de dados da tabela events
        $event->title = $request->title;
        $event->description = $request->description;
        $event->city = $request->city;
        $event->private = $request->private;


        //salvar imagem
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now") . "." . $extension);

            $requestImage->move(public_path('img/events'), $imageName);
            $event->image = $imageName;
        }
        //salva o objeto no banco de dados
        $event->save();

        return redirect('/')->with('msg','Evento criado com sucesso!');

    }

    public function show($id){
        $event = Event::findOrFail($id);

        return view('events.show', ['event' => $event]);
    
    }
}


