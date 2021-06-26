<?php

namespace App\Http\Controllers\Admin;

use App\Categorias;
use App\Product;
use App\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class CategoriaController extends BaseController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $categorias = Categorias::paginate(10);
        return view('admin.categorias.index',[
            'categorias'=>$categorias
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.categorias.create');
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
        $data = $request->all();
        /** @var User $user */
        $user = auth()->user();

        $new_store= new Categorias();
        $new_store->name = $data['name'];
        $new_store->description = $data['desc'];
        $new_store->slug = $data['slug'];

        $retorno = $user->categoria()->save($new_store);

        flash('Categoria Salva com Sucesso')->success();
        return redirect()->route('admin.categorias.index');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $users = User::query()->get();
        $categoria = Categorias::find($id);
        return view('admin.categorias.edit',compact('categoria','users'));
    }

    /**
     * @param Request $request
     * @param int $categoria
     * @return mixed
     */
    public function update(Request $request,int $categoria)
    {
        $data = $request->all();

        $categoria = Categorias::find($categoria);
        $categoria->name = $data['name'];
        $categoria->description = $data['desc'];
        $categoria->slug = $data['slug'];
        $categoria->update();

        flash('Categoria Atualizada com Sucesso')->success();
        return redirect()->route('admin.categorias.index');
    }

    /**
     * @param $categoria
     * @return mixed
     */
    public function destroy($categoria)
    {
        $categoriaD = Categorias::find($categoria);
        $categoriaD->delete();
        flash('Categoria Deletada com Sucesso')->success();
        return redirect()->route('admin.categorias.index');
    }
}
