<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Scroll to validation error in laravel using alpinejs.</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-gray-900 antialiased">
<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        <!-- Session Status -->

        <form method="POST">
            @csrf
            <!-- Username -->
            <div>
                <label class="block font-medium text-sm text-gray-700" for="username">
                    用户名
                </label>
                <input
                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full"
                    id="username" type="text" name="username" value="" />

                @error('username')
                <ul class="text-sm text-red-600 space-y-1 mt-2">
                    <li>{{ $message }}</li>
                </ul>
                @enderror
            </div>

            <!-- Email -->
            <div class="pt-4">
                <label class="block font-medium text-sm text-gray-700" for="email">
                    邮箱地址
                </label>
                <input
                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full"
                    id="email" type="text" name="email" value="" />

                @error('email')
                <ul class="text-sm text-red-600 space-y-1 mt-2">
                    <li>{{ $message }}</li>
                </ul>
                @enderror
            </div>

            <!-- Bio -->
            <div class="mt-4">
                <label class="block font-medium text-sm text-gray-700" for="bio">
                    简介
                </label>

                <textarea
                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full"
                    rows="6" id="bio" name="bio"></textarea>
            </div>

            <!-- Country -->
            <div class="block mt-4">
                <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Country</label>
                <div class="mt-1">
                    <select id="country" name="country" autocomplete="country-name"
                            class="block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600">
                        <option>United States</option>
                        <option>Canada</option>
                        <option>Mexico</option>
                    </select>
                </div>
            </div>

            <!-- Receive emails -->
            <div class="block mt-4">
                <label class="block font-medium text-sm text-gray-700" for="email">
                    接收邮件?
                </label>
                <div class="flex mt-1 items-center space-x-4">
                    <div class="flex items-center space-x-2">
                        <input id="yes" name="email" type="radio"
                               class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="yes"
                               class="block text-sm font-medium leading-6 text-gray-900">是</label>
                    </div>
                    <div class="flex items-center space-x-2">
                        <input id="no" name="email" type="radio"
                               class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                        <label for="no"
                               class="block text-sm font-medium leading-6 text-gray-900">否</label>
                    </div>
                </div>
            </div>


            <div class="flex items-center justify-end mt-4">
                <button type="submit"
                        class="w-full text-center py-3 bg-gray-800 border border-transparent rounded-md font-semibold text-base text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                    提交
                </button>
            </div>
        </form>
    </div>

</div>
</body>
</html>
