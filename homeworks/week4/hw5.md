## hw5：簡答題

1. 什麼是 DOM？

DOM是Document Object Model，
是瀏覽器提供給程式語言來操控html的方式，當網頁在載入的時候，瀏覽器會創建一個文件的物件模型
，將HTML裡面的tag，看成一個節點（node），而透過DOM，可以讓Javascript來操控DOM，改變或新增html的元素，

瀏覽順序從上到下渲染，


2. 什麼是 Ajax？

就是可以透過離覽器提供的api，不需要換頁就可以和server做溝通，
他的特性與form表單相比較，form表單送出request，等伺服器傳送回response，會再新增一個頁面，
而ajax透過api與伺服器溝通時，送回來的資訊只有資料，沒有HTML的內容。


3. HTTP method 有哪幾個？有什麼不一樣？
 #1 get
 #2 post
 #3 path
 #4 put
 #5 delete
 #6 option
 #7 head



4. `GET` 跟 `POST` 有哪些區別，可以試著舉幾個例子嗎？


 #get


 #post


5. 什麼是 RESTful API？
6. JSON 是什麼？
7. JSONP 是什麼？


8. 要如何存取跨網域的 API？
CORS，全名為 Cross-Origin Resource Sharing，跨來源資源共享，
若是想要請求HTTP跨來源，Serve必須在Response裡面的Header加上
	Access-Control-Allow-Origin
	