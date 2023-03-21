<!DOCTYPE html>
<html lang="ru">

<?php include('./head.php') ?>

<head>
    <title>Кактусы на ваш вкус!</title>
</head>

<body class="body">

    <?php include('./header.php') ?>
    <main>
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="../media/images/raster/cactus1.jpg" class="w-100 d-block" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Кактус 1</h3>
                        <p>Описание кактуса 1</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../media/images/raster/cactus2.jpg" class="w-100 d-block" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Кактус 2</h3>
                        <p>Описание второго кактуса</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../media/images/raster/cactus3.jpg" class="w-100 d-block" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Кактус 2.1</h3>
                        <p>Описание разновидности второго кактуса</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </main>


    <?php include('./footer.php') ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>

</body>

</html>