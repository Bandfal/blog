<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Artikel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="form-tambah-artikel">
        <h1>Tambah Artikel</h1>
        <form action="/artikel" method="POST" class="form">
            @csrf
            <label for="judul">Judul</label>
            <input type="text" name="judul" id="judul">
            <br>
            <label for="isi">Isi</label>
            <input type="text" name="isi" id="isi">
            <br>
            <label for="tag">Tag</label>
            <input type="text" name="tag" id="tag">
            <br>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>