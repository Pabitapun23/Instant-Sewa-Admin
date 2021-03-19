@extends('layouts.master')

@section('title')
    Registered Roles | Instant Sewa
@endsection


@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header card-header-primary">
          <h4 class="card-title ">Services Management</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  ID
                </th>
                <th>
                  Service Name
                </th>
                <th>
                  ADD
                </th>
                <th>
                  EDIT
                </th>
                <th>
                  DELETE
                </th>
              </thead>
              <tbody>
                <tr>
                  <td>
                    1
                  </td>
                  <td>
                    Electricity
                  </td>
                  <td>
                    <a href="#" class="btn btn-success">ADD</a>
                  </td>
                  <td>
                    <a href="#" class="btn btn-success">EDIT</a>
                  </td>
                  <td>
                    <a href="#" class="btn btn-danger">DELETE</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    2
                  </td>
                  <td>
                    Plumbing
                  </td>
                  <td>
                    <a href="#" class="btn btn-success">ADD</a>
                  </td>
                  <td>
                    <a href="#" class="btn btn-success">EDIT</a>
                  </td>
                  <td>
                    <a href="#" class="btn btn-danger">DELETE</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    3
                  </td>
                  <td>
                    Painting
                  </td>
                  <td>
                    <a href="#" class="btn btn-success">ADD</a>
                  </td>
                  <td>
                    <a href="#" class="btn btn-success">EDIT</a>
                  </td>
                  <td>
                    <a href="#" class="btn btn-danger">DELETE</a>
                  </td>
                </tr> 
                <tr>
                  <td>
                    4
                  </td>
                  <td>
                    Cleaning
                  </td>
                  <td>
                    <a href="#" class="btn btn-success">ADD</a>
                  </td>
                  <td>
                    <a href="#" class="btn btn-success">EDIT</a>
                  </td>
                  <td>
                    <a href="#" class="btn btn-danger">DELETE</a>
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