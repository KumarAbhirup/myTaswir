<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('constants.assetCaller')
    @include('constants.headerCaller')

            <div class="content">
                <div class="title m-b-md">
                    Your Clients
                </div>

                <div class="links">
                    <a href="{{ url('/') }}">Home</a>
                    <a href="{{ url('/clients') }}" class=" active">Clients</a>
                    <a href="{{ url('/products') }}">Products</a>
                    <a href="{{ url('/orders') }}">Orders</a>
                </div>
            </div>
        </div>
    </body>
</html>
