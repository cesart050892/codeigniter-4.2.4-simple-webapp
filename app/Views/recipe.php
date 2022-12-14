<?php

/**
 * @var string $page_title                   The page title (automatically created by CI from the $data array)
 * @var string $page_subtitle                The page subtitle (automatically created by CI from the $data array)
 * @var array  $recipes                      List of recipes (automatically created by CI from the $data array)
 * @var App\Entities\Recipe $recipe          One recipe (created by the foreach instruction)
 * @var App\Entities\Ingredient $ingredient  One ingredient (created by the foreach instruction)
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= esc($recipe->title) ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <style type="text/css">
        .title {
            padding: 3rem 1.5rem;
        }

        article {
            padding: 1.5rem 1.5rem;
        }
    </style>

</head>

<body>

    <main role="main" class="container">
        <div class="title">
            <h1>
                <?= esc($recipe->title) ?>
            </h1>
        </div>

        <div class="container">
            <article>
                <h5>Ingredients</h5>
                <ul>
                    <?php foreach ($recipe->ingredients as $ingredient) : ?>
                        <li><?= esc($ingredient->quantity) ?> <?= esc($ingredient->name) ?></li>
                    <?php endforeach; ?>
                </ul>
                <h5>Instructions</h5>
                <p><?= nl2br(esc($recipe->instructions)) ?></p>
            </article>

            <div>
                <?= anchor(
                    "/edit/{$recipe->id}",
                    'Edit',
                    ['class' => 'btn btn-outline-primary']
                ) ?>

                <?= anchor(
                    "/delete/{$recipe->id}",
                    'Delete',
                    [
                        'class' => 'btn btn-outline-danger',
                        'onClick' => "return confirm('Do you really want to delete this recipe?');"
                    ]
                ) ?>
            </div>

        </div>

    </main>

    <footer>
        <p class="text-center">&copy; 2021 <?= anchor('/', "My recipe website") ?></p>
    </footer>

</body>

</html>