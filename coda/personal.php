<!DOCTYPE html>
<html>
  <head>
    <?php include('head.html'); ?>
  </head>
  <body>
    <header class="bar bar-nav grey-nav">
        <a href="settings_tab.php" class="icon icon-left-nav pull-left"></a>
        <a href="addsession.html" class="icon fa fa-edit pull-right" data-transition="slide-in"></a>
        <h1 class="title">Personal Info</h1>
    </header>

    <div class="content">
        
        <ul class="table-view" style="background: #ebebeb;margin-top:0;margin-bottom:0;border-top:none">
          <li class="table-view-cell media">
            <a class="navigate-right">
                <img class="media-object pull-left" src="clients/aleks.jpg">
                <div class="media-body">
                    Aleks Sotirovski
                    <p>aleks@gympro.com</p>
                </div>
            </a>
          </li>
        </ul>
        
        <form class="input-group">
                <div class="input-row">
                    <label>First name</label>
                    <input type="text" placeholder="Mister Ratchet" value="Aleks" style="text-align:right">
                </div>
                <div class="input-row">
                    <label>Last name</label>
                    <input type="email" placeholder="ratchetframework@gmail.com" value="Sotirovski" style="text-align:right">
                </div>
                <div class="input-row">
                    <label>Email</label>
                    <input type="text" placeholder="goRatchet" value="aleks@gympro.com" style="text-align:right">
                </div>
                <div class="input-row">
                    <label>Company</label>
                    <input type="email" placeholder="ratchetframework@gmail.com" value="Gympro Ltd" style="text-align:right">
                </div>
                <div class="input-row">
                    <label>Mobile</label>
                    <input type="text" placeholder="goRatchet" value="61451223035" style="text-align:right">
                </div>
            </form>
    </div>
    
    <?php 
        $active_tab = 'account';
        include('footer.php'); 
    ?>
  </body>
</html>