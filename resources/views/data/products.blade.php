<!doctype html>
<html lang="{{ app()->getLocale() }}">
    @include('constants.assetCaller')
    @include('constants.headerCaller')

            <div class="content">
                <div class="title m-b-md">
                    Your Products
                </div>

                <div class="links">
                    <a href="{{ url('/') }}">Home</a>
                    <a href="{{ url('/clients') }}">Clients</a>
                    <a href="{{ url('/products') }}" class="active">Products</a>
                    <a href="{{ url('/orders') }}">Orders</a>
                </div>
            </div>
        </div>
    </body>
</html>
