<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Data Mahasiswa</title>
</head>

<body class="bg-gray-50 p-8">

    <div class="max-w-full mx-auto bg-white p-6 rounded-xl shadow-sm border border-gray-100">
        <div class="flex flex-col sm:flex-row justify-between items-center mb-6 gap-4">
            <h2 class="text-2xl font-bold mb-6 text-gray-800">Data Mahasiswa</h2>
            <div class="flex space-x-3">
                <a href="{{ route('form-login') }}"
                    class="px-4 py-2 bg-gray-100 text-gray-700 rounded-md font-medium hover:bg-gray-200 transition border border-gray-300">
                    Login
                </a>
                <a href="{{ route('form-register') }}"
                    class="px-4 py-2 bg-gray-100 text-gray-700 rounded-md font-medium hover:bg-gray-200 transition border border-gray-300">
                    Register
                </a>
                <a href="{{ route('profil') }}"
                    class="px-4 py-2 bg-blue-600 text-white rounded-md font-medium hover:bg-blue-700 transition shadow-sm">
                    Profil
                </a>

                @if (session()->has('username_login'))
                    <span class="pl-4 border-l border-gray-300 text-gray-700 font-medium">
                        Selamat datang, <span class="font-bold text-blue-600">{{ session('username_login') }}</span>
                    </span>
                @endif
            </div>
        </div>


        <table class="w-full text-left border-collapse">
            <tr>
                <th class="bg-blue-600 text-white p-3 text-sm font-semibold">NO</th>
                <th class="bg-blue-600 text-white p-3 text-sm font-semibold">NIM</th>
                <th class="bg-blue-600 text-white p-3 text-sm font-semibold">Nama</th>
                <th class="bg-blue-600 text-white p-3 text-sm font-semibold">Kelas</th>
                <th class="bg-blue-600 text-white p-3 text-sm font-semibold">Prodi</th>
                <th class="bg-blue-600 text-white p-3 text-sm font-semibold">Semester</th>
                <th class="bg-blue-600 text-white p-3 text-sm font-semibold">Umur</th>
                <th class="bg-blue-600 text-white p-3 text-sm font-semibold">Tempat Lahir</th>
                <th class="bg-blue-600 text-white p-3 text-sm font-semibold">Jenis Kelamin</th>
                <th class="bg-blue-600 text-white p-3 text-sm font-semibold">Sosmed</th>
                <th class="bg-blue-600 text-white p-3 text-sm font-semibold">Foto</th>
            </tr>
            @foreach ($mahasiswa as $m)
                <tr>
                    <td class="p-3 border-b border-gray-200 text-sm text-gray-700">{{ $m['no'] }}</td>
                    <td class="p-3 border-b border-gray-200 text-sm text-gray-700">{{ $m['nim'] }}</td>
                    <td class="p-3 border-b border-gray-200 text-sm text-gray-700">{{ $m['nama'] }}</td>
                    <td class="p-3 border-b border-gray-200 text-sm text-gray-700">{{ $m['kelas'] }}</td>
                    <td class="p-3 border-b border-gray-200 text-sm text-gray-700">{{ $m['prodi'] }}</td>
                    <td class="p-3 border-b border-gray-200 text-sm text-gray-700">{{ $m['semester'] }}</td>
                    <td class="p-3 border-b border-gray-200 text-sm text-gray-700">{{ $m['umur'] }} Tahun</td>
                    <td class="p-3 border-b border-gray-200 text-sm text-gray-700">{{ $m['tempat_lahir'] }}</td>
                    <td class="p-3 border-b border-gray-200 text-sm text-gray-700">{{ $m['jenis_kelamin'] }}</td>
                    <td class="p-3 border-b border-gray-200 text-sm text-gray-700">
                        <ul style="list-style-type: disc; padding-left: 20px; margin: 0;">
                            @foreach ($m['sosmed'] as $platform => $username)
                                <li>{{ $platform }}: {{ $username }}</li>
                            @endforeach
                        </ul>
                    </td>
                    <td class="p-3 border-b border-gray-200 text-sm text-gray-700">
                        <img src="{{ asset('images/foto_mhs/' . $m['foto'])}}"
                            class="w-24 h-24 object-cover rounded-md shadow-sm" alt="Foto {{ $m['nama'] }}">
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

</body>

</html>