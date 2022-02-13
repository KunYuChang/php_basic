<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Search Users</h1>
        <form>
            Serach User: <input type="text" onkeyup="showSuggestion(this.value)">
        </form>
        <p>Suggestions: <span id="output " class="fw-bold"></span></p>
    </div>

    <script>
        function showSuggestion(str) {
            if (str.length == 0) {
                // 未完待續
            }
        }
    </script>
</body>

</html>