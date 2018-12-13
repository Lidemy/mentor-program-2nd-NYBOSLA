資料庫名稱：mentor_program_db

資料表：comments

| 欄位名稱 | 欄位型態 | 說明 |
|---------|---------|-----|
|  id     |integer | 留言索引             |
| content | text | 留言內容content      |
| password| VARCHAR(16) | 密碼password  |
| nickname| VARCHAR(64) | 暱稱nickname  |
| created_at| date | 建立時間  |


comments範例

| comments_id      | nickname| content| created_at|
|---------|---------|-----   |---------|
| 1       | sharon  | 123test  | 2018-12-11 14:24 |




child_comment範例

| id      | parent_id     | nickname| reple_content| created_at|
|---------|---------       |-----   |---------|---------|
| 1       |     1   |sharon  | 123test  | 2018-12-11 14:24 |


會員系統
user_id


| user_id    | nickname_user_id| 
|------------|--------|
|    sharon |波波  | 

users_table

| id         | user_id         | nickname_user_id| account| password| 
|------------|-----------------|--------         |---------|--------|
|    1       |sharon           |波波  |            sharon0402 |1234  |  





##### 設計留言板Dstsbase結構
###### 1.身為使用者，新增新留言可以輸入暱稱與留言內容
###### 2.身為使用者，可以回覆留言，可以輸入暱稱與留言內容
###### 3.身為使用者，可以更改自己的暱稱
###### 4.身為使用者，可以註冊，新增自己的帳號密碼
###### 5.身為使用者，需要登入已註冊的資訊才可以留言

###### 1.身為系統，每頁可以顯示10筆留言，並且可以讓使用者換頁
###### 2.身為系統，新增內容後會顯示時間、內容、暱稱
###### 3.身為系統，留言要按照順序排序，由新到舊由上往下排
###### 4.身為系統，可以更改使用者暱稱
###### 5.身為系統，可以自己帶入使用者名稱
###### 6.身為系統，可以登入，輸入帳號密碼，並且記住cookie
###### 7.身為系統，可以登出，清除cookie