// document.querySelector('#submit').addEventListener('click',function(event){
// 	// 測試一下
// 	// alert('ok')

// 	// 看滑鼠的點擊事件
// 	// console.log(event)
// 	// 消除跳頁
// 	event.preventDefault()
// 	const element = document.querySelector('input[name=mail]')
// 	const value = element.value
// 	if(value ===''){

// 		element.parentNode.className +=' invalid'
// 		element.className +=' email'

// 		// 確定有沒有選取到parent
// 		// console.log(element.parentNode)
// 	}
// 	// 測試有沒有抓到value
// 	// alert(value)


	

// })


document.addEventListener('DOMContentLoaded',function(){
	document.querySelector('#submit').addEventListener('click',function(event){
	event.preventDefault()

	let Answer1 = document.querySelector('input[name=mail]')
	let value1 = Answer1.value

	let Answer2 = document.querySelector('input[name=nickname]')
	let value2 = Answer2.value

	let Answer4 = document.querySelector('input[name = job]')
	let value4 = Answer4.value

	let Answer5 = document.querySelector('input[name = experience]')
	let value5 = Answer5.value

	let Answer6 = document.querySelector('input[name = others]')
	let value6 = Answer6.value

	
	
	if(Answer1 || Answer2 || Answer4=== ''){

		Answer1.parentNode.className +=' invalid'
		Answer2.parentNode.className +=' invalid'
		Answer4.parentNode.className +=' invalid'
		Answer5.parentNode.className +=' invalid'
		Answer6.parentNode.className +=' invalid'

		Answer1.className +=' email'
		Answer2.className +=' email'
		Answer4.className +=' email'
		Answer5.className +=' email'
		Answer6.className +=' email'
	

	  
	   }

	})
})
