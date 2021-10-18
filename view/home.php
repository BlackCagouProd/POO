<?php

$search = new film($film_id='',$title='',$descritpion='',$release_year='',$language_id='',$original_language_id='',$rental_duration='',$lenght='',$replacement_cost='',$special_features='',$last_update='');
$search->search();


?>
    <div class="search">
        <div class="row">
            <div class="col-4">

                <form action="home.php" method="get">

                    <div class="form-group">
                        <label for="formTitle">Titre du film</label>
                        <input id="formTitle" name="title" type="text" class="form-control" placeholder="Tapez un film">
                    </div>

                    <button class="btn btn-success float-right">Rechercher</button>

                </form>
            </div>

            <div class="col-8">

                <?php if (empty($_GET['title'])) : ?>
                    <p class="lead">
                        <em>
                            Veuillez rechercher un film.
                        </em>
                    </p>
                <?php else: ?>
                    <?php if (empty($search)) : ?>
                        <p class="lead">
                        <em>
                            Aucun film n'a été trouvé en base de données.
                        </em>
                    </p>
                    <?php else : ?>
                        <?php foreach ($search->search() as $data) : ?>

                            <div class="card mb-1">
                                <div class="card-header">
                                    <strong><?= $data->title ?> </strong>
                                </div>
                            </div>

                        <?php endforeach; ?>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
            
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>


