<!DOCTYPE html>
<html lang="ja" class="h-100"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>カバー for Bootstrap · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.jp/docs/5.0/examples/cover/">
    <link rel="stylesheet" href="index.css">

    <!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
  </head>
  <body class="d-flex h-100 btn-secondary-2 bg-dark">

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  <header class="mb-auto">
    <div>
      <h3 class="float-md-start mb-0">kuwamofu private</h3>
      <nav class="nav nav-masthead justify-content-center float-md-end">
        <a class="nav-link btn-secondary-2">ホーム</a>
        <a class="nav-link btn-secondary-2">特徴</a>
        <a class="nav-link btn-secondary-2">連絡</a>
      </nav>
    </div>
  </header>

  <main class="px-3">
    <h1>SUMIF VBA source</h1>
    <p class="lead font-grey">

      ......................................................................................................<br>
      パターン１ 差分があるファイルがわかっているが差分の内容が分からないとき<br>
      ......................................................................................................<br>
      ⭕index1.phpとindex2.phpの差分を見る<br>
<br>
      kuwamofu@kuwamofu-H81M-D3V-JP:/$ pwd<br>
        /<br>
<br>
      kuwamofu@kuwamofu-H81M-D3V-JP:~/laravel-project$ pwd<br>
        /home/kuwamofu/laravel-project<br>
<br>
      kuwamofu@kuwamofu-H81M-D3V-JP:~/laravel-project$ ls<br>
        README.md  artisan    composer.json  config    index1.php  package.json  public     routes      storage  vendor<br>
        app        bootstrap  composer.lock  database  index2.php  phpunit.xml   resources  server.php  tests    webpack.mix.js<br>
<br>
      kuwamofu@kuwamofu-H81M-D3V-JP:~/laravel-project$ diff index1.php index2.php <br>
        7c7<br>
        < <br>
        ---<br>
        > koko<br>
        11c11<br>
        < <br>
        ---<br>
        > koko<br>
        ７行目と11行目にkokoという文字列が差分である事がわかる<br>
<br>
      ⭕ファイルを並べて表示してみる　index2.phpの７行目と11行目に差分有り<br>
        kuwamofu@kuwamofu-H81M-D3V-JP:~/memo$ diff -y index1.php index2.php<br>
<?php
echo htmlspecialchars('

        <!DOCTYPE html>							                                      <!DOCTYPE html><br>
        <html lang="ja" class="h-100"><head>				                      <html lang="ja" class="h-100"><head><br>
        <meta charset="utf-8">					                                  <meta charset="utf-8"><br>
            <meta name="viewport" content="width=device-width, initia	      <meta name="viewport" content="width=device-width, initia<br>
            <meta name="description" content="本当においしいものを生	           <meta name="description" content="本当においしいものを生<br>
            <title>test</title>					                                <title>test</title><br>
        							                                                   |	koko<br>
            <!-- Bootstrap core CSS -->					                              <!-- Bootstrap core CSS --><br>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-	        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-<br>
            <link rel="stylesheet" href="index.css">			                     <link rel="stylesheet" href="index.css"><br>
        							                                                   |	koko<br>
        <style>							                                                   <style><br>
              .bd-placeholder-img {					                                        .bd-placeholder-img {<br>
');
<br>
      ......................................................................................................<br>
      パターン２ 差分のある箇所がわかるが差分のあるファイルを特定を特定できないとき<br>
      ......................................................................................................<br>
      ⭕例　'koko'という文字列が含まれているファイルを特定する<br>
      検索対象ファイルがあるであろうディレクトリに移動する<br>
      ここではuserのlaravel-project に移動して検索してみる<br>
<br>
      kuwamofu@kuwamofu-H81M-D3V-JP:~/laravel-project$ grep koko /home/kuwamofu/laravel-project<br>
        grep: /home/kuwamofu/laravel-project/app: ディレクトリです<br>
        grep: /home/kuwamofu/laravel-project/bootstrap: ディレクトリです<br>
        grep: /home/kuwamofu/laravel-project/config: ディレクトリです<br>
        grep: /home/kuwamofu/laravel-project/database: ディレクトリです<br>
        /home/kuwamofu/laravel-project/index2.php:koko<br>
        /home/kuwamofu/laravel-project/index2.php:koko<br>
        grep: /home/kuwamofu/laravel-project/public: ディレクトリです<br>
        grep: /home/kuwamofu/laravel-project/resources: ディレクトリです<br>
        grep: /home/kuwamofu/laravel-project/routes: ディレクトリです<br>
        grep: /home/kuwamofu/laravel-project/storage: ディレクトリです<br>
        grep: /home/kuwamofu/laravel-project/tests: ディレクトリです<br>
        grep: /home/kuwamofu/laravel-project/vendor: ディレクトリです<br>
<br>
      kokoを含むファイルを発見　index2.phpであることがわかりました。<br>
<br>
      以上<br>
</p>
    <p>
    <a class="btn2 btn-lg btn-secondary-2 fw-bold" ></a>
      <div class="font-grey">
        <a>test

        </a>
      </div>


    </p>

  </main>

  <footer class="mt-auto">
  </footer>

</div>






</body>
</html>
