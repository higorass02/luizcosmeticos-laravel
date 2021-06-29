<?php

namespace App\Http\Controllers\Admin;

use App\Categorias;
use App\Product;
use Carbon\Carbon;
use http\Client\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ProductController extends BaseController
{
    private $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $products = $this->product->paginate(10);

        return view('admin.products.index',compact('products'));

    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $categorias = Categorias::all();
        //return view('admin.products.create',compact('stores'));
        return view('admin.products.create',compact('categorias'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(\Illuminate\Http\Request $request)
    {
        $data = $request->request->all();
        $files = $request->files->all();

        $new_prod= new Product();
        $new_prod->name = $data['name'];
        $new_prod->description = $data['desc'];
        $new_prod->price = $data['preco'];
        $new_prod->estrelas = $data['estrelas'];
        $new_prod->categories()->sync($data['categorias']);
        var_dump($new_prod);
        exit();

        if($request->file('photo')->isValid()){
            //$request->file('photo')->store('products');
            $nameFile = 'file_'.Carbon::now()->format('d_m_Y_(h-i-s)').'_'.$request->photo->getClientOriginalName();
            $request->file('photo')->storeAs('products',$nameFile);
        }
//        dd($files);
        exit();
//        $data = $request->all();
//
//        $store = Store::find($data['store']);
//
//        $new_prod= new Store();
//        $new_prod->name = $data['name'];
//        $new_prod->description = $data['description'];
//        $new_prod->body = $data['body'];
//        $new_prod->price = $data['price'];
//        $new_prod->slug = $data['slug'];
//
//        $store = $store->product()->save($new_prod);
//
//        flash('Produto Criado com Sucesso')->success();
//        return redirect()->route('admin.products.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorias = Categorias::find($id);

        return view('admin.products.edit',compact('categorias'));
    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $dataFile = $request->file();

        $new_prod= Product::find($id);

        $new_prod->name = $data['name'];
        $new_prod->description = $data['desc'];
        $new_prod->price = $data['price'];
        $new_prod->slug = $data['slug'];

        $retorno = $user->categoria()->save($new_store);

        $store = $store->product()->save($new_prod);

        flash('Produto Alterado com Sucesso')->success();
        return redirect()->route('admin.produtos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
