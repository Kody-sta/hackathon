<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>入力画面</title>
<meta name="description" content="">
<link rel="stylesheet" href="registerfile.css">
<script src="registerfile.js"></script>
</head>
<body>
    <div class="contact">
        <form method="post" action="resisterfile.blade.php">
            <table class="contact-table">
                <tr>
                    <th class="contact-header"><label class="label">日付:</label></th>
                    <td class="contact-data">
                        <input class="inputs" type="text" name="title">
                    </td>
                </tr>       
                <tr>
                    <th class="contact-header"><label class="label">タイトル:</label></th>
                    <td class="contact-data">
                        <input class="inputs" type="text" name="title">
                    </td>
                </tr>
                <tr>
                    <th class="contact-header"><label class="label">URL:</label></th>
                    <td class="contact-data">
                        <input class="inputs" type="text" name="url">
                    </td>
                </tr>
                <tr>
                    <th class="contact-header"><label class="label">メモ:</label></th>
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
