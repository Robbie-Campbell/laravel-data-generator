@extends("names")
@section("title")
    Update User
@endsection
@section("content")
    <div class="input-container">
        <h1>Update staff</h1>
        <form action="commit_update" method="POST">
            @csrf
            <input type="text" name="id" placeholder="enter id">
            <br>
            <input type="text" name="email" placeholder="update email">
            <br>
            <button type="commit_update">Update</button>
        </form>
    </div>
@endsection
