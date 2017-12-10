var startApp = function() {
  // alert('started');
};


	function takePicture(){
     document.getElementById("cameraPic").addEventListener 
     ("click", cameraTakePicture); 

     function cameraTakePicture() 
     { 
	     navigator.camera.getPicture(onSuccess, onFail, {  
	        quality: 50, 
	        destinationType: Camera.DestinationType.DATA_URL 
	     });  
	     
	     function onSuccess(imageData) { 
	        var image = document.getElementById('userPic'); 
	        image.src = "data:image/jpeg;base64," + imageData; 
	     }  
	     
	     function onFail(message)
	    { 
	        alert('Failed because: ' + message); 
	    } 
      }
	}


	function getPicFromGallery()
	{
		document.getElementById("choosePic").addEventListener("click", cameraGetPicture);

		function cameraGetPicture() {
	   navigator.camera.getPicture(onSuccess, onFail, { quality: 50,
	      destinationType: Camera.DestinationType.DATA_URL,
	      sourceType: Camera.PictureSourceType.PHOTOLIBRARY
	   });

	   function onSuccess(imageURL) {
	      var image = document.getElementById('userPic');
	      image.src = "data:image/jpeg;base64," + imageData;
	   }

	   function onFail(message) {
	      alert('Failed because: ' + message);
	   }

		}
	}