<h1 class="text-2xl font-bold text-[#009688] mt-6">Register User</h1>

<form action="/register_user" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
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
        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
            Your Name
        </label>
        <input type="text" id="name" name="name"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
            E-mail
        </label>
        <input type="email" id="email" name="email"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="email_confirmacao">
            Confirm your email
        </label>
        <input type="email_confirmacao" id="email_confirmacao" name="email_confirmacao"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
    </div>

    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
            Password
        </label>
        <input type="password" id="password" name="password"
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" />
    </div>

    <div class="flex items-center space-x-2">
        <button type="reset"
            class="bg-[#009688] hover:bg-[#00796b] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Cancel
        </button>
        <button type="submit"
            class="bg-[#009688] hover:bg-[#00796b] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Register
        </button>
    </div>
</form>

<p class="text-center text-gray-600 text-xs">
    &copy;2024 GreenAlert. Todos os direitos reservados.
</p>