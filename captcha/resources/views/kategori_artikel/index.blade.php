 @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table border="1">
                        <tr>
                            <td>id</td>
                            <td>user_id</td>
                            <td>nama</td>
                            <td>create_at</td>
                            <td>update_at</td>
                            <td>aksi</td>
                        </tr>
                        @foreach($listkategoriartikel as $kategori)
                        <tr>
                            <td>{!!$kategori->id!!}</td>
                            <td>{!!$kategori->users_id!!}</td>
                            <td>{!!$kategori->nama!!}</td>
                            <td>{!!$kategori->created_at!!}</td>
                            <td>{!!$kategori->updated_at!!}</td>
                            <td>
                                <a href="{!! route('kategori_artikel.show',[$kategori->id]) !!}">Lihat</a>
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
