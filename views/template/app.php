<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Alert</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#F5F5DC] text-[#3D9970]">
    <header class="bg-[#009688]">
        <nav class="mx-auto max-w-screen-lg flex justify-between items-center py-4">
            <div class="font-bold text-xl tracking-wide text-white">GreenAlert</div>
            <ul class="flex space-x-4 font-bold">
                <li><a href="/" class="text-[#A7D8C3] hover:text-white">Explorer</a></li>
                <?php if (auth() && !auth()->isAdmin): ?>
                    <li><a href="/my_requests" class="text-[#A7D8C3] hover:text-white">My Requests</a></li>
                    <?php endif; ?>
                <?php if (auth() && auth()->isAdmin): ?>
                    <li><a href="/users" class="text-[#A7D8C3] hover:text-white">Users</a></li>
                <?php endif; ?>
            </ul>
            <ul>
                <?php if (auth()): ?>
                    <li><a href="/logout" class="text-[#A7D8C3] hover:text-white">Oi, <?= auth()->name ?></a></li>
                <?php else: ?>
                    <li><a href="/login" class="text-[#A7D8C3] hover:text-white">Fazer Login</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>

    <main class="mx-auto max-w-screen-lg space-y-6">
        <?php if ($mensagem = flash()->get('mensagem')): ?>
            <div class="border-green-800 bg-green-900 text-green-400 px-4 py-2 rounded-md border-2 text-sm mt-6">
                <?= $mensagem ?>
            </div>
        <?php endif; ?>

        <?php require "../views/{$view}.view.php"; ?>
    </main>
</body>

</html>