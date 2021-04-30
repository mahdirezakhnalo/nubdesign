<div class="container">
    <div class="row">
        <?
            $post_query = mysqli_query($db , "SELECT * FROM posts LIMIT 3");
            while ($post_row = mysqli_fetch_assoc($post_query)):
        ?>
        <div class="col-12 col-md-6">
            <a href="single-advertising.php?id=<? echo $post_row['post_id']?>" class="linkAdvertising">
                <div class="all-Advertising">
                    <div class="text-box">
                        <h5><? echo $post_row['post_title']?></h5>
                        <p><i class="fa fa-clock"></i>۶ دقیقه قبل </p>
                    </div>
                    <div class="img-box">
                        <img src="images/<? echo $post_row['post_image']?>" alt="">
                    </div>
                </div>
            </a>
        </div>
        <? endwhile;?>
    </div>
</div>