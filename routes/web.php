<?php

use Illuminate\Support\Facades\Route;
use App\Producto;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//Primera rut: mensaje
Route::get('hola',function(){
    $ficha = 1753443;
    echo 'Hola madrugadores',' ',  $ficha;

});

//Ruta tratar arreglos
Route::get('arreglo' , function(){

    //crear arreglo
    $estudiantes =["C"=>"Carlos",
                   "A"=>"Ana",
                   "L"=>"Lola",
                   "N"=>"Nancy",
                   "T"=>"Teresa",
                   "S"=>"Sandra",
                   "E"=>"Edwin",
                   "P"=>"Pedro",
                   "M"=>"Maria",
                   "O"=>"Orlando",
                   "W"=>"Wilson",
                   "J"=>"Juan",];

    //Agregar elementos a un arreglo
    $estudiantes []="Fabio";

    //var dump: analiza una variable
    echo"<pre>";
    var_dump($estudiantes);
    echo"</pre>";
    //imprimir cada valor del arreglo estudiantes
    echo $estudiantes["C"];
    echo "<hr/>";
    echo $estudiantes["A"];
    echo "<hr/>";
    echo $estudiantes["L"];
    echo "<hr/>";
    echo "<br/>";
    echo "<br/>";


    //Imprimir un arreglo grande
    foreach($estudiantes as $clave => $estudiante){
    echo $clave,"=",$estudiante;
    echo "<hr/>";

    }


});

//Arreglos Multidimensionales
Route::get('arreglosm',function(){

    $paises =["Colombia"=>["capital"=>"Bogota",
                          "Moneda"=>"peso",
                          "poblacion"=>50,
                          "ciudades"=>["Cali","Medellin","Cartagena"]
                        
                        ],
              "Peru"=>["capital"=>"Lima",
                       "Moneda"=>"sol",
                       "poblacion"=>32,
                       "ciudades"=>["Piura","Cusco","Piura"] 
                         ],
              "Bolivia"=>["capital"=>"La paz",
                          "Moneda"=>"peso Boliviano",
                          "poblacion"=>11,
                            "ciudades"=>["Cochabamba","Santacruz","Oruro"]
                        ],
              "Argentina"=>["capital"=>"Buenos Aires",
                            "Moneda"=>"",
                            "poblacion"=>"",
                            "ciudades"=>["Buenos Aires","Córdoba","Lanús"]                        
                        ],
              "Venezuela"=>["capital"=>"Caracas",
                            "Moneda"=>"",
                            "poblacion"=>"",
                            "ciudades"=>["Maracaibo","Valencia","Guayana"]
                        ],
              "Brazil"=>["capital"=>"Sao Paulo",
                        "Moneda"=>"",
                        "poblacion"=>"",
                        "ciudades"=>["Río de Janeiro","Brasilia","Fortaleza"]
                    ],
              "Paraguay"=>["capital"=>"Asuncion",
                           "Moneda"=>"",
                           "poblacion"=>"",
                           "ciudades"=>["Luque","Encarnación","Itauguá"]
                        ],
              "Uruguay"=>["capital"=>"Montevideo",
                          "Moneda"=>"",
                          "poblacion"=>"",
                          "ciudades"=>["Rivera","Maldonado","Tacuarembó"]
                          ]
            ];

/*    echo"<pre>";
    var_dump($paises);
    echo"</pre>";
//recorrer simple
foreach($paises as $pais => $informacion){
    echo"<h1> $pais</h1>";
    echo $informacion["capital"];
    echo "<hr/>";





}
//recorrer con doble foreach
foreach($paises as $


=> $informacion){
    echo"<h1> $pais</h1>";
    foreach ($informacion as $clave =>$valor){
        echo "$clave : $valor";
   
    }

    echo "<hr/>";




}*/

//mostrar la vista
return view('paises')
            ->with('paises',$paises);

});


route::get('pruebaprod',function(){

    //insertar producto 
    $p =new producto();
    //crear atributos 
    $p->nombre ="bicicleta";
    $p->valor_unitario =450.897;
    //guardar en BD
    $p->save();

});

route::get('nuevoproducto',function(){

    //mostrar el formulario de guardar producto
    return view('productos.crear');
});


route::post('guardarproducto',function(){

    //recibir los datos que vienen desde formulario
    $p =new producto();
    //crear atributos 
    $p->nombre =$_POST["nombre"];
    $p->valor_unitario =$_POST["valor"];
    //guardar en BD
    $p->save();
    echo "Producto registrado";
});