<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Jumlah Barang</th>
                <th scope="col">Bahan</th>
              </tr>
            </thead>
            <tbody>
                {{ $no=1; }}
                @foreach ($barangs as $barang )
                    <tr>
                    <th>{{ $no++ }}</th>
                    <td>{{ $barang->nama_barang }}</td>
                    <td>{{ $barang->jumlah_barang }}</td>
                    <td>{{ $barang->bahan }}</td>
                    </tr>
                @endforeach
            </tbody>
          </table>

    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</html>
