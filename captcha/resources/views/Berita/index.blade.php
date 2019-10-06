 @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List Berita</div>

                <div class="card-body">
                    <a href="{!! route('berita.create') !!}" class="btn btn-primary">Tambah Data</a>
                    <br>  
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
                            <td>Kategori</td>
                            <td>Aksi</td>
                        </tr>
                        @foreach($listberita as $berita)
                        <tr>
                            <td>{!!$berita->id!!}</td>
                            <td>{!!$berita->users_id!!}</td>
                            <td>{!!$berita->nama!!}</td>
                            <td>{!!$berita->created_at!!}</td>
                            <td>{!!$berita->updated_at!!}</td>
                            <td>{!!$berita->kategori_berita_id!!}</td>
                            <td>
                                <a href="{!! route('berita.show',[$berita->id]) !!}" class="btn btn-success">Lihat</a>
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
