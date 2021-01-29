<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>レコFES</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/home.css">
  <link rel="stylesheet" type="text/css" href="../css/ranking.css">
  <link rel="stylesheet" type="text/css" href="../css/mypage.css">
</head>
<body>
  <header>
    <nav>
      <ul>
        <li class="nav_home">
            レコＦＥＳ
        </li>
        <li class="nav_must">
          <a href="#">他のランキング</a>
        </li>
        <li class="nav_must">
          <a href="about">口コミする</a>
        </li>
        <li>
          <a href="skills">特典</a>
        </li>
        <li>
          <a href="skills"><?php ?>さん</a>
        </li>
      </ul>
    </nav>
  </header>
  <section class="prof_wrap">
    <div class="prof"> 
      <h2 class="title_mypage">マイページ</h2>
      <!-- [PHP]投稿内容持ってくる -->
      <!-- <img class="rank-img" src="<?php ?>" alt=""> -->
      <div class="prof-info">
        <div class="prof_info_img">
          <img src="../images/top_image3.jpg<?php ?>" alt="">
        </div>
        <div class="prof_info_content">
          <p class="myname"><?php ?>山田太郎</p>
          <p class="myfes_count">フェス行った回数：<?php ?>5回</p>
          <p class="my_comment"><?php ?>初めまして！</p>
          <div class="mysns">
            <a href="#" alt="">
              <img src="../images/twitter.png" alt="">
            </a>
            <a href="#" alt="">
              <img src="../images/Instagram.png" alt="">
            </a>
          </div>
        </div>
        <div class="prof_info_update">
          <button type="submit">プロフィール編集</button>
        </div>
      </div>
    </div>
  </section>
    <div>
      <div>
        <h2><?php ?>の口コミ</h2>
        <ul class="this_reviews">
          <!-- <a href="#"> -->
            <li class="reviews"> 
              <!-- [PHP]投稿内容持ってくる -->
              <div class="review_flex">
                <div class="review-left">
                  <img class="card-img" src="../images/top_image3.jpg<?php ?>" alt="">
                </div>
                <div class="review-right">
                  <div class="card-content">
                    <p class="card-text"><?php ?>サイコーだった！WANIMAいいね！テストサイコーだった！WANIMAいいね！テストサイコーだった！WANIMAいいね！テストササイコーだった！WANIMAいいね！テストサイコーだった！WANIMAいいね！テストサイコーだった！WANIMAいいね！テストサイコーだった！WANIMAいいね！テストサイコーだった！WANIMAいいね！テスト</p>
                  </div>
                  <div class="review_right_bottom">
                    <div class="reviewer_img">
                      <img src="../images/top_image3.jpg<?php ?>" alt="">
                    </div>
                    <div class="reviewer_profile">
                      <p class="reviewer_name">山田太郎<?php ?></p>
                      <br>
                      フェス回数：<?php ?>回
                    </div>
                  </div>
                </div>
              </div>
            </li>
          <!-- </a> -->
        </ul>
      </div>
      <footer>
      ©2021 Reco.FES 
      </footer>
</body>
</html>

