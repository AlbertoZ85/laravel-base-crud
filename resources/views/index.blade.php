@extends('layouts.app')
@section('title', 'Homepage')

@section('main')

<div class="container p-3">
    <h1 class="text-primary">Channels' list</h1>
    <table class="table table-dark table-striped table-bordered">
        <thead>
            <tr class="table-primary text-black-50">
                <th>ID</th>
                <th>Name</th>
                <th>Subscribers</th>
                <th>Description</th>
                <th>Email</th>
                <th>Notifications</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($channels as $channel)
                <tr>
                    <th scope="row" class="text-center">{{$channel->id}}</th>
                    <td class="text-center">{{$channel->name}}</td>
                    <td class="text-center">{{$channel->subscribers}}</td>
                    <td>{{$channel->description}}</td>
                    <td class="text-center">{{$channel->email}}</td>
                    <td class="text-center">{{$channel->notifications}}</td>
                    <td><a href="" class="btn btn-info">Edit</a></td>
                    <td>
                        <form action="" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <p>No channel found!</p>
            @endforelse
        </tbody>
    </table>
</div>
@endsection