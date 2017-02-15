<!DOCTYPE html>
<html>
  <head>
    <?php include('head.html'); ?>
  </head>
  <body>
    <header class="bar bar-nav grey-nav">
        <a href="progress.php" class="icon icon-left-nav pull-left"></a>
      <a href="selectclient.html" class="icon fa fa-plus-circle pull-right" data-transition="slide-in"></a>
      <h1 class="title">Girth</h1>
    </header>

    <div class="content">
        
        <?php include('current_client.html'); ?>
        
        
        <ul class="table-view">
          <li class="table-view-cell">
            <a href="program_detail.php" class="navigate-right">
                <div class="media-body">
                  120cm<br/>
                  <p>18 Aug 2014 &nbsp;&nbsp;&nbsp;5 sites measured</p>
                </div>
            </a>
          </li>
          <li class="table-view-cell">
            <a class="navigate-right">
              <div class="media-body">
                125cm
                <p>22 Sep 2014 &nbsp;&nbsp;&nbsp;5 sites measured</p>
              </div>
            </a>
          </li>
        </ul>

    </div><!-- /.content -->
    
    <?php 
        $active_tab = 'progress';
        include('footer.php'); 
    ?>
  </body>
</html>
