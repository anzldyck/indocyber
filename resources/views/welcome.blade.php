{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> --}}

<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Book Store</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
      
    </head>
    <body>
        @php
            $books = App\Models\Books::latest()->get();
        @endphp
       <section>
        <nav class="navbar navbar-expand-lg navbar-light pt-3 pt-lg-5">
            <style scoped>
                @import url("https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap");

                * {
                    font-family: 'Inter', sans-serif !important;
                }

                body {
                    background-color: #FFFFFF;
                }

                body nav .navbar-brand h5 {
                    font-weight: 700 !important;
                    size: 28px;
                    line-height: 150%;
                }

                body nav .navbar-nav .nav-link {
                    font-size: 16px;
                    font-weight: 600;
                    color: #739AD4 !important;
                    margin: 0 30px;
                }

                body nav .navbar-nav .active {
                    color: #080E09 !important;
                    width: 100%;
                    display: -webkit-box !important;
                    display: -ms-flexbox !important;
                    display: flex !important;
                    -webkit-box-pack: center;
                    -ms-flex-pack: center;
                    justify-content: center;
                }

                body nav .navbar-nav .active a {
                    width: 12px;
                }

                body nav .navbar-nav .border-bottom {
                    border-bottom: 2px solid #0F52BA !important;
                }

                @media screen and (min-width: 993px) {
                    body nav .navbar-nav {
                        margin-left: 560px;
                    }
                }
            </style>

            <div class="container">
                <a class="navbar-brand" href="#">
                    <h5 class="mb-0">Book Store</h5>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item active">
                            <a class="nav-link active border-bottom" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item d-flex justify-content-center">
                            <a class="nav-link" href="#">Recommendation</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <a href="{{ route('login') }}" class="btn btn-blues shadow">Sign In</a>
                </div>
            </div>
        </nav>

        <section class="container">
            <style scoped>
                /* @media screen and (min-width: 768px) {
                    body .pl-house {
                        margin: 0 !important;
                        padding-left: 100px;
                    }
                }

                @media screen and (max-width: 768px) {
                    body .pl-house {
                        margin: 0 10px 0 5px !important;
                    }
                } */

                body #header {
                    margin-top: 138px;
                    margin-bottom: 100px;
                    width: 100% !important;
                }

                @media screen and (max-width: 768px) {
                    body #header {
                        margin-top: 50px;
                        margin-bottom: 50px;
                    }
                }

                body .img-header {
                    z-index: -1;
                    position: absolute;
                    top: 0;
                    right: 0;
                }

                body .explore {
                    background-color: #080E09;
                    padding-top: 100px;
                    padding-bottom: 50px;
                }

                @media screen and (max-width: 768px) {
                    body .explore {
                        padding-top: 50px;
                        padding-bottom: 50px;
                    }
                }

                body .explore .descript-explore {
                    max-width: 75%;
                }

                body .pt-35 {
                    padding-top: 35px;
                }

                body .title h1 {
                    font-size: 72px;
                    font-weight: 700;
                    line-height: 150%;
                }

                @media screen and (max-width: 768px) {
                    body .title h1 {
                        font-size: 48px;
                    }
                }

                body .stat {
                    margin-top: 48px;
                }

                body .stat h2 {
                    font-size: 48px;
                    font-weight: 800;
                }

                @media screen and (max-width: 768px) {
                    body .stat h2 {
                        font-size: 28px;
                    }
                }

                body .stat p {
                    font-size: 16px;
                    color: #ADB2B8;
                    font-weight: 400;
                    line-height: 28px;
                }

                body .stat .descript-head {
                    max-width: 90%;
                }

                body .btn-blue {
                    background-color: #0F52BA;
                    color: white;
                    font-weight: 600;
                    font-size: 16px;
                    border-radius: 12px;
                    margin-top: 48px;
                }

                body .btn-blues {
                    background-color: #0F52BA;
                    color: white;
                    font-weight: 600;
                    font-size: 16px;
                    border-radius: 12px;
                }

                body .gallery {
                    padding: 10px 0;
                }

                @media only screen and (max-width: 768px) {
                    body .gallery {
                        margin: 50px 0;
                    }
                }

                body .gallery .card-hotel-carousel {
                    width: 325px;
                    margin-right: 64px;
                    padding: 28px 28px 40px;
                    border-radius: 28px;
                    background: white;
                    -webkit-box-shadow: 20px 8px 18px rgba(178, 177, 255, 0.05);
                    box-shadow: 20px 8px 18px rgba(178, 177, 255, 0.05);
                }

                @media only screen and (max-width: 768px) {
                    body .gallery .card-hotel-carousel {
                        margin-right: 20px;
                    }
                }

                body .gallery .card-hotel-carousel .image-placeholder {
                    width: 268px;
                    height: 260px;
                }

                body .gallery .card-hotel-carousel .image-placeholder img {
                    width: 100%;
                    height: 100%;
                    -o-object-fit: cover;
                    object-fit: cover;
                    border-radius: 16px;
                }

                body .gallery .card-hotel-carousel .card-details {
                    padding-bottom: 53px;
                    height: 150px;
                }

                body .gallery .card-hotel-carousel .card-details .caption {
                    font-weight: 700;
                    font-size: 24px;
                    color: #080E09;
                    margin-top: 24px;
                }

                body .gallery .card-hotel-carousel .card-details .sub-caption {
                    font-weight: 400;
                    color: #ADB2B8;
                }

                body .gallery .card-hotel-carousel .bottom-text .price-content {
                    color: #080E09;
                    font-size: 16px;
                }

                body .gallery .card-hotel-carousel .bottom-text .price-content span {
                    font-weight: 400;
                }

                body .gallery .card-hotel-carousel .bottom-text .price-content span.price {
                    font-weight: 700;
                }

                body .gallery .card-hotel-carousel .bottom-text .rating {
                    font-weight: 700;
                    font-size: 16px;
                    color: #FF9900;
                }

                body .gallery .card-hotel-carousel .bottom-text .rating img {
                    margin-top: -1px;
                    margin-right: 5px;
                }

                @media screen and (min-width: 600px) {
                    body .image-content .img-fluid {
                        height: 144.953px;
                    }
                }

                body .text-content h1 {
                    font-size: 60px !important;
                    line-height: 150%;
                    color: white;
                }

                body .text-content p {
                    font-size: 16px;
                    color: #ADB2B8;
                    font-weight: 400;
                    line-height: 28px;
                    padding-bottom: 108px;
                }

                body .place .img-place-header {
                    width: 100% !important;
                }

                body .scrolling-wrapper {
                    overflow-x: auto;
                }

                body .section::-webkit-scrollbar {
                    height: 0 !important;
                }

                body .section::-webkit-scrollbar-track {
                    background-color: #e4e4e4;
                    border-radius: 100px;
                }

                body .section::-webkit-scrollbar-thumb {
                    background-color: #05BB2D;
                    border-radius: 100px;
                }
            </style>
            <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/bg-header.svg"
                alt="bg-header" class="img-header d-none d-md-block">
            <div class="row mx-0" id="header">
                <div class="col-xl-6">
                    <div class="title">
                        <h1>
                            Find your Favorite books
                        </h1>
                    </div>
                    <div class="d-flex stat">
                        <div class="text-left me-4 me-md-5">
                            <h2>
                                37
                            </h2>
                            <p>
                                Komik
                            </p>
                        </div>
                        <div class="vr"></div>
                        <div class="px-md-5 px-4">
                            <h2>
                                80
                            </h2>
                            <p>
                                Sains
                            </p>
                        </div>
                        <div class="vr"></div>
                        <div class="ms-4 ms-md-5">
                            <h2>
                                760
                            </h2>
                            <p>
                                Programming
                            </p>
                        </div>
                    </div>
                    <div class="stat">
                        <p class="descript-head">
                            The more that you read, the more things you will know. The more that you learn, the more places you???ll go
                        </p>
                    </div>
                    <div>
                        <button class="btn btn-blue px-5 py-3 shadow">
                            Find Book
                        </button>
                    </div>
                </div>
                <div class="col-xl-6 my-auto">
                    <div class="gallery row p-md-4 section scrolling-wrapper flex-row flex-nowrap">
                        <!-- CARD 1 -->
                        <div class="card-hotel-carousel">
                            <div class="image-placeholder">
                                <img src="https://i.pinimg.com/474x/67/de/12/67de123d80c51f8bfb29934648624f99.jpg"
                                    alt="images" />
                            </div>
                            <div class="card-details">
                                <div class="caption">Marshland</div>
                                <span class="sub-caption">Mathew Olshan</span>
                            </div>
                            <div class="bottom-text d-flex flex-row justify-content-between">
                                <div class="price-content flex-grow-1">
                                    <span>Start from</span> <span class="price">40 USD</span>
                                </div>
                                <div class="rating d-flex align-items-center">
                                    <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/star-yellow.svg"
                                        alt="star" />
                                    <span>4.8</span>
                                </div>
                            </div>
                        </div>
                        <!-- END CARD 1 -->
                        <!-- CARD 2 -->
                        <div class="card-hotel-carousel">
                            <div class="image-placeholder">
                                <img src="https://i.pinimg.com/474x/14/75/39/147539aac2b751e5d0813c346ac4be43.jpg"
                                    alt="images" />
                            </div>
                            <div class="card-details">
                                <div class="caption">The Throught Breaking</div>
                                <span class="sub-caption">Cate Emond</span>
                            </div>
                            <div class="bottom-text d-flex flex-row justify-content-between">
                                <div class="price-content flex-grow-1">
                                    <span>Start from</span> <span class="price">40 USD</span>
                                </div>
                                <div class="rating d-flex align-items-center">
                                    <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/star-yellow.svg"
                                        alt="star" />
                                    <span>4.8</span>
                                </div>
                            </div>
                        </div>
                        <!-- END CARD 2 -->
                        <!-- CARD 3 -->
                        <div class="card-hotel-carousel">
                            <div class="image-placeholder">
                                <img src="https://i.pinimg.com/474x/66/ab/e4/66abe4b5abbd209f4a09fcd8afc207d9.jpg"
                                    alt="images" />
                            </div>
                            <div class="card-details">
                                <div class="caption">The Jungle Book</div>
                                <span class="sub-caption">Rudyard</span>
                            </div>
                            <div class="bottom-text d-flex flex-row justify-content-between">
                                <div class="price-content flex-grow-1">
                                    <span>Start from</span> <span class="price">40 USD</span>
                                </div>
                                <div class="rating d-flex align-items-center">
                                    <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/star-yellow.svg"
                                        alt="star" />
                                    <span>4.8</span>
                                </div>
                            </div>
                        </div>
                        <!-- END CARD 3 -->
                    </div>
                </div>
            </div>
        </section>

        </section> 

        <section class="content">
            <style scoped>
                @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap");
          
                * {
                  font-family: 'Poppins', sans-serif !important;
                }
          
                body .content {
                  background: #FFFFFF;
                }
          
                body .content .content {
                  padding-top: 70px;
                  padding-bottom: 70px;
                }
          
                body .content .content .tagline {
                  font-family: Poppins;
                  font-style: normal;
                  font-weight: bold;
                  font-size: 18px;
                  line-height: 27px;
                  /* identical to box height */
                  color: #DB0D70;
                }
          
                body .content .content .headline {
                  font-family: Poppins;
                  font-style: normal;
                  font-weight: bold;
                  font-size: 45px;
                  line-height: 67px;
                  color: #111F37;
                }
          
                body .content .content .benefits {
                  margin-top: 50px;
                  padding-bottom: 50px;
                }
          
                body .content .content .benefits .rectangle {
                  max-width: 288px;
                  max-height: 334px;
                  border: 1px solid #9BA8BE;
                  -webkit-box-sizing: border-box;
                  box-sizing: border-box;
                  border-radius: 26px;
                }
          
                body .content .content .benefits .rectangle img {
                  margin-top: 50px;
                }
          
                body .content .content .benefits .rectangle .headline-benefit {
                  margin-top: 40px;
                  font-family: Poppins;
                  font-style: normal;
                  font-weight: 600;
                  font-size: 18px;
                  line-height: 27px;
                  /* identical to box height */
                  text-align: center;
                  color: #111F37;
                }
          
                body .content .content .benefits .rectangle .subheadline-benefit {
                  font-family: Poppins;
                  font-style: normal;
                  font-weight: 500;
                  font-size: 16px;
                  line-height: 28px;
                  /* or 175% */
                  text-align: center;
                  color: #627492;
                  margin-bottom: 40px;
                }
          
                body .content .content .img-brand {
                  margin-top: 50px;
                }
          
                body .content .content .img-brand img {
                  margin-right: 60px;
                }
          
                @media only screen and (max-width: 768px) {
                  body .content .content .img-brand img {
                    margin-right: 30px;
                    margin-left: 30px;
                  }
                }
          
                /*# sourceMappingURL=main.css.map */
              </style>
            <div class="container">
                <div class="row content">
                  <div class="col-12 px-md-0 my-auto">
                    <div class="tagline">
                      RECOMENDATION
                    </div>
                    <div class="gallery row p-md-4 section scrolling-wrapper flex-row flex-nowrap">
                        @foreach ($books as $item)
                            <!-- CARD 1 -->
                            <div class="card-hotel-carousel">
                                <div class="image-placeholder">
                                    <img src="{{ url($item->photo) }}"
                                        alt="images" />
                                </div>
                                <div class="card-details">
                                    <div class="caption">{{ $item->title }}</div>
                                    <span class="sub-caption">Stok {{ $item->stock }}</span>
                                </div>
                                <div class="bottom-text d-flex flex-row justify-content-between">
                                    <div class="price-content flex-grow-1">
                                        <span>Start from</span> <span class="price">40 USD</span>
                                    </div>
                                    <div class="rating d-flex align-items-center">
                                        <img src="https://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header-House/star-yellow.svg"
                                            alt="star" />
                                        <span>4.8</span>
                                    </div>
                                </div>
                            </div>
                        <!-- END CARD 1 -->
                        @endforeach
                        
                    </div>
                  </div>
                </div>
              </div>
        </section>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
  </html>
