<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portfólio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-stone-900 text-white m-0 p-0 overflow-hidden">
    <!-- Header -->
    <header class="container mx-auto flex justify-between items-center py-4 px-4 sm:px-0">
        <div class="flex items-center text-xl font-bold">
            <span>🥸 Meu Portfólio</span>
        </div>
        <div class="flex items-center">
            <code class="text-center bg-stone-800 text-white">Leonardo Cavalcante Carvalho</code>
        </div>
    </header>

    <div class="overflow-y-auto h-[calc(100vh-4rem)]">
        <!-- Image -->
        <div class="relative mb-10">
            <img src="header.jpg"
                alt="Cronograma Image" class="w-full h-64 object-cover">
            <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-1/2">
                <div class="bg-white text-gray-900 p-2 rounded-full flex items-center">
                    <span class="text-4xl">🥸</span>
                </div>
            </div>
        </div>

        <main class="container mx-auto p-4">
            <!-- Title -->
            <div class="mb-12">
                <h1 class="text-6xl font-bold leading-tight mb-6">Desenvolvedor<br>em Crescimento</h1>
                <p class="text-gray-400 text-lg mb-8">📫 JavaScript / Vue.js</p>
                <p class="text-xl mb-12">💭 Sou desenvolvedor web apaixonado por VueJS, buscando crescer e conquistar
                    reconhecimento no mercado. Desde a versão 1.0, me encantei pela simplicidade e pelas boas práticas
                    de código apresentadas nos exemplos da documentação.
                    Meu objetivo é no futuro próximo me tornar um desenvolvedor Fullstack, utilizando a simplicidade
                    para elevar qualquer projeto ao seu máximo potencial, unindo a organização, facilidade e adaptação.
                </p>
                <div class="flex items-center gap-4">
                    <a href="https://github.com/ileonardo-c"><i
                            class="fab fa-github fa-2x text-gray-400 hover:text-white"></i></a>
                    <a href="https://www.linkedin.com/in/leonardo-c-carvalho"><i
                            class="fab fa-linkedin fa-2x text-gray-400 hover:text-white"></i></a>
                    <a href="https://www.instagram.com/ileonardo.carvalho/"><i
                            class="fab fa-instagram fa-2x text-gray-400 hover:text-white"></i></a>
                </div>
            </div>

            <!-- Skills -->
            <?php
            $skills = [
                [
                    'icon' => 'fas fa-certificate',
                    'iconColor' => 'bg-green-500',
                    'number' => '4',
                    'title' => 'Certificados',
                    'description' => 'Desenvolvimento Pessoal'
                ],
                [
                    'icon' => 'fas fa-globe-americas',
                    'iconColor' => 'bg-yellow-500',
                    'number' => '5',
                    'title' => 'Anos de Experiência',
                    'description' => 'Conheço RequireJS e Vue.js desde a v1'
                ]
            ];

            echo '<div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">';
            foreach ($skills as $skill) {
                echo '<div class="bg-stone-800 rounded-lg p-6">';
                echo '<div class="flex justify-between items-center">';
                echo '<div class="' . $skill['iconColor'] . ' rounded-full p-3">';
                echo '<i class="' . $skill['icon'] . ' fa-lg text-white"></i>';
                echo '</div>';
                echo '<p class="text-4xl font-bold">' . $skill['number'] . '</p>';
                echo '</div>';
                echo '<div class="mt-4">';
                echo '<h3 class="text-xl font-bold">' . $skill['title'] . '</h3>';
                echo '<p class="text-gray-400 text-sm">' . $skill['description'] . '</p>';
                echo '</div>';
                echo '</div>';
            }
            echo '</div>';
            ?>

            <!-- List -->
            <h2 class="text-2xl font-semibold mb-2">🎓 Histórico da Educação</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-700">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">Curso</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-400 uppercase tracking-wider">término</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-700">
                    <?php
                    $education = [
                        ['course' => 'Full-Stack', 'institution' => 'Rocketseat', 'end' => '2025 — ****'],
                        ['course' => 'Tecnólogo em Redes de Computadores', 'institution' => 'Faculdade SENAI FATESG', 'end' => '2014 — 2016'],
                        ['course' => 'Como falar em Público, Oratória e Retórica', 'institution' => 'SENAC Aparecida de Goiânia', 'end' => '2017 — 2017'],
                        ['course' => 'iWeb - Web designer', 'institution' => 'McTech Goiânia - Autorizada Apple', 'end' => '2015 — 2016'],
                        ['course' => 'Ensino Médio com Técnico em Eletrotécnica', 'institution' => 'Escola SESI/SENAI Aparecida de Goiânia', 'end' => '2011 — 2013']
                    ];

                    foreach ($education as $edu) {
                        echo '<tr>';
                        echo '<td class="px-6 py-4 whitespace-nowrap">' . $edu['course'] . '<br><small>' . $edu['institution'] . '</small></td>';
                        echo '<td class="px-6 py-4 whitespace-nowrap">' . $edu['end'] . '</td>';
                        echo '</tr>';
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </main>

        <footer class="bg-stone-800 text-white py-12">
            <div class="container text-left mx-auto px-4">
                <p class="text-xl font-semibold">Que bom te ver por aqui! 😊</p>
                <p class="text-sm text-gray-400 mb-4">Se você se identificou com o meu trabalho e tem um projeto que precisa ganhar vida, fico à disposição para que possamos juntos transformar suas ideias em realidade.</p>
                <p class="text-lg">Vamos conversar e traçar o melhor caminho para o seu projeto? 😉</p>
            </div>
        </footer>
    </div>
</body>
</html>
