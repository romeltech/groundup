@extends('layout')
@section('title', 'Contact Us')
@section('content')
    <h1>Contact Us</h1>

    <form action="/contact" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name" id="name" value="{{old('name')}}">
        </div>
        <div>{{ $errors->first('name') }}</div>
        
        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email" value="{{old('email')}}">
        </div>
        <div>{{ $errors->first('email') }}</div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" name="message" id="message" value="{{old('message')}}"></textarea>
        </div>
        <div>{{ $errors->first('message') }}</div>

        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
@endsection