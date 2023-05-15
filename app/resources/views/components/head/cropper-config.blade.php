<script src="{{ asset('js/cropperjs/cropper.min.js') }}" referrerpolicy="origin"></script>

<script>
    
    var $modal = $('#modal');
    var image = document.getElementById('image');
    var image_thumb = document.getElementById('image-thumb');
    var cropper;
    var cropper_thumb;

    $("body").on("change", "{{ $input }}", function (e) {
        var files = e.target.files;
        var done = function (url) {
            image.src = url;
            $modal.modal('show');
        };

        var reader;
        var file;
        var url;

        if (files && files.length > 0) {
            file = files[0];

            if (URL) {
                done(URL.createObjectURL(file));
            } else if (FileReader) {
                reader = new FileReader();
                reader.onload = function (e) {
                    done(reader.result);
                };
                reader.readAsDataURL(file);
            }
        }
    });

    $modal.on('shown.bs.modal', function () {
        cropper = new Cropper(image, {
            aspectRatio: {{ $ratio }},
            viewMode: 3,
            autoCropArea: 1,
        });
    }).on('hidden.bs.modal', function () {
        cropper.destroy();
        cropper = null;
    });

    $("#crop").click(function () {
        canvas = cropper.getCroppedCanvas();

        $("{{ $selector }}").val((canvas.toDataURL("image/png")).replace('data:', '').replace(/^.+,/, ''));

        @if(!empty($thumbnail_selector))
            cropper.replace(canvas.toDataURL("image/png"));
            cropper.setAspectRatio(Number('{{ $thumbnail_ratio }}'));

            image.addEventListener('ready', function () {
                var canva2s = cropper.getCroppedCanvas();
                $("{{ $thumbnail_selector }}").val((canva2s.toDataURL("image/png")).replace('data:', '').replace(/^.+,/, ''));
                $modal.modal('hide');
            });
        @else
        $modal.modal('hide');
        @endif

    });

</script>