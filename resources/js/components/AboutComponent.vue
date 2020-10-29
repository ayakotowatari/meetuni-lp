<template>
    <v-container>
        <heading-component></heading-component>
        <h1 class="grey--text mb-10">About Us</h1>
        <v-row align="center">
            <v-col cols="12" sm="12" md="6" class="pa-0">
               <v-card
                    class="mx-auto"
                    color="#26c6da"
                    dark
                >
                    <v-card-title>
                    <v-avatar
                        class="mr-3"
                    >
                        <img src="https://meetuni.s3-ap-northeast-1.amazonaws.com/Ayako.png" alt="">
                    </v-avatar>
                    <span>Ayako Towatari, Founder of meetUni</span>
                    </v-card-title>

                    <v-card-text class="headline font-weight-bold">
                    <p>"meetUni was developed to help universities to reach out to international students across the world more easily. Traditionally. universities have needed to rely heavily on face -to-face marketing activities, often through local agents and organizations. However, with technologies,  universities could expand their reach much more widely and simply than before. </p> 
                    <p>As a former international student myself and successful manager of international education marketing at the Tokyo branch of the British Council, it has always been my passion to promote the value of international education. I’m so much looking forward to working with you on meetUni and help you discover talented students worldwide. </p> 
                    <p>Please don’t hesitate to contact me if you have any questions.</p>
                    </v-card-text>
                    <v-card-actions>
                        <v-spacer></v-spacer>
                        <v-btn dark text @click="contact">contact</v-btn>
                    </v-card-actions>
                </v-card>
            </v-col>
            <v-col cols="12" sm="12" md="6">
                <v-img
                    src="https://meetuni.s3-ap-northeast-1.amazonaws.com/illustration/carry-on-colour1200px.png"
                    contain
                ></v-img>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
import Heading from './parts/HeadingComponent'

export default {
    components: {
        Heading,
    },
    mounted(){
        this.$gtag.pageview({
            page_path: '/about',
            page_title: "About"
        })
    },
    methods: {
        contact(){
            this.$router.push({name: "contact"})
        },
    }

}
</script>

<style>
.greet{
    font-size: 18px;
}

</style>