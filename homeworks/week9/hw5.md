## CSS 預處理器是什麼？我們可以不用它嗎？
css預處理器是指透過處理器可以產生css的程式，可以轉換成所需要的css程式的內容，
例如mixin、巢狀選擇器等等，透過預處理可以節省手動輸入純css的時間，
也可以選擇不使用，就會多花一些時間手動輸入。


## 請舉出任何一個跟 HTTP Cache 有關的 Header 並說明其作用。
HTTP Response Header 裡面加上expires是指cache到期的時間。
當瀏覽器收到這個response就會把資源給快取起來，下次使用者在登入的時候，
瀏覽器會檢查這個時間，這時的瀏覽器不會發送任何request。


## Stack 跟 Queue 的差別是什麼？
##### stack 堆疊
first in last out
先存入的資料，最後取出

##### Queue 隊伍
first in first out
先存入的資料，先取出

## 請去查詢資料並解釋 CSS Selector 的權重是如何計算的（不要複製貼上，請自己思考過一遍再自己寫出來）

權重優先權：
1. 相同權重，但後寫的css會覆蓋先寫的css
2. 當兩個選擇器作用在同一個元素，權重優先的會生效

權重計算的預設值為
`0-0-0-0`

##### 1個 element 的權重為：
`0-0-0-1` 每增加一個element的指定會往上+1

例如`div p ul ol li header footer ` 
權重會變成`0-0-0-7`，因為總共有7個element

##### 1個 class 的權重為：
`0-0-1-0` 

##### 1個 id 的權重為：
`0-1-0-0`
例如`id= 'nav' #nav`

##### inline style attribute 
意思是寫在html裡面的style
權重會變成`0-0-1-0`

##### psuedo-class 
偽類的權重為`0-0-1-0`
例如`:nth-child()、 :link、:hover、:focus、:only-of-type、:nth-of-type`
及
`[type:checkbox]、[attr]`

##### !important 
會蓋過所有權重
因為他的權重是
`1-0-0-0`
####結論
舉例來說 ul>li 兩個都是element 所以是0-0-0-2
lu .nav 則是一個element ＋ class  所以是0-0-1-1
li .nav p 則是兩個element + class 所以是0-0-1-2
:hover [attr] 所以權重是0-0-1-0
