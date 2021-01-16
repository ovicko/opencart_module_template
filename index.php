<?php

if ( isset($_POST['module_name'])) {

    $module_name = $_POST['module_name'];
    echo $module_name;
}
?>


<!DOCTYPE html>
<html>

<head>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Generate OpenCart Module</title>
</head>

<body>

    <!------ Include the above in your HEAD tag ---------->

    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-wrap">
                        <h3>Generate OpenCart Module</h3>
                        <form role="form" action="#" method="post" id="main-form" autocomplete="off">
                            <div class="form-group">
                                <label for="module" class="sr-only">Module Name</label>
                                <input type="text" name="module_name" id="module" class="form-control" placeholder="Enter Module name">
                            </div>

                            <input type="submit" id="btn-login" class="btn btn-primary btn-lg btn-block" value="Generate">
                        </form>
                        <hr>
                    </div>
                </div> <!-- /.col-xs-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section>

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p><strong>Author: </strong>AMWOLLO</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
<html