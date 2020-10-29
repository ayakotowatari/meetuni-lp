<template>
    <nav>
        <v-app-bar
            flat app color="white"
        >
            <v-toolbar-title>
            <span class="font-weight-bold primary--text">meet<span class="font-weight-light">Uni</span><span class="font-weight-bold info--text darken-3">Preview</span></span> 
            </v-toolbar-title>
            <v-spacer></v-spacer>
            <v-btn 
                text 
                color="grey darken-1" 
                @click="toTopPage"
            >
                <span>top page</span>
            </v-btn>
            <v-btn
                text
                color="primary"
                @click="toBook"
            >
                <span>Book a preview</span>
            </v-btn>
            <v-btn 
                text color="primary" 
                @click="toAbout"
            >
                <span>About</span>
            </v-btn>
            <v-btn 
                text color="primary" 
                @click.stop="toContact"
            >
                <span>Contact</span>
            </v-btn>
        </v-app-bar>
    </nav>
</template>

<script>

export default {
    props: {
        
    },
    data: () => ({
       
    }),
    mounted() {
        
    },
    computed: {
        
    },
    methods: {
        toTopPage(){
            this.$router.push({name: 'main-component'})
        },
        toBook(){
            this.$router.push({name: 'booking-component'})
            this.$gtag.event("click", {
                event_category: "button_click",
                event_label: "to_booking"
            });
        },
        toAbout(){
            this.$router.push({name: 'about-component'})
            this.$gtag.event("click", {
                event_category: "button_click",
                event_label: "to_about"
            });
        },
        toContact(){
            this.$router.push({name: 'contact-component'})
            this.$gtag.event("click", {
                event_category: "button_click",
                event_label: "to_contact"
            });
        }
    }
}
</script>