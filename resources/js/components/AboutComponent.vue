<template>
    <v-container>
        <v-row 
            justify="center" 
            :class="{'mb-12':$vuetify.breakpoint.mdAndUp, 'mb-4':$vuetify.breakpoint.smAndDown}"
        >
            <v-col cols="12" sm="12" md="12" lg="8" xl="8">
                <heading-component></heading-component>
            </v-col>
        </v-row>
        <v-row 
            justify="center" 
            :class="{'mb-6':$vuetify.breakpoint.mdAndUp, 'mb-2':$vuetify.breakpoint.smAndDown}"
        >
            <v-col cols="12" sm="12" md="12" lg="8" xl="8">
                <h1 class="grey--text">The Team</h1>
            </v-col>
        </v-row>
        <v-row
            justify="center"
        >
            <v-col cols="12" sm="12" md="3" lg="2" xl="2" class="alignment">
                <v-avatar
                    size="72"
                    class="mb-4"
                >
                    <img src="https://meetuni.s3-ap-northeast-1.amazonaws.com/ayakov2.jpg" alt="">
                </v-avatar>
                <p class="mb-1">Ayako Towatari</p>
                <p class="job">Founder & Managing Director</p>
            </v-col>
            <v-col cols="12" sm="12" md="3" lg="2" xl="2" class="alignment">
                <v-avatar
                    size="72"
                    class="mb-4"
                >
                    <img src="https://meetuni.s3-ap-northeast-1.amazonaws.com/illustration/TD.png" alt="">
                </v-avatar>
                <p class="mb-1">Daisky Nakamura</p>
                <p class="job">Technical Director</p>
            </v-col>
            <v-col cols="12" sm="12" md="3" lg="2" xl="2" class="alignment">
                <v-avatar
                    size="72"
                    class="mb-4"
                >
                    <img src="https://meetuni.s3-ap-northeast-1.amazonaws.com/illustration/Nanda.png" alt="">
                </v-avatar>
                <p class="mb-1">Meinanda Chudahman</p>
                <p class="job">Marketing Director</p>
            </v-col>
            <v-col cols="12" sm="12" md="3" lg="2" xl="2" class="alignment">
                <v-avatar
                    size="72"
                    class="mb-4"
                >
                    <img src="https://meetuni.s3-ap-northeast-1.amazonaws.com/illustration/Makiko.png" alt="">
                </v-avatar>
                <p class="mb-1">Makiko Goshi</p>
                <p class="job">Finance Advisor</p>           
            </v-col>
        </v-row>
        <!-- <v-row justify="center">
            <v-col cols="12" sm="12" md="8" class="pa-0">
               <v-card
                    class="mx-auto"
                    color="#26c6da"
                    dark
                >
                    <v-card-title>
                    <v-avatar
                        class="mr-3"
                    >
                        <img src="https://meetuni.s3-ap-northeast-1.amazonaws.com/ayakov2.jpg" alt="">
                    </v-avatar>
                    <span class="hidden-sm-and-down">Ayako Towatari, Founder of meetUni</span>
                    <span class="hidden-md-and-up">Ayako Towatari <br>Founder of meetUni</span>
                    </v-card-title>

                    <v-card-text class="headline font-weight-bold">
                    <p>"meetUni was developed to help universities and colleges to reach out to prospective international students across the world more easily. Traditionally, universities and colleges have needed to rely heavily on local agents and organizations for international education marketing. However, with technologies, you can take more control than before in expanding your reach and generating leads in the international market.</p> 
                    <p>As a former international student and manager of international education marketing at the British Council in Tokyo, Japan, it has been my passion to promote the value of international education in changing lives of individuals and in enabling people to collaborate internationally to solve common global issues. We very much look forward to working with you and turn international education into everyone's opportunity.</p> 
                    <p>I am keen to hear from you and please don’t hesitate to contact me if you have any questions.</p>
                    </v-card-text>
                    <v-card-actions>
                        <v-spacer></v-spacer>
                        <v-btn dark text @click="contact">contact ayako</v-btn>
                    </v-card-actions>
                </v-card>
            </v-col>
        </v-row> -->
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
            page_path: '/about-us',
            page_title: "About"
        })
    },
    methods: {
        contact(){
            this.$router.push({name: "contact-component"})
        },
    }

}
</script>

<style>
.job{
    font-size: 14px;
}
.greet{
    font-size: 18px;
}

@media(max-width:780px){
    .alignment{
        text-align: center;
    }
}

</style>