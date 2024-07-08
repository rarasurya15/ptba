@extends('Layout.AdminNavbar')

@section('konten')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Pendaftaran Magang PT.Bukit Asam</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="styleadmin.css">
</head>

<body>
            <div class="details">
                <div class="status">
                    @if(session()->has('message'))
                    <div class="message success"> {{ session('message') }} </div>
                    @endif
                    <div class="cardHeader">
                        <h2>Halaman Admin</h2>
                    </div>

                    <div class="table-responsive">
                    <table>
                        <thead>
                            <tr>
                                <td>Nama</td>
                                <td>Tempat Lahir</td>
                                <td>Tanggal Lahir</td>
                                <td>Agama</td>
                                <td>Email</td>
                                <td>Jenjang</td>
                                <td>Jurusan</td>
                                <td>NIM</td>
                                <td>No HP</td>
                                <td>Surat Pengantar</td>
                                <td>Proposal</td>
                                <td>Curriculum Vitae</td>
                                <td>Status Pendaftaran</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($daftars as $item)
                            <tr>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->tempat_lahir }}</td>
                                <td>{{ $item->tanggal_lahir }}</td>
                                <td>{{ $item->agama }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->jenjang }}</td>
                                <td>{{ $item->jurusan }}</td>
                                <td>{{ $item->nim }}</td>
                                <td>{{ $item->no_hp }}</td>
                                <td>{{ $item->surat_pengantar }}</td>
                                <td>{{ $item->proposal }}</td>
                                <td>{{ $item->curriculum_vitae }}</td>
                                <td>{{ $item->status_pendaftaran }}</td>
                                <td>
                                    <div class="button-container">
                                    <a href='{{ url('Admin/'.$item->nim.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                                    <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' action="{{ url('Admin/'.$item->nim)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" name="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script src="main.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
@endsection


