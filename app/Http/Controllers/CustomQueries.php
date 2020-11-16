<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CustomQueries extends Controller
{
    public function Paginado()
    {
        $count = DB::table('noticias')->paginate(8);

        $info = ["count" => $count->total(), "pages" => $count->lastPage(), "next" => $count->nextPageUrl(), "prev" => $count->previousPageUrl()];
        $results = $count->items();
        $paginador = ["info" => $info, "results" => $results];

        return json_encode($paginador);
    }
    public function Eventos()
    {
        $count = DB::table('eventos')->paginate(8);

        $info = ["count" => $count->total(), "pages" => $count->lastPage(), "next" => $count->nextPageUrl(), "prev" => $count->previousPageUrl()];
        $results = $count->items();
        $paginador = ["info" => $info, "results" => $results];

        return json_encode($paginador);
    }
    public function Recomendaciones()
    {
        $count = DB::table('noticias')->paginate(4);

        $info = ["count" => $count->total(), "pages" => $count->lastPage(), "next" => $count->nextPageUrl(), "prev" => $count->previousPageUrl()];
        $results = $count->items();
        $paginador = ["info" => $info, "results" => $results];

        return json_encode($paginador);
    }
    public function Comentarios($idNoticia)
    {
        $count = DB::table('comentarios')
            ->join('usuarios', 'comentarios.auth', '=', 'usuarios.auth')
            ->selectRaw('comentarios.comentario, comentarios.fecha, usuarios.nickname,comentarios.id_comentarios, usuarios.picture')
            ->where('comentarios.id_noticia', '=', $idNoticia)
            ->get();

        return json_encode($count);
    }
}
