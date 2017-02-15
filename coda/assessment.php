<!DOCTYPE html>
<html>
  <head>
    <?php include('head.html'); ?>
  </head>
  <body>
    <header class="bar bar-nav grey-nav">
        <a href="progress.html" class="icon icon-left pull-left" data-transition="slide-out"></a>
      <a href="selectclient.html" class="icon fa fa-user pull-right" data-transition="slide-in"></a>
      <h1 class="title">Progress</h1>
    </header>

    <div class="content">
        
        <div class="content-padded">
          <h6>CURRENT CLIENT</h6>
        </div>
        <ul class="table-view">
          <li class="table-view-cell media">
            <a class="navigate-right">
                <img class="media-object pull-left" src="clients/kim.jpg">
                <div class="media-body current-client">
                    Kim Solomons
                </div>
            </a>
          </li>
        </ul>
        
        <div class="content-padded">
          <h6>WEIGHT ASSESSMENTS FOR KIM</h6>
        </div>
        <ul class="table-view">
          <li class="table-view-cell">
            <a class="navigate-right">
              <span class="badge">3</span>
              Barbell bench max
            </a>
          </li>
          <li class="table-view-cell">
            <a class="navigate-right">
              <span class="badge">3</span>
              100 meter sprint time
            </a>
          </li>
        </ul>
        

    </div><!-- /.content -->
    
    <?php include('footer.html'); ?>
  </body>
</html>
