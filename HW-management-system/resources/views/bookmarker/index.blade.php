<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>BookMarker</title>
        <meta name="description" content="BookMarkerで気になる記事やスクショを保存、管理!">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <script src="main.js"></script>
    </head>
    <body>
        <header>
            <div class="logomark">
            </div>
            <div class="header-left" style="text-align: right">
                <p>入力フォームへ</p>
            </div>
        </header>
        <main>
            <div style="margin:0px;padding:0px;" align="center">
                <table width="80%" style="border-collapse: collapse;border:1px solid #000000;background-color:#FFFFFF;color:#000000;text-align:left;">
                    <tbody>
                        <tr>
                            <th style="border:1px solid #000000;background-color:#808080;color:#FFFFFF;text-align:center;">
                                日付
                            </th>
                            <th style="border:1px solid #000000;background-color:#808080;color:#FFFFFF;text-align:center;">
                                タイトル
                            </th>
                            <th style="border:1px solid #000000;background-color:#808080;color:#FFFFFF;text-align:center;">
                                URL
                            </th>
                            <th style="border:1px solid #000000;background-color:#808080;color:#FFFFFF;text-align:center;">
                            メモ
                            </th>
                        </tr>
                        @foreach ($bookmarkers as $item)
                        <tr>
                            <td style="border:1px solid #000000;text-align:left;">
                                {{ $item->create_time }}
                            </td>
                            <td style="border:1px solid #000000;text-align:left;">
                                {{ $item->title }}
                            </td>
                            <td style="border:1px solid #000000;text-align:left;">
                                <a href="{{$item->URL}}" target="_blanck">{{ $item->URL }}
                            </td>
                            <td style="border:1px solid #000000;text-align:left;">
                                {{ $item->memo }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        <footer></footer>
    </body>
</html>
