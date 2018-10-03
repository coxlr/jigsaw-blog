<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body class="bg-grey-lighter">
		@include('_layouts.header')
		<div class="container mx-auto px-4 md:px-2 md:px-0" id="app">
        	<section class="flex flex-col-reverse sm:flex-row">
        		@yield('body')
        	</section>
       	</div>
       	@include('_layouts.footer')

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
       	<script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js" integrity="sha384-4oV5EgaV02iISL2ban6c/RmotsABqE4yZxZLcYMAdG7FAPsyHYAPpywE9PJo+Khy" crossorigin="anonymous"></script>
    </body>
</html>
