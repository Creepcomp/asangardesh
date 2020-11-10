<?php
    $username = 'Parsa';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/map.css">
    <script src="scripts/global.js"></script>
    <script src="scripts/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHBPAck1KQKgarWQzM3ywV-ACnyMW7aNo&callback=initMap&libraries=&v=weekly"></script>
    <title>آسان گردان - نقشه</title>
</head>
<body>
    <div id='profile_container' hidden>
        نام کاربری: <?php echo $username; ?>
    </div>
    <header>
        <h1 id="name">آسان گردش</h1>
        <ul id='menu'>
            <li>
                <a href=".">خانه</a>
            </li>
            <li>
                <a href="map.php">نقشه</a>
            </li>
            <li>
                <a href="#">جوایز</a>
            </li>
            <li>
                <a href="#">تماس با ما</a>
            </li>
            <li>
                <a href="#">درباره ما</a>
            </li>
        </ul>
        <div id="profile" onclick="showProfileContainer();"></div>
    </header>
    <div id='body'>
        <div id='map'></div>
    </div>
    <div id='tehran' hidden>
        <h1>تهران</h1>
        <p>تِهْران پرجمعیت‌ترین شهر و پایتخت ایران، مرکز استان تهران و شهرستان تهران است. این شهر با ۸٬۶۹۳٬۷۰۶ تن جمعیت، بیست و چهارمین شهر پرجمعیت جهان و پرجمعیت‌ترین شهر باختر آسیا به‌شمار می‌رود. کلان‌شهر تهران نیز سومین کلان‌شهر پرجمعیت خاورمیانه است.

از دید ناهمواری‌های طبیعی، تهران به دو ناحیهٔ دشتی و کوهپایه‌ایِ البرز تقسیم می‌شود و گسترهٔ کنونی آن از ارتفاع ۹۰۰ تا ۱۸۰۰ متری از سطح دریا امتداد یافته‌است. تهران دارای اقلیم نیمه‌خشک است. در بیشتر سال‌ها، فصل زمستان نیمی از کل بارش‌های سالانهٔ تهران را تأمین می‌کند و تابستان نیز کم‌باران‌ترین فصل در تهران است.

تهران شهری با گوناگونی گروه‌های قومی است اما جمعیت خارجی آن کم است. به عنوان بزرگ‌ترین شهر فارسی‌زبان جهان، اکثریت مردم تهران را پارسیان تشکیل می‌دهند و بیشتر مردم این شهر رسماً مسلمان و شیعهٔ دوازده‌امامی هستند. دیگر جوامع مذهبی در تهران شامل بهائیان، زرتشتیان، مسیحیان و یهودیان می‌شود.</p>
    </div>
</body>
</html>