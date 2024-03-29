@extends('layouts.main')

@section('title')
    Main Dashboard | Instant Sewa
@endsection


@section('content')
<div class="container-fluid ">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                  </div>
                  <p class="card-category">Category</p>
                  <h3 class="card-title">
                    <?php echo $category_count; ?>

                    <!-- <small>GB</small> -->
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">local_offer</i> Here is the total number of categories
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">handyman</i>
                  </div>
                  <p class="card-category">Services</p>
                  <h3 class="card-title">
                    <?php echo $service_count; ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">local_offer</i> Number of Services available for the users
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                  <i class="material-icons">person</i>
                  </div>
                  <p class="card-category">Service Providers</p>
                  <h3 class="card-title">
                    <?php echo $serviceprovider_count; ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">person</i> Number of Service Providers who are enrolled
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">store</i>
                  </div>
                  <p class="card-category">Booking</p>
                  <h3 class="card-title">
                    <?php echo $operation_count; ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Amount of Bookings done by customers
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <h4 class="card-title">Traffic</h4>
                  <p class="card-category">Statistics for the users</p>
                </div>
                <div class="card-body table-responsive">
                    <div class="card-content">
						<canvas id="myChart"></canvas>
					</div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <h4 class="card-title">Taffic & Sales</h4>
                  <p class="card-category">Statistics for the users</p>
                </div>
                <div class="card-body table-responsive">
                    <br>
                    <div class="row">
                        <div class="col-md-2">
                            <div class="card-content">
                                <div class="progress-wrapper">
                                    <p>
                                        Popular Services (<?php echo $totalpopularservicecount; ?>)
                                    <//p>
                                    <div class="progress" style="height: 10px; width: 130.0px;">
                                        <div class="bg-danger" style="width: 100%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="card-content">
                                <div class="progress-wrapper">
                                    <p>
                                        Login User (<?php echo $service_user_count; ?>)
                                    </p>
                                    <div class="progress" style="height: 10px; width: 100.0px;">
                                        <div class="bg-primary" style="width: 100%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <div class="card-content">
                                <div class="progress-wrapper">
                                    <span>
                                        <?php echo $popularservicename; ?>
                                        <span class="float-right"><?php echo $popularservicecount; ?></span>
                                    </span>
                                    <div class="progress">
                                        <div class="bg-danger" style="width: <?php echo $popularservicecountratio; ?>%"></div>
                                    </div>
                                </div>
                                <div class="progress-wrapper">
                                    <span>
                                        <?php echo $popularservicename2; ?>
                                        <span class="float-right"><?php echo $popularservicecount2; ?></span>
                                    </span>
                                    <div class="progress">
                                        <div class="bg-danger" style="width:<?php echo $popularservicecountratio2; ?>%"></div>
                                    </div>
                                </div>
                                <div class="progress-wrapper">
                                    <span>
                                        <?php echo $popularservicename3; ?>
                                        <span class="float-right"><?php echo $popularservicecount3; ?></span>
                                    </span>
                                    <div class="progress">
                                        <div class="bg-danger" style="width:<?php echo $popularservicecountratio3; ?>%"></div>
                                    </div>
                                </div>
                                <div class="progress-wrapper">
                                    <span>
                                        <?php echo $popularservicename4; ?>
                                        <span class="float-right"><?php echo $popularservicecount4; ?></span>
                                    </span>
                                    <div class="progress">
                                        <div class="bg-danger" style="width:<?php echo $popularservicecountratio4; ?>%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="card-content">
                                <div class="progress-wrapper">
                                    <span>
                                        Male
                                        <span class="float-right"><?php echo $male; ?></span>
                                    </span>
                                    <div class="progress">
                                        <div class="bg-primary" style="width: <?php echo $male_ratio; ?>%"></div>
                                    </div>
                                </div>
                                <div class="progress-wrapper">
                                    <span>
                                        Female
                                        <span class="float-right"><?php echo $female; ?></span>
                                    </span>
                                    <div class="progress">
                                        <div class="bg-primary" style="width: <?php echo $female_ratio; ?>%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>

        </div>
@endsection


@section('scripts')

@endsection
