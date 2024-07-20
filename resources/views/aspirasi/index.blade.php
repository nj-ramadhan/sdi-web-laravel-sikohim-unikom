<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data aspirasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Database aspirasi Himpunan Sistem Informasi - UNIKOM</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('aspirasi.create') }}" class="btn btn-md btn-success mb-3">TAMBAH DATA aspirasi</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">FOTO</th>
                                    <th scope="col">NAMA</th>
                                    <th scope="col">NIM</th>
                                    <th scope="col">ANGKATAN</th>
                                    <th scope="col">KELAS</th>
                                    <th scope="col">JABATAN</th>
                                    <th scope="col" style="width: 20%">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($aspirasi as $aspirasi)
                                    <tr>
                                        <td class="text-center">
                                            <img src="{{ asset('/storage/aspirasi/'.$aspirasi->image) }}" class="rounded" style="width: 150px">
                                        </td>
                                        <td>{{ $aspirasi->nama }}</td>
                                        <td>{{ $aspirasi->nim }}</td>
                                        <td>{{ $aspirasi->angkatan }}</td>
                                        <td>{{ $aspirasi->kelas }}</td>
                                        <td>{{ $aspirasi->jabatan }}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('aspirasi.destroy', $aspirasi->id) }}" method="POST">
                                                <a href="{{ route('aspirasi.show', $aspirasi->id) }}" class="btn btn-sm btn-dark">TAMPILKAN</a>
                                                <a href="{{ route('aspirasi.edit', $aspirasi->id) }}" class="btn btn-sm btn-primary">UBAH</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data aspirasi belum Tersedia.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        //message with sweetalert
        @if(session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif(session('error'))
            Swal.fire({
                icon: "error",
                title: "GAGAL!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif

    </script>

</body>
</html>