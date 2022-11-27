<!DOCTYPE html>
<html lang="ja">
 <head>
 <meta charset="utf-8">
 <title>入力画面</title>
 <meta name="description" content="">
 <link rel="stylesheet" href="registerfile.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <script src="registerfile.js"></script>
 </head>
 <body style="background-color: #696969;">
    <header class="m-3" style="borderBottom: solid;">
        <div class="logomark">
            <img src="{{ asset('image/bookmarkerLogo.jpg') }}" alt="ロゴ" width="150px">
        </div>
    </header>
    <div class="container mt-5">
        <form method="post" action="resisterfile.blade.php">
            <table class="table table-dark table-borderless">
                <tr class="row">
                    <th class="col-4">日付</th>
                    <td class="contact-data col-8">
                        <input class="inputs" type="text" name="date">
                    </td>
                </tr>
                <tr class="row">
                    <th class="col-4">タイトル</th>
                    <td class="contact-data col-8">
                        <input class="inputs" type="text" name="title">
                    </td>
                </tr>
                <tr class="row">
                    <th class="col-4">URL</th>
                    <td class="contact-data col-8">
                        <input class="inputs" type="text" name="url">
                    </td>
                </tr>
                <tr class="row">
                    <th class="col-4">メモ</th>
                    <td class="contact-data col-8">
                        <textarea class="form-textarea" name="memo"></textarea>
                    </td>
                </tr>       
            </table>
            <div class="btn-area">
                <button type="button" class="btn btn-dark">登録する</button>
            </div>
        </form>
    </div>
 </body>
</html>
