@extends('welcome')
@section('content')
<div class="admin-section">
  <h1>This is admin panel</h1>
</div>
<div class="content-section">
<p>
 <a href="{{ Route('add.student') }}" class="btn btn-danger mt-5">Add Student</a>
</p>
<hr>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="" method="POST" enctype="multipart/form-data">
     @csrf
    <div class="form-group">
      <label for="exampleFormControlFile1">Enter the title here</label>
      <input type="text" class="form-control" name="title">
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Post Category</label>
      <select class="form-control" name="category_id">
        <option value="">1</option>
        <option value="">2</option>
        <option value="">3</option>
      </select>
    </div>
    <div class="form-group">
     <label for="comment">Write Post:</label>
     <textarea class="form-control" rows="5" name="details"></textarea>
    </div>
   <div class="form-group">
     <label for="exampleFormControlFile1">Upload your images</label>
     <input type="file" class="form-control-file" name="image" require>
   </div>
   <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
</form>
</div>

@endsection