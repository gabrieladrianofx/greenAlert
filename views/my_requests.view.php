<h2 class="mt-6 font-bold text-lg text-[#333333]">
    Minhas Requisições
</h2>

<div class="relative flex flex-col w-full h-full text-gray-700 bg-white shadow-md rounded-xl bg-clip-border mt-6">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 p-6">
        <div class="col-span-3">
            <div class="overflow-x-auto">
                <table class="w-full mt-4 text-left table-auto min-w-max">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                                <p class="block font-sans text-sm antialiased font-bold leading-normal text-blue-gray-900">
                                    ID
                                </p>
                            </th>
                            <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                                <p class="block font-sans text-sm antialiased font-bold leading-normal text-blue-gray-900">
                                    Description
                                </p>
                            </th>
                            <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                                <p class="block font-sans text-sm antialiased font-bold leading-normal text-blue-gray-900">
                                    Request Type
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
                            <th class="p-4 items-center border-y border-blue-gray-100 bg-blue-gray-50/50">
                                <p class="block font-sans text-sm antialiased font-bold leading-normal text-blue-gray-900">
                                    Action Taken
                                </p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($requests as $request): ?>
                            <tr>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <div class="flex items-center gap-3">
                                        <div class="flex flex-col">
                                            <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900 opacity-70">
                                                <?= $request->id ?>
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <div class="flex items-center gap-3">
                                        <div class="flex flex-col">
                                            <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900 opacity-70">
                                                <?= $request->description ?>
                                            </p>
                                        </div>
                                    </div>
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
                                        <div class="relative grid items-center px-2 py-1 font-sans text-xs font-bold <?= $class ?> uppercase rounded-md select-none whitespace-nowrap">
                                            <span class=""><?= $request->requestType ?></span>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-4 border-b border-blue-gray-50">
                                    <div class="flex flex-col">
                                        <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900 opacity-70">
                                            <?= $request->latitude . ", " . $request->longitude ?>
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
                                        <div class="relative grid items-center px-2 py-1 font-sans text-xs font-bold <?= $class ?> uppercase rounded-md select-none whitespace-nowrap">
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
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-span-1 p-6 bg-gray-50 rounded-lg shadow-md">
            <h2 class="text-lg font-semibold text-gray-900">Cadastro de Requisição</h2>
            <form action="/my_requests" method="POST" enctype="multipart/form-data" class="mt-4">
                <?php if ($validacoes = flash()->get('validacoes')): ?>
                    <div class="border-red-800 bg-red-900 text-red-400 px-4 py-2 rounded-md border-2 text-sm mb-4">
                        <ul>
                            <li class="font-bold">Verifique os erros abaixo:</li>
                            <?php foreach ($validacoes as $validacao): ?>
                                <li><?= $validacao ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <div class="mb-4">
                    <label for="requestType" class="block text-sm font-medium text-gray-700">Tipo da Solicitação:</label>
                    <select id="requestType" name="requestType" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:border-blue-500 focus:ring focus:ring-blue-200">
                        <option value="denuncia">Denúncia</option>
                        <option value="coleta">Coleta</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="description" class="block text-sm font-medium text-gray-700">Descrição:</label>
                    <textarea id="description" name="description" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:border-blue-500 focus:ring focus:ring-blue-200"></textarea>
                </div>
                <div class="mb-4">
                    <label for="longitude" class="block text-sm font-medium text-gray-700">Longitude:</label>
                    <input type="text" id="longitude" name="longitude" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:border-blue-500 focus:ring focus:ring-blue-200">
                </div>
                <div class="mb-4">
                    <label for="latitude" class="block text-sm font-medium text-gray-700">Latitude:</label>
                    <input type="text" id="latitude" name="latitude" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:border-blue-500 focus:ring focus:ring-blue-200">
                </div>
                <div class="mb-4">
                    <label for="photoRequest" class="block text-sm font-medium text-gray-700">Foto da solicitação:</label>
                    <input type="file" id="photoRequest" name="photoRequest" accept="image/*" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:border-blue-500 focus:ring focus:ring-blue-200">
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Cadastrar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        function gerarCoordenadasAleatorias() {
            const latitude = (Math.random() * 180 - 90).toFixed(6);
            const longitude = (Math.random() * 360 - 180).toFixed(6);

            document.getElementById('latitude').value = latitude;
            document.getElementById('longitude').value = longitude;
        }

        gerarCoordenadasAleatorias();
    });
</script>