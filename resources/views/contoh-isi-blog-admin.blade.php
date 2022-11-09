@extends('layout.temp-blog')

@push('css')
    
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

    <div class="content-blog m-3">
        <div class="blog-header">
          <a href="/edit" class="btn btn-primary" style="float: right;">Edit</a>
          <a href="" class="btn btn-danger" style="float: right;">Delete</a>
          <h4>Lorem Ipsum</h4>
        </div>
        <br>
        <div class="blog-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore eius, rerum iste optio eaque quam quibusdam, dolorem ex eos blanditiis ea incidunt itaque earum atque facilis non recusandae cumque? Nihil!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum cumque dignissimos architecto est aliquid nostrum laudantium a, inventore necessitatibus recusandae dolorem sunt rerum. Suscipit non iste incidunt sapiente perferendis ipsum.
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis minima odio, magni minus eum voluptates dolores quisquam tenetur officiis! Suscipit velit magnam dolorem atque quas harum, quis numquam accusamus ex.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, nisi ipsa! Laboriosam eaque voluptates animi cupiditate, quo architecto tempore deleniti qui vero totam, maiores, quibusdam ipsum eligendi maxime omnis ex?
        </div>
    </div>

</div>
@endsection