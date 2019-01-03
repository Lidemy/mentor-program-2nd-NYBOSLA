

function PrintFactor(n){
	for(var i=1 ; i<=n ; i++ ){
		if ( n % 1 ==0){
		// 如果是因數 log i			
			console.log(i)
		}
	}
}

printFactor(9)
printFactor(10)