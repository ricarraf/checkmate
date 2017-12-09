<header>
    <a href="/index.php"><img src="images/logo-check-mate.png" alt="Logo" width="188" height="71"></a>
    <?php if(strpos($_SERVER['PHP_SELF'],'/index.php')!==false){
        if(isset($_SESSION['username'])){?>
            <select name="categories" id="categories">
                <option value="nocard">Select One Category</option>
                <?php
                $categories=getUserCategories($_SESSION['username']);
                for($i = 0; $i<count($categories);$i++){
                    ?>
                    <option value="todos.php?category_id=<?=$categories[$i]['category_id']?>"><?=$categories[$i]['category_name']?></option>
                    <?php
                }
                ?>
            </select>
        <?php }else{?>
        <div class="header-left">
            <a class='log-in' href="/login.php">Log In</a>
            <a class='try-it' href="#">Try Before Sign Up</a>
        </div>
    <?php }}?>
    <?php if(strpos($_SERVER['PHP_SELF'],'/login.php')!==false){
        if(isset($_SESSION['username'])){?>
            <select name="categories" id="categories">
                <option value="nocard">Select One Category</option>
                <?php
                $categories=getUserCategories($_SESSION['username']);
                for($i = 0; $i<count($categories);$i++){
                    ?>
                    <option value="todos.php?category_id=<?=$categories[$i]['category_id']?>"><?=$categories[$i]['category_name']?></option>
                    <?php
                }
                ?>
            </select>
    <?php }}?>
    <?php if(strpos($_SERVER['PHP_SELF'],'/settings.php')!==false){ ?>
        <select name="categories" id="categories">
            <option value="nocard">Select One Category</option>
            <?php
            $categories=getUserCategories($_SESSION['username']);
            for($i = 0; $i<count($categories);$i++){
                ?>
                <option value="todos.php?category_id=<?=$categories[$i]['category_id']?>"><?=$categories[$i]['category_name']?></option>
                <?php
            }
            ?>
        </select>
    <?php }?>
    <?php if(isset($_SESSION['username'])){?>
        <div class="header-left">
            <a class='log-in' href="/action_logout.php">Log Out</a>
            <i class="fa fa-search" aria-hidden="true"></i>
            <a class='settings' href="/settings.php">
                <i class="fa fa-cog" aria-hidden="true"></i>
            </a>
        </div>
        <div id="search-modal" class="search-modal-input">
            <div>
                <i class="closesearch fa fa-times" aria-hidden="true"></i>
                <h2>Search Categories</h2>
                <input type="text" name="search"  id="search" placeholder="search here">
                <ul class="search-results">
                </ul>
            </div>
        </div>
    <?php } ?>
</header>