<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Page</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="#">Admin Name</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Statistics <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Category</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Product</a>
            </li>
        </ul>
    </div>
</nav>
    <div class="container">
        <br />
        <h3 align="center">statistics</h3>
        <table class="table table-bordered table-striped">
            <tr>
                <th width="10%">Finished products</th>
                <th width="35%">most bought product</th>


            </tr>
            @for($i=0;$i<10;$i++)
                <tr>
                    <td>Product {{$i}}</td>
                    <td>Product {{30-$i}}</td>

                </tr>
            @endfor
        </table>

</body>
</html>