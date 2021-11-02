@extends('layouts.master')

@section('title')
    Rating and Review Management | Instant Sewa
@endsection

@section('content')
<div class="container-fluid ">
    <div class="row">
     <?php foreach ($serviceprovider as $key) { ?>
      <div class="col-lg-4 col-md-4">
        <div class="card card-stats">
            <div class="card-footer">
                <div class="stats">
                  <i class="material-icons">local_offer</i><p class="card-title" style="margin-top: 5px;"><?php echo $key-> reviews?></p>
                </div>
            </div>
          <div class="card-header card-header-warning card-header-icon">
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
                <p style="margin-left: 130px;"><?php echo $key->serviceUserName ?></p>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
    </div>
</div>
@endsection

@section('scripts')

@endsection
