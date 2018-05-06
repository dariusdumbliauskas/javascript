<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <title>Login Php</title>
  </head>
  <body>

  <div class="container">
  <h1>Change password</h1>
  <p>Maximum password length - 8 characters.</p>

  <form action="change.php" method="post">
            <input name="psw1" placeholder="Password" type="password" maxlength="8">
            <input name="psw2" placeholder="Repeat Password" type="password" maxlength="8">
            <button class="btn btn-primary">Change password</button>
            
  </form>
</div>

<div class="container">
<button onclick="login()">ajax</button>
<small>Niekaip nepavyksta uzkurti Ajax metodo </small>
<p></p>
</div>


<script>
     function login() {
            $('p').html('<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i><span class="sr-only">Connecting...</span>');
            $.post('change.php', {
                psw1: $('input[name="psw1"]').val(),
                psw2: $('input[name="psw2"]').val()
            }).done(function(resp) {
                if (resp.success) {
                    $('p').html(resp.token);
                } else {
                    $('p').html(resp.error)
                }
            });
        }
  </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>