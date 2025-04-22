<!-- navigation bar -->
<header class="sticky-top d-flex justify-content-between">
<!-- left items of navbar -->
        <div class="d-flex align-items-center">
            <a href="http://localhost/website/">
                <form action="index.php" method="get" class="navbutton">
                    <input type="hidden" name="page_type" value="home">
                    <button class="custom-button btn btn-link text-white" type="button">
                        <img alt="Logo" class="m-2" height="60" width="60"
                                src="https://i.pinimg.com/736x/0f/d4/9c/0fd49ce9e2ac49b069e68f1e005019e4.jpg"/>                           
                    </button>
                </form>                
            </a>
            <nav class="d-none d-md-flex justify-content-center">
                <form action="index.php" method="get" class="navbutton">
                    <input type="hidden" name="page_type" value="new">
                    <button type="submit" class="p-3 text-white nav-link">New</button>
                </form>
                <form action="index.php" method="get" class="navbutton">
                    <input type="hidden" name="page_type" value="anime">
                    <button type="submit" class="p-3 text-white nav-link">Anime</button>
                </form>
                <!-- <form action="index.php" method="get" class="navbutton">
                    <input type="hidden" name="page_type" value="categories">
                    <button type="submit" class="p-3 text-white nav-link">
                        Categories
                        <i class="fa-solid fa-caret-down"></i>
                    </button>
                </form> -->
<!-- dropdown categories -->
                <div class="dropdown">
                    <button class="nav-link p-3 text-white">Categories
                        <i class="fa-solid fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content" style="width: 121.5px;">
                        <?php
                            $cate_button = $conn->query("SELECT * FROM category");
                            while($row = $cate_button->fetch_assoc()){
                        ?>    
                            <form action="index.php" method="get">
                                <input type="hidden" name="page_type" value="anime">
                                <input type="hidden" name="cate" value="<?php echo $row['cate_name']?>">
                                <a href="?page=anime&cate=<?php echo $row['cate_name']?>"><?php echo $row['cate_name']?></a>
                            </form>
                        <?php
                            }
                        ?>
                        <!-- <a href="">Isekai</a>
                        <a href="">Fantasy</a> -->
                    </div>
                </div>

            </nav>
            <!-- bar icon -->
            <div class="move-up-icon d-block d-md-none m-0">
                <button type="button" class="custom-button btn btn-link text-white me-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                    <i class="fa-solid fa-bars fa-xl"></i>
                </button>
            </div>
<!-- hidden bar -->
            <div class="side-bar offcanvas offcanvas-start text-white" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                <!-- head part -->
                <div class="offcanvas-header text-white shadow-lg" style="background-color: rgb(31, 42, 56);">
                    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">2252711</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dicsmiss="offcanvas" aria-label="Close"></button>
                </div>
                <!-- body part -->
                <div class="offcanvas-body d-flex flex-column" style="background-color: rgb(40, 52, 66);">
                    <form action="index.php" method="get" class="navbutton">
                        <input type="hidden" name="page_type" value="new">
                        <button type="submit" class="side-bar-item">New</button>
                    </form>
                    <form action="index.php" method="get" class="navbutton">
                        <input type="hidden" name="page_type" value="anime">
                        <button type="submit" class="side-bar-item">Anime</button>
                    </form>
                    <!-- <form action="index.php" method="get" class="navbutton">
                        <input type="hidden" name="page_type" value="categories">
                        <button type="submit" class="side-bar-item">
                            Categories
                            <i class="fa-solid fa-caret-down"></i>
                        </button>
                    </form> -->
                    
                    <div class="dropdown" id="dropdown">
                        <button type="button" class="side-bar-item" id="dropdownButton">
                            Categories
                            <i class="fa-solid fa-caret-down"></i>
                        </button>   
                        <div class="dropdown-content" id="dropdownContent" style="width: 366.5px; top: -13px;">
                            <?php
                                $cate_button = $conn->query("SELECT * FROM category");
                                while($row = $cate_button->fetch_assoc()){
                            ?>    
                                <form action="index.php" method="get">
                                    <input type="hidden" name="page_type" value="anime">
                                    <input type="hidden" name="cate" value="<?php echo $row['cate_name']?>">
                                    
                                    <a style="width: 366px;" href="?page=anime&cate=<?php echo $row['cate_name']?>"><?php echo $row['cate_name']?></a>
                                </form>
                            <?php
                                }
                            ?>
                        </div>
                    </div>            
                </div>
            </div>

<!-- hidden bar end -->
        </div>

<!-- middle items of navbar -->
<!-- search bar -->
        <form action="index.php" method="get" class="custom-search-bar d-flex align-items-center rounded-pill mx-2">
            <span class="fa-solid fa-magnifying-glass ms-2 text-dark"></span>
            <input type="hidden" name="page_type" value="anime">
            <input id="search_zone" name="search_zone" type="text" class="custom-tim-kiem" placeholder="Searching...">
        </form>

        <!-- <form action="index.php" method="post" class="d-flex align-items-center">
        </form> -->

<!-- right items of navbar -->
        <div class="d-flex align-items-center">
            <!-- <i class="fas fa-crown text-warning me-3"></i> -->
            <!-- <i class="fas fa-search fa-lg me-2"></i> -->
            <i class="move-up-icon fas fa-bookmark fa-lg ms-2 me-3"></i>
            <form action="index.php" method="get" class="navbutton">
                <button type="submit" style="color: white; border: none; background-color: transparent;">
                    <i class="move-up-icon fas fa-user fa-lg me-3"></i>  
                    <input type="hidden" name="page_type" value="login">          
                </button>
            </form>
        </div>

    </header>
