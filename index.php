<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: ./login/index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" />

  <title>Monitorig</title>
</head>

<body>
  <header>
    <nav>
      <img src="images/logo.png" alt="logo" />
    </nav>
  </header>
  <main>
    <div class="section">
      <!-- bootstrap class -->
      <table class="table table-bordered tx">
        <tr>
          <td>Agent</td>
          <td>Imane Bouhia</td>
        </tr>
        <tr>
          <td>Confirmateur</td>
          <td>Imane Bouhia</td>
        </tr>
        <tr>
          <td>Equipe</td>
          <td>Salwa</td>
        </tr>
        <tr>
          <td>Operation</td>
          <td>Optin</td>
        </tr>
        <tr>
          <td>NDI</td>
          <td>681943747</td>
        </tr>
        <tr>
          <td>Date</td>
          <td>06/10/2023</td>
        </tr>
        <tr>
          <td>Evaluateur</td>
          <td>Bencheikh Youssef</td>
        </tr>
      </table>
    </div>
    <div class="containerx">
      <table class="table table-bordered ty">
        <thead>
          <tr>
            <th>Items</th>
            <th>sous-items</th>
            <th>Apreciations</th>
            <th>Remarques</th>
          </tr>
          <tr>
            <td rowspan="2">Prise de contract</td>
            <td>Presentation/Acroche</td>
            <td>Non Acquis</td>
            <td>
              <input type="text" style="width: 100%; height: 50px; border: none" />
            </td>
          </tr>
          <tr>
            <td>Decouverte / reformulation</td>
            <td>Non Acquis</td>
            <td>
              <input type="text" style="width: 100%; height: 50px; border: none" />
            </td>
          </tr>
          <tr>
            <td rowspan="2">Argumentaire et gestion de l'entretient</td>
            <td>Propositions</td>
            <td>Acquis</td>
            <td>
              <input type="text" style="width: 100%; height: 50px; border: none" />
            </td>
          </tr>
          <tr>
            <td>Argumentaire et TDO</td>
            <td style="color: red">Situation inacceptable</td>
            <td>
              <input type="text" style="width: 100%; height: 50px; border: none" />
            </td>
          </tr>
          <tr>
            <td rowspan="2">Attitude Generale</td>
            <td>Savoir faire commercial</td>
            <td>Acquis</td>
            <td>
              <input type="text" style="width: 100%; height: 50px; border: none" />
            </td>
          </tr>
          <tr>
            <td>Attitude et qualite de discours</td>
            <td>Acquis</td>
            <td>
              <input type="text" style="width: 100%; height: 50px; border: none" />
            </td>
          </tr>
          <tr>
            <td rowspan="2">Closing</td>
            <td>Validation de comprension et interet</td>
            <td>Acquis</td>
            <td>
              <input type="text" style="width: 100%; height: 50px; border: none" />
            </td>
          </tr>
          <tr>
            <td>Modalite de souscription et accompagnement</td>
            <td>Acquis</td>
            <td>
              <input type="text" style="width: 100%; height: 50px; border: none" />
            </td>
          </tr>
          <tr>
            <td rowspan="2">Tracabilite</td>
            <td>Prise de conge</td>
            <td>Acquis</td>
            <td>
              <input type="text" style="width: 100%; height: 50px; border: none" />
            </td>
          </tr>
          <tr>
            <td>Qualification</td>
            <td>Acquis</td>
            <td>
              <input type="text" style="width: 100%; height: 50px; border: none" />
            </td>
          </tr>

          <tr>
            <td colspan="2" style="color: white; background-color: grey">
              Notre Commerciale
            </td>
            <td style="color: white; background-color: red">18%</td>
            <td>
              <input type="text" style="width: 100%; height: 50px; border: none" />
            </td>
          </tr>
          <tr>
            <td rowspan="4">Confirmation</td>
            <td>Presentation</td>
            <td>N.E</td>
            <td>
              <input type="text" style="width: 100%; height: 50px; border: none" />
            </td>
          </tr>
          <tr>
            <td>Recap et condition de l'offre</td>
            <td>Acquis</td>
            <td>
              <input type="text" style="width: 100%; height: 50px; border: none" />
            </td>
          </tr>
          <tr>
            <td>Validation contract et accoumpagnement</td>
            <td>Acquis</td>
            <td>
              <input type="text" style="width: 100%; height: 50px; border: none" />
            </td>
          </tr>
          <tr>
            <td>Attitude et qualite de discours</td>
            <td>Acquis</td>
            <td>
              <input type="text" style="width: 100%; height: 50px; border: none" />
            </td>
          </tr>
          <tr>
            <td rowspan="2">Tracabilite</td>
            <td>Prise de conge</td>
            <td>Acquis</td>
            <td>
              <input type="text" style="width: 100%; height: 50px; border: none" />
            </td>
          </tr>
          <tr>
            <td>Qualification</td>
            <td>Acquis</td>
            <td>
              <input type="text" style="width: 100%; height: 50px; border: none" />
            </td>
          </tr>

          <tr>
            <td colspan="2" style="color: white; background-color: grey">
              Note Confiramateur
            </td>
            <td style="color: white; background-color: green">100%</td>
            <td>
              <input type="text" style="width: 100%; height: 50px; border: none" />
            </td>
          </tr>
          <tr>
            <td colspan="2" style="color: white; background-color: blue">
              notre l'appel
            </td>
            <td style="color: white; background-color: pink">59%</td>
            <td>
              <input type="text" style="width: 100%; height: 50px; border: none" />
            </td>
          </tr>
        </thead>
      </table>
      <p style="
            display: inline;
            background-color: blue;
            color: red;
            padding: 0 5px;
          ">
        Inconformites
      </p>
      <table class="table table-bordered tz">
        <tr>
          <td style="background-color: white"></td>
          <td>Nombre</td>
          <td>Details</td>
          <td>Degre</td>
        </tr>
        <tr>
          <td>Agent</td>
          <td>1</td>
          <td>
            fausse premesse (Remise et preomotios, rappel par le 1023,
            resolution preblem..)
          </td>
          <td>Critique</td>
        </tr>
        <tr>
          <td>Confiramateur</td>
          <td>0</td>
          <td>0</td>
          <td>R.A.S</td>
        </tr>
      </table>
    </div>
  </main>
</body>

</html>