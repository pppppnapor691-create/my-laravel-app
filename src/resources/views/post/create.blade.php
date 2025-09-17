@extends('layouts.app')
@section('main')
    <div>
        <form action="{{route('post.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Name">
            </div>
            <div class="mb-3">
                <label for="elo_cs" class="form-label">Elo_cs</label>
                <input type="text" name="elo_cs" class="form-control" id="elo_cs" placeholder="Elo_cs">
            </div>
            <div class="mb-3">
                <label for="length_of_service_years" class="form-label">Length_of_service_years</label>
                <input type="text" name="length_of_service_years" class="form-control" id="length_of_service_years" placeholder="Length_of_service_years">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
