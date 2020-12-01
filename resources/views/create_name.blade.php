@extends("names")
@section("title")
    Create new
@endsection
@section("content")
    <div class="input-container">
        <h1>Insert new staff</h1>
            <form action="submit" method="POST">
                @csrf
                    <input type="text" name="firstname" placeholder="first name">
                <br>
                    <input type="text" name="lastname" placeholder="last name">
                <br>
                    <input type="text" name="email" placeholder="email">
                <br>
                <button type="submit">Submit</button>
            </form>
    </div>
@endsection
