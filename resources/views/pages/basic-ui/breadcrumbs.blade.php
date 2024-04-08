@extends('layout.master')

@section('content')
<div class="row">
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Breadcrumbs</h4>
        <p class="card-description">Add class <code>.breadcrumbs</code> </p>
        <div class="template-demo">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Library</li>
            </ol>
          </nav>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="#">Library</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
          </nav>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="#">Library</a>
              </li>
              <li class="breadcrumb-item">
                <a href="#">Data</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Files</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Inverse Breadcrumbs</h4>
        <p class="card-description">Add class <code>.bg-inverse-*</code> for inverse skin</p>
        <div class="template-demo">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-inverse-primary">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="#">Library</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
          </nav>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-inverse-info">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="#">Library</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
          </nav>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-inverse-danger">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="#">Library</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
          </nav>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-inverse-success">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="#">Library</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
          </nav>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-inverse-warning">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="#">Library</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Colored Breadcrumb Variations</h4>
        <p class="card-description">Add class <code>.bg-*</code> for solid colored breadcrumb</p>
        <div class="template-demo">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-primary">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="#">Library</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
          </nav>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-info">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="#">Library</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
          </nav>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-danger">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="#">Library</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
          </nav>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-success">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="#">Library</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
          </nav>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-warning">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="#">Library</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
          </nav>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-light">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="#">Library</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
          </nav>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-dark">
              <li class="breadcrumb-item">
                <a href="#">Home</a>
              </li>
              <li class="breadcrumb-item">
                <a href="#">Library</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Data</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection