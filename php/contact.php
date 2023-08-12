<?php include_once 'header.php' ?>

    <!---------------- start content ---------------->
    <div class="page-body body-costum">
        <h2>تماس با ما</h2>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-6">
                    <div class="contact-form">
                        <form action="send-mail.php" method="post">
                            <label for="fname">نام و تخلص: </label><br />
                            <input type="text" id="fname" name="name" required /><br /><br />
                            <label for="lname">ایمیل: </label><br />
                            <input type="text" id="lname" name="email" required /><br /><br />
                            <label for="lname">عنوان: </label><br />
                            <input type="text" id="lname" name="title" required /><br /><br />
                            <label for="desc">پیام شما: </label><br />
                            <textarea name="text" id="desc" cols="30" rows="10" required></textarea><br><br>
                            <input type="submit" value="ارسال" class="submit-form" />
                        </form>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <p>آدرس: هرات، جاده عیدگاه، شرکت افغان ارین گیت</p>
                    <p>info@gitfmail.com</p>
                    <p>شماره های تماس: 0799999999 - 0799999999</p>
                </div>
            </div>
        </div>
    </div>
    <!---------------- end content ---------------->

    <!-- footer -->
    <?php include_once 'footer.php' ?>