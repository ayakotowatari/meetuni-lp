<template>
    <v-footer
    color="primary lighten-5"
    padless
    >
        <v-row
            justify="center"
            no-gutters
        >
            <v-btn
            v-for="link in links"
            :key="link.text"
            color="white"
            text
            rounded
            class="my-2"
            :to="link.route"
            >
            {{ link.text }}
            </v-btn>
            <v-col
            class="primary lighten-4 py-4 text-center white--text"
            cols="12"
            >
            {{ new Date().getFullYear() }} — <strong>meetUni</strong>
            </v-col>
        </v-row>
    </v-footer>
</template>

<script>
export default {
    data(){
        return{
            links:[
                {text: 'Top Page', route: '/'},
                {text: 'About', route:'/about-us'},
                {text: 'Privacy', route:'/privacy-policy'},
                {text: 'Contact', route:'/contact'},
            ],
        }
    }
}
</script>

<style>

</style>