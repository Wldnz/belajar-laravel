@extends("layout")


@section("content")
    <table class="table">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Score</th>
        </tr>
        @foreach ($students as $student)
           <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->name}}</td>
                <td class="d-flex justify-content-between">
                    {{$student->score}}
                    <div class="text-light">
                    <a href="{{route("showFormUpdateData",$student->id)}}" class="btn btn-sm btn-warning fw-bold">Edit here...</a>
                    <a href="{{route("showFormDeleteData",$student->id)}}" class="btn btn-sm btn-danger fw-bold">Delete here...</a>
                   </div>
                </td>
           </tr>
        @endforeach
    </table>
@endsection

