@extends('article.template')

@section('content')

<div class="container my-5 py-5">
  <div class="row">
    <div class="col-12">
      <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="title">
            <h1>Title</h1>
          </label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Article Title">
        </div>
        <div class="form-group">
          <label for="content">Content</label>
          <textarea name="content" class="form-control" rows="10" placeholder="Article Content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>


@endsection