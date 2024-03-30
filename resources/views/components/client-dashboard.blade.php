<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg pl-3">
            <h2 class="text-3xl text-gray-800 pl-4 pt-5">Welcome, {{Auth::user()->name}}!</h2>
            <div class="grid grid-cols-2">
                <div class="pt-5">
                    <h3 class="text-2xl pl-4">Remaining payments</h3>
                    <div class="overflow-x-auto relative pt-2">
                        <table class="w-full text-sm text-left text-gray-700 pr-5 text-base">
                            <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="py-4 px-6 text-base">
                                    April payment
                                </td>
                                <td class="py-4 px-6">
                                    1.99 €
                                </td>
                                <td>
                                    <a href=""
                                       class="py-1 px-3 border-2 text-sm border-nikol-500
                                        bg-nikol-400 hover:bg-nikol-700 rounded text-white">Pay here</a>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="py-4 px-6 text-base">
                                    May payment
                                </td>
                                <td class="py-4 px-6">
                                    1.99 €
                                </td>
                                <td>
                                    <a href=""
                                       class="py-1 px-3 border-2 text-sm border-nikol-500
                                        bg-nikol-400 hover:bg-nikol-700 rounded text-white">Pay here</a>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="py-4 px-6 text-base">
                                    June payment
                                </td>
                                <td class="py-4 px-6">
                                    1.99 €
                                </td>
                                <td>
                                    <a href=""
                                       class="py-1 px-3 border-2 text-sm border-nikol-500
                                        bg-nikol-400 hover:bg-nikol-700 rounded text-white">Pay here</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
                <div>

                </div>
            </div>
        </div>
    </div>
</div>
