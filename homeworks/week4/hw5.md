## hw5：簡答題

1. 什麼是 DOM？

DOM是Document Object Model，
是瀏覽器提供給程式語言來操控html的方式，當網頁在載入的時候，瀏覽器會創建一個文件的物件模型
，將HTML裡面的tag，看成一個節點（node），瀏覽順序從上到下渲染，而透過DOM，可以讓Javascript來操控DOM，改變或新增html的元素。



2. 什麼是 Ajax？

就是可以透過離覽器提供的api，不需要換頁就可以和server做溝通，
他的特性與form表單相比較，form表單送出request，等伺服器傳送回response，會再新增一個頁面，
而ajax透過api與伺服器溝通時，送回來的資訊只有資料，沒有HTML的內容。


3. HTTP method 有哪幾個？有什麼不一樣？
 #1 get
 get沒有message-body

 #2 post
 post 有message-body可以放資料，可以更新資源也看已



 #3 put
 put是指請求替換特定的目標資源，例如更新資源

 #4 delete
 delete方法提交出去會刪除指定資源
 #5 option

 #6 head
 跟get一樣，也是請求資料或者將資料傳送給伺服器，但是他沒有response body
 但是只傳輸狀態行跟表頭的部分

 #7 delete
 是指移除目標資源。


4. `GET` 跟 `POST` 有哪些區別，可以試著舉幾個例子嗎？


在找資料的過程中，找到一個有趣的比喻，他將http比喻作寄信的機制，信封的撰寫格式是HTTP，


 #1 get
 get是指傳送資料出去（request），要獲取資源回來，以信封的比喻，就像沒有裝信封，如明信片一樣的方式，可以直接把傳遞方式寫在http-header上面，來請求取得資料。
 不過缺點就是信件裡面的內容會讓人一目瞭然（例如，你輸入的東西，會出現在網址列上面）
 get傳送資料的時候，我們需要把寄送的地址URL寫在信封上，但若是要有其他的資訊，不允許message-body傳輸，get單純是要獲取資料使用。
 
 #2 post
 post是指傳送資料出去，獲取資源回來，以信封的比喻，就像是有裝了信封的信紙，不但可以把資訊寫在信封上，如http-header，還可以把資訊寫進去信封裡面，就像message-body，通常這樣比較安全，因為別人看不到你寫了什麼在裸露的信封外頭，會改變伺服器的狀態
 





5. 什麼是 RESTful API？

是指在網路世界裡client與server的一種溝通方式，透過http method 想要在server做什麼目的，
這些目的是以http method想要做什麼動作，例如get獲取、post提交、put修改、刪除delete，
也可以說是簡單的CRUD，Create, Read, Update, and Delete (CRUD)。


6. JSON 是什麼？
JSON是以純文字來作為儲存與傳送的一種簡單資料結構，透過特定格式(字串、數字、陣列與物件)來傳輸資料。
許多函式庫都可以透過JSON來讀取或修改資料。以	JSON字串為例，字串可以包涵array資料或是物件object資料。


7. JSONP 是什麼？
 JSONP是JOSN with padding的縮寫，可以讓網頁透過JSON來獲取別的網域的資料，
 因為網頁有同源政策，
 利用<script>這個元素的開放政策可以讓網頁透過JSON來獲取資料，這種模式叫做JSONP，
 用JSONP抓到的資料不是JSON，而是Javascript。



8. 要如何存取跨網域的 API？
CORS，全名為 Cross-Origin Resource Sharing，跨來源資源共享，
若是想要請求HTTP跨來源，Serve必須在Response裡面的Header加上
Access-Control-Allow-Origin
	