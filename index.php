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

Private Sub Worksheet_Change(ByVal Target As Range)<br>
Dim Timestump As Range<br>
Dim t As Range<br>
n = Cells(Rows.Count, 2).End(xlUp).Row<br>
Set Timestump = Range(Worksheets("sheet3").Cells(5, 4), Cells(n, 4))<br>
If Intersect(Target, Timestump) Is Nothing Then<br>
Exit Sub<br>
Else<br>
Debug.Print Target.Address(False, False)<br>
Target.Offset(0, 1).Value = "〇"<br>
Target.Offset(0, 2).Value = Now<br>
End If<br>
End Sub<br>

Sub TEST1()<br>
n = Cells(Rows.Count, 2).End(xlUp).Row<br>
Worksheets("sheet3").Range(Cells(4, 7), Cells(n, 7)).AutoFilter<br>
Worksheets("sheet3").Range(Cells(4, 7), Cells(n, 7)).AutoFilter 1, "作業中"<br>
End Sub<br>

Sub TEST2()<br>
n = Cells(Rows.Count, 2).End(xlUp).Row<br>
Worksheets("sheet3").Range(Cells(4, 7), Cells(n, 7)).AutoFilter<br>
Worksheets("sheet3").Range(Cells(4, 7), Cells(n, 7)).AutoFilter 1, "完了"<br>
End Sub

Sub TEST3()<br>
n = Cells(Rows.Count, 2).End(xlUp).Row<br>
Worksheets("sheet3").Range(Cells(4, 5), Cells(n, 5)).AutoFilter<br>
Worksheets("sheet3").Range(Cells(4, 5), Cells(n, 5)).AutoFilter 1, "〇"<br>
End Sub<br>

Sub TEST4()<br>
ActiveSheet.AutoFilterMode = False<br>
End Sub<br>

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







