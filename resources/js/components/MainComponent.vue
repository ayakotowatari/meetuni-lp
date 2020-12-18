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
            align="center" 
            :class="{'mb-12':$vuetify.breakpoint.mdAndUp, 'mb-2':$vuetify.breakpoint.smAndDown}"
        >
            <v-col cols="6" sm="6" md="3" lg="2" xl="2" class="woman-box">
                <v-img 
                    src="https://meetuni.s3-ap-northeast-1.amazonaws.com/illustration/character+15.svg" 
                    cover 
                    class="woman"
                >
                </v-img>
            </v-col>
            <v-col cols="6" sm="6" md="3" lg="2" xl="2" class="woman-box">
                <v-img 
                    src="https://meetuni.s3-ap-northeast-1.amazonaws.com/illustration/character+14.svg" 
                    cover 
                    class="woman"
                >
                </v-img>
            </v-col>
            <v-col cols="12" sm="12" md="6" lg="4" xl="4">
                <div class="mb-10">
                    <v-avatar
                        color="primary"
                        size="32"
                        class="mr-1"
                    >
                        <v-icon dark>mdi-check-bold</v-icon>
                    </v-avatar>
                    <span class="lead-text">Plan online marketing events, such as information session, taster lectures, and alumni talks whenever you like.</span>
                </div>
                <div class="mb-10">
                    <v-avatar
                        color="primary"
                        size="32"
                        class="mr-1"
                    >
                        <v-icon dark>mdi-check-bold</v-icon>
                    </v-avatar>
                    <span class="lead-text">Create and publish a beautiful event listing on the meetUni website for students to like and/or follow.</span>
                </div>
                <div class="mb-10">
                    <v-avatar
                        color="primary"
                        size="32"
                        class="mr-1"
                    >
                        <v-icon dark>mdi-check-bold</v-icon>
                    </v-avatar>
                    <span class="lead-text">Built-in booking and notifications system as well as student analytics will make lead generation activities ever so simple and effective.</span>
                </div>
                <v-btn
                    block
                    depressed
                    color="primary"
                    @click="book"
                >book a preview
                    <v-icon>mdi-chevron-right</v-icon>
                </v-btn>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
import Heading from './parts/HeadingComponent'

export default {
    components:{
        Heading
    },
    mounted(){
        this.$gtag.pageview({
            page_path: '/',
            page_title: "Home"
        })
    },
    methods: {
        book(){
            this.$router.push({name: 'booking-component'})

            this.$gtag.event("click", {
                event_category: "button_click",
                event_label: "to_booking"
            });
        }
    }
}
</script>

<style>
.video-responsive{
    overflow:hidden;
    padding-bottom:56.25%;
    position:relative;
    height:0;
}
.video-responsive iframe{
    left:0;
    top:0;
    height:100%;
    width:100%;
    position:absolute;
}
.lead-text{
    font-size: 18px;
}
.woman{
    width: 80%;
    height: 80%;
}
.woman-box{
    padding: 0 !important;
}

@media(max-width:780px){
    .heading{
        text-align: left !important;
    }
    .woman{
        width: 100%;
        height: 100%;
    }  
    .woman-box{
        padding: 12px !important;
        margin-bottom: 32px;
    }
}

</style>