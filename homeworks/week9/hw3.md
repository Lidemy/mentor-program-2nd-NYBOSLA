解釋 event loop
```console.log(1)
setTimeout(() => {
  console.log(2)
}, 0)
console.log(3)
setTimeout(() => {
  console.log(4)
}, 0)
console.log(5)
```
###### 筆記
javascript是腳本語言，所以是單線性的流程，代表所有任務都需要排隊，前一個結束才往下一個任務執行，但過程中cpu是閒置的，因此javascript 發展成主線任務與等待的任務，
等主要任務結束後，再來把等待中的任務繼續執行下去。

因此所有任務分成 同步（synchronous）與異步（asynchronous），在主線在執行時，等待的任務會被放入任務隊伍（task queue），主線清空就會去讀取任務隊伍。

最後，題目的輸出順序是console.log(1) -> console.log(3)->console.log(5) ->console.log(2) ->console.log(4)
