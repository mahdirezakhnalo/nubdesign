
<div class="title">
    <h3>𝓷𝓾𝓫𝓭𝓮𝓼𝓲𝓰𝓷</h3>
</div>
<header>
    <div class="container">
        <div class="row align-items-center">
            <div class="R_header d-flex">
                <img src="images/logon.png" alt="" onclick="window.open('index.php')">
                <select name="" id="">
                    <?
                    $city_query = mysqli_query($db, "SELECT * FROM city");
                    while ($city_row = mysqli_fetch_assoc($city_query)):
                        ?>
                        <option value="<? echo $city_row['city_link']?>"><? echo $city_row['city_title']?></option>
                    <? endwhile;?>
                </select>
            </div>
            <div class="C_header">
                <nav>
                    <ul>
                        <?
                        $navigation_query = mysqli_query($db , "SELECT * FROM navigation");
                        while($navigation_row = mysqli_fetch_assoc($navigation_query)):
                            ?>
                            <li>
                                <?
                                if (isset($_SESSION['login'])){
                                    if ($navigation_row['nav_title'] !== 'ورود / ثبت نام'){ ?>
                                    <a href="<? echo $navigation_row['nav_link']?>">
                                        <? echo $navigation_row['nav_title']?>
                                        </a><?php
                                    }
                                }
                                if (!isset($_SESSION['login'])){
                                    if ($navigation_row['nav_title'] !== 'خروج'){ ?>
                                    <a href="<? echo $navigation_row['nav_link']?>">
                                        <? echo $navigation_row['nav_title']?>
                                        </a><?php
                                    }
                                }
                                ?>

                            </li>
                        <? endwhile;?>
                    </ul>
                </nav>
            </div>
            <div class="L_header">
                <a href="upload.php" class="Advertising">ثبت آگهی رایگان</a>
                <button type="button">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="toggle-header">
                    <nav>
                        <ul>
                            <?
                            $navigation_query = mysqli_query($db , "SELECT * FROM navigation");
                            while($navigation_row = mysqli_fetch_assoc($navigation_query)):
                                ?>
                                <li><a href="<? echo $navigation_row['nav_link']?>"><? echo $navigation_row['nav_title']?></a></li>
                            <? endwhile;?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>