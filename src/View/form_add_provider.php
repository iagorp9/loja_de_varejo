<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Loja de varejo, compras, roupas, tenis"> 
    <title>Loja de varejo - Novo fornecedor</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="bg-cyan-300">
        <ul class="flex">
            <li class="mx-3">
                <a href="../../index.html">Home</a>
            </li>
            <li class="mx-3">
                <a href="form_add_product.php">Novo produto</a>
            </li>
            <li class="mx-3">
                <a href="#">Novo fornecedor</a>
            </li>
        </ul>
    <main class="mt-4">
        <form action="../Controller/Provider.php" method="POST" class="bg-indigo-400">
            <section class="columns-4">
                <article class="mx-3">
                    <label for="name">Fornecedor:</label>
                    <input type="text" id="name" name="name" class="border border-stone-900">
                </article>
                <article class="mx-3 mt-1">
                    <label for="phone">Telefone:</label>
                    <input type="number" id="phone" name="phone" class="border border-stone-900" min=1>
                </article>
                <article class="mx-3 mt-1">
                    <label for="cnpj">CNPJ:</label>
                    <input type="number" id="cnpj" name="cnpj" class="border border-stone-900" min=1>
                </article>
                <article class="mx-3 mt-1">
                    <label for="address">Endereço:</label>
                    <input type="text" id="address" name="address" class="border border-stone-900" min=1>
                </article>
            </section>
            <article class="flex justify-center mt-3">
                <button type="submit" class="rounded-full p-4 bg-blue-600 text-white">Cadastrar</button>          
            </article>
        </form>
    </main>
    <header class="bg-slate-900 aspect-square">
    </header>
</body>
</html>