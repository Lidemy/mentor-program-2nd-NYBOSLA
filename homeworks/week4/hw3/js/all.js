	
		// 連線所需資料
		
			var clientId='22vqi9a1a2bszjbq8v3q1esodbxngo'
			var accept= 'application/vnd.twitchtv.v5+json'
		// 開始連線
			var request = new XMLHttpRequest();
			request.open('GET', 'https://api.twitch.tv/kraken/streams/?game=League%20of%20Legends', true);
			request.setRequestHeader('Accept',accept);
			request.setRequestHeader('Client-ID','22vqi9a1a2bszjbq8v3q1esodbxngo');
			request.send();

			request.onload = function() {
			  if (this.readyState ==4) {
		// 把拿到的資料轉成 js可用格式
			  	var request = JSON.parse(this.response)
		// 拿到實況資料
		// console.log(request)
			  	var streams = request.streams;
		// 把下面appendStreams傳回來
			  	appendStreams(streams)
 	
			    // Success!
			    // var resp = request.responseText;
			  } else {
			    // We reached our target server, but it returned an error

			  }
			};

			request.onerror = function() {
			  // There was a connection error of some sort
			};

			
		// 設計好的append回去DIV
		function appendStreams(streams){
		// 顯示抓去資料
			for(var i = 0 ; i < streams.length ; i++){
			  	// console.log(streams[i])
			  	// console.log(streams[i].preview.large)

			  document.querySelector('.container').innerHTML += `
				<div class='row'>
					<div class="col">
						<div class="preview">
							<img src="${streams[i].preview.large}" alt="">
						</div>
						<div class="bottom">
							<img src='${streams[i].channel.logo}' class="avatar">
							
							<div class="intro">
								<div class="channel_name">${streams[i].channel.status}</div>
								<div class="owner_name">${streams[i].channel.display_name}</div>
							</div>
						</div>
					</div>
				</div>
			
		    `;











			  	}


			  
			  	
		}
	
	








