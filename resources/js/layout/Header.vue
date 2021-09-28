<template>
  <div>
    <div class="d-flex justify-space-between" id="header">
      <img
        src="/img/header/logo.bmp"
        alt="123resa"
        id="logo"
        @click="toIndex"
      />
      <div class="lang d-flex flex-row">
        <v-tooltip v-for="(item, index) of languages" :key="index">
          <template v-slot:activator="{ on, attrs }">
            <img
              @click="changeLanguage(item.id)"
              :src="`/img/header/${item.id}.svg`"
              :alt="item.label"
              v-bind="attrs"
              v-on="on"
            /> </template
          ><span> {{ item.label }}</span></v-tooltip
        >
      </div>
    </div>
    <div id="header-links">
      <ul>
        <li v-for="(link, index) of menuItems" :key="index">
          {{ link.label }}
        </li>
      </ul>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      menuItems: [
        {
          label: "Accueil",
        },
        {
          label: "Société",
        },
        {
          label: "Hébergeurs",
        },
        {
          label: "Distributeurs",
        },
        {
          label: "Partenaires",
        },
        {
          label: "Témoignages",
        },
        {
          label: "Bons plans",
        },
        {
          label: "Contact",
        },
      ],
      languages: [
        {
          id: "fr",
          label: "Français",
        },
        {
          id: "en",
          label: "Anglais",
        },
      ],
    };
  },
  methods: {
    toIndex() {
      if (this.$route.name !== "home") {
        this.$router.push({ name: "home" });
      }
    },
    changeLanguage(id) {},
  },
};
</script>
<style scoped lang="scss">
@import "./../../sass/variables.scss";

#header {
  background: #495a6f;
  height: $header-height;
  #logo {
    cursor: pointer;
  }
  .lang {
    img {
      width: calc($header-height/2);
      margin-right: 10px;
      cursor: pointer;
    }
  }
}

#header-links {
  height: $header-links-height;
  ul {
    z-index: 2;
    position: relative;
    list-style: none;
    box-shadow: 0px 3px 4px -2px #848471;
    background: #e8e9d1;
    li {
      cursor: pointer;
      display: inline-block;
      padding: 3px 5px 3px 5px;
      color: #848471;
      margin-left: -1px;
      border: 1px solid #fff;
    }
  }
}
</style>
