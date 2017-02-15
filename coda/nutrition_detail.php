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
        <div class="content">
            <header class="bar bar-nav bar-header-secondary">
                <div class="segmented-control">
                    <a class="control-item active" href="index.php">General</a>
                    <a class="control-item" href="nutrition_meals.php">Plan meals</a>
                </div>
            </header>
            <br/><br/>
            <form class="input-group">
                <div class="input-row">
                    <label>Label</label>
                    <input type="text" placeholder="Mister Ratchet" value="Slim down plan" style="text-align:right">
                </div>
                <div class="input-row">
                    <label>Start Date</label>
                    <input type="email" placeholder="ratchetframework@gmail.com" value="18 Aug 2014" style="text-align:right">
                </div>
                <div class="input-row">
                    <label>Review In</label>
                    <input type="text" placeholder="goRatchet" value="2 weeks" style="text-align:right">
                </div>
            </form>
            <div class="content-padded">
            	Summary
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco.
                </p>
            </div>
        </div>
        <?php 
            $active_tab = 'progress';
            include('footer.php'); 
        ?>
    </body>
</html>