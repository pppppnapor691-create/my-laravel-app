@extends('layouts.app')

@section('main')
    <div class="container mt-5">
        <h2 class="mb-4">Список киберспортсменов</h2>
        <table class="table table-striped table-hover align-middle">
            <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Имя</th>
                <th>ELO (CS)</th>
                <th>Опыт</th>
            </tr>
            </thead>
            <tbody>
            @forelse($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->name }}</td>
                    <td>{{ $post->elo_cs }}</td>
                    <td>{{ $post->length_of_service_years }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center text-muted">Нет киберспортсменов</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
