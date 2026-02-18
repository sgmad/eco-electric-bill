</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Eco-Friendly Electric Bill App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        h1,
        .h4 {
            color: #008000;
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-8 col-md-6 col-lg-4">
                <div class="card bill-card shadow-sm">
                    <div class="card-body">
                        <h1 class="h4 mt-2 mb-4 text-center">Eco-Friendly Electric Bill App</h1>
                        <form>
                            <div class="form-group">
                                <label for="consumerName">Consumer Name</label>
                                <input type="text" class="form-control" id="consumerName">
                            </div>
                            <div class="form-group">
                                <label for="previousReading">Previous Reading</label>
                                <input type="text" class="form-control" id="previousReading">
                            </div>
                            <div class="form-group">
                                <label for="currentReading">Current Reading</label>
                                <input type="text" class="form-control" id="currentReading">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Customer Type</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Residential</option>
                                    <option>Commercial</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
