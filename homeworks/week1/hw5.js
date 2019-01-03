function join(str, concatStr) {
	
	// 建立空字串，放入迴圈的數值

	var newstr ='';
	for( var i = 0 ; i < str.length ; i++){
		if(i == str.length-1){
			newstr += str[i]
		}else{
			newstr += str[i]+concatStr
		}
	}
	return newstr
}

function repeat(str, times) {
	var newstr = ''
	for(var i = 0; i< times;i ++){
		newstr +=str;
	}
	return newstr;
}

join([1, 2, 3], '')
repeat('yoyo', 2)

// 另一個解法
// function join(arr ,concatStr){
// 	var result = arr[0]
// 	for(var i = 1 ; i < arr.length ; i++){
// 		result += concatStr + arr[i]
// 	}
// 	return result
// }

// console.log(join([1,2,3]),'!!')
// 這邊有點小錯誤，還在debug

// function repeat(str, times) {
// 	var newstr = ''
// 	for(var i = 0; i< times;i ++){
// 		newstr +=str;
// 	}
// 	return newstr;
// }

// join([1, 2, 3], '')
// repeat('yoyo', 2)
