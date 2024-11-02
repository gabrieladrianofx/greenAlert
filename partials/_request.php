<div class="relative flex flex-col w-full h-full text-gray-700 bg-white shadow-md rounded-xl bg-clip-border">
    <div class="relative mx-4 mt-4 overflow-hidden text-gray-700 bg-white rounded-none bg-clip-border">
        <div class="flex flex-col items-center justify-between gap-4 md:flex-row">
            <div class="block w-full overflow-hidden md:w-max">
                <nav>
                    <ul role="tablist" class="relative flex flex-row p-1 rounded-lg bg-blue-gray-50 bg-opacity-60">
                        <li role="tab"
                            class="relative flex items-center justify-center w-full h-full px-2 py-1 font-sans text-base antialiased font-normal leading-relaxed text-center bg-transparent cursor-pointer select-none text-blue-gray-900"
                            data-value="all">
                            <form>
                                <input type="hidden" name="filter" value="all">
                                <button type="submit" class="z-20 text-inherit bg-transparent border-0 cursor-pointer">&nbsp;&nbsp;All&nbsp;&nbsp;</button>
                                <!-- <div class="absolute inset-0 z-10 h-full bg-white rounded-md shadow"></div> -->
                            </form>
                        </li>
                        <li role="tab"
                            class="relative flex items-center justify-center w-full h-full px-2 py-1 font-sans text-base antialiased font-normal leading-relaxed text-center bg-transparent cursor-pointer select-none text-blue-gray-900"
                            data-value="complaints">
                            <form>
                                <input type="hidden" name="filter" value="complaints">
                                <button type="submit" class="z-20 text-inherit bg-transparent border-0 cursor-pointer">&nbsp;&nbsp;Complaints&nbsp;&nbsp;</button>
                            </form>
                        </li>
                        <li role="tab"
                            class="relative flex items-center justify-center w-full h-full px-2 py-1 font-sans text-base antialiased font-normal leading-relaxed text-center bg-transparent cursor-pointer select-none text-blue-gray-900"
                            data-value="collections">
                            <form>
                                <input type="hidden" name="filter" value="collections">
                                <button type="submit" class="z-20 text-inherit bg-transparent border-0 cursor-pointer">&nbsp;&nbsp;Collections&nbsp;&nbsp;</button>
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="w-full md:w-72">
                <div class="relative h-10 w-full min-w-[200px]">
                    <div class="absolute grid w-5 h-5 top-2/4 right-3 -translate-y-2/4 place-items-center text-blue-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"></path>
                        </svg>
                    </div>
                    <form>
                        <input
                            class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 !pr-9 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-gray-900 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50"
                            name="search"
                            placeholder="search for description" />
                    </form>
                    <label
                        class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none !overflow-visible truncate text-[11px] font-normal leading-tight text-gray-500 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:!border-gray-900 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:!border-gray-900 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                        Search
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="p-6 px-0">
        <table class="w-full mt-4 text-left table-auto min-w-max">
            <thead>
                <tr class="bg-gray-100">
                    <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                        <p class="block font-sans text-sm antialiased font-bold leading-normal text-blue-gray-900">
                            Description
                        </p>
                    </th>
                    <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                        <p class="block font-sans text-sm antialiased font-bold leading-normal text-blue-gray-900">
                            Address
                        </p>
                    </th>
                    <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                        <p class="block font-sans text-sm antialiased font-bold leading-normal text-blue-gray-900">
                            Status
                        </p>
                    </th>
                    <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                        <p class="block font-sans text-sm antialiased font-bold leading-normal text-blue-gray-900">
                            Date Request
                        </p>
                    </th>
                    <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                        <p class="block font-sans text-sm antialiased font-bold leading-normal text-blue-gray-900">
                            Request Type
                        </p>
                    </th>
                    <th class="p-4 items-center border-y border-blue-gray-100 bg-blue-gray-50/50">
                        <p class="block font-sans text-sm antialiased font-bold leading-normal text-blue-gray-900">
                            Action Take
                        </p>
                    </th>
                    <?php if(auth() && auth()->isAdmin): ?>
                    <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                        <p class="block font-sans text-sm antialiased font-bold leading-normal text-blue-gray-900">

                        </p>
                    </th>
                    <?php endif; ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($requests as $request): ?>
                    <tr>
                        <td class="p-4 border-b border-blue-gray-50">
                            <div class="flex items-center gap-3">
                                <div class="flex flex-col">
                                    <p
                                        class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900 opacity-70">
                                        <?= $request->description ?>
                                    </p>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                            <div class="flex flex-col">
                                <p
                                    class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900 opacity-70">
                                    <?= $request->latitude . " " . $request->longitude ?>
                                </p>
                            </div>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                            <div class="w-max">
                                <?php
                                $statusClasses = [
                                    'Pendente' => 'bg-yellow-500/20 text-yellow-800',
                                    'Em andamento' => 'bg-orange-500/20 text-orange-800',
                                    'Concluída' => 'bg-green-500/20 text-green-900',
                                    'Cancelada' => 'bg-red-500/20 text-red-900',
                                    'default' => 'bg-gray-500/20 text-gray-800',
                                ];
                                $class = $statusClasses[$request->status] ?? $statusClasses['default'];
                                ?>
                                <div
                                    class="relative grid items-center px-2 py-1 font-sans text-xs font-bold <?= $class ?> uppercase rounded-md select-none whitespace-nowrap">
                                    <span class=""><?= $request->status ?></span>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                            <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                <?= date('d-m-Y', strtotime($request->date_request)) ?>
                            </p>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                            <div class="w-max">
                                <?php
                                $statusClasses = [
                                    'denuncia' => 'bg-red-500/20 text-red-800',
                                    'coleta' => 'bg-yellow-500/20 text-yellow-800',
                                    'default' => 'bg-gray-500/20 text-gray-800',
                                ];
                                $class = $statusClasses[$request->requestType] ?? $statusClasses['default'];
                                ?>
                                <div
                                    class="relative grid items-center px-2 py-1 font-sans text-xs font-bold <?= $class ?> uppercase rounded-md select-none whitespace-nowrap">
                                    <span class=""><?= $request->requestType ?></span>
                                </div>
                            </div>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                            <div class="flex flex-col items-center">
                                <?php
                                $statusClasses = [
                                    'Notificada' => 'bg-red-500/20 text-red-800',
                                    'Coletado' => 'bg-yellow-500/20 text-yellow-800',
                                    'default' => 'bg-gray-500/20 text-gray-800',
                                ];
                                $class = $statusClasses[$request->actionTaken] ?? $statusClasses['default'];
                                ?>
                                <p class="relative grid items-center px-2 py-1 font-sans text-xs font-bold <?= $class ?> uppercase rounded-md select-none whitespace-nowrap">
                                    <?= $request->actionTaken ?>
                                </p>
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900 opacity-70">
                                    <?= !empty($request->actionTakenDate) ? date('d-m-Y', strtotime($request->actionTakenDate)) : "" ?>
                                </p>
                            </div>
                        </td>
                        <?php if(auth() && auth()->isAdmin): ?>
                        <td class="p-4 border-b border-blue-gray-50">
                            <a href="updated_request?id=<?= $request->id ?>" class="block font-sans text-sm antialiased font-bold leading-normal text-[#009688]">
                                Details
                            </a>
                        </td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="flex items-center justify-between p-4 border-t border-blue-gray-50">

    </div>
</div>