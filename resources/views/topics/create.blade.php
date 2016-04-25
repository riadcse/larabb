@extends('layout.app')

@section('content')
    <div class="container">
        <form method="post">
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" id="subject" placeholder="Subject">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" id="body">Body...</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection