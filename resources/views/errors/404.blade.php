<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('constants.assetCaller')
    
    <body>
        <div class="flex-center position-ref full-height">
            <div class="top-right links">
                <a href="{{ url('/') }}">You landed on an unknown planet</a>
            </div>
            <div class="content">
                <div class="title m-b-md">
                    Oops! 404 :-(
                </div>

                <div class="links">
                    <a href="https://facebook.com/streamduck" target="_blank">Facebook</a>
                    <a href="https://twitter.com/kumar_abhirup" target="_blank" title="_blank">Twitter</a>
                    <a href="https://youtube.com/c/IQubex" target="_blank">YouTube</a>
                    <a href="https://github.com/KumarAbhirup/streamduck" target="_blank">GitHub</a>
                </div>

            </div>
        </div>
    </body>
</html>
