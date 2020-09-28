<html>
<head>
	<style>
		.form-control{position:relative;z-index:2;float:left;width:100%;margin-bottom:0}.input-group .form-control:focus{z-index:3}.input-group-lg>.form-control,.input-group-lg>.input-group-addon,.input-group-lg>.input-group-btn>.btn{height:46px;padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}select.input-group-lg>.form-control,select.input-group-lg>.input-group-addon,select.input-group-lg>.input-group-btn>.btn{height:46px;line-height:46px}select[multiple].input-group-lg>.form-control,select[multiple].input-group-lg>.input-group-addon,select[multiple].input-group-lg>.input-group-btn>.btn,textarea.input-group-lg>.form-control,textarea.input-group-lg>.input-group-addon,textarea.input-group-lg>.input-group-btn>.btn{height:auto}.input-group-sm>.form-control,.input-group-sm>.input-group-addon,.input-group-sm>.input-group-btn>.btn{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}select.input-group-sm>.form-control,select.input-group-sm>.input-group-addon,select.input-group-sm>.input-group-btn>.btn{height:30px;line-height:30px}select[multiple].input-group-sm>.form-control,select[multiple].input-group-sm>.input-group-addon,select[multiple].input-group-sm>.input-group-btn>.btn,textarea.input-group-sm>.form-control,textarea.input-group-sm>.input-group-addon,textarea.input-group-sm>.input-group-btn>.btn{height:auto}
		.form-control{display:block;width:100%;height:34px;padding:6px 12px;font-size:14px;line-height:1.42857143;color:#555;background-color:#fff;background-image:none;border:1px solid #ccc;border-radius:4px;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075);-webkit-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;-o-transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;-webkit-transition:border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition:border-color ease-in-out .15s,box-shadow ease-in-out .15s,-webkit-box-shadow ease-in-out .15s}.form-control:focus{border-color:#66afe9;outline:0;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6)}.form-control::-moz-placeholder{color:#999;opacity:1}.form-control:-ms-input-placeholder{color:#999}.form-control::-webkit-input-placeholder{color:#999}.form-control::-ms-expand{background-color:transparent;border:0}.form-control[disabled],.form-control[readonly],fieldset[disabled] .form-control{background-color:#eee;opacity:1}.form-control[disabled],fieldset[disabled] .form-control{cursor:not-allowed}textarea.form-control{height:auto}@media screen and (-webkit-min-device-pixel-ratio:0){input[type=date].form-control,input[type=datetime-local].form-control,input[type=month].form-control,input[type=time].form-control{line-height:34px}.input-group-sm input[type=date],.input-group-sm input[type=datetime-local],.input-group-sm input[type=month],.input-group-sm input[type=time],input[type=date].input-sm,input[type=datetime-local].input-sm,input[type=month].input-sm,input[type=time].input-sm{line-height:30px}.input-group-lg input[type=date],.input-group-lg input[type=datetime-local],.input-group-lg input[type=month],.input-group-lg input[type=time],input[type=date].input-lg,input[type=datetime-local].input-lg,input[type=month].input-lg,input[type=time].input-lg{line-height:46px}}.form-group{margin-bottom:15px}.checkbox,.radio{position:relative;display:block;margin-top:10px;margin-bottom:10px}.checkbox.disabled label,.radio.disabled label,fieldset[disabled] .checkbox label,fieldset[disabled] .radio label{cursor:not-allowed}.checkbox label,.radio label{min-height:20px;padding-left:20px;margin-bottom:0;font-weight:400;cursor:pointer}.checkbox input[type=checkbox],.checkbox-inline input[type=checkbox],.radio input[type=radio],.radio-inline input[type=radio]{position:absolute;margin-top:4px\9;margin-left:-20px}.checkbox+.checkbox,.radio+.radio{margin-top:-5px}.checkbox-inline,.radio-inline{position:relative;display:inline-block;padding-left:20px;margin-bottom:0;font-weight:400;vertical-align:middle;cursor:pointer}.checkbox-inline.disabled,.radio-inline.disabled,fieldset[disabled] .checkbox-inline,fieldset[disabled] .radio-inline{cursor:not-allowed}.checkbox-inline+.checkbox-inline,.radio-inline+.radio-inline{margin-top:0;margin-left:10px}.form-control-static{min-height:34px;padding-top:7px;padding-bottom:7px;margin-bottom:0}.form-control-static.input-lg,.form-control-static.input-sm{padding-right:0;padding-left:0}.input-sm{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}select.input-sm{height:30px;line-height:30px}select[multiple].input-sm,textarea.input-sm{height:auto}.form-group-sm .form-control{height:30px;padding:5px 10px;font-size:12px;line-height:1.5;border-radius:3px}.form-group-sm select.form-control{height:30px;line-height:30px}.form-group-sm select[multiple].form-control,.form-group-sm textarea.form-control{height:auto}.form-group-sm .form-control-static{height:30px;min-height:32px;padding:6px 10px;font-size:12px;line-height:1.5}.input-lg{height:46px;padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}select.input-lg{height:46px;line-height:46px}select[multiple].input-lg,textarea.input-lg{height:auto}.form-group-lg .form-control{height:46px;padding:10px 16px;font-size:18px;line-height:1.3333333;border-radius:6px}.form-group-lg select.form-control{height:46px;line-height:46px}.form-group-lg select[multiple].form-control,.form-group-lg textarea.form-control{height:auto}.form-group-lg .form-control-static{height:46px;min-height:38px;padding:11px 16px;font-size:18px;line-height:1.3333333}.has-feedback{position:relative}.has-feedback .form-control{padding-right:42.5px}.form-control-feedback{position:absolute;top:0;right:0;z-index:2;display:block;width:34px;height:34px;line-height:34px;text-align:center;pointer-events:none}.form-group-lg .form-control+.form-control-feedback,.input-group-lg+.form-control-feedback,.input-lg+.form-control-feedback{width:46px;height:46px;line-height:46px}.form-group-sm .form-control+.form-control-feedback,.input-group-sm+.form-control-feedback,.input-sm+.form-control-feedback{width:30px;height:30px;line-height:30px}.has-success .checkbox,.has-success .checkbox-inline,.has-success .control-label,.has-success .help-block,.has-success .radio,.has-success .radio-inline,.has-success.checkbox label,.has-success.checkbox-inline label,.has-success.radio label,.has-success.radio-inline label{color:#3c763d}.has-success .form-control{border-color:#3c763d;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}.has-success .form-control:focus{border-color:#2b542c;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #67b168;box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #67b168}.has-success .input-group-addon{color:#3c763d;background-color:#dff0d8;border-color:#3c763d}.has-success .form-control-feedback{color:#3c763d}.has-warning .checkbox,.has-warning .checkbox-inline,.has-warning .control-label,.has-warning .help-block,.has-warning .radio,.has-warning .radio-inline,.has-warning.checkbox label,.has-warning.checkbox-inline label,.has-warning.radio label,.has-warning.radio-inline label{color:#8a6d3b}.has-warning .form-control{border-color:#8a6d3b;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}.has-warning .form-control:focus{border-color:#66512c;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #c0a16b;box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #c0a16b}.has-warning .input-group-addon{color:#8a6d3b;background-color:#fcf8e3;border-color:#8a6d3b}.has-warning .form-control-feedback{color:#8a6d3b}.has-error .checkbox,.has-error .checkbox-inline,.has-error .control-label,.has-error .help-block,.has-error .radio,.has-error .radio-inline,.has-error.checkbox label,.has-error.checkbox-inline label,.has-error.radio label,.has-error.radio-inline label{color:#a94442}.has-error .form-control{border-color:#a94442;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075);box-shadow:inset 0 1px 1px rgba(0,0,0,.075)}.has-error .form-control:focus{border-color:#843534;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #ce8483;box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 6px #ce8483}.has-error .input-group-addon{color:#a94442;background-color:#f2dede;border-color:#a94442}.has-error .form-control-feedback{color:#a94442}.has-feedback label~.form-control-feedback{top:25px}.has-feedback label.sr-only~.form-control-feedback{top:0}.help-block{display:block;margin-top:5px;margin-bottom:10px;color:#737373}@media (min-width:768px){.form-inline .form-group{display:inline-block;margin-bottom:0;vertical-align:middle}.form-inline .form-control{display:inline-block;width:auto;vertical-align:middle}.form-inline .form-control-static{display:inline-block}.form-inline .input-group{display:inline-table;vertical-align:middle}.form-inline .input-group .form-control,.form-inline .input-group .input-group-addon,.form-inline .input-group .input-group-btn{width:auto}.form-inline .input-group>.form-control{width:100%}.form-inline .control-label{margin-bottom:0;vertical-align:middle}.form-inline .checkbox,.form-inline .radio{display:inline-block;margin-top:0;margin-bottom:0;vertical-align:middle}.form-inline .checkbox label,.form-inline .radio label{padding-left:0}.form-inline .checkbox input[type=checkbox],.form-inline .radio input[type=radio]{position:relative;margin-left:0}.form-inline .has-feedback .form-control-feedback{top:0}}.form-horizontal .checkbox,.form-horizontal .checkbox-inline,.form-horizontal .radio,.form-horizontal .radio-inline{padding-top:7px;margin-top:0;margin-bottom:0}.form-horizontal .checkbox,.form-horizontal .radio{min-height:27px}.form-horizontal .form-group{margin-right:-15px;margin-left:-15px}@media (min-width:768px){.form-horizontal .control-label{padding-top:7px;margin-bottom:0;text-align:right}}.form-horizontal .has-feedback .form-control-feedback{right:15px}@media (min-width:768px){.form-horizontal .form-group-lg .control-label{padding-top:11px;font-size:18px}}@media (min-width:768px){.form-horizontal .form-group-sm .control-label{padding-top:6px;font-size:12px}}	
		html {
		  font-family: 'Helevetica', sans-serif;
		}

		body {
		  color: #333;
		  font-weight: 100;
		  max-width: 50em;
		  margin: 0 auto;
		}

		div:focus {
		  outline: none;
		}

		#heading {
		  font-size: 48px;
		  padding-top: 30px;
		}

		#content {
		  padding-top: 10px;
		  font-size: 24px;
		}

		.drag-drop{
		    width: 100%;
		    /* height: 100px; */
		    background-color: #1caff6;
		    margin-top: 30px;
		    border-radius: 10px;
		    border: dashed 2px white;
		    color: white;
		    text-align: center;
		    padding-top: 82px;
		    padding-bottom: 0px;
		    font-size: 14pt;
		    transition: .5s background-color, .5s color;
		    height: 137px;
		    font-family:inherit;
		}

		.drag-drop.dragover{
		    background-color: #0e384c;
		    color: white;
		}

		.drag-drop.uploading{
		    background-color: #0e384c;
		    color: white;
		}
		.button {
		  background-color: #4CAF50;
		  border: none;
		  color: white;
		  padding: 15px 32px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		  margin: 4px 2px;
		  cursor: pointer;
		}
	</style>
</head>

<body>




<div id="edit_photo" class="edit-photo-modal modal">
    <div class="modal-title"></div>

    <form  class="drag-drop" method="POST" role="form" enctype="multipart/form-data" action="{{ url('/saveBlog') }}" novalidate>
    	{{ csrf_field() }}
        <input type="file" name="bookcover" id="bookcover" />
        <div class="drag-files-label">
            <br>Choose Blog Head image
        </div>
        <input type="hidden" name="headData" id="headData">
        <input type="hidden" name="contData" id="contData">
        <input type="hidden" name="BlogCat" id="BlogCat">
        <input type="submit" name="frm_submit" id="frm_submit" style="display: none;">
    </form>
</div>

 <select class="form-control" id="blog_category">
 	<option value="0">Select Blog Category</option>
 	<option value="1">Business</option>
 	<option value="2">Tech</option>
 	<option value="3">Entertainment</option>
 	<option value="4">Travel</option>
 	<option value="5">Bibliography</option>
 </select>
 <br><br>
 <div id="heading" contenteditable="true"></div>
 <div id="content" contenteditable="true"></div>

 <br><br><br>
 <button onclick="saveBlog()" class="button">Save Blog</button>






<script src="/assets/js/app.js"></script>

<script src="{{ asset('js/app.js') }}"></script>
<script>

	

	function saveBlog() {


		var head = $("#heading").text();
		var cont = $("#content").text();
		var blogCat = $("#blog_category").val();
		var blogHead = $("#bookcover").val();

		if(blogHead == "") { alert("Please select blog image"); }
		if(head == "") { alert("Please select blog header"); }
		if(cont == "") { alert("Please select blog content"); }
		if(blogCat == "") { alert("Please select blog blog category"); }

		if(blogHead !="" && head !="" && cont !="" && blogCat !=""){

			$("#headData").val(head);
			$("#contData").val(cont);
			$("#BlogCat").val(blogCat);
			
			$("#frm_submit").click();
		}

	}

	var droppedFiles;
	var isAdvancedUpload = true;

	(function (document, window, index) {
	         // auto upload image on file upload

	         // feature detection for drag&drop upload
	         isAdvancedUpload = function () {
	            var div = document.createElement('div');
	            return (('draggable' in div) || ('ondragstart' in div && 'ondrop' in div)) && 'FormData' in window && 'FileReader' in window;
	         }();

	         if (isAdvancedUpload)
	         {
	             var form = document.getElementById("drag_files");
	             var input = form.querySelector('input[type="file"]');

	             // needed for ajax upload
	             var ajaxFlag = document.createElement('input');
	             ajaxFlag.setAttribute('type', 'hidden');
	             ajaxFlag.setAttribute('name', 'ajax');
	             ajaxFlag.setAttribute('value', 1);
	             form.appendChild(ajaxFlag);

	             ['drag', 'dragstart', 'dragend', 'dragover', 'dragenter', 'dragleave', 'drop'].forEach(function (event) {
	                 form.addEventListener(event, function (e) {
	                     // preventing the unwanted behaviours
	                     e.preventDefault();
	                     e.stopPropagation();
	                 });
	             });

	             ['dragover', 'dragenter'].forEach(function (event) {
	                 form.addEventListener(event, function () {
	                     form.classList.add('dragover');
	                 });
	             });

	             ['dragleave', 'dragend', 'drop'].forEach(function (event) {
	                 form.addEventListener(event, function () {
	                     form.classList.remove('dragover');
	                 });
	             });

	             form.addEventListener('drop', function (e) {
	                 droppedFiles = e.dataTransfer.files; // the files that were dropped

	                 if (droppedFiles.length > 0)
	                 {
	                     form.querySelector(".drag-files-label").innerHTML = droppedFiles[0].name;
	                     var event = document.createEvent('HTMLEvents');
	                     event.initEvent('submit', true, false);
	                     form.dispatchEvent(event);
	                 }
	             });

	             form.addEventListener('submit', function (e) {
	                 if (form.classList.contains('uploading'))
	                     return false;

	                 form.classList.add('uploading');
	                 //form.classList.remove('is-error');

	                 if (isAdvancedUpload) // ajax file upload for modern browsers
	                 {
	                     e.preventDefault();

	                     // gathering the form data
	                     var ajaxData = new FormData(form);
	                     if (droppedFiles) {
	                         console.log(droppedFiles.length);
	                         Array.prototype.forEach.call(droppedFiles, function (file) {
	                             ajaxData.append(input.getAttribute('name'), file);
	                         });
	                     }

	                     // ajax request
	                     var ajax = new XMLHttpRequest();
	                     ajax.open(form.getAttribute('method'), form.getAttribute('action'), true);

	                     ajax.onload = function () {
	                         console.log('ajax onload');
	                         form.classList.remove('uploading');
	                         if (ajax.status >= 200 && ajax.status < 400) {
	                            console.log('win');
	                         }
	                         else {
	                             console.log('whoops');
	                             alert('Error. Please, contact the webmaster!');
	                         }
	                     };

	                     ajax.send(ajaxData);
	                 }
	             });
	         }
	    }(document, window, 0));
</script>
</body>
</html>
