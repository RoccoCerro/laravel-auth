@extends('layouts.app')

@section('content')

<div class="container">
  <div>
    <a class="btn btn-dark" href="{{ route('admin.projects.create')}}">New Project</a>
  </div>

  <table class="table">
    <thead>
      <tr>
        <th>Title</th>
        <th>Slug</th>
        <th>Content</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($projects as $project)
      <tr>
        <td>
          <a href="{{ route('admin.projects.show', $project) }}">
            {{ $project->title }}
          </a>
        </td>
        <td>{{$project->slug}}</td>
        <td>{{$project->content}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection