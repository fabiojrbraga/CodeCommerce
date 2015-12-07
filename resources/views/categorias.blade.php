<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
            }

         
        </style>
    </head>
    <body>
			<ul>
			@foreach($categories as $category)
				<li>{{$category->nome}} - {{$category->descricao}}</li>
			@endforeach
			</ul>
        
    </body>
</html>
