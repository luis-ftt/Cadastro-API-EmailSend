<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loginView(){
        return view('loginView');
    }
    public function registerView(){
        return view('loginView');
    }

    public function loginForm(request $Request){
        $Request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required|min:5'
        ], [
            'email.email' => 'Email Inválido!',
            'email.required' => 'Coloque um email',
            'password.required' => 'Coloque uma senha',
            'password.min' => 'Tamanho mínimo de 5 caracteres'
        ]);

        $user = User::where('email', $Request->email)->first();

        if(!$user){
            return redirect()->route('loginView')->with('error', 'Email não existente')->withInput(['email' => $Request->email]);
        }

        $credentials = $Request->only('email', 'password');

        if(Auth::attempt($credentials)){
            return redirect()->route('crudPanel')->with('success', 'Logado!');
        }

        return redirect()->route('loginView')->with('error', 'Erro na tentativa de login');
    }

    public function registerForm(Request $request){
        $request->validate([
            'name' => 'required|min:4',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'password' => 'required|min:5|confirmed',
        ]);

        $user = User::create([
            'email' => $request->email, 
            'password' => $request->password,
            'name' => $request->name,
        ]);

        Auth::login($user);
        return redirect()->route('crudPanel');

    }

    public function logout(){
        Auth::logout();
        return redirect()->route('loginView');
    }
    



    public function crudPanel(Request $request){
        $user = Auth::check();
        $dados = Auth::user();


        $search = $request->input('search');

        $usuarios = User::when($search, function($query, $search){
            return $query->where('name', 'like', "%{$search}%");
        })->paginate(2);

        if(!$user){
            return redirect()->route('loginView')->with('error', 'Erro na tentativa de login');
        }

        return view('crudPanel', ['dados' => $dados, 'usuarios' => $usuarios, 'search' => $search]);
    }

    public function filterEmails(Request $request){
        $domain = $request->query('domain');
        $usuarios = User::where('email', 'like', "%{$domain}%")->get();
        return response()->json($usuarios);
    }

    public function crudExcluir(Request $request){
        $user = Auth::user();

        if(!$user){
            return redirect()->route('loginView')->with('error', 'você precisa estar logado');
        }

        $userToDelete = User::find($request->id);

        if(!$userToDelete){
            return redirect()->back()->with('error', 'Usuário não encontrado.');
        }
        if($request->id == $user->id){
            return redirect()->back()->with('error', 'Você não pode se excluir.');
        }
        $userToDelete->delete();
        return redirect()->back()->with('success', 'Usuário deletado com sucesso.');
    }
    public function crudEditar(Request $request){
        $user = Auth::user();
        if(!$user){
            return redirect()->route('loginView')->with('error', 'Usuário não encontrado');
        }
        
        $dados = User::find($request->id);

        if(!$dados){
            return redirect()->back()->with('error', 'Usuário para edição não encontrado.');
        }
        return view('crudEditPanel', ['usuarios' => $dados]);
    }

    public function crudEditPost(Request $request){
        $request->validate([
            'name' => 'required|min:4',
            'email' => 'required|email:rfc,dns'
        ]);
        $user = User::find("$request->id");
        
        $user->Update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->route('crudPanel');
    }
    
}
