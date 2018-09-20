## 請找出三個課程裡面沒提到的 HTML 標籤並一一說明作用。

1. input屬性：資料輸入的標籤



    input type="date" name="" value="" placeholder=""

他的type有文字輸入（text）、密碼（password）、隱藏變數輸入（hidden）、單一輸入選項（radio）、選擇鈕（checkbox）、reset（重新輸入）、送出表單(submit)、圖形送出扭（image）

value是指type的自訂名稱，例如如果是submit的按鈕，value打確認，按鈕的顯示會變成'確認'
placeholder是指輸入後，會顯示什麼文字




2. img： 置入圖片

	img src="" alt="" width="50" height="50"

<br>
src是放置圖片的位置，alt是指當瀏覽器無法載入圖像的時候，以文字代替顯示，可以告知使用者該區域是什麼。
<br>
width與height可調整圖片寬度與高度
3. br：強制換行


## 請問什麼是盒模型（box modal）

在css的元素裡，每個元素都是像是一個盒子，
每個元素可以設定尺寸來控制它本身的大小與彼此排列的距離位置，
然而在css中，每個元素都有四個邊的區域，
這些區域分別為content area,padding area,margin area,border area，
而用來調整這些區域則可使用top,bottom,left,right來控制:

>  例如:
	padding-top:100px，則是指content area向上延伸100px
	border則是指外框的大小，其設定值可使用 border-style來設定線條的樣式
	margin則是指與其他元素的距離

## 請問 display: inline, block 跟 inline-block 的差別是什麼？
1.  display: inline
	是指行內元素，行內元素不可以有上下的margin，但可以跟其他元素排列再一起，只能控制左右的距離。
2.  display:block
	是指區塊元素，區塊元素沒有什麼特別限制，唯一限制就是該行只能有一個block在該行。

3.  display:inline-block
	可以設定上下的margin，也可以跟其他元素排列在同一行。
	
## 請問 position: static, relative, absolute 跟 fixed 的差別是什麼？

1. stactic：是指元素的位置是預設值，不會特別定位在頁面上面，而是依照瀏覽器預設的位置自動排版在網頁上。

2. relative：是指元素的位置是相對定位，若是沒有特別設定，預設值則是會依照瀏覽器預設的位置做相對位置排列，然而設定了top,right,left,bottom，也不會影響其他元素原本所在的位置。

3. absolute：是指絕對定位，會根據父層有下相對定位的元素，來做絕對定位來排列位置，父層必須要設定relative，否則absolute會一直往父層找尋相對定位，若是上一層都沒有做相對定位，則會根據body元素（瀏覽器給的位置）做絕對定位。

4. fixed：固定在頁面上的固定位置，捲動依然會停留在設定的位置。