## hw1：好多星星


註記是解題的思緒
大概是寫完計算機之後，在重新回來看week2，
才漸漸有了一個步驟一個步驟的直覺

```
	// 建立newStar空陣列
	var newStar = []
	// 建立字串 
	var num = ''
	// 建立迴圈
	for( var i=1 ; i<=n ; i++){
		num+='*'
	}

	return num
```
## hw2：大小寫互換
 
這題想了很久，然後就去查了有哪些函式可以使用，
發現可以用for迴圈先抓取str數值，然後再使用CharCodeAt判斷抓取的數值是大寫還是小寫

```

	let result = '';

	for(var i=0;i<str.length;i++){      
		if(str.charCodeAt(i)>=65&&str.charCodeAt(i)<=90){          
			result+=str[i].toLowerCase();       
		}else if(str.charCodeAt(i)>=97&&str.charCodeAt(i)<=122){        
			result+=str[i].toUpperCase();       
		}else{          
			result+=str[i];       
		}      
	}     
	return result;  

```



## hw3：判斷質數

這題主要是要理解質數的定義，才可以設計條件式
```
    if(n === 1) return false
    for (let i=2; i<n; i++) {
        if(n%i === 0) {
            return false
        }
    }
    return true
```


## hw4：判斷迴文
還在思考中....
```
	
	//可抓取陣列的值。

	// 建立空陣列
	// var result =[];
	for(var i=0 ; i<=100 ;i++){
		console.log(i)
		result.pust(i)
	}
  
```

## hw5：大數加法

還在思考中
```
```