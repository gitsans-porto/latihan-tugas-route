<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function data_mahasiswa()
    {
        $mahasiswa = [
            [
                'no' => '1',
                'nim' => '05302425002',
                'nama' => 'DIEVA POBELA',
                'kelas' => 'A',
                'prodi' => 'PTI',
                'semester' => '3',
                'umur' => '19',
                'tempat_lahir' => 'kotamobagu',
                'jenis_kelamin' => 'P',
                'sosmed' => [
                    'Instagram' => 'diivaaaa_p',
                    'Tiktok' => '@usernameazs',
                    'Facebook' => 'diva pobela',
                ],
                'foto' => 'Dieva.jpeg',
            ],
            [
                'no' => '2',
                'nim' => '05302425019',
                'nama' => 'Muttaqwiyati C. Lestari Lauma',
                'kelas' => 'A',
                'prodi' => 'Pend. Teknologi Informasi',
                'semester' => '3',
                'umur' => '19',
                'tempat_lahir' => 'Bigo',
                'jenis_kelamin' => 'P',
                'sosmed' => [
                    'Instagram' => 'chaalau',
                    'Tiktok' => 'itsblueskyworld',
                    'Facebook' => 'Ichaa Lauma',
                ],
                'foto' => 'Muttaqwiyati.jpeg',
            ],
            [
                'no' => '3',
                'nim' => '06101425044',
                'nama' => 'Fanisa Rahim',
                'kelas' => 'B',
                'prodi' => 'Agroteknologi',
                'semester' => '3',
                'umur' => '20',
                'tempat_lahir' => 'Gorontalo',
                'jenis_kelamin' => 'P',
                'sosmed' => [
                    'Instagram' => 'f.anisar',
                    'Tiktok' => '',
                    'Facebook' => 'Fanisa Rahim',
                ],
                'foto' => 'Fanisa.jpeg',
            ],
            [
                'no' => '4',
                'nim' => '06101425043',
                'nama' => 'Hasna Kudu',
                'kelas' => 'B',
                'prodi' => 'Agroteknologi',
                'semester' => '3',
                'umur' => '19',
                'tempat_lahir' => 'Gorontalo',
                'jenis_kelamin' => 'P',
                'sosmed' => [
                    'Instagram' => '@alinkudu_',
                    'Tiktok' => '',
                    'Facebook' => '',
                ],
                'foto' => 'Hasna.jpeg',
            ],

            [
                'no' => '5',
                'nim' => '06101425028',
                'nama' => 'Nur Alika Zarianty Eraku',
                'kelas' => 'B',
                'prodi' => 'Agroteknologi',
                'semester' => '3',
                'umur' => '19',
                'tempat_lahir' => 'Gorontalo',
                'jenis_kelamin' => 'P',
                'sosmed' => [
                    'Instagram' => '@alikaeraku1',
                    'Tiktok' => '',
                    'Facebook' => '',
                ],
                'foto' => 'Nur.jpeg',
            ],

            [
                'no' => '6',
                'nim' => '06101425070',
                'nama' => 'Nur Rahmadan Abdullah',
                'kelas' => 'B',
                'prodi' => 'Agroteknologi',
                'semester' => '3',
                'umur' => '20',
                'tempat_lahir' => 'Gorontalo',
                'jenis_kelamin' => 'P',
                'sosmed' => [
                    'Instagram' => '@anabdullah',
                    'Tiktok' => '',
                    'Facebook' => '',
                ],
                'foto' => 'Rahmadan.jpeg',
            ],
            [
                'no' => '7',
                'nim' => '531424028',
                'nama' => 'Refly K. Batalipu',
                'kelas' => 'B',
                'prodi' => 'Sistem Informasi',
                'semester' => '5',
                'umur' => '20',
                'tempat_lahir' => 'Pohuwato',
                'jenis_kelamin' => 'L',
                'sosmed' => [
                    'Instagram' => 'reflybtlpu',
                    'Tiktok' => 'reflybtlpu',
                    'Facebook' => 'Refly Batalipu',
                ],
                'foto' => 'Refly.jpeg',
            ],
            [
                'no' => '8',
                'nim' => '05202426003',
                'nama' => 'Adriansyah putra ismail',
                'kelas' => 'A',
                'prodi' => 'Teknik Komputer',
                'semester' => '1',
                'umur' => '18',
                'tempat_lahir' => 'Gorontalo',
                'jenis_kelamin' => 'L',
                'sosmed' => [
                    'Instagram' => 'Adriansyah.ismail',
                    'Tiktok' => '',
                    'Facebook' => '',
                ],
                'foto' => 'Adriansyah.jpeg',
            ],
            [
                'no' => '9',
                'nim' => '03101425059',
                'nama' => 'Defri Datuela',
                'kelas' => '3B',
                'prodi' => 'Pendidikan Bahasa dan Sastra Indonesia',
                'semester' => '3',
                'umur' => '20',
                'tempat_lahir' => 'Bigo',
                'jenis_kelamin' => 'L',
                'sosmed' => [
                    'Instagram' => 'deffff_1866',
                    'Tiktok' => '',
                    'Facebook' => 'Defri Datuela',
                ],
                'foto' => 'Defri.jpeg',
            ],
            [
                'no' => '10',
                'nim' => '06401425029',
                'nama' => 'Bayu Pribadi Paputungan',
                'kelas' => 'B',
                'prodi' => 'Agribisnis',
                'semester' => '3',
                'umur' => '18',
                'tempat_lahir' => 'Mongkoinit',
                'jenis_kelamin' => 'L',
                'sosmed' => [
                    'Instagram' => 'byuuuu_13',
                    'Tiktok' => '',
                    'Facebook' => 'ubayyy057',
                ],

                'foto' => 'Bayu.jpeg',
            ],
            [
                'no' => '11',
                'nim' => '841424011',
                'nama' => 'Nur Amalia Rahim ',
                'kelas' => 'A',
                'prodi' => 'Keperawatan ',
                'semester' => '5',
                'umur' => '20',
                'tempat_lahir' => 'Gorontalo',
                'jenis_kelamin' => 'P',
                'sosmed' => [
                    'Instagram' => 'nurrahiimm',
                    'Tiktok' => ' Nur Rahim',
                    'Facebook' => 'l0veliyaa',
                ],
                'foto' => 'dengan-teman.jpeg',
            ],
        ];
        return view('mahasiswa', compact('mahasiswa'));
        // return redirect()->route('mahasiswa');
    }

    public function register(Request $data)
    {
        session([
            'username_user' => $data->username,
            'email_user' => $data->email,
            'password_user' => $data->password,
        ]);
        return redirect()->route('profil');
    }

    public function login(Request $data)
    {
        session([
            'username_login' => $data->username,
            'password_login' => $data->password,
        ]);
        return redirect()->route('data-mahasiswa');
    }

    public function logout()
    {
        session()->forget('username_login');
        session()->forget('password_login');

        return redirect()->route('data-mahasiswa');
    }

    public function profil()
    {
        return view('profil');
    }

    //Fungsi Fave Data
    public function savedata(Request $data)
    {
        $validatedData = $data->validate([
            'nim' => 'required|maxlenght:2',
            'nama' => 'required|min:2',
            'jenis_kelamin' => 'required|min:2',
            'umur' => 'required|min:2'
        ]);
        Mahasiswa::create($validatedData);

    }
}
