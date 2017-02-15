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
                    Monday
                </li>
                <li class="table-view-cell">
                    <a class="navigate-right" href="#meal-modal">
                      Meal 1: Breakfast
                    </a>
                    <div class="media-body">
                      <p>8:00AM &nbsp;&nbsp;Pre workout</p>
                    </div>
                </li>
                <li class="table-view-cell">
                    <a class="navigate-right" href="nutrition_foods.php">
                      Meal 2: Snack
                    </a>
                    <div class="media-body">
                      <p>10:00AM &nbsp;&nbsp;Post workout</p>
                    </div>
                </li>
                <li class="table-view-cell">
                    <a class="navigate-right" href="nutrition_foods.php">
                      Meal 3: Lunch
                    </a>
                    <div class="media-body">
                      <p>12:30PM</p>
                    </div>
                </li>
                <li class="table-view-divider">
                    Tuesday
                </li>
                <li class="table-view-cell">
                    <a class="navigate-right" href="nutrition_foods.php">
                      Meal 1: Breakfast
                    </a>
                    <div class="media-body">
                      <p>8:00AM &nbsp;&nbsp;Pre workout</p>
                    </div>
                </li>
                <li class="table-view-cell">
                    <a class="navigate-right" href="nutrition_foods.php">
                      Meal 2: Snack
                    </a>
                    <div class="media-body">
                      <p>10:00AM &nbsp;&nbsp;Post workout</p>
                    </div>
                </li>
                <li class="table-view-cell">
                    <a class="navigate-right" href="nutrition_foods.php">
                      Meal 3: Lunch
                    </a>
                    <div class="media-body">
                      <p>12:30PM</p>
                    </div>
                </li>
            </ul>
        </div>
        <div id="meal-modal" class="modal">
            <header class="bar bar-nav">
                <a class="icon icon-close pull-right modal-close" href="#meal-modal"></a>
                <h1 class="title">Meal 1: Breakfast</h1>
            </header>
            <div class="content">
                <ul class="table-view">
                  <li class="table-view-cell media">
                    <a>
                      <div class="media-body">
                        Coffee
                        <p>2 esspresso shots, no sugar, no milk. Preferrably from Mary's Bakery.</p>
                      </div>
                    </a>
                  </li>
                  <li class="table-view-cell media">
                    <a>
                      <div class="media-body">
                        1 x Banana
                      </div>
                    </a>
                  </li>
                  <li class="table-view-cell media">
                    <a>
                      <div class="media-body">
                        Oats
                        <p>1 cup, with almond milk.</p>
                      </div>
                    </a>
                  </li>
                </ul>
            </div>
        </div>
        <?php 
            $active_tab = 'progress';
            include('footer.php'); 
        ?>
    </body>
</html>