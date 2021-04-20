<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\TCategoria;
use App\Models\TDestino;
use App\Models\THotel;
use App\Models\THotelDestino;
use App\Models\TPaquete;
use App\Models\TPaqueteDestino;
use App\Models\TPaqueteDificultad;
use App\Models\TTeam;
use App\Models\TTour;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomepageController extends Controller
{
    public function index(){
        $paquete = TPaquete::with('paquetes_destinos.destinos','paquetes_categoria.categoria', 'precio_paquetes')->get();
        $tours = TTour::with('tours_destinos.destinos')->get();

        $categoria = TCategoria::all();
        $destino = TDestino::where('estado', 1)->get();

        return view('page.home',
            compact(
                'paquete',
                'tours',
                'categoria',
                'destino'
            ));
    }

    public function agregar(Request $request){
        $var = ''; $var2 = ''; $var3 = '';
        if ($request->destinoSelected){
            foreach ($request->destinoSelected as $destinos){
                if (isset($destinos)){
                    $var.=$destinos.',';
                }
            }
        }else{
            $var = 0;
        }

        $nombre2 = explode(',',$var);

        if (($request->categoriaSelected)){
            foreach ($request->categoriaSelected as $categoria){
                if (isset($categoria)){
                    $var2.=$categoria.',';
                }
            }
        }else{
            $var2 = 0;
        }
        $category_arr = explode(',',$var2);

        if (($request->tiempoSelected)){
            foreach ($request->tiempoSelected as $duration){
                if (isset($duration)){
                    $var3.=$duration;
                }
            }
            $duration_e = explode('-', $var3);
            $duration1 = $duration_e[0];
            $duration2 = $duration_e[1];
        }else{
            $var3 = 0;
        }

        if ($var AND $var2 == 0 AND $var3 == 0){
            $paquetes = TPaquete::with([
                'precio_paquetes',
                'paquetes_destinos'
                =>function ($query) use ($nombre2) {
                    $query->whereIn('iddestinos', $nombre2);
                }])->get();
        }

        if ($var == 0 AND $var2 AND $var3 == 0){
            $paquetes = TPaquete::with([
                'precio_paquetes',
                "paquetes_categoria"=>function ($query) use ($category_arr) {
                    $query->whereIn('idcategoria', $category_arr);
                }
            ])->get();
        }

        if ($var == 0 AND $var2 == 0 AND $var3){
            $paquetes = TPaquete::whereBetween('duracion', [$duration1, $duration2])->get();
        }

        if ($var == 0 AND $var2 == 0 AND $var3 == 0){
            $paquetes = 0;
        }

        if ($var AND $var2 AND $var3 == 0){
            $paquetes = TPaquete::with([
                'precio_paquetes',
                "paquetes_categoria"=>function ($query) use ($category_arr) {
                    $query->where('idcategoria', $category_arr);
                },
                'paquetes_destinos'
                =>function ($query) use ($nombre2) {
                    $query->whereIn('iddestinos', $nombre2);
                }])->get();
        }

        if ($var AND $var2 == 0 AND $var3){
            $paquetes = TPaquete::with([
                'precio_paquetes',
                'paquetes_destinos'
                =>function ($query) use ($nombre2) {
                    $query->whereIn('iddestinos', $nombre2);
                }])->whereBetween('duracion', [$duration1, $duration2])->get();
        }

        if ($var == 0 AND $var2 AND $var3){
            $paquetes = TPaquete::with([
                'precio_paquetes',
                "paquetes_categoria"=>function ($query) use ($category_arr) {
                    $query->where('idcategoria', $category_arr);
                }])->whereBetween('duracion', [$duration1, $duration2])->get();
        }

        if ($var AND $var2 AND $var3){
            $paquetes = TPaquete::with([
                'precio_paquetes',
                "paquetes_categoria"=>function ($query) use ($category_arr) {
                    $query->where('idcategoria', $category_arr);
                },
                'paquetes_destinos'
                =>function ($query) use ($nombre2) {
                    $query->whereIn('iddestinos', $nombre2);
                }])->whereBetween('duracion', [$duration1, $duration2])->get();
        }


//        $paquetes = TPaqueteDestino::with('paquetes','destinos')->whereIn('iddestinos', $nombre2)->get();

        $destinations = TPaqueteDestino::with('destinos')->get();
        $category = TPaqueteCategoria ::with('categoria')->get();


        return response()->json(
            [
                'all_package' => [
                    'package' => $paquetes,
                    'destinations' => $destinations,
                    'category' => $category
                ]
            ]);

//        return "ok";

//            return Response::json($request->destinosNueva, 200);
//        $nota = new Nota();
//        $nota->nombre = $request->nombre;
//        $nota->descripcion = $request->descripcion;
//        $nota->user_id = auth()->id();
//        $nota->save();
    }
    public function load(Request $request){
        $paquetes = TPaquete::with('precio_paquetes')->where('estado',1)->get();
        $destinations = TPaqueteDestino::with('destinos')->get();
        $category = TPaqueteCategoria ::with('categoria')->get();
        return response()->json(
            [
                'all_package' => [
                    'package' => $paquetes,
                    'destinations' => $destinations,
                    'category' => $category
                ]
            ]);

    }

    public function load_all(Request $request){
        $paquetes = TPaquete::with('precio_paquetes')->get();
        $destinations = TPaqueteDestino::with('destinos')->get();
        $category = TPaqueteCategoria ::with('categoria')->get();
        return response()->json(
            [
                'all_package' => [
                    'package' => $paquetes,
                    'destinations' => $destinations,
                    'category' => $category
                ]
            ]);

    }

    public function formulario_diseno(Request $request)
    {

        $from = 'info@gotoperu.com.mx';

        $category_all = '';
        if ($request->category_d){
            foreach ($request->category_d as $categorias){
                if (isset($categorias)){
                    $category_all.=$categorias.',';
                }
            }
        }

        $destination_all = '';
        if ($request->destino_d){
            foreach ($request->destino_d as $destinos){
                if (isset($destinos)){
                    $destination_all.=$destinos.',';
                }
            }
        }

        $travellers_all = '';
        if ($request->pasajeros_d){
            foreach ($request->pasajeros_d as $pasajeros){
                if (isset($pasajeros)){
                    $travellers_all.=$pasajeros.',';
                }
            }
        }

        $duration_all = '';
        if ($request->duracion_d){
            foreach ($request->duracion_d as $duracion){
                if (isset($duracion)){
                    $duration_all.=$duracion.',';
                }
            }
        }

        $nombre = '';
        if ($request->el_nombre){
            $nombre = $request->el_nombre;
        }

        $email = '';
        if ($request->el_email){
            $email = $request->el_email;
        }

        $fecha = '';
        if ($request->el_fecha){
            $fecha = $request->el_fecha;
        }

        $telefono = '';
        if ($request->el_telefono){
            $telefono = $request->el_telefono;
        }

        $comentario = '';
        if ($request->el_textarea){
            $comentario = $request->el_textarea;
        }

        $inquire = new TInquire();
        $inquire->hotel = $category_all;
        $inquire->destinos = $destination_all;
        $inquire->pasajeros = $travellers_all;
        $inquire->duracion = $duration_all;
        $inquire->nombre = $nombre;
        $inquire->email = $email;
        $inquire->fecha = $fecha;
        $inquire->telefono = $telefono;
        $inquire->comentario = $comentario;
//        $inquire->save();

        if ($inquire->save()){
            try {
                Mail::send(['html' => 'notifications.page.client-form-design'], ['nombre' => $nombre], function ($messaje) use ($email, $nombre) {
                    $messaje->to($email, $nombre)
                        ->subject('GotoPeru')
                        /*->attach('ruta')*/
                        ->from('info@gotoperu.com.mx', 'GotoPeru');
                });
                Mail::send(['html' => 'notifications.page.admin-form-contact'], [
                    'category_all' => $category_all,
                    'destination_all' => $destination_all,
                    'travellers_all' => $travellers_all,
                    'duration_all' => $duration_all,

                    'nombre' => $nombre,
                    'email' => $email,
                    'fecha' => $fecha,
                    'telefono' => $telefono,
                    'comentario' => $comentario,

                ], function ($messaje) use ($from) {
                    $messaje->to($from, 'GotoPeru')
                        ->subject('GotoPeru')
//                    ->cc($from2, 'GotoPeru')
                        /*->attach('ruta')*/
                        ->from('info@gotoperu.com.mx', 'GotoPeru');
                });

                return 'Thank you.';
            }
            catch (Exception $e){
                return $e;
            }
        }

    }

    public function formulario_detail(Request $request)
    {

        $from = 'info@gotoperu.com.mx';

        $category_all = '';
        if ($request->category_d){
            foreach ($request->category_d as $categorias){
                if (isset($categorias)){
                    $category_all.=$categorias.',';
                }
            }
        }

        $travellers_all = '';
        if ($request->pasajeros_d){
            foreach ($request->pasajeros_d as $pasajeros){
                if (isset($pasajeros)){
                    $travellers_all.=$pasajeros.',';
                }
            }
        }

        $duration_all = '';
        if ($request->duracion_d){
            foreach ($request->duracion_d as $duracion){
                if (isset($duracion)){
                    $duration_all.=$duracion.',';
                }
            }
        }

        $titulo_package = '';
        if ($request->paquete_id){
            $titulo_p = TPaquete::find($request->paquete_id);
            $titulo_package = $titulo_p->titulo;
        }

        $nombre = '';
        if ($request->el_nombre){
            $nombre = $request->el_nombre;
        }

        $email = '';
        if ($request->el_email){
            $email = $request->el_email;
        }

        $fecha = '';
        if ($request->el_fecha){
            $fecha = $request->el_fecha;
        }

        $telefono = '';
        if ($request->el_telefono){
            $telefono = $request->el_telefono;
        }

        $comentario = '';
        if ($request->el_textarea){
            $comentario = $request->el_textarea;
        }

        $inquire = new TInquire();
        $inquire->hotel = $category_all;
        $inquire->pasajeros = $travellers_all;
        $inquire->duracion = $duration_all;
        $inquire->nombre = $nombre;
        $inquire->email = $email;
        $inquire->fecha = $fecha;
        $inquire->telefono = $telefono;
        $inquire->comentario = $comentario;

        if ($inquire->save()){
            try {
                Mail::send(['html' => 'notifications.page.client-form-design'], ['nombre' => $nombre], function ($messaje) use ($email, $nombre) {
                    $messaje->to($email, $nombre)
                        ->subject('GotoPeru')
                        /*->attach('ruta')*/
                        ->from('info@gotoperu.com.mx', 'GotoPeru');
                });
                Mail::send(['html' => 'notifications.page.admin-form-contact-detail'], [
                    'category_all' => $category_all,
                    'travellers_all' => $travellers_all,
                    'duration_all' => $duration_all,

                    'titulo_p' => $titulo_package,
                    'nombre' => $nombre,
                    'email' => $email,
                    'fecha' => $fecha,
                    'telefono' => $telefono,
                    'comentario' => $comentario,

                ], function ($messaje) use ($from) {
                    $messaje->to($from, 'GotoPeru')
                        ->subject('GotoPeru')
//                    ->cc($from2, 'GotoPeru')
                        /*->attach('ruta')*/
                        ->from('info@gotoperu.com.mx', 'GotoPeru');
                });

                return 'Thank you.';
            }
            catch (Exception $e){
                return $e;
            }
        }
    }

    public function landing_form(Request $request){
        $from = 'hidalgochponce@gmail.com';
        $nombre = $request->txt_name;
        $email = $request->txt_email;
        $telefono = $request->txt_tel;

            try {
                Mail::send(['html' => 'notifications.page.client-form-design'], ['nombre' => $nombre], function ($messaje) use ($email, $nombre) {
                    $messaje->to($email, $nombre)
                        ->subject('GotoPeru')
                        /*->attach('ruta')*/
                        ->from('info@gotoperu.com.mx', 'GotoPeru');
                });
                Mail::send(['html' => 'notifications.page.admin-form-landing'], [
                    'nombre' => $nombre,
                    'email' => $email,
                    'telefono' => $telefono,

                ], function ($messaje) use ($from) {
                    $messaje->to($from, 'GotoPeru')
                        ->subject('GotoPeru')
//                    ->cc($from2, 'GotoPeru')
                        /*->attach('ruta')*/
                        ->from('info@gotoperu.com.mx', 'GotoPeru');
                });

                return redirect()->back()->with('status', 'Registro satisfactorio.');
            }
            catch (Exception $e){
                return $e;
            }

    }

    public function packages(){
        $paquete = TPaquete::all();
        return view('page.packages', compact('paquete'));
    }


    public function detail($url){

        $paquete = TPaquete::where('url', $url)->get();
        $dificultad = TPaqueteDificultad::all();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();
        return view('page.detail', compact('paquete', 'dificultad', 'paquete_destinos'));

    }

    public function category(){

        $categoria = TCategoria::all()->sortBy('nombre');
        return view('page.packages-category', compact('categoria'));

    }
    public function category_show($url){
        $categoria = TCategoria::where('url', $url)->get();

        foreach ($categoria as $c_s) {
            $categoria_all = TPaqueteCategoria::with('paquete', 'categoria')->where('idcategoria', $c_s->id)->get();
        }

        $all_category = TCategoria::all();

        return view('page.packages-category-show', compact('categoria', 'categoria_all', 'all_category'));

    }

    public function destination(){

//        $destinos_id = TDestino::with('destino_imagen')->where('nombre', $ciudad)->get();

        $destino = TDestino::all()->sortBy('nombre');
        return view('page.destinations', compact('destino'));

    }


    public function destination_show($url){
        $destino = TDestino::where('url', $url)->get();
        $paquete = TPaquete::with('paquetes_destinos', 'precio_paquetes', 'paquetes_categoria.categoria')->get();
        $paquetes_de = TPaqueteDestino::with(['destinos'=>function($query) use ($url) { $query->where('url', $url);}])->get();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();

        $destinos_all = TDestino::all();

        $ubicacion = \GoogleMaps::load('geocoding')
            ->setParam (['address' =>''.$url.''])
            ->get();
        $ubicacion = json_decode($ubicacion);

//        dd($ubicacion);

        return view('page.destinations-show', compact('paquetes_de', 'destino', 'paquete', 'paquete_destinos', 'ubicacion', 'destinos_all'));
    }

    public function sobre_nosotros(){
        $team = TTeam::all();

        return view('page.about', compact('team'));
    }
    public function faq(){
        return view('page.social');
    }
    public function testimonios(){
        return view('page.dicas');
    }
    public function responsabilidad(){
        return view('page.responsabilidad');
    }

    public function callback(Request $request){
        return $request;
    }

    public function rdstation(Request $request){

        $email = $request->input('email');
        $nombre = $request->input('nombre');
        return "hola";
    }

    public function landing($url){
        $paquete = TPaquete::where('url', $url)->get();
        $dificultad = TPaqueteDificultad::all();
        $paquete_destinos = TPaqueteDestino::with('destinos')->get();

        $hoteles = THotel::all();
        $hoteles_destinos = THotelDestino::all();

        $destino_menu = TDestino::all();


        return view('page.landing.landing', compact('paquete', 'dificultad', 'paquete_destinos','hoteles','hoteles_destinos','destino_menu'));

    }
}
