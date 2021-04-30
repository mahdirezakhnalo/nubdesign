<?
$query = mysqli_query($db , "SELECT * FROM posts");
while ($row = mysqli_fetch_assoc($query)):
    ?>
    <br>
    <div class="title-advertising-panel data">
        <div class="into-title-panel">
            <p style="margin-top: 5px;">آیدی</p>
            <p><? echo $row['post_id']?></p>
        </div>
        <div class="into-title-panel">
            <p>تصویر</p>
            <img src="images/<? echo $row['post_image'] ?>" alt="">
        </div>
        <div class="into-title-panel">
            <p>عنوان</p>
            <p><? echo $row['post_title']?></p>
        </div>
        <div class="into-title-panel">
            <p>توضیحات</p>
            <p><? echo $row['post_content']?></p>
        </div>
        <div class="into-title-panel">
            <p>آدرس</p>
            <p><? echo $row['post_address']?></p>
        </div>
        <div class="into-title-panel">
            <p>شماره موبایل</p>
            <p><? echo $row['post_mobile']?></p>
        </div>
        <div class="into-title-panel">
            <p>تلفن ثابت</p>
            <p><? echo $row['post_phone']?></p>
        </div>
        <div class="into-title-panel">
            <p>پاک کردن</p>
            <p><a href="action.php?delete_post=<? echo $row['post_id']?>">حذف</a></p>
        </div>
    </div>
<? endwhile;?>