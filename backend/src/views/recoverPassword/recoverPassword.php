<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 

<html lang="en" class="no-js"> <!--<![endif]-->
    <head>
      <title>Recover Password</title>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="author" content="Collap com">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Password Recovery from Collap">
      <meta name="keywords" content="Challenge, Project, Problem solving, problem, article, collaborate, collaboration, digitalCollaboration">

      <?php include_once 'views/header/header.php'; ?>

    </head>

    <body>

        <?php include_once 'views/navbar/navbar.php'; ?>

        <div id="wrapper">

            <div class="content">
                <div class="jumbotron">
                    <p align='center'>Reset your password</p>
                    <div class="alert-placeholder"> </div>
                    <?php 
                        if ($accessed_or_not == 0) {
                            echo "<p align='center'>Something going wrong here, Please try again</p>";
                        }
                        else {
                    ?>
                    <form class="form-horizontal" id="form_elem" onsubmit="<?= $this->baseUrl ?>recoverPassword/updatePassword">
                        <div class="form-group">
                            <div class="col-lg-5">
                                <input type="password" class="form-control" name="passwordnewchange1" id="example" placeholder="password" /><br>
                                <input type="password" class="form-control" name="passwordnewchange2" placeholder="Re-enter password"/><br/><br/>
                                <input type="submit" class="btn btn-primary btn-lg" name = "updatePassword" id="validate" value = "Update">
                            </div>
                        </div>
                    </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    
    </body>
</html>