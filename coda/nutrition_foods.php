<!DOCTYPE html>
<html>
    <head>
        <?php include('head.html'); ?>
    </head>
    <body>
        <header class="bar bar-nav grey-nav">
            <a href="nutrition.php" class="icon icon-left-nav pull-left"></a>
            <h1 class="title">Slim down plan</h1>
        </header>
        
        <header class="bar bar-nav bar-header-secondary">
            <div class="segmented-control">
                <a class="control-item" href="nutrition_detail.php">General</a>
                <a class="control-item active" href="nutrition_meals.php">Plan meals</a>
            </div>
        </header>
            
        <div class="content">
            <ul class="table-view">
                
                <li class="table-view-divider">
                    Meal 1
                    <div class="media-body" style="float:right">
                      <p>8:00AM post workout</p>
                    </div>
                </li>
<!--
                <li class="table-view-cell">
                    <a class="navigate-right" href="#exercise-modal">
                      A1: Bench Press
                    </a>
                </li>
-->
                <li class="table-view-cell">
                    <a class="navigate-right">
                      A2: Deadlift
                    </a>
                </li>
                <li class="table-view-cell">
                    <a class="navigate-right">
                      Shoulder Press
                    </a>
                </li>
                <li class="table-view-divider">Wednesday</li>
                <li class="table-view-cell">
                    <a class="navigate-right">
                      Bench Press
                    </a>
                </li>
                <li class="table-view-cell">
                    <a class="navigate-right">
                      B1: Deadlift
                    </a>
                </li>
                <li class="table-view-cell">
                    <a class="navigate-right">
                      B2: Shoulder Press
                    </a>
                </li>
            </ul>
        </div>
        <div id="exercise-modal" class="modal">
            <header class="bar bar-nav">
                <a class="icon icon-close pull-right modal-close" href="#exercise-modal"></a>
                <h1 class="title">Bench Press</h1>
            </header>
            <div class="content">
                <div class="content-padded">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br/><br/>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </div>
        </div>
        <?php 
            $active_tab = 'progress';
            include('footer.php'); 
        ?>
    </body>
</html>