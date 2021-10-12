
  function startVideoFromCamera() {
		const specifica = {video:{width:1080, height:550, padding:20}}

		navigator.mediaDevices.getUserMedia(specifica).then(stream=>{
			const videoElement = document.querySelector("#video")
			videoElement.srcObject = stream;
			document.querySelector('#stopbt').addEventListener('click',function() {
				videoElement = '';
				videoElement.srcObject.stop()
			})
		}).catch(error=>{console.log(error)})

	}
	window.addEventListener("DOMContentLoaded", startVideoFromCamera)
	
