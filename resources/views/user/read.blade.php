@extends('welcome')

@section('JUDUL', 'Pengguna')

@section('CONTENT')
    <a href="user/create" class="btn btn-success mb-2">Tambah Pengguna</a>
    <table class="table table-bordered table-collapsed table-striped table-hover">
        <tr class="bg-secondary">
            <th>No.</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
            <th>Opsi</th>
        </tr>
        @foreach ($pengguna as $index => $p)
            <tr>
                <td>{{ ($pengguna->currentPage() - 1) * $pengguna->perPage() + $index + 1 }}</td>
                <td>{{ $p->name }}</td>
                <td>{{ $p->username }}</td>
                <td>{{ $p->email }}</td>
                <td>{{ $p->role }}</td>
                <td>
                    <form action="user/{{ $p->id }}" method="post" id="user-delete-form">
                        @csrf
                        @method('delete')
                        <a href="user/{{ $p->id }}" class="btn btn-sm btn-info">Lihat</a>
                        <a href="user/{{ $p->id }}/edit" class="btn btn-sm btn-primary">Ubah</a>
                        <button id="user-delete" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $pengguna->links() }}
@endsection
