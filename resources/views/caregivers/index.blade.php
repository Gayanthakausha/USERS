@extends('layouts.app')

@section('admin')
   <div class="container">
    <div class="text-right">
        <a href ="caregivers/create" class="btn btn-dark mt-3">Add Caregiver</a>
    </div>
    <div class="card p-4 ">
        <table class="table table-hover mt-2">
            <thead>
                <tr>
                    <th>Sno</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Status</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($caregivers as $caregiver )
                    <tr>
                        <td>{{$loop->index+1}}</td>
                        <td>{{$caregiver->name}}</td>
                        <td><img src="caregivers/{{$caregiver->image}}" class="rounded-circle" width="40" height="40"/></td>

                        <td>
                          <a href="caregivers/{{$caregiver->id}}/edit" class="btn btn-dark btn-sm">Edit</a>
                          <a href="caregivers/{{$caregiver->id}}/show" class="btn btn-success btn-sm">View</a>

                            <form method="POST" class="d-inline" action="caregivers/{{$caregiver->id}}/delete">
                                 @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>

                @endforeach
            </tbody>
    </div>
        </table>
        {{$caregivers->links()}}

    </div>

   @endsection
