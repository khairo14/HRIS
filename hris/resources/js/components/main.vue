<template>
<v-app>
    <v-main>
    <!-- sidebar -->
        <v-navigation-drawer app :permanent="permanent" :mini-variant="miniVariant">
            <v-list>
                <v-list-item-avatar class="ml-2">
                    <v-img src="https://cdn.vuetifyjs.com/images/john.png"></v-img>
                </v-list-item-avatar>
                <v-list-item-title class="ml-2">
                    <span>nameasdsadasdsadada</span>
                </v-list-item-title>

            <!--divider  -->
            <v-divider></v-divider>
            <!--links  -->
            <v-list-item link v-for="link in links" :key="link.title" router-link :to="link.route">
                <v-list-item-action>
                    <v-list-item-icon>
                        <v-icon>{{link.icon}}</v-icon>
                    </v-list-item-icon>
                </v-list-item-action>

                <v-list-item-content>
                     <v-list-item-title>{{link.title}}</v-list-item-title>
                </v-list-item-content>
            </v-list-item>
            </v-list>
        </v-navigation-drawer>
    <!-- header -->
        <v-app-bar color="blue">
        <v-app-bar-nav-icon @click="miniVariant = !miniVariant" class="text-white"></v-app-bar-nav-icon>
        <v-toolbar-title class="text-white">Project Oreo</v-toolbar-title>

        </v-app-bar>
    <!-- content -->
        <v-container fluid>
            <router-view></router-view>
        </v-container>
    </v-main>
    <!-- footer -->
        <v-footer>

        </v-footer>
</v-app>

</template>

<script>
export default {
    data() {
        return {
        permanent: true,
        miniVariant: true,

        links: [
          { icon:'mdi-view-dashboard', title: 'Dashboard', route: '/home' },
          { icon:'mdi-account-circle', title: 'Users', route: '/users' },
         // { icon:'mdi-account-circle', title: 'Users', route: '/users' },

        ],

        }

    },
}
</script>
