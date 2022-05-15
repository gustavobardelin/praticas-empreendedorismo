<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Portfólio Acadêmico</title>

    <link rel="stylesheet" href="/assets/bootstrap/bootstrap-5.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/style.css">


</head>

<body>

    <?php require ("./assets/pages/header.html");?>

    <main>


        <section id="inicio" class="home-screen">

            <div class="container">

                <div class="section-title d-flex flex-column align-items-center">
                    <h2>Portfólio Acadêmico</h2>
                    <span></span>
                    <h6>Práticas de Empreendedorismo</h6>
                </div>

                <div class="content">

                    <p>
                        Para complementar as atividades desenvolvidas no componente curricular, Práticas de
                        Empreendedorismo, os alunos foram orientados a criar um portfólio educacional onde irão
                        apresentar suas atividades pessoais ou acadêmicas realizadas nas disciplinas de seu curso, que
                        estão envolvidos MTEC Informática para Internet, MTEC Mecânica, MTEC Química e ETIM Informática
                        para Internet.
                    </p>
                    <p>
                        O portfólio é usado como ferramenta de acompanhamento, desenvolvimento e qualidade do
                        ensino/aprendizagem. Os conhecimentos são registrados, enfatizando a finalidade, as competências
                        e práticas adquiridas no processo de ensino e possibilitando um maior reconhecimento ao procurar
                        uma vaga no mercado de trabalho.
                    </p>

                </div>

            </div>

        </section>

        <section id="portfolio" class="portfolio-screen">

            <div class="container">

                <div class="section-title d-flex flex-column align-items-center">
                    <h2>Portfólio de Alunos</h2>
                    <span></span>
                    <h6>Confira o Portfólio de cada aluno de acordo com a turma</h6>
                </div>

                <div class="content">

                    <div class="cards-wrapper row d-flex justify-content-center">

                        <div class="card-wrapper col-sm-8 col-md-6 col-lg-4">
                            <div class="card d-flex flex-column align-items-center justify-content-center">
                                <img class="img-fluid" src="assets/images/informatica.png" alt="">
                                <p>1° MTEC Informática para Internet</p>
                            </div>
                            <a href="/assets/pages/1informatica.php">Ver Alunos</a>
                        </div>

                        <div class="card-wrapper col-sm-8 col-md-6 col-lg-4">
                            <div class="card d-flex flex-column align-items-center justify-content-center"">
                                <img class=" img-fluid" src="assets/images/mecanica.png" alt="">
                                <p>1° MTEC Mecânica</p>
                            </div>
                            <a href="/assets/pages/1mecanica.php">Ver Alunos</a>
                        </div>

                        <div class="card-wrapper col-sm-8 col-md-6 col-lg-4">
                            <div class="card d-flex flex-column align-items-center justify-content-center"">
                                <img class=" img-fluid" src="assets/images/quimica.png" alt="">
                                <p>1° MTEC Química</p>
                            </div>
                            <a href="/assets/pages/1quimica.php">Ver Alunos</a>
                        </div>

                        <div class="card-wrapper col-sm-8 col-md-6 col-lg-4">
                            <div class="card d-flex flex-column align-items-center justify-content-center"">
                                <img class=" img-fluid" src="assets/images/informatica.png" alt="">
                                <p>3° ETIM Informática para Internet</p>
                            </div>
                            <a href="/assets/pages/3informatica.php">Ver Alunos</a>
                        </div>

                    </div>

                </div>

            </div>

        </section>

    </main>


    <?php require_once ("./assets/pages/footer.html");?>


</body>

</html>