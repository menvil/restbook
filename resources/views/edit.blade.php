<!-- app/views/index.php -->

<!doctype html> <html lang="en"> <head> <meta charset="UTF-8"> <title>Laravel and Angular Book System</title>

    <!-- CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->
    <style>
        body        { padding-top:30px; }
        form        { padding-bottom:20px; }
        .book    { padding-bottom:20px; }
    </style>

    <!-- JS -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script> <!-- load angular -->

    <!-- ANGULAR -->
    <!-- all angular resources will be loaded from the /public folder -->
    <script src="/js/controllers/mainCtrl.js"></script> <!-- load our controller -->
    <script src="/js/services/bookService.js"></script> <!-- load our service -->
    <script src="/js/app.js"></script> <!-- load our application -->


</head>
<!-- declare our angular app and controller -->
<body class="container" ng-app="bookApp" ng-controller="editController"> <div class="col-md-8 col-md-offset-2">

    <!-- PAGE TITLE =============================================== -->
    <div class="page-header">
        <h2>Laravel and Angular Single Page Application</h2>
        <h4>Book REST System</h4>
    </div>
    <p><a  class="text-muted" href="/">&#8592; Back</a></p>
    <!-- NEW Book FORM =============================================== -->
    <form name="editForm" ng-submit="editBook()"> <!-- ng-submit will disable the default form action and use our function -->
        <!-- AUTHOR -->
        <div class="form-group">
            <input type="text" class="form-control input-sm" name="author" ng-model="bookData.author" placeholder="Author Name" required>
        </div>

        <!-- Book name -->
        <div class="form-group">
            <input type="text" class="form-control input-lg" name="name" ng-model="bookData.name" placeholder="Title of the book" required>
        </div>

        <!-- SUBMIT BUTTON -->
        <div class="form-group text-right">
            <button type="submit" class="btn btn-primary btn-lg">Edit</button>
        </div>
    </form>

</div>
</body>
</html>