<!DOCTYPE html>
<html lang="ja">
 <head>
 <meta charset="utf-8">
 <title>入力画面</title>
 <meta name="description" content="">
 <script src="registerfile.js"></script>
 </head>
 <body>
    <div class="contact">
        <form method="post" action="resisterfile.blade.php">
            <table class="contact-table">
                <tr>
                    <th class="contact-header"><label class="label">日付</label></th>
                    <td class="contact-data">
                        <input class="inputs" type="text" name="title">
                    </td>
                </tr>       
                <tr>
                    <th class="contact-header"><label class="label">タイトル</label></th>
                    <td class="contact-data">
                        <input class="inputs" type="text" name="title">
                    </td>
                </tr>
                <tr>
                    <th class="contact-header"><label class="label">URL</label></th>
                    <td class="contact-data">
                        <input class="inputs" type="text" name="url">
                    </td>
                </tr>
                <tr>
                    <th class="contact-header"><label class="label">メモ</label></th>
                    <td class="contact-data">
                        <!-- <input class="inputs" type="text" name="memo"> -->
                        <textarea class="form-textarea" name="memo"></textarea>
                    </td>
                </tr>
            </table>
            <div class="btn-area">
                <input type="submit" value="登録する">
            </div>
        </form>
    </div>
 </body>
</html>
<style>
    
  * {
    box-sizing: border-box;
  }
  body {
    color: #333;
    font-family: "Helvetica Neue", Arial, "Hiragino Kaku Gothic ProN", "Hiragino Sans", Meiryo, sans-serif;
  }
  .contact {
    width: 960px;/*横幅*/
    margin: 0 auto;/*中央寄せ*/
    padding: 60px 0;
  }
  .contact-table {
    width: 100%;
    margin-bottom: 20px;
  }
  .contact-header,
  .contact-data {
    padding: 20px;
    border: 1px solid #ccc;
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
