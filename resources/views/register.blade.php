<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>
    <h1>Register</h1>
    <a href="{{ route('profil') }}">Profil</a>
    <form method="post" action="{{ route('save-data') }}">
        @csrf
        <label>NIM</label><br>
        <input type="text" name="nim" placeholder="username"><br>

        <label>Nama</label><br>
        <input type="text" name="nama" placeholder="email"><br>

        <label>JENIS KELAMIN</label><br>
        <input type="text" name="jenis_kelamin" placeholder="jenis_kelamin"><br>

        <label>UMUR</label><br>
        <input type="text" name="umur" placeholder="umur"><br>

        <input type="submit" value="Register">
    </form>
</body>

</html>