function reverse(str) {
	// 建立一個空字串，待會要把數值傳進來
	var reverse='';
	// for迴圈
	for(var i = str.length-1 ; i >= 0 ; i--){
		reverse = reverse + str[i]
	}
	console.log(str[i])
}

	console.log(reverse('yoyoyo'))
// 正確輸出：oyoyoy

// reverse('1abc2')
// 正確輸出：2bca1

// reverse('1,2,3,2,1')
// 正確輸出：1,2,3,2,1