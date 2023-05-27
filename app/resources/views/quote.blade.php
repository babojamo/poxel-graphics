@extends('layouts.app')

@section('meta-description', "Transform your ideas into reality with Poxel Graphics and Apparel Printing Services. Get a
                            free quote today and discover the possibilities of high-quality custom graphics and apparel
                            printing. If you have questions feel free to contact us.")
@section('meta-keyword', "Poxel graphics and printing services, quotation, printing, products")

@section('title', 'Get A Quote')
@section('header-imports')
<style>
    .login-welcome-content {
        width: unset !important;
        flex: unset !important;
    }
    
    @media only screen and (max-width:576px) {
        .attachment-name {
            width: 100px;
            text-overflow: ellipsis;
            overflow-wrap: break-word;
        }
    }
</style>
@endsection

@section('content')
<section class="pt-180 pb-80">
    <div class="container">
        
        <div class="row">
            <div class="col-12">
                <div class="login-welcome-wrap">
                    <div class="login-welcome-content">
                        <h2 class="title poxel-title">GET A QUOTE</h2>
                        <p>Transform your ideas into reality with Poxel Graphics and Apparel Printing Services. Get a
                            free quote today and discover the possibilities of high-quality custom graphics and apparel
                            printing. If you have questions feel free to <a href="login-register.html">contact us.</a>
                        </p>
                    </div>
                </div>

                @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif
            </div>
        </div>
        <div class="signup-form-wrap">
            <div class="method-wrap">
                <h4 class="title">Select Service</h4>
                <ul class="method-list">
                    <li><a href="{{ route('quotation') }}" class="{{ !$others ? 'active' : '' }}"><i
                                class="flaticon-tag"></i> Sublimation</a></li>
                    <li><a href="{{ route('quotation') . '?service=others' }}" class="{{ $others ? 'active' : '' }}"><i
                                class="flaticon-timer"></i> Others</a></li>
                </ul>
            </div>
            <form action="{{ route('quotation.send') }}" class="create-item-form" method="POST" role="form text-left">
                <input value="{{ $others ? 'others' : 'sublimation' }}" name="service" type="hidden">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-grp">
                            <label for="name">Name <span class="text-danger">*</span></label>
                            <input value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror"
                                id="name" name="name" type="text" placeholder="Name">
                            @error('name')
                            <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-grp">
                            <label for="company">Company <span class="text-danger">*</span></label>
                            <input value="{{ old('company') }}"
                                class="form-control @error('company') is-invalid @enderror" id="company" name="company"
                                type="text" placeholder="Company">
                            @error('company')
                            <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-grp">
                            <label for="contact">Contact Number <span class="text-danger">*</span></label>
                            <input value="{{ old('contact') }}"
                                class="form-control @error('contact') is-invalid @enderror" id="contact" name="contact"
                                type="text" placeholder="Contact number">
                            @error('contact')
                            <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-grp">
                            <label for="email-address">Email Address <span class="text-danger">*</span></label>
                            <input value="{{ old('email_address') }}"
                                class="form-control @error('email_address') is-invalid @enderror" id="email-address"
                                name="email_address" type="text" placeholder="Email address">
                            @error('email_address')
                            <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-grp">
                            <label for="order-type">Order Type <span class="text-danger">*</span></label>
                            <select class="form-control @error('order_type') is-invalid @enderror" name="order_type"
                                id="order-type">
                                <option value="">Select</option>
                                @if($others)

                                @foreach($other_order_types as $type)
                                <option value="{{ $type }}" {{ old('order_type') === $type ? 'selected' : '' }}>
                                    {{ $type }}</option>
                                @endforeach

                                @else

                                @foreach($order_types as $type)
                                <option value="{{ $type }}" {{ old('order_type') === $type ? 'selected' : '' }}>
                                    {{ $type }}</option>
                                @endforeach

                                @endif
                            </select>
                            @error('order_type')
                            <p class="invalid-feedback">{{ $message }}</p>
                            @enderror

                        </div>
                    </div>
                    @if($others)
                    <div class="col-sm-6">
                        <div class="form-grp">
                            <label for="sticker-type">Sticker Type (for sticker only) <span class="text-danger">*</span></label>
                            <select class="form-control @error('sticker_type') is-invalid @enderror" name="sticker_type"
                                id="sticker-type">
                                <option value="">Select</option>
                                @foreach($sticker_types as $type)
                                <option value="{{ $type }}" {{ old('sticker_type') === $type ? 'selected' : '' }}>
                                    {{ $type }}</option>
                                @endforeach
                            </select>

                            @error('sticker_type')
                            <p class="invalid-feedback">{{ $message }}</p>
                            @enderror

                        </div>
                    </div>
                    @else
                    <div class="col-sm-6">
                        <div class="form-grp">
                            <label for="printing-type">Printing Type <span class="text-danger">*</span></label>
                            <select class="form-control @error('printing_type') is-invalid @enderror"
                                name="printing_type" id="printing-type">
                                <option value="">Select</option>
                                @foreach($printing_types as $type)
                                <option value="{{ $type }}" {{ old('printing_type') === $type ? 'selected' : '' }}>
                                    {{ $type }}</option>
                                @endforeach
                            </select>
                            @error('printing_type')
                            <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    @endif

                </div>

                @if(!$others)
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-grp">
                            <label for="fabric">Fabric <span class="text-danger">*</span></label>
                            <select class="form-control @error('fabric') is-invalid @enderror" name="fabric"
                                id="fabric">
                                <option value="">Select</option>
                                @foreach($fabrics as $type)
                                <option value="{{ $type }}" {{ old('fabric') === $type ? 'selected' : '' }}>{{ $type }}
                                </option>
                                @endforeach
                            </select>
                            @error('fabric')
                            <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">

                        <div class="form-grp">
                            <label for="colar-type">Collar Type <span class="text-danger">*</span></label>
                            <select class="form-control @error('collar_type') is-invalid @enderror" name="collar_type"
                                id="colar-type">
                                <option value="">Select</option>
                                @foreach($colar_types as $type)
                                <option value="{{ $type }}" {{ old('collar_type') === $type ? 'selected' : '' }}>
                                    {{ $type }}</option>
                                @endforeach
                            </select>
                            @error('collar_type')
                            <p class="invalid-feedback">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                @endif

                <div class="form-grp">
                    <label for="quantity">Quantity <span class="text-danger">*</span></label>
                    <input value="{{ old('quantity') }}" class="form-control @error('quantity') is-invalid @enderror" id="quantity" type="text"
                        name="quantity" placeholder="Quantity">
                    @error('quantity')
                    <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-grp">
                    <label for="size">Size
                        (<i>{{ $others ? 'Must be in inches' : 'For cloth banner only' }}</i>)</label>
                    <input value="{{ old('size') }}" class="form-control @error('size') is-invalid @enderror" id="size" name="size" type="text"
                        placeholder="Size" />
                    @error('size')
                    <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-grp">
                    <label for="deadline">Possible Deadline for Order</label>
                    <input value="{{ old('deadline') }}" class="form-control @error('deadline') is-invalid @enderror" id="deadline" name="deadline"
                        type="text"
                        placeholder="Please state the specific date as to when the finished product is needed" />
                    @error('deadline')
                    <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-grp">
                    <label for="references">Reference Design</label>
                    <div id="upload-loading" class="spinner-border text-info mx-2" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>

                    <input id="references-upload" type="file" multiple="multiple"/>
                    <p class="text">Maximum upload file size is 10MB and please attach only images or zip files.</p>
                    <input type="hidden" value="{{ old('references') }}" id="references" name="references">
                    <div id="reference-list-wrapper" class="mt-2">
                        <label for="references">Reference Files</label>
                        <ul id="reference-list" class="list-group">
                        </ul>
                    </div>
                    @error('references')
                    <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-grp">
                    <label for="price">Remarks</label>
                    <textarea name="remarks" placeholder="Optional note..." id="remarks" cols="30" rows="10">{{ old('remarks') }}</textarea>
                    @error('remarks')
                    <p class="invalid-feedback">{{ $message }}</p>
                    @enderror
                </div>
                <p>Note: Please fill out completely the form especially your contact information so we can directly send
                    you the quotation</p>
                <button type="submit" id="submit" class="btn">Send Request</button>
            </form>
        </div>
    </div>
</section>

@endsection
@section('footer-imports')
<script src="https://code.jquery.com/jquery-3.6.4.min.js"
    integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

<script>
    try {
        let toUploadFiles = [];

        const upload = $('#references-upload');
        const referenceWrapper = $('#reference-list-wrapper');
        const referenceList = $('#reference-list');
        const loading = $('#upload-loading');
        const submit = $('#submit');
        const referenceInput = $('#references');

        // Hide wrapper
        referenceWrapper.hide();
        loading.hide();



        function appendUploadFiles() {
            referenceList.empty();
            for (let index = 0; index < toUploadFiles.length; index++) {
                const element = toUploadFiles[index];
                referenceList.append(
                    `<li id="reference-file-${index}" class="list-group-item d-flex align-items-center">
                    <span class="attachment-name">${element.file_name}</span>
                    <button type="button" data-id="${index}" class="btn ms-auto reference-button">Remove</button>
                    </li>`
                    );
            }

            if (toUploadFiles.length <= 0)
                referenceWrapper.hide();
            else
                referenceWrapper.show();

            referenceInput.val(JSON.stringify(toUploadFiles));
        }

        function removeFile(index) {
            toUploadFiles.splice(index, 1);
            appendUploadFiles();
        }

        $(document).ready(function () {
            if (!(!referenceInput.val())) {
                toUploadFiles = JSON.parse(referenceInput.val());
                appendUploadFiles();
            }
        });

        referenceWrapper.on('click', '.reference-button', function () {
            removeFile($(this).data('id'));
        });


        //binds to onchange event of your input field
        upload.bind('change', function () {
            var fd = new FormData();
            let size = 0; // MB
            const maxSize = 1000000 * 10; // MB

            for (let index = 0; index < this.files.length; index++) {
                fd.append('images[]', this.files[index]);
                size += this.files[index].size;
            }

            if (size > maxSize) {
                alert("Maximum upload file size is only 10MB please select another file.");
                upload.val('');
            } else {
                loading.show();
                upload.attr('disabled', true);
                submit.attr('disabled', true);

                $.ajax({
                    url: '{{ route('quotation.upload') }}',
                    type: 'post',
                    data: fd,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        toUploadFiles = [
                            ...toUploadFiles,
                            ...response,
                        ];
                        upload.val('');
                        appendUploadFiles();

                        loading.hide();
                        upload.attr('disabled', false);
                        submit.attr('disabled', false);
                    },
                    error: function (XMLHttpRequest, textStatus, errorThrown) {
                        alert("Status: " + textStatus);
                        alert("Error: " + errorThrown);
                    }
                });
            }
        });
    } catch (error) {
        alert(JSON.stringify(error));
    }
</script>
@endsection