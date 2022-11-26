// サーバ直下で実行するコード
CREATE DATABASE bookmarker;

// boolmarkerの直下で実行するコード
DROP TABLE IF EXISTS bookmarks;
CREATE TABLE bookmarks (id INT AUTO_INCREMENT, title varchar(100), URL varchar(1000), memo varchar(400), importance boolean, create_time timestamp not null default current_timestamp on update current_timestamp, PRIMARY KEY (id));

INSERT INTO bookmarks (title, URL, memo, importance) values ('ToDoリスト', 'https://b-risk.jp/blog/2022/08/laravel/#Todo', '1個目', true);
INSERT INTO bookmarks (title, URL, memo, importance) values ('github', 'https://github.com/Kody-sta/hackathon', '2個目', false);
