
@extends('layouts.admin')


@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Paket Travel{{$item->title}}</h1>
    </div>

   
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>        
    @endif

    <div class="card shadow">
        <div class="card-body">
           <form action="{{route('travel-package.update', $item->id)}}" method="POST">
               @method('PUT')
               @csrf
               <div class="from-group">
                   <label for="title">TITLE</label>
                   <input type="text" class="form-control" name="title" placeholder="Title" value="{{$item->title}}">
               </div>
               <div class="from-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" name="location" placeholder="Location" value="{{$item->location}}">
            </div>
            <div class="form-group">
                <label for="about">About</label>
                <textarea name="about" id="" class="d-block w-100 form-control" rows="10">{{$item->location}}</textarea>
            </div>
            <div class="form-group">
                <label for="Featured Event">Featured Event</label>
                <input type="text" class="form-control" name="featured_event" placeholder="Featured Event" value="{{$item->featured_event}}">
            </div>
            <div class="form-group">
                <label for="about">Language</label>
                <input type="text" class="form-control" name="language" placeholder="Language" value="{{$item->language}}">
            </div>
            <div class="form-group">
                <label for="foods">Foods</label>
                <input type="text" class="form-control" name="foods" placeholder="Foods" value="{{$item->foods}}">
            </div>
            <div class="form-group">
                <label for="departure_date">Depature Date</label>
                <input type="date" class="form-control" name="departure_date" placeholder="Departure Date" value="{{$item->depature_date}}">
            </div>
            <div class="form-group">
                <label for="duration">Duration Date</label>
                <input type="text" class="form-control" name="duration" placeholder="duration" value="{{$item->duration}}">
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" class="form-control" name="type" placeholder="Type" value="{{$item->type}}">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" name="price" placeholder="Price" value="{{$item->type}}">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
           </form>
        </div>
    </div>

    
@stop

