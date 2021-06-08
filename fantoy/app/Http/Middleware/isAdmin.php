<?php
//middleware vai fazer alguma acao antes de entrar em determinada rota!
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isAdmin
{
    public function handle(Request $request, Closure $next)
    {   //true = 1 e false = 0
        if(Auth()->user()){
            if(Auth()->user()->isAdmin)
                return $next($request);
        }
        session()->flash('success', 'Usuário não  permissão!!'); 
        return redirect()->back();
    }
}
