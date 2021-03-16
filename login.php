<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
  <meta charset="UTF-8">
  <title>Navigation</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.5/vue.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="index.css">
</head>

<body>
    <div id="demo">
        <div class="row" v-if="!viewConnexion">
            <div class="col s12 m6">
              <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">S'inscrire</span>
                    <form action="index.php" method="post" class="form-example">
                        <div class="form-example">
                          <label for="name">Enter your name: </label>
                          <input type="text" name="name" id="name" required>
                        </div>
                        <div class="form-example">
                          <label for="email">Enter your email: </label>
                          <input type="email" name="email" id="email_inscription" required>
                        </div>
                        <div class="form-example">
                          <label for="email">Enter your password: </label>
                          <input type="password" name="password" id="password_inscription" required>
                        </div>
                        <div class="form-example card-action">
                          <input class="btn" type="submit" value="Nous rejoindre">
                        </div>
                    </form>
                </div>
              </div>
            </div>
        </div>
        <div class="row" v-if="viewConnexion">
            <div class="col s12 m6">
              <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Se connecter</span>
                    <form action="index.php" method="post" class="form-example">
                        <div class="form-example">
                          <label for="email">Enter your email: </label>
                          <input type="email" name="email" id="email_connexion" required>
                        </div>
                        <div class="form-example">
                          <label for="email">Enter your password: </label>
                          <input type="password" name="password" id="password_connexion" required>
                        </div>
                        <div class="form-example card-action">
                          <input class="btn" type="submit" value="Connexion">
                        </div>
                    </form>
                </div>
              </div>
            </div>
        </div>
    <template v-if="!viewConnexion"><p>Déjà chez nous? Connectez-vous <i class="blue-text" v-on:click="toggleConnexion"><a>ici</a></i>.</p></template>
    <template v-if="viewConnexion"><p>Nouveau chez nous? Inscrivez-vous <i class="blue-text" v-on:click="toggleConnexion"><a>ici</a></i>.</p></template>

    </div>    <script type="text/javascript" src="index.js"></script>
</body>
</html>