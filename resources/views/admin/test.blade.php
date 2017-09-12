<!DOCTYPE html>
<html>
<head>
    <script src='https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=s7ka3y9htsubvpeq7r07whns7zeu1nujf0amv4dw3yz0czk5'></script>
    <script src="{{ url('js/app.js')  }}"></script>
    <script>
        tinymce.init({
            toolbar: "imageupload | insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
            selector : "textarea",
            setup: function(editor) {
                var inp = $('<input id="tinymce-uploader" type="file" name="pic" accept="image/*" style="display:none">');
                $(editor.getElement()).parent().append(inp);

                inp.on("change",function(){
                    var input = inp.get(0);
                    var file = input.files[0];
                    var fr = new FileReader();
                    fr.onload = function() {
                        var img = new Image();
                        img.src = fr.result;
                        editor.insertContent('<img src="'+img.src+'"/>');
                        inp.val('');
                    }
                    fr.readAsDataURL(file);
                });

                editor.addButton( 'imageupload', {
                    text:"IMAGE",
                    icon: false,
                    onclick: function(e) {
                        inp.trigger('click');
                    }
                });
            },
            theme: "modern",
            width: 1500,
            height: 800,
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor"
            ],
//            content_css: "css/content.css",

            style_formats: [
                {title: 'Bold text', inline: 'b'},
                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                {title: 'Example 1', inline: 'span', classes: 'example1'},
                {title: 'Example 2', inline: 'span', classes: 'example2'},
                {title: 'Table styles'},
                {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
            ]
        });

    </script>
</head>

<body>

<form action="{{ url('upload-test') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <textarea name="content"></textarea>
    <title>Local image loading in to tinymce</title>
    <br/>
    <b>Image size should be lessthan 500kb</b>
    <button>Save</button>
</form>

<div>
    {!! $a->content !!}
</div>

</body>
</html>