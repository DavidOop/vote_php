<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function () {
                $.ajax({
                    type: 'POST',
                    url: 'poll.php',
                    dataType: "json",
                    success: function (data, textStatus, jqXHR) {
                        $("#title_poll").html(data.title);
                       // console.log('success', data);
                        str = "";
                        for (i in data.choices) {
                            str += "<div class=radio><label><input type=radio name=optradio id=select>" + data.choices[i] + "</label></div>";
                        }
                        $("#choices").html(str);
                    }
                });
            });
        </script>

    <title>Vote</title>

</head>
<body>
    <h1 id="title_poll"></h1>
    <form>
        <div class="form-group">
            <label>First Name</label>
            <input type="name" class="form-control" id="first" placeholder="Enter your first name">
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <input type="name" class="form-control" id="last" placeholder="Enter your last name">
        </div>
        
        <div class="form-group" id="radiogroup">
            <div id="choices"></div>
        </div>
        
        
        <button type="submit" class="btn btn-default">Submit</button>
    </form>



    <div id="disp"></div>

</body>
</html>
