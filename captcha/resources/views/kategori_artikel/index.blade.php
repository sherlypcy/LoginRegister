 @extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Kategori Artikel</div>

                <div class="card-body">
                    <a href="{!! route('kategori_artikel.create') !!}" class="btn btn-primary">Tambah Data</a><br>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table border="1">
                        <tr>
                            <td>ID</td>
                            <td>User_Id</td>
                            <td>Nama</td>
                            <td>Create_At</td>
                            <td>Update_At</td>
                            <td>Aksi</td>
                        </tr>
                        @foreach($listkategoriartikel as $kategori)
                        <tr>
                            <td>{!!$kategori->id!!}</td>
                            <td>{!!$kategori->users_id!!}</td>
                            <td>{!!$kategori->nama!!}</td>
                            <td>{!!$kategori->created_at!!}</td>
                            <td>{!!$kategori->updated_at!!}</td>
                            <td>
                                <a href="{!! route('kategori_artikel.show',[$kategori->id]) !!}" class="btn btn-success">Lihat</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
