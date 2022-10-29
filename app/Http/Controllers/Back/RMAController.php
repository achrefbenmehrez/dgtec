<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\RMA;
use Illuminate\Http\Request;

class RMAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $RMAS = RMA::paginate(10);

        return view('back.RMAS.index', compact('RMAS'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(RMA $RMAS)
    {
        return view('back.RMAS.show', compact('RMAS'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(RMA $RMAS)
    {
        $RMAS->delete();
        return back()->with('status', 'Remise a la caisse ' . $RMAS->id . 'supprimé');
    }
}
