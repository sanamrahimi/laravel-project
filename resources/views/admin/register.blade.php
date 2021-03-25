@extends('layouts.master')


@section('title')

   Registered Roles




@section('content')



<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Registered Roles</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        EDITE
                      </th>
                      <th>
                        DELETE
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                         name
                        </td>
                        <td>
                          email@gmail.com
                        </td>
                        <td>
                            <a href="/role-edit/{{ $row->id }}" class="btn btn-success">EDIT</a>
                        </td>
                        <td>
                         <form action="/role-delete/{{ $row->id }}" method="post">
                         {{ csrf_field() }}
                         {{ methode_field('DELETE')}}
                              <button type="submit" class="btn btn-danger">DELETE</button>
                              </form>
                        </td>
                      
                 
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>





@endsection


@section('scripts')


@endsection