// 給定 n（1<=n<=30），依照規律「回傳」正確圖形（每一行是一個陣列的元素）

// n = 1
// ["*"]

// n = 3
// ["*", "**", "***"]

// n = 6
// ["*", "**", "***", "****", "*****", "******"]


function stars(n) {
	// 建立newStar空陣列
	var newStar = []
	// 建立字串 
	var num = ''
	// 建立迴圈
	for( var i=1 ; i<=n ; i++){
		num+='*'
	}

	return newStar
}



module.exports = stars;