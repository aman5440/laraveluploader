# laraveluploader

This package uses the dorpzone wrapped in a Laravel's blade component, provides the functionality to Upload Multiple files.
It also allows you to linkthe uploaded files to link with related table.


<h3>Installation via composer</h3>

composer require idea/uploader


<h3>Integration Steps</h3>
After composer command, copy the service provider path and pase in app.php of your application
<h4>Idea\Uploader\UploaderService::class</h4>

<h3>jQuery Dependency</h3>
As mentioned, this package is using the Dropzone.js, jQuery must be loaded before dropzone. For this functiontionality, you must include jQuery in your layout File.
We are doing this jQuery file sepration, only to prevent JS conflicts. So you must have only One jQuery File throughout the application.
Here is some code from layout file
<h4>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
 
@stack('scripts')
</h4>


<h3>Route Declaration</h3>
Philosophy of this package is to provide freedom to link uploaded file to with any section of application. For this you must have control on the uploading functionality. That's why this package need a route, the endpoint.

<h3><x-myuploader-uploader-form action="claimFileUpload"/></h3>

You need to use this in your application's blade file, where the action is end point.



