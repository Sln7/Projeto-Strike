<?php //

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreditRequest;
use App\Http\Requests\UserRequest;
use App\User;
use DB;

class UserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    function new () {
        return view('admin.users.store');
    }

    public function store(UserRequest $request)
    {
        $userData = $request->all();

        $request->validated();

        $userData['password'] = bcrypt($userData['password']);

        $user = new User();
        $user->create($userData);

        print 'Usuário criado com sucesso';
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(UserRequest $request, $id)
    {
        $userData = $request->all();

        $request->validated();

        if ($userData['password']) {
            $userData['password'] = bcrypt($userData['password']);
        }

        $user = User::findOrFail($id);
        $user->update($userData);

        print 'Usuário atualizado com sucesso';
    }

    public function credit(User $user)
    {
        return view('admin.users.credit', compact('user'));
    }
    public function credits(CreditRequest $request, $id)
    {
        $userData = $request->all();

        $request->validated();

        $a = $userData['credits'];
        $a += $userData['balance'];

        $userData['credits'] = $a;

        $user = User::findOrFail($id);
        $user->update($userData);
        print 'Crédito inserido com sucesso';
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        print 'Usuário removido com sucesso';
    }
}
