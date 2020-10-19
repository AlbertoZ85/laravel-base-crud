@extends('layouts.app')
@section('title','Insert record')

@section('main')
<div class="container p-3">
    <form action="{{route('channels.store')}}" method="post">
        @csrf
        @method('POST')
        
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="Insert name" name='name' autocomplete="off">
        </div>
        <div class="form-group">
            <label for="sub">Subscribers</label>
            <input type="text" class="form-control" id="sub" placeholder="Insert # subscriptions" name='sub' autocomplete="off">
        </div>
        <div class="form-group">
            <label for="desc">Description</label>
            <textarea class="form-control" id="desc" placeholder="Insert description" rows="3" name="desc" autocomplete="off"></textarea>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" placeholder="Insert email" name='email' autocomplete="off">
        </div>
        <div class="form-group">
            <label for="notif">Notifications</label>
            <select class="form-control" id="notif" name="notif">
                <option value="">Select...</option>
                <option value="">Yes</option>
                <option value="">No</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Insert</button>
    </form>
</div>
@endsection