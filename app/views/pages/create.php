<?php
    include(realpath(__DIR__) . '/config.php'); // accessing and including config for easier important data retrieval
    require APPROOT . '/includes/head.php'; // head html
    require APPROOT . '/includes/header.php'; // header of the page
?>

<body>
    <div class="container">
        <div class="row">
            <form>
                <div class="pt-4 text-center">
                    <label for="taskName" class="form-label"><h4>New Task Name</h4></label>
                    <input type="text" class="form-control" id="taskName">
                </div>
                <div class="pt-4 text-center">
                    <label for="taskDesc" class="form-label"><h4>Task Description</h4></label>
                    <textarea class="form-control" id="taskDesc" rows="5"></textarea>
                </div>
            </form>
        </div>
        <div class="col-12 py-4 text-center">
            <a href="<?php echo URLROOT; ?>/app/models/inputTask.php"><button type="button" class="btn btn-success hovering col-3" onclick="addTaskAndScroll()">Submit</button></a>
        </div>
    </div>
</body>