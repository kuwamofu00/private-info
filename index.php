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
Private Sub Worksheet_Activate()<br>
Dim my_int As Range<br>
Dim my_str As Range<br>
n = Cells(Rows.Count, 2).End(xlUp).Row<br>
Set my_str = Range(Worksheets("sheet1").Cells(5, 3), Cells(n, 2))<br>
Set my_int = Range(Worksheets("sheet1").Cells(5, 3), Cells(n, 3))<br>
Worksheets("sheet1").Cells(1, 3) = WorksheetFunction.SumIf(my_str, "予定", my_int)<br>
Worksheets("sheet1").Cells(2, 3) = WorksheetFunction.SumIf(my_str, "実績", my_int)<br>
Worksheets("sheet1").Cells(3, 3) = Worksheets("sheet1").Cells(2, 3).Value / Worksheets("sheet1").Cells(1, 3).Value<br>
Worksheets("sheet1").Cells(3, 3).NumberFormatLocal = "00.0%"<br>
MsgBox "予定の合計、実績の合計、進捗率を計算しました"<br>
End Sub<br>
</p>
    <p>
    <a class="btn2 btn-lg btn-secondary-2 fw-bold" >説明と準備</a>
      <div class="font-grey">
        <a>

説明<br>      
  一番下の行数を取得しているので行が追加され行数が増えてもプログラムを変更することなく自動で計算します<br>
  シートを選択しなおすとプログラムが動くようになっています<br>
  検索対象の"予定"と"実績"の合計を計算し、進捗率を出します。<br><br>
  準備<br>
sheet1のセルB1に”予定合計”と入力、B2に”実績合計と入力”、B3に”進捗率”と入力<br>
セルB5に”予定”と入力、横のC5には数値を入力、その下のセルのB6に”実績と入力<br>
横のC6には数値を入力”、その後は適当な行までそれを繰り返す<br>
alt＋F11でエディターを出し、sheet1にVBAコードをコピペ。<br>
        </a>
      </div>
<div class="ta-ta">
      <a>image</a>        
      <br>
        <a class="imimage"><img src="img1.png" width="400" height="300" border="1"></a>

        <a class="imimage"><img src="img2.png" width="400" height="300" border="1"></a>
</div>
      <div class ="btn-secondary-3">
  <a>2021年3月6日作成</a>
    </div>

    </p>
    
  </main>

  <footer class="mt-auto">
  </footer>

</div>


    
  


</body>
</html>


