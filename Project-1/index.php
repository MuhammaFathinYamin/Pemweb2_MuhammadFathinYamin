<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Automatic Page Redirect please sit and wait</title>
    <script>
        function pageRedirect() {
            window.location.replace("front-end/home.php");
        }
        setTimeout("pageRedirect()", 1000);
    </script>
</head>


</html>