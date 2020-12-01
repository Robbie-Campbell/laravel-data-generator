@extends("names")
@section("title")
    Delete User
@endsection
@section("content")
    <div class="input-container">
        <h1>Delete User</h1>
        <form action="delete_user" method="POST">
            @csrf
            <input type="text" name="id" placeholder="enter id for delete">
            <br>
            <button type="delete_user">Delete</button>
        </form>
    </div>
@endsection
