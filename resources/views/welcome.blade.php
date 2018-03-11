<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('constants.assetCaller')
    @include('constants.headerCaller')

            <div class="content">
                <div class="title m-b-md">
                    Fly with <b>{{config('app.name')}}</b>
                </div>

                <div class="links">
                    <a href="https://facebook.com/streamduck" target="_blank">Facebook</a>
                    <a href="https://twitter.com/kumar_abhirup" target="_blank" title="_blank">Twitter</a>
                    <a href="https://youtube.com/c/IQubex" target="_blank">YouTube</a>
                    <a href="https://github.com/KumarAbhirup/mytaswir" target="_blank">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
