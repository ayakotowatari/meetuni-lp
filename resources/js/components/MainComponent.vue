<template>
    <v-container>
        <heading-component></heading-component>
        <v-row justify="center" align="center" class="mb-12">
            <v-col cols="6" sm="6" md="3">
                <v-img 
                    src="https://meetuni.s3-ap-northeast-1.amazonaws.com/illustration/character+15.svg" 
                    cover 
                    class="woman"
                >
                </v-img>
            </v-col>
            <v-col cols="6" sm="6" md="3">
                <v-img 
                    src="https://meetuni.s3-ap-northeast-1.amazonaws.com/illustration/character+14.svg" 
                    cover 
                    class="woman"
                >
                </v-img>
            </v-col>
            <v-col cols="12" sm="12" md="6">
                <div class="mb-10">
                    <v-avatar
                        color="primary"
                        size="32"
                        class="mr-1"
                    >
                        <v-icon dark>mdi-check-bold</v-icon>
                    </v-avatar>
                    <span class="lead-text">Plan online marketing events such as information sessions or taster lectures whenever you like.</span>
                </div>
                <div class="mb-10">
                    <v-avatar
                        color="primary"
                        size="32"
                        class="mr-1"
                    >
                        <v-icon dark>mdi-check-bold</v-icon>
                    </v-avatar>
                    <span class="lead-text">Create and publish a beautiful event listing on the student-facing meetUni website.</span>
                </div>
                <div class="mb-10">
                    <v-avatar
                        color="primary"
                        size="32"
                        class="mr-1"
                    >
                        <v-icon dark>mdi-check-bold</v-icon>
                    </v-avatar>
                    <span class="lead-text">Built-in booking and notifications system as well as student analytics will make event management ever so simple.</span>
                </div>
                <v-btn
                    block
                    depressed
                    color="primary"
                    :to="{name: 'booking-component'}"
                >book a preview today</v-btn>
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
    font-size: 24px;
}
.woman{
    width: 80%;
    height: 80%;
}
</style>