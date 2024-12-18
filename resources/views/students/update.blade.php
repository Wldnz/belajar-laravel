@extends("layout")


@section("content")
<form action="{{route("updatingData",$student->id)}}" method="post">
    @method("PUT")
    @csrf

  <div class="mb-3">
    <label for="id" class="form-label">ID</label>
    <input type="text" class="form-control" id="id" name="id" value="{{$student->id}}" readonly required>
  </div>

  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{$student->name}}" required>
  </div>
    
  <div class="mb-3">
    <label for="score" class="form-label">Score</label>
    <input type="text" class="form-control" id="score" name="score" value="{{$student->score}}" required>
  </div>
  <div class="mb-3">
    <label for="created_at" class="form-label">Created_at</label>
    <input type="text" class="form-control" id="created_at" name="created_at"  value="{{$student->created_at}}" required readonly>
  </div>
  <div class="mb-3">
    <label for="update_at" class="form-label">Update_at</label>
    <input type="text" class="form-control" id="update_at" name="updated_at"  value="{{$student->updated_at}}" required readonly>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection

