<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>To-Do List</title>
<!-- Init Bootstrap -->
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<!-- Init JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

<body>

<h1 id="top">To-Do List</h1>

<div class="container">
        <div class="row" id="tasks">
            <div class="col-xs-12 col-md-6">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="check1">
                    <label class="form-check-label" for="check1">
                        <h4>Complete the assignment</h4>   
                    </label>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p id="creationTime">16.06 14:55</p>
                <button type="button" class="btn btn-warning btn-sm float-end">Edit</button>
            </div>
        
            <div class="col-sm-12 col-md-6">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="check2">
                    <label class="form-check-label" for="check2">
                        <h4>Become smarter</h4>   
                    </label>
                </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p id="creationTime">16.06 14:55</p>

                    <button type="button" class="btn btn-warning btn-sm float-end">Edit</button>
            </div>

            <div class="col-xs-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check3">
                        <label class="form-check-label" for="check3">
                            <h4>WeirdChamp</h4>   
                        </label>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p id="creationTime">16.06 14:55</p>
                    <button type="button" class="btn btn-warning btn-sm float-end">Edit</button>
            </div>

            <div class="col-xs-12 col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check4">
                        <label class="form-check-label" for="check4">
                            <h4>Pog</h4>   
                        </label>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p id="creationTime">15.06 2:28</p>
                    <button type="button" class="btn btn-warning btn-sm float-end">Edit</button>
            </div>
        </div>

        <div class="row">
            <button type="button" class="btn btn-success col-12" onclick="addTask()">New</button>
        </div>

</div>

<script>

function addTask(){
    document.getElementById("tasks").innerHTML +=
    '<div class="col-xs-12 col-md-6">' +
        '<div class="form-check">' +
            '<input class="form-check-input" type="checkbox" id="check5">' +
            '<label class="form-check-label" for="check5">' +
                '<h4>tell me this works</h4>' +
            '</label>' +
        '</div>' +
    '<p>this totally works</p>' +
    '<p id="creationTime">16.06 2:28</p>' +
    '<button type="button" class="btn btn-warning btn-sm float-end">Edit</button>' +
    '</div>';      
}

</script>

</body>

</html>