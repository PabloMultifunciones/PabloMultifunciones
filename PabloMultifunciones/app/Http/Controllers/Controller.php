<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        return view('welcome');
    }

    public function send(Request $request){
        $nombre = $request->input("nombre");
        $email = $request->input("email");
        $asunto = $request->input("asunto");
        $subject = "Posible Cliente - PabloMultifunciones";
        $for = "pablo_pages@live.com";
        Mail::send('email',["nombre" => $nombre,"email" => $email, "asunto" => $asunto], function($msj) use($subject,$for){
            $msj->from("pablopagesreal@gmail.com","PabloMultifunciones");
            $msj->subject($subject);
            $msj->to($for);
        });
    }
}
