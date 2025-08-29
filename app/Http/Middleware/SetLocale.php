<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       // Verificar se foi passado um idioma na URL
        if ($request->has('lang')) {
            $locale = $request->get('lang');
            if (in_array($locale, ['pt', 'en'])) {
                Session::put('locale', $locale);
            }
        }

        // Definir o idioma da sessão ou padrão
        $locale = Session::get('locale', config('app.locale'));
        App::setLocale($locale);

        return $next($request);
    }
    
}
