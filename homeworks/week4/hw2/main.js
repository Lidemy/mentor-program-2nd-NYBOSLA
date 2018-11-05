document.addEventListener( 'DOMContentLoaded', () => {
				document.querySelector('form').addEventListener('submit', e =>{
					//取得各題答案內容
					let answer1 = document.querySelector('form > div:nth-child(1) > input').value,
						answer2 = document.querySelector('form > div:nth-child(2) > input').value,
						answer3 = '',
						answer4 = document.querySelector('form > div:nth-child(4) > input').value,
						answer5 = document.querySelector('form > div:nth-child(5) > input').value;
					//確認第三題選哪一個
					let chozenType = document.querySelectorAll('[name=chozenType]');
					if(chozenType[0].checked) answer3 = chozenType[0].value;
					else if(chozenType[1].checked) answer3 = chozenType[1].value;
					//取得必選題提示元素
					let warning1 = document.querySelector('.question:nth-child(1)>.req'),
						warning2 = document.querySelector('.question:nth-child(2)>.req'),
						warning3 = document.querySelector('.question:nth-child(3)>.req'),
						warning4 = document.querySelector('.question:nth-child(4)>.req');
					if( !answer1 || !answer2 || !answer3 || !answer4 ){
						if(!answer1) showWarning( warning1 );
						else hideWarnig( warning1 );
						
						if(!answer2) showWarning( warning2 );	
						else hideWarnig( warning2 );
						if(!answer3) showWarning( warning3 );
						else hideWarnig( warning3 );
						if(!answer4) showWarning( warning4 );
						else hideWarnig( warning4 );
						e.preventDefault();
					}else{
						hideWarnig( warning1 );
						hideWarnig( warning2 );
						hideWarnig( warning3 );
						hideWarnig( warning4 );
						console.log('回答：');
						console.log('電子郵件地址：' + answer1);
						console.log('暱稱：' + answer2);
						console.log('報名類型：' + answer3);
						console.log('相關背景：' + answer4);
						console.log('其他：' + answer5);
						alert('答案已傳送！');
					}
				});
			})
			function showWarning( w ) {
				w.parentNode.style.backgroundColor = '#ffdde3';
				w.classList.remove('hidden');
			}
			function hideWarnig( w ) {
				w.parentNode.style.backgroundColor = '#FFFFFF';
				w.classList.add('hidden');
			}