@extends('layouts.master')

@section('title')
    Rating and Review Management | Instant Sewa
@endsection

@section('content')
<div class="container-fluid ">
    <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="card">
            <div class="card-header card-header-tabs card-header-primary">
              <h4 class="card-title">Rating and Review Management</h4>
            </div>
            <div class="card-body table-responsive">
                <div class="card-content">
                    {{-- <canvas id="myChart"></canvas> --}}
                </div>
            </div>
          </div>
        </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-4">
        <div class="card card-stats">
          <div class="card-header card-header-warning card-header-icon">
            <a href="#" class="" style="margin-top: 10px;">Service Provider Name</a>
            <p class="card-category"> Average Rating</p>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">local_offer</i> <p>A card is a flexible and extensible content container. It includes options for headers and footers, a wide variety of content, contextual background colors, and powerful display options.</p>
            </div>
          </div>
          <a href="#" class="btn btn-primary" style="width: 100px; margin-left:120px; margin-bottom: 15px;">Block</a>
        </div>
      </div>

</div>
@endsection

@section('scripts')

@endsection
