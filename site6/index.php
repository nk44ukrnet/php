<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>
        function showSuggestion(str) {
            if(str.length == 0) {
                document.getElementById('output').innerHTML ='';
            } else {
                var xmlHttp = new XMLHttpRequest();
                xmlHttp.onreadystatechange = function () {
                    if(this.readyState === 4 && this.status === 200) {
                        document.getElementById('output').innerHTML = this.responseText;
                    }
                }
                xmlHttp.open('GET', 'suggest.php?q='+str, true);
                xmlHttp.send();
            }
        }
    </script>
</head>
<body>

<form action="">
    <input type="text" onkeyup="showSuggestion(this.value)">
</form>
<p>Suggestions: <b id="output"></b></p>

</body>
</html>
