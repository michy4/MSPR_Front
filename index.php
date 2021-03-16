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

  <h1>Promotions</h1><a href="login.php" class="deconnexion waves-effect waves-light btn"><i class="deconnexion">deconnexion</i></a>
  <!-- Menu de navigation du site -->
  <nav>
      <div class="nav-wrapper">
        <ul id="nav-mobile" class="left">
          <li class="generales active"><a v-on:click="toggleGeneral">Générales</a></li>
          <li class="personnelles"><a v-on:click="togglePersonnel">Personnelles</a></li>
          <li class="supprimees"><a v-on:click="toggleSupprimes">Expirées</a></li>
        </ul>
      </div>
  </nav>

  <!-- Contenu principal -->
  <template class="generales" v-if="viewGeneral">
    <div class="row">
        <div class="col s12 m6">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title"><p>Chaussures Homme</p><p class="red-text">-15%</p></span>
              <p>Des chaussures pour toutes les occasions.</p>
              <img src="bug.png">
              <p class="red-text">Expire le: Date de fin de l'offre</p>
            </div>
          </div>
        </div>
    </div>

    <div class="row">
        <div class="col s12 m6">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title"><p>Bonnets</p><p class="red-text">-20%</p></span>
              <p>Des bonnets en laine ou synthétiques, parfaits pour l'hiver.</p>
              <img src="bug.png">
              <p class="red-text">Expire le: Date de fin de l'offre</p>
            </div>
          </div>
        </div>
    </div>

    <div class="row">
        <div class="col s12 m6">
          <div class="card blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title"><p>Pantalons enfants</p><p class="red-text">-15%</p></span>
              <p>Des pantalons pour les enfants de 2 à 10 ans.</p>
              <img src="bug.png">
              <p class="red-text">Expire le: Date de fin de l'offre</p>
            </div>
          </div>
        </div>
    </div>
  </template>

  <template class="personelles" v-if="viewPersonnel">
  <div class="row">
        <div class="col s12 m6">
          <div class="card blue darken-4">
            <div class="card-content white-text">
              <span class="card-title"><p>Tout</p><p class="red-text">-5%</p></span>
              <p>Réduction sur tout produit ne portant pas déjà une autre réduction.</p>
              <img src="bug.png">
              <p class="red-text">Expire le: Date de fin de l'offre</p>
            </div>
          </div>
        </div>
    </div>
  </template>

  <template class="supprimes" v-if="viewSupprimes">
  <div class="row">
        <div class="col s12 m6">
          <div class="card grey darken-1">
            <div class="card-content white-text">
              <span class="card-title"><p>Sacs à Dos</p><p class="red-text">-25%</p></span>
              <p>Offre spéciale pour la rentrée des classes.</p>
              <img src="bug.png">
              <p class="red-text">Expire le: Date de fin de l'offre</p>
            </div>
            <div class="card-action">
              <a href="#">Supprimer</a>
            </div>
          </div>
        </div>
    </div>
  </template>
</div>

<a class="btn-floating btn-large waves-effect waves-light green QR_scan"><i class="material-icons QR_scan">+</i></a>

<script type="text/javascript" src="index.js"></script>

</body>
</html>