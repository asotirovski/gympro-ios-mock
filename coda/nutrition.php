<!DOCTYPE html>
<html>
  <head>
    <?php include('head.html'); ?>
  </head>
  <body>
    <header class="bar bar-nav grey-nav">
        <a href="progress.php" class="icon icon-left-nav pull-left"></a>
        <h1 class="title">Nutrition</h1>
    </header>
    
    <header class="bar bar-nav bar-header-secondary">
        <div class="segmented-control">
            <a class="control-item active" href="nutrition_detail.php">Plans</a>
            <a class="control-item" href="nutrition_foods.php">Foods</a>
        </div>
    </header>
        
    <div class="content">
        
        <?php include('current_client.html'); ?>
        
        <ul class="table-view">
          <li class="table-view-cell">
            <a href="nutrition_detail.php" class="navigate-right">
                <div class="media-body">
                  Slim down plan<br/>
                  <p>18 Aug 2014</p>
                </div>
            </a>
          </li>
          <li class="table-view-cell">
            <a href="nutrition_detail.php" class="navigate-right">
              <div class="media-body">
                Bulk up plan
                <p>22 Sep 2014</p>
              </div>
            </a>
          </li>
        </ul>

    </div><!-- /.content -->
    
    <?php include('footer.html'); ?>
  </body>
</html>
