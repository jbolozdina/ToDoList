<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta htttp-equiv="Cache-control" content="no-cache">
    <title><?php echo SITENAME; ?></title>
    <!-- Init Bootstrap -->
    <link rel="stylesheet" href="<?php echo URLROOT ?>/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Init JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
    <body>
        
        <div class="custom-header">
            <h1>To-Do List</h1>
            <p>made for Printful by Jegors Bolozdiņa</p>
        </div>

        <div class="container">
            <div class="row row-cols-1 row-cols-md-2">
                <div class="shadowed-box">
                    <div class="row">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="check1">
                            <label class="form-check-label" for="check1">
                                <h4>Complete the assignment</h4>
                            </label>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <p class="creation-date">Today</p>
                        </div>
                        <div class="col-4">
                            <button type="button" class="btn btn-warning btn-sm col-7 float-end rounded-0">Edit</button>
                        </div>
                    </div>
                </div>
                <div class="shadowed-box">
                    <div class="row">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="check1">
                            <label class="form-check-label" for="check1">
                                <h4>Complete the assignment</h4>
                            </label>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <p class="creation-date">Yesterday</p>
                        </div>
                        <div class="col-4">
                            <button type="button" class="btn btn-warning btn-sm col-7 float-end rounded-0">Edit</button>
                        </div>
                    </div>
                </div>
                <div class="shadowed-box">
                    <div class="row">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="check1">
                            <label class="form-check-label" for="check1">
                                <h4>Complete the assignment</h4>
                            </label>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <p class="creation-date">Yesterday</p>
                        </div>
                        <div class="col-4">
                            <button type="button" class="btn btn-warning btn-sm col-7 float-end rounded-0">Edit</button>
                        </div>
                    </div>
                </div>
                <div class="shadowed-box">
                    <div class="row">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="check1">
                            <label class="form-check-label" for="check1">
                                <h4>Complete the assignment</h4>
                            </label>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <p class="creation-date">3 days ago</p>
                        </div>
                        <div class="col-4">
                            <button type="button" class="btn btn-warning btn-sm col-7 float-end rounded-0">Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


                <footer class="bd-footer col-12 text-center btn-fixed btn-create-task">
                    <a href="<?php echo URLROOT; ?>/pages/create"><button type="button" class="btn btn-success hovering col-3" onclick="addTaskAndScroll()">New</button></a>
                </footer>


        <script>
            
            
        </script>
    </body>
</html>