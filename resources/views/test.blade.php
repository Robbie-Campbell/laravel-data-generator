<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table Config</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
    <body>
        <div class="container text-center">
            <div id="main-input-area" class="input-container">
                <div id="enter-tables">
                    <h3>Please Enter Table Name</h3>
                    <input id="tableName" type="text">
                    <br>
                    <button id = "enterTableName" class="btn btn-primary">Submit</button>
                </div>
                <h3 style="display: none;" id="creating-table"><u>Creating Table: </u></h3>
                <div style="display: none;" id="set-columns" >
                    <h3 class="border-bottom-0">Please select the number of rows</h3>
                    <select name="numberOfColumns" id="numberOfColumns">
                    </select>
                    <button id = "enterNoOfColumns" class="btn btn-primary">Enter</button>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
