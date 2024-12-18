@extends("layout")


@section("content")
<form action="{{route("addingData")}}" method="post">
    @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" required>
  </div>
  <div class="mb-3">
    <label for="score" class="form-label">Score</label>
    <input type="number" class="form-control" id="score" name="score" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection

