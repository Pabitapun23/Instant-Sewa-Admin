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
                    <i class="material-icons">local_offer</i> Category status
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
                    <i class="material-icons">local_offer</i> Tracked from Github
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
                    <i class="material-icons">update</i> Just Updated
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
                    <i class="material-icons">date_range</i> Last 24 Hours
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
                                        Popular Services (80)
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
                                        Login User (120)
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
                                        Electrical
                                        <span class="float-right">50%</span>
                                    </span>
                                    <div class="progress">
                                        <div class="bg-danger" style="width: 50%"></div>
                                    </div>
                                </div>
                                <div class="progress-wrapper">
                                    <span>
                                        Plumbing
                                        <span class="float-right">60%</span>
                                    </span>
                                    <div class="progress">
                                        <div class="bg-danger" style="width:60%"></div>
                                    </div>
                                </div>
                                <div class="progress-wrapper">
                                    <span>
                                        Painting
                                        <span class="float-right">40%</span>
                                    </span>
                                    <div class="progress">
                                        <div class="bg-danger" style="width:40%"></div>
                                    </div>
                                </div>
                                <div class="progress-wrapper">
                                    <span>
                                        Cleaning
                                        <span class="float-right">20%</span>
                                    </span>
                                    <div class="progress">
                                        <div class="bg-danger" style="width:20%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="card-content">
                                <div class="progress-wrapper">
                                    <span>
                                        Male
                                        <span class="float-right">50%</span>
                                    </span>
                                    <div class="progress">
                                        <div class="bg-primary" style="width: 50%"></div>
                                    </div>
                                </div>
                                <div class="progress-wrapper">
                                    <span>
                                        Female
                                        <span class="float-right">60%</span>
                                    </span>
                                    <div class="progress">
                                        <div class="bg-primary" style="width:60%"></div>
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
