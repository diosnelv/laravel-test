<?php

namespace App\Http\Controllers;

use App\Models\Producer;
use Illuminate\Http\Request;

class ProducerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $query = Producer::select('id', 'company', 'description')->get();
        return view('producers', [
            'producers' => $query
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('producers-crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $newModel = new Producer();
        $newModel->company = $request->company;
        $newModel->description = $request->description;

        $newModel->save();
        return redirect('producers');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $query = Producer::select('id', 'company', 'description')->find($id);
        return response($query->toArray(), 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $dato = Producer::select('id', 'company', 'description')->find($id);
        return view('producers-editar', ['dato' => $dato]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $old = Producer::select('id', 'company', 'description')->find($id);
        $old->company = $request->company;
        $old->description = $request->description;
        $old->save();

        return response($old->toArray(), 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Producer::destroy($id);
        return redirect('producers');
    }
}
