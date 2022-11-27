<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>BookMarker</title>
        <meta name="description" content="BookMarkerで気になる記事やスクショを保存、管理!">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
            a {
                text-decoration: none;
                color: white;
            }
        </style>
        <script src="main.js"></script>
    </head>
    <body class="mx-5" style="background-color: #696969; color: white;">
        <header class="d-flex justify-content-around mt-3 mb-5">
            <div class="logomark">
                <a href="/index"><img src="{{ asset('image/bookmarkerLogo.jpg') }}" alt="ロゴ" width="150px"></a>
            </div>
            <div class="text-center">
              <form class="pt-3 mx-auto my-auto" action="#" method="post">
                <input type="search" name="search" placeholder="キーワードを入力" />
                <input type="submit" name="submit" value="検索" />
              </form>
            </div>
            <div class="my-auto">
                <a href="/register" style="background-color: black">入力フォームへ</a>
            </div>
        </header>
        <main>
            <div>
                <table width="100%">
                    <tbody>
                        <tr>
                            <th style="border:1px solid #000000">
                                日付
                            </th>
                            <th style="border:1px solid #000000">
                                タイトル
                            </th>
                            <th style="border:1px solid #000000">
                                URL
                            </th>
                            <th style="border:1px solid #000000">
                            メモ
                            </th>
                        </tr>
                        @foreach ($bookmarkers as $item)
                        <tr>
                            <td style="border:1px solid #000000">
                                {{ $item->created_at }}
                            </td>
                            <td style="border:1px solid #000000">
                                {{ $item->title }}
                            </td>
                            <td style="border:1px solid #000000">
                                <a href="{{$item->URL}}" target="_blank">{{ $item->URL }}
                            </td>
                            <td style="border:1px solid #000000">
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
