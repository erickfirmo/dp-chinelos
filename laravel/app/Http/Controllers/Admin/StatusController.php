<?php

namespace App\Http\Controllers\Admin;


use App\Status;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {
        $status = Status::orderBy('id', 'desc')->paginate(10);
        return view('admin.status.index',['status' => $status]);

    }

    public function create()
    {
        return view('admin.status.create');

    }


    public function store(Request $request) 
    {
        $this->validate($request, [
            'status' => 'required|unique:status'
        ]);

        $status = new Status;
        $status->nome = $request->nome;
        $status->save();

        return redirect()->route('admin.status.index')
            ->with('success', "Status criado com sucesso !");

    }

    public function show($id)
    {
        
        $status = Status::findOrFail($id);
        return view('admin.status.show', compact('status'));

    }

    public function edit(Status $status)
    {
        return view('admin.status.edit')
            ->withStatus($status);

    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'status' => 'required',
        ]);
        
        $status = Status::findOrFail($id)->update($request->all());

        return redirect()->route('admin.status.index')
            ->with('success', "Status atualizada com sucesso !");

    }


    public function destroy($id)
    {   
        $status = Status::findOrFail($id);
        $status->delete();
        return redirect()->route('admin.status.index')
            ->with('success', "Status removida com sucesso !");

    }
}
