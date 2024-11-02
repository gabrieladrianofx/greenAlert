<h2 class="mt-6 font-bold text-lg text-[#333333]">
    Request number: <?= $request->id ?>, type: <?= $request->requestType ?>, registered on date: <?= date('d-m-Y', strtotime($request->date_request)) ?>
</h2>

<div class="grid grid-cols-4 gap-4">
    <div class="col-span-3 p-4 rounded border border-[#B0BEC5] bg-[#F4F6F8]">
        <div class="grid grid-cols-2 gap-4 items-center">
            <div class="flex flex-col gap-4">
                <div class="flex flex-col items-center">
                    <img src="<?= !empty($request->photoRequest) ? $request->photoRequest : "assets/upload_image.svg" ?>"
                        class="rounded-lg w-full border border-[#B0BEC5]" alt="photo request">
                    <p class="text-xs text-center mt-2 text-[#666666]">Photo Request</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="<?= !empty($request->photoActionTaken) ? $request->photoActionTaken : "assets/upload_image.svg" ?>"
                        class="rounded-lg w-full border border-[#B0BEC5]" alt="photo action taken">
                    <p class="text-xs text-center mt-2 text-[#666666]">Photo Action Taken</p>
                </div>
            </div>

            <div class="flex flex-col gap-2">
                <a href="livro?id=<?= $request->id ?>" class="font-semibold text-lg hover:underline text-[#333333]"><?= $request->description ?></a>
                <div class="text-sm italic text-[#828282]">Address: <?= $request->latitude ?>, <?= $request->longitude ?></div>

                <div class="flex items-center gap-2">
                    <span class="text-sm italic text-[#828282]">Request Status:</span>
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
                        <span><?= $request->status ?></span>
                    </div>
                </div>

                <div class="flex items-center gap-2">
                    <span class="text-sm italic text-[#828282]">Action Taken:</span>
                    <?php
                    $statusClasses = [
                        'Notificada' => 'bg-red-500/20 text-red-800',
                        'Coletado' => 'bg-yellow-500/20 text-yellow-800',
                        'default' => 'bg-gray-500/20 text-gray-800',
                    ];
                    $class = $statusClasses[$request->actionTaken] ?? $statusClasses['default'];
                    ?>
                    <div
                        class="relative grid items-center px-2 py-1 font-sans text-xs font-bold <?= $class ?> uppercase rounded-md select-none whitespace-nowrap">
                        <span><?= !empty($request->actionTaken) ? $request->actionTaken : "" ?></span>
                    </div>
                </div>

                <div class="text-sm italic text-[#828282]">Action Date: <?= !empty($request->actionTakenDate) ? date('d-m-Y', strtotime($request->actionTakenDate)) : "-" ?></div>
            </div>
        </div>
    </div>

    <div class="col-span-1">
        <div class="border border-[#B0BEC5] rounded">
            <h1 class="border-b border-[#B0BEC5] text-[#333333] font-bold px-4 py-2">Update Request</h1>

            <form class="p-4 space-y-4" method="POST" action="/updated_request?id=<?= $request->id ?>" enctype="multipart/form-data">
                <input type="hidden" name="_method" value="PATCH">
                <div class="flex flex-col">
                    <label class="text-[#333333] mb-1" for="photoActionTaken">Photo Action Taken</label>
                    <input type="file" name="photoActionTaken"
                        value="<?= $request->photoActionTaken ?>"
                        class="border-[#B0BEC5] border-2 rounded-md bg-[#F4F6F8] text-sm focus:outline-none px-2 py-1">
                </div>

                <div class="flex flex-col">
                    <label class="text-[#333333] mb-1" for="status">Status</label>
                    <select name="status"
                        class="border-[#B0BEC5] border-2 rounded-md bg-[#F4F6F8] text-sm focus:outline-none px-2 py-1">
                        <option value="Pendente" <?= $request->status === 'Pendente' ? 'selected' : '' ?>>Pendente</option>
                        <option value="Em andamento" <?= $request->status === 'Em andamento' ? 'selected' : '' ?>>Em andamento</option>
                        <option value="Concluída" <?= $request->status === 'Concluída' ? 'selected' : '' ?>>Concluída</option>
                    </select>
                </div>

                <div class="flex flex-col">
                    <label class="text-[#333333] mb-1" for="actionTaken">Action Taken</label>
                    <select name="actionTaken"
                        class="border-[#B0BEC5] border-2 rounded-md bg-[#F4F6F8] text-sm focus:outline-none px-2 py-1">
                        <option value="Notificada" <?= $request->actionTaken === 'Notificada' ? 'selected' : '' ?>>Notificada</option>
                        <option value="Coletado" <?= $request->actionTaken === 'Coletado' ? 'selected' : '' ?>>Coletado</option>
                    </select>
                </div>

                <div class="flex flex-col">
                    <label class="text-[#333333] mb-1" for="actionTakenDate">Action Taken Date</label>
                    <input type="date" name="actionTakenDate"
                        value="<?= $request->actionTakenDate ?>"
                        class="border-[#B0BEC5] border-2 rounded-md bg-[#F4F6F8] text-sm focus:outline-none px-2 py-1">
                </div>

                <button type="submit"
                    class="border-[#B0BEC5] bg-[#F4F6F8] text-[#333333] px-4 py-2 rounded-md border-2 hover:bg-[#333333] hover:text-white">
                    Save
                </button>
            </form>
        </div>
    </div>
</div>