<template>
  <div id="home">
    <v-row>
      <v-col class="side-bar" :cols="3">
        <img src="/img/home/blog.bmp" class="blog pa-3" />
        <v-card color="#eceddd" elevation="0" class="pa-5"
          ><ul class="sider-bar-round-btn">
            <li>
              <a
                href="https://mr.bet/fr/casino/type/slot"
                title="Machines a sous gratuites"
                >Les meilleurs slots</a
              >
            </li>
            <li>
              <a
                href="https://mr.bet/fr/casino/new"
                title="Nouvelles Machines a sous gratuites"
                >Nouvelles Machines a sous</a
              >
            </li>
          </ul>
          <v-divider class="my-3"></v-divider>
          <img src="/img/home/groups.bmp" alt="" />
          <p>
            <img src="/img/home/reservation_hotel.gif" width="5" height="5" />
            <strong>
              Vous êtes un groupe d’amis, une association, un comité
              d’entreprise, un club, une école, un responsable
              d’entreprise...?<br />
              Profitez de nos offres de groupes !
            </strong>
          </p>
          <p>
            <img src="/img/home/tourisme.gif" width="9" height="9" />
            <a href="#">Cliquez ici!</a>
          </p>
          <img src="/img/home/infos_hoteliere.bmp" alt="" />
          <p>
            <img src="/img/home/reservation_hotel.gif" width="5" height="5" />
            <strong> Vous recherchez un hôtel en France ? </strong>
          </p>
          <p>
            Nous vous proposons les meilleurs tarifs, de l'hôtel 4 étoiles à
            l'hôtel familial. Vous pouvez réserver en ligne et en toute sécurité
            <strong> directement à l'hôtel</strong>.
          </p>
          <p>
            Vous recevrez une confirmation immédiate. La transaction est
            sécurisée,
            <strong>votre carte de crédit n'est pas débitée</strong>, vous ne
            payez que lors de votre départ de l'hôtel. Vous pouvez aussi
            réserver facilement et rapidement auprès de nos conseillères en
            séjour au <strong>04 32 62 78 91</strong>.
          </p>
          <p class="mt-7">
            <img src="/img/home/reservation_hotel.gif" width="5" height="5" />
            <strong> Utilisez notre moteur de recherche ! </strong>
          </p>
          <p>
            Vous devez sélectionner, une ville ou un code postal, un aéroport ou
            une gare ou bien une zone touristique.
          </p>
          <p>
            Nous vous proposerons un grand choix d'hébergement, que vous pourrez
            sélectionner en fonction de vos dates de séjour, du type de
            catégorie et de votre budget!
          </p>
          <v-divider class="my-3"></v-divider>
          <img src="/img/home/hotel_discount.bmp" alt="" />
          <div class="d-flex justify-center align-center flex-column">
            <p>Si vous <strong>gérez un ou plusieurs hébergements :</strong></p>
            <a href="https://www.123resa.net">
              <input
                type="button"
                value="Accès Administration"
                class="admin-access-btn pa-1"
              />
            </a>
          </div>
          <v-divider class="my-3"></v-divider>
          <div class="d-flex justify-center align-center flex-column">
            <p>Si vous avez déjà effectué une réservation, identifiez-vous</p>
          </div>
          <div class="d-flex flex-column">
            <v-row class="align-center">
              <v-col :cols="3">
                <p style="margin: 0">Identifiant:</p>
              </v-col>
              <v-col>
                <input
                  name="login_client"
                  type="text"
                  class="side-bar-input"
                  size="25"
                />
              </v-col>
            </v-row>
            <v-row class="align-center">
              <v-col :cols="3"> <p style="margin: 0">Mot de passe:</p></v-col>
              <v-col>
                <input
                  name="pass_client"
                  type="password"
                  class="side-bar-input"
                  size="25"
              /></v-col>
            </v-row>
            <div class="d-flex align-center justify-center my-3">
              <input
                name="Submit_client"
                type="submit"
                class="side-bar-btn pa-1"
                value="Connexion"
              />
            </div>
            <p>
              <strong>Oubli</strong> de votre mot de passe, Recevez votre mot de
              passe par email.
            </p>
            <v-row class="align-center">
              <v-col :cols="3"> <p style="margin: 0">Email:</p></v-col>
              <v-col>
                <input
                  name="email_pass"
                  type="text"
                  class="side-bar-input"
                  size="25"
              /></v-col>
              <v-col>
                <input
                  name="Submit_envoi"
                  type="submit"
                  class="side-bar-btn pa-1"
                  value="Envoi"
                />
              </v-col>
            </v-row>
          </div>
          <v-divider class="my-3"></v-divider>
          <img src="/img/home/hotel_dernieres_minutes.bmp" alt="" />
          <p>
            <img src="/img/home/reservation_hotel.gif" width="5" height="5" />
            <strong> Saisissez votre email </strong> pour être informé des
            nouveautés du site.
          </p>
          <div class="d-flex align-center justify-center flex-column">
            <input
              name="emailnewsletter"
              value="Votre email"
              type="text"
              class="side-bar-input pa-1 mb-2"
              size="25"
            />
            <input
              name="go"
              type="submit"
              class="side-bar-btn pa-1"
              value="Go"
            />
          </div>
          <v-divider class="my-3"></v-divider>
          <img src="/img/home/resa_on_line.bmp" alt="" />
          <p>
            Notre société s'engage à vous fournir un service de qualité. Vous
            pouvez utiliser notre système de réservation simple et efficace, en
            toute sécurité. Nous mettons à votre disposition nos conseillères
            disponible par e-mail : <strong>contact@123resa.net</strong>
          </p>
          <v-divider class="my-3"></v-divider>
          <img src="/img/home/promos_sejour.bmp" alt="" />
          <p>Vous pouvez consultez nos <strong>FAQ</strong> ,</p>
          <p>
            <img src="/img/home/tourisme.gif" width="9" height="9" />
            <a href="#">Cliquez ici!</a>
          </p>
          <v-divider class="my-3"></v-divider>
          <p>
            Spécialiste de la
            <a
              href="http://vacances.seloger.com/"
              target="_blank"
              title="location de vacances avec Seloger.com"
              >location vacances</a
            >, seloger.com vous propose de nombreuses formules de séjour sur
            vacances.seloger.com.
          </p>
        </v-card>
      </v-col>
      <v-col class="home-container" :cols="9"
        ><div class="showcase d-flex justify-center align-center">
          <p>
            123RESA vous propose <strong>les meilleures offres</strong> <br />
            de + de 850 000 hôtels et appartements dans le monde entier. <br />
            Pour bénéficier des meilleurs tarifs, utilisez le moteur ci dessous
            !
          </p>
        </div>
        <v-card color="#e4e5cd" class="search-zone pa-3 mt-5">
          <ul class="zones">
            <li>Les villes principales</li>
            <li>Les zones touristiques</li>
            <li>Les aéroports</li>
            <li>Les gares</li>
            <li>Les attractions</li>
          </ul>
          <v-divider class="my-4"></v-divider>
          <div class="results d-flex flex-column"></div>
        </v-card>
      </v-col>
    </v-row>
  </div>
</template>

<script>
export default {};
</script>
<style lang="scss">
@import "./../../sass/variables.scss";
#home {
  .side-bar {
    .blog {
      width: 100%;
      border-radius: 15px;
    }
    .side-bar-input {
      border: #ff7800 1px solid;
      font-size: 10px;
      color: #272727;
      font-family: Verdana, Arial, Helvetica, sans-serif;
      background-color: #dbdcbd;
    }
    .side-bar-btn {
      font-size: 10px;
      color: #272727;
      border: #ff7800 1px solid;
      font-family: Verdana, Arial, Helvetica, sans-serif;
      background-color: #dbdcbd;
      cursor: pointer;
    }
    .admin-access-btn {
      font-size: 10px;
      color: #272727;
      border: #ff7800 1px solid;
      font-family: Verdana, Arial, Helvetica, sans-serif;
      background-color: #dbdcbd;
      cursor: pointer;
    }
    p {
      font-weight: normal;
      font-size: 10px;
      color: #000000;
      line-height: normal;
      font-family: Verdana, Arial, Helvetica, sans-serif;
      text-decoration: none;
    }
    .sider-bar-round-btn {
      padding: 0;
      margin: 5px;
      text-align: center;

      li {
        border-radius: 25px;
        list-style-type: none;
        padding: 10px;
        margin-bottom: 5px;
        margin-top: 0px;
        border: 2px solid #000000;
      }
    }
  }
  .search-zone {
    .zones {
      list-style: none;
      li {
        border: 1px solid #cdceb9;
        box-shadow: 0px 3px 4px -2px #848471;
        padding: 5px;
        display: inline;
        margin-right: 20px;
        background: #dcddbe;
        cursor: pointer;
        color: #f68e29;
      }
    }
  }
  .showcase {
    background: linear-gradient(
      0deg,
      rgba(219, 220, 189, 1),
      rgba(236, 237, 221, 1)
    );
    font-family: verdana;
    font-size: 22px;
    color: #0896ff;
    text-align: center;
    height: $showcase-height;
  }
}
</style>
