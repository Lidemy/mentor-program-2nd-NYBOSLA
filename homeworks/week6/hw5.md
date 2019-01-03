## 請說明 SQL Injection 的攻擊原理以及防範方法
##### 原理

指SQL的指令中忽略的字元檢查，造成SQL指令可以操控資料庫，造成資安的漏洞
例如SQL指令可以查詢、更新、刪除、新增，若是在組合SQL命令字串時，未針對單引號字元做跳脫處理
，導致字元變數填入命令字串，則造成惡意串改原本的SQL語法。

例如SQL指令可以查詢、更新、刪除、新增，若是在組合SQL命令字串時，未針對單引號字元做跳脫處理

原本是使用
```
"SELECT * FROM users WHERE (name = '" + userName + "') and (pw = '"+ passWord +"');"
```

若是惡意填入
```
userName = "1' OR '1'='1"; 
passWord = "1' OR '1'='1";

則代表
strSQL = "SELECT * FROM users;"
```
則會達成無帳號密碼就可以登入網站。

###### 解決方法
1. 可以在php 裡面執行跳脫語法把有可能會造成控制資料庫的語法，加入跳脫字元
2. 使用SQL防資料隱碼系統


## 請說明 XSS 的攻擊原理以及防範方法
跨網站指令碼稱作Cross-site scripting ，利用網站開發時留下的漏洞，巧妙的透過置入程式碼，將惡意程式碼置入網頁裡，造成使用者在瀏覽網頁時受到影響。
例如
```
><script>alert(document.cookie)</script>
```
```
='><script>alert(document.cookie)</script>
```
```
"><script>alert(document.cookie)</script>
```
```
<script>alert(document.cookie)</script>
```
```
<script>alert (vulnerable)</script>
%3Cscript%3Ealert('XSS')%3C/script%3E
```
```
<script>alert('XSS')</script>
```
```
<img src="javascript:alert('XSS')">
```
```
<img src="http://xxx.com/yyy.png" ```
onerror="alert('XSS')">
```
```
<div style="height:expression(alert('XSS'),1)"></div>
```
透過這些測試，可以知道一個網頁有沒有做xss的防範，xss的攻擊可能會造成以下：
1. 盜用cookie，防止取得敏感資料
2. 操控網頁，達成惡意功能的目的
3. 執行管理動作

###### 防範方法
1. PHP的htmlentities()或是htmlspecialchars()。
2. Python的cgi.escape()。
3. ASP的Server.HTMLEncode()。
4. ASP.NET的Server.HtmlEncode()
5. Node.js的node-validator。

## 請說明 CSRF 的攻擊原理以及防範方法
全名是Cross Site Request Forgery，跨站偽造請求，有些CSRF是利用XSS的攻擊方法，有些則不一定要透過XSS，透過使用者點選其他外部網站，導入連結回到已登入的網站，來執行某個惡意的動作。例如使用者原本是要執行某個查看動作，例如點選影片，但惡意攻擊則在這個點選影片後，透過get將使用者的cookie 或 session資料帶到另一個網站來刪除某個他自己的資料。

###### 原理
利用get使用/delete?articled=1234的get請求，假如刪除前沒有再進一步確認，使用者也不知道自己執行了這項動作，
就算在不同的domain底下也可以偽造出本人發出的request

###### 沒有用的防範方法
1.使用post的方法來做request的方法，將傳送資料包在form裡面， 依然可以使用隱藏式的iframe，讓form submit之後的結果出現在這個看不見的iframe。
2. api若是``` access-control-allow-origin 設定成* ```，代表任何domain都可以發送ajax的api server。
3. header裡面的referer檢查 ，若是只是單純的檢查網址，還是很容易會有網址的漏洞，可以在原本的網址上串改容易混淆的惡意網址
###### 防範方法
1. 重要的網頁限制登入時間，讓使用者的cookie. session資料不要留在用戶端或者伺服器上面，登出就刪除，這讓我想到，原來我平常會限制使用網頁轉帳的原因是這樣，都有個倒數時鐘在右上角催促自己快點轉帳！
2. request header裡面的referer檢查domain的位置是否與前端網站在同一個domain，這部分讓我想到hinet或者google信箱會顯示不同domain登入的位置的地區
，若是跟平常不一樣，則會警告使用者！
3. 圖形驗證
4. 簡訊驗證
5. form裡面加上hidden的欄位，叫做csrftoken，裡面隨機產生session，存在server裡面，更保險一點就double submit cookie，server跟client都可以存csrftoken的cookie

####感謝老師的部落格提供這麼多想法，學習到很多!!!


## 請舉出三種不同的雜湊函數

###### MD5
###### SHA-1
###### SJA-256


## 請去查什麼是 Session，以及 Session 跟 Cookie 的差別

cookie為了保存使用者某些狀態，例如登入資訊，網頁會發送cookie給client，會存在用戶端的電腦裡保存，等下次再開啟網頁時，會在發送request來取用cookie，這樣server就知道上次使用者使用的一些資訊，但通常存在用戶端的資訊都很容易被竄改，因此很少儲存重要資訊。

Session會在用戶完成身份認證後，在serve存下所需要的用戶資料，產生一組應對的id，存入cookie後再傳回用戶端。


##  `include`、`require`、`include_once`、`require_once` 的差別

`include`跟`include_once` 
都是引入檔案，但是有加_once的，可以避免重覆引入，引入不到檔案會出現錯誤訊息，但是程式不會停止。

`require` 跟`require_once`
都是引入檔案，但是有架加_once的，可以避免重覆引入，引不到檔案會出現錯誤訊息，而且程式會停止執行。



