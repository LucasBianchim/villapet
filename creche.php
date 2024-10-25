<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Villa Pet</title>
</head>

<body>

    <?php include("header.php") ?>

    <div class="container my-5">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card shadow-sm">
                    <img src="galeria/creche1.webp" class="card-img-top" alt="Creche">
                    <div class="card-body">
                        <h3 class="card-title text-center">CRECHE</h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="mb-4">
                    <h2 class="text-primary"><i class="fas fa-tree"></i> Espaços Amplos</h2>
                    <p>Cada unidade possui 1.000m², muito espaço pro seu DOG gastar energia e se divertir. Espaços arborizados com diversas plantas, todas pensadas para gerar estímulos olfativos e sensoriais aos DOGs.</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-primary"><i class="fas fa-heart"></i> Plano de Saúde</h2>
                    <p>A única creche com parceria com a Porto Seguro-Pet Love. Planos com descontos especiais.</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-primary"><i class="fas fa-dumbbell"></i> Rotina de Atividades</h2>
                    <p>Rotina equilibrada com estímulos físicos e mentais, além de hora para descanso e relaxamento.</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-primary"><i class="fas fa-calendar-check"></i> Planos</h2>
                    <p>Todos os cães passam por uma avaliação comportamental antes da matrícula, onde são observadas as características de cada cãozinho. Essa avaliação é feita cuidadosamente e dura cerca de 4 horas, respeitando a individualidade de cada cãozinho. Essa avaliação não tem custo. Após a avaliação, sugerimos a quantidade de dias e atividades ideais para seu DOG.</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-primary"><i class="fas fa-dog"></i> Separação dos Dogs</h2>
                    <p>Os cães ficam 100% soltos e divididos em grupos, formados de acordo com o porte e personalidade. Cães de porte pequeno ficam separados de cães de porte grande.</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-primary"><i class="fas fa-shower"></i> Banho a Seco</h2>
                    <p>Todos os alunos recebem, no final do dia, banho a seco. Também temos o banho molhado completo, basta agendar.</p>
                </div>

                <div class="mb-4">
                    <h2 class="text-primary"><i class="fas fa-users"></i> Equipe Treinada</h2>
                    <p>Nosso espaço é voltado à recreação e toda nossa equipe é composta por recreadores. Por isso, cães devem atender a alguns pré-requisitos:</p>
                    <ul>
                        <li>Não ter histórico de agressividade</li>
                        <li>Machos apenas castrados (filhotes até 10 meses, conforme avaliação)</li>
                        <li>Fêmeas não podem frequentar durante o cio</li>
                        <li>Algumas raças com manejo especial não são recebidas</li>
                    </ul>
                </div>

                <div class="mb-4">
                    <h2 class="text-primary"><i class="fas fa-syringe"></i> Requisitos de Saúde</h2>
                    <p>É obrigatório que os cães estejam em dia com:</p>
                    <ul>
                        <li>Vacinas (V8 ou V10, raiva, gripe e giárdia)</li>
                        <li>Anti-pulgas</li>
                        <li>Exame de fezes</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <?php include("footer.php") ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-D5U74xqD2pO/+O1p+fP2MAgK0gQkDdrchvL5enU/YYXUptbT13NFI5DeFcWXH0Y7" crossorigin="anonymous"></script>
</body>

</html>
