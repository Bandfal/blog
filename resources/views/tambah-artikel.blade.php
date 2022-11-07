@extends('layout.temp-blog')
    {{-- <title>Tambah Artikel</title> --}}

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    {{-- Trix Editor --}}
    <link rel="stylesheet" type="text/css" href="css-sen/trix.css">
    <script type="text/javascript" src="js-sen/trix.js"></script>
@endpush

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Artikel</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Artikel</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

              <div class="form bg-light" style="width: 80%; border-radius: 5px; border: 10px; padding: 20px;">
                <a href="/adminhome" class="btn btn-close" style="float: right;"></a>
                <h3 class="">Tambahkan Artikel</h3>
                <br>
                <form class="form">
                  @csrf
                  <div class="">
                    <label class="form-label" for="judul">Judul</label>
                    <input class="form-control" type="email" name="judul">
                  </div>
                  <div class="">
                      <div class="">
                          <label class="form-label" for="tag">Tag</label>
                        </div>
                        <input class="form-control" type="text" name="tag">
                  </div>
                  <div class="">
                      <label class="form-label" for="isi">Isi</label>
                      {{-- <textarea name="isi" id="isi" cols="30" rows="10"></textarea> --}}
                      <input class="form-control" id="x" type="hidden" name="isi">
                      <trix-editor input="x"></trix-editor>
                  </div>
                  <br>
                  <input type="submit" class="btn btn-success">
                </form>
              </div>
</div>
@endsection