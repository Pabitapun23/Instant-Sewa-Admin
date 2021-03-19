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
                <tr>
                  <td>
                    1
                  </td>
                  <td>
                    Ram
                    </td>
                  <td>
                    9898986786
                  </td>
                  <td>
                    ram@gmail.com
                  </td>
                  <td>
                    Lamachaur
                  </td>
                  <td>
                    4
                  </td>
                  <td>
                    Electricity
                  </td>
                </tr>
                <tr>
                  <td>
                    2
                  </td>
                  <td>
                    Shyam
                  </td>
                  <td>
                    9898675778
                  </td>
                  <td>
                    shyam@gmail.com
                  </td>
                  <td>
                    Chauthe
                  </td>
                  <td>
                    3
                  </td>
                  <td>
                    Plumbing
                  </td>
                </tr>
                <tr>
                  <td>
                    3
                  </td>
                  <td>
                    Hari
                  </td>
                  <td>
                    9009862354
                  </td>
                  <td>
                    hari@gmail.com
                  </td>
                  <td>
                    Bagar
                  </td>
                  <td>
                    5
                  </td>
                  <td>
                    Painting
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
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
                <tr>
                  <td>
                    1
                  </td>
                  <td>
                    Sita
                  </td>
                  <td>
                    9897867578
                  </td>
                  <td>
                    sita@gmail.com
                  </td>
                  <td>
                    Deep
                  </td>
                  <td>
                    Fan repair
                  </td>
                </tr>
                <tr>
                  <td>
                    2
                  </td>
                  <td>
                    Suman
                  </td>
                  <td>
                    9875674877
                  </td>
                  <td>
                    suman@gmail.com
                  </td>
                  <td>
                    Amarsingh Chowk
                  </td>
                  <td>
                    Water Leakage repair
                  </td>
                </tr>
                <tr>
                  <td>
                    3
                  </td>
                  <td>
                    Gita
                  </td>
                  <td>
                    9875875983
                  </td>
                  <td>
                    gita@gmail.com
                  </td>
                  <td>
                    Prithvi Chowk
                  </td>
                  <td>
                    Wall Paint
                  </td>
                </tr>            
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

@endsection