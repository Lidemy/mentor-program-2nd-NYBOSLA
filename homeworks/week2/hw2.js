function alphaSwap(str) {

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
}


// 想要的輸出結果
// input: nick
// output: NICK

// input: Nick
// output: nICK

// input: ,hEllO122
// output: ,HeLLo123
module.exports = alphaSwap