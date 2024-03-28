<!doctype html>
<html lang="en">
<head>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
        }

        h3 {
            text-align: center;
        }

        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
            text-transform: uppercase;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

    </style>
</head>
<body>
<h1>Practica de MongoDB con Laravel</h1>
<h3>Erick Salvador Lugo</h3>
<table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Stock</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datos as $dat)
            <tr>
                <td>{{$dat->_id}}</td>
                <td>{{$dat->nombre}}</td>
                <td>{{$dat->precio}}</td>
                <td>{{$dat->stock}}</td>
            </tr>
            @endforeach
        </tbody>
        </table>
</body>
</html>
