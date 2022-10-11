<?php

namespace App\Http\Controllers;

use App\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tareas = Tarea::where('status_delete', 0 )->get();
        return response( [ 'msg' => '', 'data' => $tareas ], 200 );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response( [ 'msg' => 'creado' ], 200 );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tarea::create( $request->all() );

        return response( [ 'msg' => 'creado' ], 200 );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function show(Tarea $tarea)
    {
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarea $tarea)
    {
        return 'edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarea $tarea)
    {
        $tarea->update( $request->all() );
        return response( [ 'msg' => 'Tarea modificada' ], 200 );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function destroy( Request $request )
    {
        $tarea = Tarea::where( 'id', $request->tarea )->first();

        if( $tarea ) {

            if(  $tarea->status_delete  )
                return response( [ 'msg'=>'Tarea ya fue eliminada' ], 400 );
            
            $tarea->update( ['status_delete' => 1] );
            return response( [ 'msg'=>'Tarea eliminado' ], 200 );

        }

        return response( [ 'msg'=>'Tarea no existe' ], 400 );

    }

    public function activate( Request $request )
    {
        try {
            $tareas = Tarea::where( ['status' => true, 'status_delete' => 0] )->get();
            return response( [ 'msg' => '', 'data' => $tareas ], 200 );
        } catch ( Exception $e ) {
            return response( [ 'msg' => 'Error', 'data' => '' ], 400 );
        }
    }

    public function desactivate( Request $request )
    {
        try {
            $tareas = Tarea::where( ['status' => false, 'status_delete' => 0] )->get();
            return response( [ 'msg' => '', 'data' => $tareas ], 200 );
        } catch ( Exception $e ) {
            return response( [ 'msg' => 'Error', 'data' => '' ], 400 );
        }
    }

    public function updateStatus( Request $request, $id )
    {
        // return ;
        $tarea = Tarea::where( 'id', $id )->first();
        $tarea->update( [ 'status' => !$tarea->status ] );
        return response( [ 'msg' => 'Tarea modificada' ], 200 );

    }

    

}
