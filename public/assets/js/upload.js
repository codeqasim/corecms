$(function(){
    // First register any plugins
    $.fn.filepond.registerPlugin(
    	FilePondPluginImagePreview
    );

    // Create FilePond element
   $(document).on('click', '.fp1', function(e) {
      $('.pond1').html(`<input type="file" id="fp-1"
      class="filepond"
      name="file" 
      multiple 
      data-allow-image-edit="false"
      data-max-file-size="3MB"
      data-max-files="3">`);

      loadFilePond('fp-1');
    });

    // Create second FilePond element
    $(document).on('click', '.fp2', function(e) {
      $('.pond2').html(`<input type="file" id="fp-2"
      class="filepond"
      name="file" 
      multiple 
      data-allow-image-edit="false"
      data-max-file-size="3MB"
      data-max-files="3">`);

      loadFilePond('fp-2');
    });
});

// Turn input element into a pond
function loadFilePond(clickedFP) {
    $('#'+clickedFP).filepond({
        allowMultiple: true,
		server: {
			url: 'http://localhost/dropzone/',
			process: {
				url: 'upload.php',
				method: 'POST',
				withCredentials: false,
				headers: {},
				timeout: 7000,
				onload: null,
				onerror: null,
				ondata: null,
			},
			},

			// files: [
			// 	{
			// 		source: '12345',
			// 			options: {
			// 			type: 'local',
		
			// 			file: {
			// 				name: 'my-file.png',
			// 				size: 3001025,
			// 				type: 'image/png',
			// 			},
			// 		},
			// 	},
			// ],

    });

    // Listen for addfile event
    $('#'+clickedFP).on('FilePond:addfile', function(e) {
        console.log('file added event', e);
    });
}







FilePond.registerPlugin(
	FilePondPluginFileValidateSize,
	FilePondPluginImagePreview
);

FilePond.create(
	document.querySelector('input'),
	{"labelMaxTotalFileSize": "Vous avez dépassé les 200Mb autorisés", "imagePreviewHeight": 44},

	FilePond.setOptions({
	server: {
		url: 'http://localhost/dropzone/',
		process: {
			url: 'upload.php',
			method: 'POST',
			withCredentials: false,
			headers: {},
			timeout: 7000,
			onload: null,
			onerror: null,
			ondata: null,
		},
		},
	}),

);


// FilePond.parse(document.body);

// FilePond.registerPlugin(FilePondPluginImagePreview, FilePondPluginFileValidateSize);
// FilePond.create(
 
 	
// 	FilePond.setOptions({
// 		server: {
// 			url: 'http://localhost/dropzone/',
// 			process: {
// 				url: 'upload.php',
// 				method: 'POST',
// 				withCredentials: false,
// 				headers: {},
// 				timeout: 7000,
// 				onload: null,
// 				onerror: null,
// 				ondata: null,
// 			},
// 			},
// 		}),


		// const inputElement = document.querySelector('input[type="file"]');
		// const pond = FilePond.create(inputElement);

	   // attributes have been set to pond options
	//    console.log(pond.name); // 'filepond'
	//    console.log(pond.maxFiles); // 10
	//    console.log(pond.required); // true



// );


// FilePond.parse(document.body);



// FilePond.registerPlugin(
//    FilePondPluginFileEncode,
//    FilePondPluginFileValidateSize,
//    FilePondPluginImageExifOrientation,
//    FilePondPluginImagePreview
// );

// FilePond.create(

// 	document.querySelector('input')
// );

