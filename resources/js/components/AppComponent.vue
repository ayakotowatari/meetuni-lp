<template>
    <v-app>
        <navbar-component ></navbar-component>
        <v-main class="mx-4 mb-10">
            <router-view></router-view>
        </v-main>
        <footer-component></footer-component>
    </v-app>
</template>

<script>
import NavBar from './parts/NavBarComponent'
import Footer from './parts/FooterComponent'

export default {
    components: {
        NavBar,
        Footer
    }

}
</script>

<style>

</style>