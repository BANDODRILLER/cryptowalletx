<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Transactions</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    />
    <link rel="stylesheet" href="admin/assets/css/tailwind.output.css" />
    <script
        src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
        defer
    ></script>
    <script src="admin/assets/js/init-alpine.js"></script>
</head>
<body>
<div
    class="flex h-screen bg-gray-50 dark:bg-gray-900"
    :class="{ 'overflow-hidden': isSideMenuOpen}"
>
    @include('sweetalert::alert')

    @include('admin.sidebar')
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto">
            <!-- CTA -->
            <a
                class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
                href="/"
            >
                <div class="flex items-center">
                    <svg
                        class="w-5 h-5 mr-2"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                    >
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                        ></path>
                    </svg>
                    <span>Finalised jobs</span>
                </div>
                <span>View more &RightArrow;</span>
            </a>
            <!-- With actions -->
            <h4
                class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
            >
                Table for applications made
            </h4>
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-no-wrap">
                        <thead>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                        >
                            <th class="px-4 py-3">ID</th>
                            <th class="px-4 py-3">Phone</th>
                            <th class="px-4 py-3">Amount</th>
                            <th class="px-4 py-3">Name</th>
                            <th class="px-4 py-3">Message</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3">VERIFY</th>
                            <th class="px-4 py-3">CANCEL</th>
                        </tr>
                        </thead>
                        <tbody
                            class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                        >
                        @foreach($transaction as $n)
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <!-- Avatar with inset shadow -->
                                        <div
                                            class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                                        >
                                        </div>
                                        <div>
                                            <p class="font-semibold">{{$n->user_id}}</p>
                                            <p class="text-xs text-gray-600 dark:text-gray-400">
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <!-- Avatar with inset shadow -->
                                        <div
                                            class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                                        >
                                        </div>
                                        <div>
                                            <p class="font-semibold">{{$n->phone}}</p>
                                            <p class="text-xs text-gray-600 dark:text-gray-400">
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{$n->amount}}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{$n->name}}
                                </td> <td class="px-4 py-3 text-sm">
                                    {{$n->mpesamessage}}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{$n->status}}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    @if($n->status == 0)
                                        <!-- Display Verify button -->
                                        <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                            <a class="btn btn-primary" href="{{route('fixaccount', [ 'amount' => $n->amount ,'user_id' => $n->user_id, 'id'=>$n->id])}}">Confirm</a>
                                    </span>
                                    @elseif($n->status == 2)
                                        <!-- Display Rejected status -->
                                        <span class="text-red-600">Rejected</span>
                                    @elseif($n->status == 1)
                                        <!-- Display Done status -->
                                        <span class="text-green-600">Done</span>
                                    @else
                                        <!-- Handle other status values if needed -->
                                    @endif

                                </td>
                                <td class="px-4 py-3 text-sm">
                                    @if($n->status == 0)

                                    <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                                <a class="btn btn-secondary" href="{{route('cancelfixaccount', [ 'id'=>$n->id])}}"> CANCEL </a>
                                    </span>
                                    @else
                                        <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                                <a class="btn btn-secondary" > Done </a>
                                    </span>
                                    @endif
                                </td>

                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>
</div>
</body>
