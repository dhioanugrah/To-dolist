<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo-List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>
<body class="bg-dark">
    <form class="mx-lg-5">
        <legend class="text-light">Tambah Tugas</legend>
        <div class="mb-3">
            <label for="judul" class="form-label text-light">Judul</label>
            <input type="text" class="form-control" id="judul">
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label text-light">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ url('todolist') }}" class="btn btn-outline-secondary btn-dark text-light" type="submit">Kembali</a>
    </form>
    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
