<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
</head>

<body>
    <h1>Ini adalah profil mahasiswa </h1>

    @if(session()->has('username_user'))
        <div style="border: 1px solid #ccc; padding: 10px; margin-top: 20px;">
            <p><strong>Data Regis</strong></p>
            <p>Username: {{ session('username_user') }}</p>
            <p>Email: {{ session('email_user') }}</p>
            <p>Password: {{ session('password_user') }}</p>
        </div>
    @else
        <p>Daftar Dulu Bos!</p>
    @endif
</body>

</html>