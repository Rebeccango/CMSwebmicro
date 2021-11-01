tinymce.remove('textarea.richTextBox')

import tinymce from 'tinymce/tinymce'

// A theme is also required
import 'tinymce/themes/silver'

// Any plugins you want to use has to be imported
import 'tinymce/plugins/paste'
import 'tinymce/plugins/link'
import 'tinymce/plugins/code'
import 'tinymce/plugins/print'
import 'tinymce/plugins/searchreplace'
import 'tinymce/plugins/directionality'
import 'tinymce/plugins/visualchars'
import 'tinymce/plugins/visualblocks'
import 'tinymce/plugins/autolink'
import 'tinymce/plugins/fullscreen'
import 'tinymce/plugins/template'
import 'tinymce/plugins/codesample'
import 'tinymce/plugins/charmap'
import 'tinymce/plugins/pagebreak'
import 'tinymce/plugins/hr'
import 'tinymce/plugins/anchor'
import 'tinymce/plugins/nonbreaking'
import 'tinymce/plugins/insertdatetime'
import 'tinymce/plugins/toc'
import 'tinymce/plugins/advlist'
import 'tinymce/plugins/wordcount'
import 'tinymce/plugins/imagetools'
import 'tinymce/plugins/textpattern'
import 'tinymce/plugins/help'

function setImageValue(url) {
  $('.mce-btn.mce-open').parent().find('.mce-textbox').val(url)
}

$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
})

tinymce.baseURL = window.location.origin + '/js/admin/tinymce'
tinymce.suffix = '.min'
tinymce.init({
  menubar: true,
  selector: 'textarea.richTextBox',
  // theme: 'silver',
  // skin_url: $('meta[name="assets-path"]').attr('content') + '?path=js/skins/voyager',
  // skin_url: tinymce.baseURL + "/skins/ui/oxide",
  min_height: 600,
  resize: 'vertical',
  forced_root_block: false,
  plugins: `paste print preview searchreplace directionality visualchars visualblocks autolink fullscreen media template codesample code charmap pagebreak hr anchor nonbreaking insertdatetime toc lists advlist wordcount imagetools textpattern help image link`,
  extended_valid_elements: 'input[id|name|value|type|class|style|required|placeholder|autocomplete|onclick],iframe[*]',
  //  file_browser_callback: function(field_name, url, type, win) {
  //           if(type =='image'){
  //             $('#upload_file').trigger('click');
  //           }
  //       },
  toolbar: 'formatselect | bold italic strikethrough | forecolor backcolor | link image media | alignleft aligncenter alignright alignjustify | numlist bullist outdent indent table | ltr rtl | removeformat | codesample | print | code',
  convert_urls: false,
  image_caption: true,
  image_title: true,

  images_upload_handler: function (blobInfo, success, failure) {
    var xhr, formData
    xhr = new XMLHttpRequest()
    xhr.withCredentials = false
    xhr.open('POST', window.location.origin +'/admin/upload-image')
    console.log(xhr)
    var token = $('meta[name="csrf-token"]').attr('content')
    xhr.setRequestHeader('X-CSRF-Token', token)
    xhr.onload = function () {
      var json
      if (xhr.status != 200) {
        failure('HTTP Error: ' + xhr.status)
        return
      }
      json = JSON.parse(xhr.responseText)

      if (!json || typeof json.location != 'string') {
        failure('Invalid JSON: ' + xhr.responseText)
        return
      }
      success(json.location)
    }
    formData = new FormData()
    formData.append('file', blobInfo.blob(), blobInfo.filename())
    xhr.send(formData)
  },
  // external_plugins: {
  //   'powerpaste': 'plugins/powerpaste/plugin.min.js'
  // },
  automatic_uploads: true,
  content_css: '/css/app.css',
  // valid_elements: 'div[*],p[*],span[*],ul[*],li[*],ol[*],hr,br,img[*],i[*],em,table[*],tr[*],td[*],th[*],sup[*],sub[*],strong[*],b,h1[*],h2[*],h3[*],h4[*],h5[*],h6[*],small[*],a[*], svg,path',
  valid_elements: '+*[*]',
  valid_children: '+li[span|p|div],+body[style]',
  content_style: '.mce-annotation { background: #fff0b7; } .tc-active-annotation {background: #ffe168; color: black; }'
})
