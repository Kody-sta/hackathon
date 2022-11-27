<!DOCTYPE html>
<html lang="ja">
 <head>
 <meta charset="utf-8">
 <title>入力画面</title>
 <meta name="description" content="">
 <link rel="stylesheet" href="registerfile.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <style>
    * {
  box-sizing: border-box;
}
body{
  color: #333;
  font-family: "Helvetica Neue", Arial, "Hiragino Kaku Gothic ProN", "Hiragino Sans", Meiryo, sans-serif;
}
.contact{
  width: 960px;/*横幅*/
  margin: 0 auto;/*中央寄せ*/
  padding: 60px 0;
}
.contact-table{
  width: 100%;
  margin-bottom: 20px;
}
.contact-header,
.contact-data {
  padding: 20px;
  /* border: 1px solid #ccc; */
}

.contact-header {
  text-align: left; /* テキスト左寄せ */
  width: 30%; /* 横幅30%指定（グレーの背景色部分） */
  background-color: #eee; /* グレーの背景色 */
}

.contact-data {
  /* width: 800px; */
  width: 70%;
  /* 横幅70%指定（白背景色部分） */
}

.inputs {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
}

.form-textarea {
  resize: none;
  width: 100%;
  height: 120px;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
}
 </style>
 <script src="registerfile.js"></script>
 </head>
 <body style="background-color: #696969;">
    <header class="m-3">
        <div class="logomark">
            <img src="{{ asset('image/bookmarkerLogo.jpg') }}" alt="ロゴ" width="150px">
        </div>
    </header>
    <div class="container mt-5">
        <form method="post" action="resisterfile.blade.php">
            <table class="table table-dark table-borderless"
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