@extends('layouts.header&putter')
@section('admin')



    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8 mt-4">
                <div class="card p-4 ">
                    <img src="/caregivers/{{ $caregiver->image }}" class="rounded-circle" width="30%"/>
                    <p> Name : <b> {{ $caregiver->name }}</b></p>
                    <p> Specialize Categorise : <b> {{ $caregiver->description }}</b></p>
                </div>
                <div class="text-right">
                    <a href ="/admin" class="btn btn-primary mt-3">Back</a>
                </div>
            </div>
        </div >
    </div>
@endsection
