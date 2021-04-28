<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
{{-- <script src="/vendor/idea/uploader/fine-uploader/fine-uploader.core.min.js"></script> --}}

<div
      class="dropzone"
      id="my-awesome-dropzone">
      <div class="fallback">
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <input name="file" type="file" multiple />
      </div>
  </div>
  {{-- <a class="btn btn-success btn-sm" id="uploadBtn">Upload Now</a> --}}
@push('scripts')
<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
<script>
//Dropzone.autoDiscover = false;
var CSRF_TOKEN = "{{csrf_token()}}";
// var myDropzone = new Dropzone
 jQuery("div#my-awesome-dropzone").dropzone({
  url: "{{route($action)}}",
  maxFilesize: 2, // MB
  uploadMultiple :false,
//   acceptedFiles : "image/*,video/*,audio/*",
//   addRemoveLinks: true,
//   forceFallback: false,
  headers: {
    'x-csrf-token': CSRF_TOKEN,
  },
});



jQuery(document).on('click','#uploadBtn',function(){
  alert('Click Happening');
});
</script>
@endpush
<div id="uploader">


</div>
{{-- @dd(__DIR__) --}}



