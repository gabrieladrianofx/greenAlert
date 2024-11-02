<h2 class="mt-6 font-bold text-lg text-[#333333]">
    Usuarios
</h2>

<div class="relative flex flex-col w-full h-full text-gray-700 bg-white shadow-md rounded-xl bg-clip-border mt-6">
    <div class="grid grid-cols-4 gap-6 p-6">
        <div class="col-span-3">
            <table class="w-full mt-4 text-left table-auto min-w-max">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                            <p class="block font-sans text-sm antialiased font-bold leading-normal text-blue-gray-900">ID</p>
                        </th>
                        <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                            <p class="block font-sans text-sm antialiased font-bold leading-normal text-blue-gray-900">Name</p>
                        </th>
                        <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                            <p class="block font-sans text-sm antialiased font-bold leading-normal text-blue-gray-900">Email</p>
                        </th>
                        <th class="p-4 border-y border-blue-gray-100 bg-blue-gray-50/50">
                            <p class="block font-sans text-sm antialiased font-bold leading-normal text-blue-gray-900">Administrador</p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td class="p-4 border-b border-blue-gray-50">
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900 opacity-70"><?= $user->id ?></p>
                            </td>
                            <td class="p-4 border-b border-blue-gray-50">
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900 opacity-70"><?= $user->name ?></p>
                            </td>
                            <td class="p-4 border-b border-blue-gray-50">
                                <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900 opacity-70"><?= $user->email ?></p>
                            </td>
                            <td class="p-4 border-b border-blue-gray-50">
                                <?php
                                $statusClasses = [
                                    0 => 'bg-red-500/20 text-red-900',
                                    1 => 'bg-green-500/20 text-green-900'
                                ];
                                $class = $statusClasses[$user->isAdmin] ?? $statusClasses['default'];
                                ?>
                                <div class="relative grid items-center px-2 py-1 font-sans text-xs font-bold <?= $class ?> uppercase rounded-md select-none whitespace-nowrap">
                                    <span><?= $user->isAdmin ? "Sim" : "Não" ?></span>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <div class="col-span-1 p-6 bg-gray-50 rounded-lg shadow-md">
            <h2 class="text-lg font-semibold text-gray-900">Cadastro de Usuário</h2>
            <form action="/cadastrar_usuario" method="POST" class="mt-4">
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
                    <label for="name" class="block text-sm font-medium text-gray-700">Nome</label>
                    <input type="text" id="name" name="name" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:border-blue-500 focus:ring focus:ring-blue-200">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="text" id="email" name="email" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:border-blue-500 focus:ring focus:ring-blue-200">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Senha</label>
                    <input type="password" id="password" name="password" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:border-blue-500 focus:ring focus:ring-blue-200">
                </div>
                <div class="mb-4">
                    <label for="isAdmin" class="block text-sm font-medium text-gray-700">Administrador</label>
                    <select id="isAdmin" name="isAdmin" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:border-blue-500 focus:ring focus:ring-blue-200">
                        <option value="0">Não</option>
                        <option value="1">Sim</option>
                    </select>
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white font-bold py-2 rounded-md hover:bg-blue-600">Cadastrar</button>
            </form>
        </div>
    </div>
</div>