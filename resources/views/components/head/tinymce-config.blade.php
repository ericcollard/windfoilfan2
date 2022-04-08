<script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>

<script>

    var editor_config = {
        path_absolute : "/",
        selector: 'textarea#body',
        relative_urls: false,
        height: 800,
        plugins: 'advlist link image media code hr table lists emoticons',
        menu: {
            format: { title: 'Format', items: 'bold italic underline strikethrough superscript subscript codeformat | fontformats fontsizes align lineheight | forecolor backcolor | removeformat' },
        },
        @can('edit-admin-data',Auth::user())
        menubar: 'edit insert format table tools',
        @else
        menubar: 'edit insert format table',
        @endcan
        toolbar: "undo redo | h3 h4 h5 removeformat | bold italic forecolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | emoticons",
        image_class_list: [
            {title: 'Fluid', value: 'cms-img-fluid'},
            {title: 'Fixed', value: ''},
        ],
        file_picker_callback : function(callback, value, meta) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
            var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
            if (meta.filetype == 'image') {
                cmsURL = cmsURL + "&type=Images";
            } else {
                cmsURL = cmsURL + "&type=Files";
            }

            tinyMCE.activeEditor.windowManager.openUrl({
                url : cmsURL,
                title : 'Filemanager',
                width : x * 0.8,
                height : y * 0.8,
                resizable : "yes",
                close_previous : "no",
                onMessage: (api, message) => {
                    callback(message.content);
                }
            });
        }
    };

    tinymce.init(editor_config);

</script>
