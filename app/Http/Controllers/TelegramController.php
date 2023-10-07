<?php

namespace App\Http\Controllers;

use App\Models\TelegramUser;
use Illuminate\Http\Request;

class TelegramController extends Controller
{
    public function callbackConnectionUser(Request $request)
    {
        $telegram = TelegramUser::where('chat_id', $request->get('id'))->first();

        if($telegram){
            return redirect()->route('dashboard')->with('error',"Esse telegram já está cadastrado para o usuário de email: {$telegram->user->email}"); 
        }

        auth()->user()->telegram()->create([
            'chat_id' => $request->get('id'),
            'first_name' => $request->get('first_name'),
            'username' => $request->get('username'),
            'auth_date' => $request->get('auth_date'),
            'hash' => $request->get('hash'),
        ]);

        return redirect()->route('dashboard')->with('success','Telegram conectado corretamente!');
    }
}
