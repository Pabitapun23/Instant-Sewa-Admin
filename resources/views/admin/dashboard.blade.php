@extends('layouts.master')

@section('title')
    Dashboard | Instant Sewa
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Service Provider</h4>
            <p class="card-category">Service Provider gives service to customers</p>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  ID
                </th>
                <th>
                  Name
                </th>
                <th>
                  Phone
                </th>
                <th>
                  Email
                </th>
                <th>
                  Address
                </th>
                <th>
                  Average Rating
                </th>
                <th>
                  Services
                </th>
              </thead>
              <tbody>
                <?php foreach ($serviceprovider as $key){?>
                <tr>
                  <td>
                    <?php echo $key->id ?>
                  </td>
                  <td>
                    <?php echo $key->username ?>
                  </td>
                  <td>
                    <?php echo $key->phoneno; ?>
                  </td>
                  <td>
                    <?php echo $key->email; ?>
                  </td>
                  <td>
                    <?php echo $key->address_address ?>
                  </td>
                  <td>
                    <?php echo $key->rating ?>
                  </td>
                  <td>
                    <?php echo $key->occupation ?>
                  </td>
                </tr>
              <?php }?>
              </tbody>
            </table>
          </div>
        </div>
        <span>
         {{ $serviceprovider-> links()}}
        </span>
        <style>
            .w-5{
              display: none;
            }
        </style>
        <br>
      </div>
    </div>
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Service User</h4>
          <p class="card-category">Service User take services from Service Provider</p>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  ID
                </th>
                <th>
                  Name
                </th>
                <th>
                  Phone
                </th>
                <th>
                  Email
                </th>
                <th>
                  Address
                </th>
                <th>
                  Top Services
                </th>
              </thead>
              <tbody>
                <?php foreach ($serviceuser as $key){?>
                <tr>
                  <td>
                    <?php echo $key->id ?>
                  </td>
                  <td>
                    <?php echo $key->username ?>
                  </td>
                  <td>
                    <?php echo $key->phoneno; ?>
                  </td>
                  <td>
                    <?php echo $key->email; ?>
                  </td>
                  <td>
                    <?php echo $key->address_address ?>
                  </td>
                  <td>
                    Fan repair
                  </td>
                </tr>  
               <?php }?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
    <!-- <script>
        $(document).ready( function () {
          $('#dataTable').DataTable();
        } );
    </script> -->
@endsection