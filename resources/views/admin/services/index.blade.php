@extends('layouts.admin')

@section('page-title', 'Tutti i servizi')

@section('content')
  <div class="section">
    <div class="container">
      <table class="table">
        <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Titolo</th>
          <th scope="col">Pagina dedicata</th>
          <th scope="col">In Homepage</th>
          <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($services as $service)
          <tr>
            <th scope="row">{{ $service->id }}</th>
            <td>{{ $service->title }}</td>
            <td>{!! $service->has_page ? "<span class='badge bg-success'>Si</span>" : '-' !!}</td>
            <td>{!! $service->featured ? "<span class='badge bg-success'>Si</span>" : '-'  !!}</td>
            <td>
              <a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-primary btn-sm">Modifica</a>
              <form action="{{ route('admin.services.destroy', $service->id) }}" method="post" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Elimina</button>
              </form>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
