<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> paises </h1> 
    <table class="table table-bordered">
        <thead>
            <tr>
                    <th>Pais</th>
                    <th>capital</th>
                    <th>ciudades</th>
                    <th>Moneda</th>
                    <th>poblacion</th>
            </tr>
        
        </thead>

        <tbody>
            @foreach($paises as $pais=>$informacion)

                <TR>
                    <TD rowspan="3"> {{  $pais  }} </TD>
                    <TD rowspan="3"> {{  $informacion["capital"]  }} </TD>
                    <TD rowspan="3"> {{  $informacion["Moneda"]  }} </TD>
                    <TD rowspan="3"> {{  $informacion["poblacion"]  }} </TD>
                    <TD bgcolor=#00ff00> {{  $informacion["ciudades"][0]  }} </TD>
                </TR>
                <tr>
                    <TD bgcolor=#00ff00> {{  $informacion["ciudades"][1]  }} </TD>
                    
                </tr>
                <tr>
                    <TD bgcolor=#00ff00> {{  $informacion["ciudades"][2]  }} </TD>
                    
                </tr>
            @endforeach
        </tbody>
    </table>


</body>
</html>




