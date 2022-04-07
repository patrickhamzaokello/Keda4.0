<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
</head>
<body>

<div class="creationbuttons">

<div class="itemcreatebutton">
    <div onclick="createpublicplaylist()" class="create">Create</div>
</div>


</div>
<script>

function createpublicplaylist() {
  $.post("../includes/autoscripts/createpublicplaylist.php", {
            creator: "pk-mwonyaa"
        }, function(data) {
            alert("created");
        });
}

</script>
</body>
</html>

