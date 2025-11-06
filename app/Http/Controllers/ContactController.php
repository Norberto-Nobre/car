<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $dados = $request->validate([
            'topic' => 'required|string',
            'nome' => 'required|string',
            'email' => 'required|email',
            'contacto' => 'required|string',
            'mensagem' => 'required|string',
        ]);

        $conteudo = "
        <h2>Novo contato recebido:</h2>
        <p><strong>Assunto:</strong> {$dados['topic']}</p>
        <p><strong>Nome:</strong> {$dados['nome']}</p>
        <p><strong>Email:</strong> {$dados['email']}</p>
        <p><strong>Contacto:</strong> {$dados['contacto']}</p>
        <p><strong>Mensagem:</strong> {$dados['mensagem']}</p>
        ";

        // Envia para o email da empresa
        Mail::send('email.contact', ['dados' => $dados], function ($message) use ($dados) {
        $message->to(env('MAIL_FROM_ADDRESS'))
            ->subject('📬 Novo contacto - ' . $dados['topic']);
    });

        return back()->with('success', 'Mensagem enviada com sucesso! Obrigado por nos contactar.');
    }
}
