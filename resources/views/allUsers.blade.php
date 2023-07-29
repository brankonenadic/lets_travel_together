
@extends('layouts.app')

@section('content')
        <div class="mt-5">

                <h1 class="text-center p-5">WELCOME</h1>
                <div class="table-responsive p-3">
                  
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">id</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Country</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach ($users as $user)
                     <tr>
                        <th></th>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->firstname}}</td>
                        <td>{{$user->lastname}}</td>
                        <td>{{App\Models\Country::find($user->country_id)->name}}</td>
                      </tr>
                     @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">id</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Country</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
        </div>
        <div class="pagination justify-content-center">
  {{$users->links()}}
</div>
        @endsection