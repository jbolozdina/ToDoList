<?php require_once "web/header.php"; ?>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2">
            <?php
                if (!empty($result)) {
                    foreach ($result as $k => $v) { // loop through elements if not empty
            ?>
            <div class="shadowed-box">
                <div class="row">
                    
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id='<?php echo "check" . $result[$k]["id"];?>'> <!-- concatenate string "check" with the id of the task to have unique checkbox IDs
                                                                                                                            it's needed to make sure you don't trigger the first checkbox by clicking on another element
                                                                                                                           also lets you to keep track of the IDs you have in the database, which isn't exactly secure, but hey -->
                        <label class="form-check-label" for='<?php echo "check" . $result[$k]["id"];?>'>
                            <h4><?php echo $result[$k]["name"];?></h4>
                        </label>
                    </div>
                    <p><?php echo $result[$k]["description"];?></p> <!-- retrieve and echo description to put it in the paragraph -->
                </div>
                <div class="row">
                    <div class="col-8">
                        <p class="creation-date"><?php echo $result[$k]["doc"];?></p>
                    </div>
                    <div class="btn-group col-4" role="group">
                        <button type="button" class="btn btn-danger btn-sm"><a class="destyled-btn" href="index.php?action=task-delete&id=<?php echo $result[$k]["id"];?>">🗑️</a></button>
                        <button type="button" class="btn btn-warning btn-sm"><a class="destyled-btn" href="index.php?action=task-edit&id=<?php echo $result[$k]["id"];?>">Edit</a></button>
                    </div>
                </div>
            </div>
            <?php
                }
            }
            ?>
        </div>

        
                
    </div>

    <footer class="bd-footer col-12 text-center btn-fixed btn-create-task">
        <a id="btnAddAction" href="index.php?action=task-add"><button type="button" class="btn btn-success hovering col-3">New</button></a>
    </footer> <!-- a button fixed in the footer. looks cool -->
</body>
</html>