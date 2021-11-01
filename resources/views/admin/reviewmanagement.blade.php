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
        <?php foreach ($serviceprovider as $key) { ?>
      <a href="{{ url('/review-management/'.$key->id) }}">
      <div class="col-lg-4 col-md-4">
        <div class="card card-stats">
          <div class="card-header card-header-warning card-header-icon">
            <p class="card-title" style="margin-top: 10px;"><?php echo $key-> fullname?> (<?php echo $key->username ?>)</p>
            <?php
                $stars = round($key->rating);
                $i = 0;
                while($i < $stars) {
                 $i++;
            ?>
            <span class="fa fa-star checked"></span>
           <?php } ?>
           <p class="card-title" style="margin-top: 5px;"><?php echo $key-> rating?></p>
          </div>
          <div class="card-footer">
            <div class="stats">
              <i class="material-icons">local_offer</i> <p><?php echo $key-> review?></p>
            </div>
          </div>
          <a href="#" class="btn btn-primary" style="width: 100px; margin-left:120px; margin-bottom: 15px;">Block</a>
        </div>
      </div>
       <?php } ?>
      </a>
    </div>
    <span>
        {{ $serviceprovider-> links()}}
    </span>
</div>
@endsection

@section('scripts')

@endsection
