<?php

namespace App\Http\Controllers;

use App\Mail\EnvioEmail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    
        public function enviar()
        {
            $dados = [
                'nome' => 'Pedro',
                'mensagem' => 'Este é um teste de envio de e-mail!'
            ];

            Mail::to('alexedroxxxi@email.com')
                ->send(new EnvioEmail($dados));

            return "Email enviado com sucesso!";
        }
}