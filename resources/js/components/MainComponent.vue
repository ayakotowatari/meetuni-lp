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
        >
            <v-col cols="12" sm="12" md="12" lg="8" xl="8">
                <h2 class="grey--text text--darken-1 subheading">meetUni is a platform where</h2>
            </v-col>
        </v-row>
        <v-row
            justify="center"
            align="center"
            class="mb-6"
        >
            <v-col cols="12" sm="12" md="4" lg="2" xl="2" class="hidden-sm-and-down">
                <v-img
                    src="https://meetuni.s3-ap-northeast-1.amazonaws.com/illustration/gameboy-colour-1200px.png"
                    cover
                    class="picture"
                >
                </v-img>
            </v-col>
            <v-col cols="12" sm="12" md="8" lg="6" xl="6" class="hidden-sm-and-down">
                <!-- <v-avatar
                        color="primary"
                        size="32"
                        class="mr-1"
                >
                    <v-icon dark>mdi-check-bold</v-icon>
                </v-avatar> -->
                <span class="heading">Prospective international students will discover you</span>
            </v-col>
            <v-col cols="12" sm="12" md="8" lg="6" xl="6" class="hidden-md-and-up">
                <!-- <v-avatar
                        color="primary"
                        size="32"
                        class="mr-1"
                >
                    <v-icon dark>mdi-check-bold</v-icon>
                </v-avatar> -->
                <span class="heading">Prospective international students will discover you</span>
            </v-col>
            <v-col cols="12" sm="12" md="4" lg="2" xl="2" class="hidden-md-and-up">
                <v-img
                    src="https://meetuni.s3-ap-northeast-1.amazonaws.com/illustration/gameboy-colour-1200px.png"
                    cover
                    class="picture"
                >
                </v-img>
            </v-col>
        </v-row>
        <v-row
            justify="center"
            class="mb-16"
        >
            <v-col cols="12" sm="12" md="12" lg="8" xl="8">
                <p class="lead-text">
                    Each university has its own unique mission and approach to education and provides significant student experience which changes and improves people’s lives. However, for international students, it is often challenging to navigate and discover your university as they face a sea of information. 
                </p>
                <p class="lead-text">
                    The meetUni platform will serve as a spot where new generations of students across the world will find your university according to their ambitions, interests and preferences. 
                </p>
                <p class="lead-text">
                    Once you sign in to the university admin panel on the meetUni platform, you can edit your university’s profile page and add rich contents, including videos which give an overview of everything about your university or student experience you offer. This means that whenever students are on the meetUni application and visit your page, they can have constant access to the essential information and engaging contents to learn about your university. 
                </p>
            </v-col>
        </v-row>
        <v-row
            justify="center"
            align="center"
            class="mb-6"
        >
            <v-col cols="12" sm="12" md="8" lg="6" xl="6">
                <span class="heading">You can connect with students more easily and flexibly</span>
            </v-col>
            <v-col cols="12" sm="12" md="4" lg="2" xl="2">
                <v-img
                    src="https://meetuni.s3-ap-northeast-1.amazonaws.com/illustration/character+22.svg"
                    cover
                    class="picture"
                >
                </v-img>
            </v-col>
        </v-row>
        <v-row
            justify="center"
            class="mb-16"
        >
            <v-col cols="12" sm="12" md="12" lg="8" xl="8">
                <p class="lead-text" mb="4">
                    Traditionally, face-to-face education fairs have provided university representatives and students to engage in direct communications for deeper connections and understanding. Nowadays, especially when face-to-face interaction is difficult, such opportunities have become virtual. But what if students miss the chance to participate in such fairs or cannot find available slots on specific dates and time? 
                </p>
                <p class="lead-text" mb="4">
                    On the meetUni platform, you can let your students know when you are available for a video counselling throughout the year and allow them to book a slot, so that you will not miss it when students would like to discuss their potential choice of entering your university. Alternatively, students can send you questions through a chat which can be answered in your time accordingly.
                </p>
            </v-col>
        </v-row>
        <v-row
            justify="center"
            align="center"
            class="mb-6"
        >
            <v-col cols="12" sm="12" md="4" lg="2" xl="2" class="hidden-sm-and-down">
                <v-img
                    src="https://meetuni.s3-ap-northeast-1.amazonaws.com/illustration/calendar-colour-1200px.png"
                    cover
                >
                </v-img>
            </v-col>
            <v-col cols="12" sm="12" md="8" lg="6" xl="6" class="hidden-sm-and-down">
                <span class="heading">You can inspire students anytime from anywhere</span>
            </v-col>
            <v-col cols="12" sm="12" md="8" lg="6" xl="6" class="hidden-md-and-up">
                <span class="heading">You can inspire students anytime from anywhere</span>
            </v-col>
            <v-col cols="12" sm="12" md="4" lg="2" xl="2" class="hidden-md-and-up">
                <v-img
                    src="https://meetuni.s3-ap-northeast-1.amazonaws.com/illustration/calendar-colour-1200px.png"
                    cover
                >
                </v-img>
            </v-col>
        </v-row>
        <v-row
            justify="center"
            class="mb-6"
        >
            <v-col cols="12" sm="12" md="12" lg="8" xl="8">
                <p class="lead-text" mb="4">
                    One of the best ways to raise awareness of and generate interests in your university among prospective international students is to deliver online live events, ranging from information sessions, student or alumni talks to taster lectures with star academics.
                </p>
                <p class="lead-text" mb="4">
                    On the meetUni platform, you can promote such events whenever it suits you throughout the year, attract audiences from across the world or from specifically targeted regions and manage bookings. Built-in notifications system will allow you to communicate with past and current participants to follow-up even after the events. 
                </p>
                <p class="lead-text" mb="4">
                    Simply put, meetUni aspires to bring changes to the culture of international student recruitment. 
                </p>
            </v-col>
        </v-row>
        <v-row
            justify="center"
        >
            <v-col cols="12" sm="12" md="12" lg="8" xl="8" class="hidden-sm-and-down">
                <v-btn
                    depressed
                    color="primary"
                    @click="book"
                >book a preview
                    <v-icon>mdi-chevron-right</v-icon>
                </v-btn>
            </v-col>
            <v-col cols="12" sm="12" md="12" lg="8" xl="8" class="hidden-md-and-up">
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
        <!-- <v-row 
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
        </v-row> -->
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
.subheading{
    font-size: 24px;
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
    .subheading{
        font-size: 24px;
        /* text-align: center; */
    }
    .picture{
        width: 80%;
        height: 80%;
        margin: 0 auto;
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