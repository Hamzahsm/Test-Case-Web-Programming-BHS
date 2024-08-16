<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    {{-- ckeditor --}}
    <link rel="stylesheet" href="https://cdn.ckeditor.com/ckeditor5/43.0.0/ckeditor5.css" />

  </head>
  <body>
    @include('partials.nav')
    @yield('auth')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


   <!-- ckeditor -->
   <script src="https://cdn.ckeditor.com/ckeditor5/41.2.0/super-build/ckeditor.js"></script>
   <script>
     CKEDITOR.ClassicEditor.create(document.getElementById("editor"), { 
         toolbar: {
             items: [
                 'exportPDF','exportWord', '|',
                 'findAndReplace', 'selectAll', '|',
                 'heading', '|',
                 'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                 'bulletedList', 'numberedList', 'todoList', '|',
                 'outdent', 'indent', '|',
                 'undo', 'redo',
                 '-',
                 'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                 'alignment', '|',
                 'link', 'uploadImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
                 'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                 'textPartLanguage', '|',
                 'sourceEditing'
             ],
             shouldNotGroupWhenFull: true
         },
         
         list: {
             properties: {
                 styles: true,
                 startIndex: true,
                 reversed: true
             }
         },

         heading: {
             options: [
                 { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                 { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                 { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                 { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                 { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                 { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                 { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
             ]
         },

         placeholder: 'Tulis deksripsi yang menarik !',
         fontFamily: {
             options: [
                 'default',
                 'Arial, Helvetica, sans-serif',
                 'Courier New, Courier, monospace',
                 'Georgia, serif',
                 'Lucida Sans Unicode, Lucida Grande, sans-serif',
                 'Tahoma, Geneva, sans-serif',
                 'Times New Roman, Times, serif',
                 'Trebuchet MS, Helvetica, sans-serif',
                 'Verdana, Geneva, sans-serif'
             ],
             supportAllValues: true
         },

         fontSize: {
             options: [ 10, 12, 14, 'default', 18, 20, 22 ],
             supportAllValues: true
         },

         htmlSupport: {
             allow: [
                 {
                     name: /.*/,
                     attributes: true,
                     classes: true,
                     styles: true
                 }
             ]
         },

         htmlEmbed: {
             showPreviews: true
         },

         link: {
             decorators: {
                 addTargetToExternalLinks: true,
                 defaultProtocol: 'https://',
                 toggleDownloadable: {
                     mode: 'manual',
                     label: 'Downloadable',
                     attributes: {
                         download: 'file'
                     }
                 }
             }
         },

         mention: {
             feeds: [
                 {
                     marker: '@',
                     feed: [
                         '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                         '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                         '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                         '@sugar', '@sweet', '@topping', '@wafer'
                     ],
                     minimumCharacters: 1
                 }
             ]
         },

         removePlugins: [
             'AIAssistant',
             'CKBox',
             'CKFinder',
             'EasyImage',
             'RealTimeCollaborativeComments',
             'RealTimeCollaborativeTrackChanges',
             'RealTimeCollaborativeRevisionHistory',
             'PresenceList',
             'Comments',
             'TrackChanges',
             'TrackChangesData',
             'RevisionHistory',
             'Pagination',
             'WProofreader',
             'MathType',
             'SlashCommand',
             'Template',
             'DocumentOutline',
             'FormatPainter',
             'TableOfContents',
             'PasteFromOfficeEnhanced',
             'CaseChange'
         ],
     });
   </script> 

   {{-- ck editor training --}}
   <script>
     CKEDITOR.ClassicEditor.create(document.getElementById("training"), { 
         toolbar: {
             items: [
                 'exportPDF','exportWord', '|',
                 'findAndReplace', 'selectAll', '|',
                 'heading', '|',
                 'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                 'bulletedList', 'numberedList', 'todoList', '|',
                 'outdent', 'indent', '|',
                 'undo', 'redo',
                 '-',
                 'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                 'alignment', '|',
                 'link', 'uploadImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
                 'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                 'textPartLanguage', '|',
                 'sourceEditing'
             ],
             shouldNotGroupWhenFull: true
         },
         
         list: {
             properties: {
                 styles: true,
                 startIndex: true,
                 reversed: true
             }
         },

         heading: {
             options: [
                 { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                 { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                 { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                 { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                 { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                 { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                 { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
             ]
         },

         placeholder: 'Tulis deksripsi yang menarik !',
         fontFamily: {
             options: [
                 'default',
                 'Arial, Helvetica, sans-serif',
                 'Courier New, Courier, monospace',
                 'Georgia, serif',
                 'Lucida Sans Unicode, Lucida Grande, sans-serif',
                 'Tahoma, Geneva, sans-serif',
                 'Times New Roman, Times, serif',
                 'Trebuchet MS, Helvetica, sans-serif',
                 'Verdana, Geneva, sans-serif'
             ],
             supportAllValues: true
         },

         fontSize: {
             options: [ 10, 12, 14, 'default', 18, 20, 22 ],
             supportAllValues: true
         },

         htmlSupport: {
             allow: [
                 {
                     name: /.*/,
                     attributes: true,
                     classes: true,
                     styles: true
                 }
             ]
         },

         htmlEmbed: {
             showPreviews: true
         },

         link: {
             decorators: {
                 addTargetToExternalLinks: true,
                 defaultProtocol: 'https://',
                 toggleDownloadable: {
                     mode: 'manual',
                     label: 'Downloadable',
                     attributes: {
                         download: 'file'
                     }
                 }
             }
         },

         mention: {
             feeds: [
                 {
                     marker: '@',
                     feed: [
                         '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                         '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                         '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                         '@sugar', '@sweet', '@topping', '@wafer'
                     ],
                     minimumCharacters: 1
                 }
             ]
         },

         removePlugins: [
             'AIAssistant',
             'CKBox',
             'CKFinder',
             'EasyImage',
             'RealTimeCollaborativeComments',
             'RealTimeCollaborativeTrackChanges',
             'RealTimeCollaborativeRevisionHistory',
             'PresenceList',
             'Comments',
             'TrackChanges',
             'TrackChangesData',
             'RevisionHistory',
             'Pagination',
             'WProofreader',
             'MathType',
             'SlashCommand',
             'Template',
             'DocumentOutline',
             'FormatPainter',
             'TableOfContents',
             'PasteFromOfficeEnhanced',
             'CaseChange'
         ],
     });
   </script> 

   {{-- ck editor skill --}}
   <script>
     CKEDITOR.ClassicEditor.create(document.getElementById("skill"), { 
         toolbar: {
             items: [
                 'exportPDF','exportWord', '|',
                 'findAndReplace', 'selectAll', '|',
                 'heading', '|',
                 'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                 'bulletedList', 'numberedList', 'todoList', '|',
                 'outdent', 'indent', '|',
                 'undo', 'redo',
                 '-',
                 'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                 'alignment', '|',
                 'link', 'uploadImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
                 'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                 'textPartLanguage', '|',
                 'sourceEditing'
             ],
             shouldNotGroupWhenFull: true
         },
         
         list: {
             properties: {
                 styles: true,
                 startIndex: true,
                 reversed: true
             }
         },

         heading: {
             options: [
                 { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                 { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                 { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                 { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                 { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                 { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                 { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
             ]
         },

         placeholder: 'Tulis deksripsi yang menarik !',
         fontFamily: {
             options: [
                 'default',
                 'Arial, Helvetica, sans-serif',
                 'Courier New, Courier, monospace',
                 'Georgia, serif',
                 'Lucida Sans Unicode, Lucida Grande, sans-serif',
                 'Tahoma, Geneva, sans-serif',
                 'Times New Roman, Times, serif',
                 'Trebuchet MS, Helvetica, sans-serif',
                 'Verdana, Geneva, sans-serif'
             ],
             supportAllValues: true
         },

         fontSize: {
             options: [ 10, 12, 14, 'default', 18, 20, 22 ],
             supportAllValues: true
         },

         htmlSupport: {
             allow: [
                 {
                     name: /.*/,
                     attributes: true,
                     classes: true,
                     styles: true
                 }
             ]
         },

         htmlEmbed: {
             showPreviews: true
         },

         link: {
             decorators: {
                 addTargetToExternalLinks: true,
                 defaultProtocol: 'https://',
                 toggleDownloadable: {
                     mode: 'manual',
                     label: 'Downloadable',
                     attributes: {
                         download: 'file'
                     }
                 }
             }
         },

         mention: {
             feeds: [
                 {
                     marker: '@',
                     feed: [
                         '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                         '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                         '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                         '@sugar', '@sweet', '@topping', '@wafer'
                     ],
                     minimumCharacters: 1
                 }
             ]
         },

         removePlugins: [
             'AIAssistant',
             'CKBox',
             'CKFinder',
             'EasyImage',
             'RealTimeCollaborativeComments',
             'RealTimeCollaborativeTrackChanges',
             'RealTimeCollaborativeRevisionHistory',
             'PresenceList',
             'Comments',
             'TrackChanges',
             'TrackChangesData',
             'RevisionHistory',
             'Pagination',
             'WProofreader',
             'MathType',
             'SlashCommand',
             'Template',
             'DocumentOutline',
             'FormatPainter',
             'TableOfContents',
             'PasteFromOfficeEnhanced',
             'CaseChange'
         ],
     });
   </script> 

   {{-- ck editor skill --}}
   <script>
     CKEDITOR.ClassicEditor.create(document.getElementById("pengalaman_kerja"), { 
         toolbar: {
             items: [
                 'exportPDF','exportWord', '|',
                 'findAndReplace', 'selectAll', '|',
                 'heading', '|',
                 'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                 'bulletedList', 'numberedList', 'todoList', '|',
                 'outdent', 'indent', '|',
                 'undo', 'redo',
                 '-',
                 'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                 'alignment', '|',
                 'link', 'uploadImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
                 'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                 'textPartLanguage', '|',
                 'sourceEditing'
             ],
             shouldNotGroupWhenFull: true
         },
         
         list: {
             properties: {
                 styles: true,
                 startIndex: true,
                 reversed: true
             }
         },

         heading: {
             options: [
                 { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                 { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                 { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                 { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                 { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                 { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                 { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
             ]
         },

         placeholder: 'Tulis deksripsi yang menarik !',
         fontFamily: {
             options: [
                 'default',
                 'Arial, Helvetica, sans-serif',
                 'Courier New, Courier, monospace',
                 'Georgia, serif',
                 'Lucida Sans Unicode, Lucida Grande, sans-serif',
                 'Tahoma, Geneva, sans-serif',
                 'Times New Roman, Times, serif',
                 'Trebuchet MS, Helvetica, sans-serif',
                 'Verdana, Geneva, sans-serif'
             ],
             supportAllValues: true
         },

         fontSize: {
             options: [ 10, 12, 14, 'default', 18, 20, 22 ],
             supportAllValues: true
         },

         htmlSupport: {
             allow: [
                 {
                     name: /.*/,
                     attributes: true,
                     classes: true,
                     styles: true
                 }
             ]
         },

         htmlEmbed: {
             showPreviews: true
         },

         link: {
             decorators: {
                 addTargetToExternalLinks: true,
                 defaultProtocol: 'https://',
                 toggleDownloadable: {
                     mode: 'manual',
                     label: 'Downloadable',
                     attributes: {
                         download: 'file'
                     }
                 }
             }
         },

         mention: {
             feeds: [
                 {
                     marker: '@',
                     feed: [
                         '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                         '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                         '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                         '@sugar', '@sweet', '@topping', '@wafer'
                     ],
                     minimumCharacters: 1
                 }
             ]
         },

         removePlugins: [
             'AIAssistant',
             'CKBox',
             'CKFinder',
             'EasyImage',
             'RealTimeCollaborativeComments',
             'RealTimeCollaborativeTrackChanges',
             'RealTimeCollaborativeRevisionHistory',
             'PresenceList',
             'Comments',
             'TrackChanges',
             'TrackChangesData',
             'RevisionHistory',
             'Pagination',
             'WProofreader',
             'MathType',
             'SlashCommand',
             'Template',
             'DocumentOutline',
             'FormatPainter',
             'TableOfContents',
             'PasteFromOfficeEnhanced',
             'CaseChange'
         ],
     });
   </script> 
  </body>
</html>