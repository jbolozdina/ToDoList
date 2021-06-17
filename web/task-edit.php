<?php require_once "web/header.php"; ?>

<div class="container">
    <form name="frmAdd" method="post" action="" id="frmAdd"
    onSubmit="return validate();">
        <div class="pt-4 text-center">
            <label for="taskName" class="form-label"><h4>New Task Name</h4></label>
            <span id="name-info" class="info"></span>
            <input type="text" name="name" class="form-control" id="name" value="<?php echo $result[0]["name"]; ?>">
        </div>
        <div class="pt-4 text-center">
            
            <label for="taskDesc" class="form-label fix-left"><h4>Task Description</h4></label>
            <span id="description-info" class="info"></span>
            <textarea type="text" name="description" id="description" class="form-control" rows="5"><?php echo $result[0]["description"];?></textarea>
        </div>
        <div class="col-12 py-4 text-center">
            <button class="btn btn-success hovering col-3" value="Add" name="add" id="btnSubmit" type="submit">Save</button>
        </div>
    </form>
</div>

        
    </div>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script>
function validate() {
    var valid = true;   
    $(".demoInputBox").css('background-color','');
    $(".info").html('');
    
    if(!$("#name").val()) {
        $("#name-info").html("(required)");
        $("#name").css('background-color','#FFFFDF');
        valid = false;
    }
    if(!$("#description").val()) {
        $("#description-info").html("(required)");
        $("#description").css('background-color','#FFFFDF');
        valid = false;
    }
    return valid;
}
</script>
    </body>
    </html>