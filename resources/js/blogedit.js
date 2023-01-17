  module.exports = function(){


    function image_upload_handler_callback (blobInfo, success, failure, progress) {
  var xhr, formData;

  xhr = new XMLHttpRequest();
  xhr.withCredentials = false;
  xhr.open('POST', 'postAcceptor.php');

  xhr.upload.onprogress = function (e) {
    progress(e.loaded / e.total * 100);
  };

  xhr.onload = function() {
    var json;

    if (xhr.status === 403) {
      failure('HTTP Error: ' + xhr.status, { remove: true });
      return;
    }

    if (xhr.status < 200 || xhr.status >= 300) {
      failure('HTTP Error: ' + xhr.status);
      return;
    }

    json = JSON.parse(xhr.responseText);

    if (!json || typeof json.location != 'string') {
      failure('Invalid JSON: ' + xhr.responseText);
      return;
    }

    success(json.location);
  };

  xhr.onerror = function () {
    failure('Image upload failed due to a XHR Transport error. Code: ' + xhr.status);
  };

  formData = new FormData();
  formData.append('file', blobInfo.blob(), blobInfo.filename());

  xhr.send(formData);
};

        //console.log(CurrentUrl);
        tinymce.init({
          selector: 'textarea',
          setup: function (editor) {
              editor.on('init change', function () {
                  // Add class to all images
                  editor.dom.setAttribs(editor.dom.select('img'), { 'class': 'img-fluid mx-auto d-block' });
              });
          },
          plugins: 'anchor autolink charmap codesample emoticons image link lists searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tableofcontents footnotes mergetags autocorrect typography inlinecss',
          toolbar: 'undo redo | blocks fontfamily fontsize forecolor | bold italic underline strikethrough | link image table | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
          menubar:false,
          language: 'es',
          allow_local_file_access: true,
          image_title: true,
          images_file_types: 'jpg,svg,webp',
          images_upload_url: CurrentUrl+'/post/agregar-imagen',
          image_upload_handler: image_upload_handler_callback,
          automatic_uploads: true,
          images_upload_credentials: false,
          relative_urls: false,
          remove_script_host: false,
          //images_upload_base_path: CurrentUrl+'/admin/',
          //file_picker_types: 'image',

        });
  }

