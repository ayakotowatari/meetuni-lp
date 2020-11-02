<template>
    <nav>
        <v-app-bar
            flat app color="white"
        >
            <v-toolbar-title>
            <span class="font-weight-bold primary--text">meet<span class="font-weight-light">Uni</span><span class="font-weight-bold info--text darken-3">Preview</span></span> 
            </v-toolbar-title>
            <v-spacer></v-spacer>
            <v-menu
                v-if="$vuetify.breakpoint.xs"
                top
                offset-y
                :close-on-content-click="closeOnContentClick"
            >
                <template v-slot:activator="{ on, attrs }">
                        <v-btn
                            color="primary"
                            text
                            v-bind="attrs"
                            v-on="on"
                        >
                            <v-icon>mdi-menu</v-icon>  
                        </v-btn>
                </template>
                <v-list>
                    <v-list-item
                        :to="{name:'main-component'}"
                    >
                        <!-- <v-list-item-action>
                            <v-icon class="grey--text text--darken-3">mdi-login-variant</v-icon>
                        </v-list-item-action> -->
                        <v-list-item-action>
                            <v-list-item-title class="grey--text text--darken-3">Home</v-list-item-title>
                        </v-list-item-action>
                    </v-list-item>
                    <v-list-item
                        :to="{name:'booking-component'}"
                    >
                        <!-- <v-list-item-action>
                            <v-icon class="grey--text text--darken-3">mdi-account-plus-outline</v-icon>
                        </v-list-item-action> -->
                        <v-list-item-action>
                            <v-list-item-title class="grey--text text--darken-3">Book a Preview</v-list-item-title>
                        </v-list-item-action>
                    </v-list-item>
                    <v-list-item
                        :to="{name:'about-component'}"
                    >
                        <!-- <v-list-item-action>
                            <v-icon class="grey--text text--darken-3">mdi-account-plus-outline</v-icon>
                        </v-list-item-action> -->
                        <v-list-item-action>
                            <v-list-item-title class="grey--text text--darken-3">About</v-list-item-title>
                        </v-list-item-action>
                    </v-list-item>
                    <v-list-item
                        :to="{name:'contact-component'}"
                    >
                        <!-- <v-list-item-action>
                            <v-icon class="grey--text text--darken-3">mdi-account-plus-outline</v-icon>
                        </v-list-item-action> -->
                        <v-list-item-action>
                            <v-list-item-title class="grey--text text--darken-3">Contact</v-list-item-title>
                        </v-list-item-action>
                    </v-list-item>
                </v-list>
            </v-menu>
            <v-btn 
                text 
                color="grey darken-1" 
                @click="toTopPage"
                class="hidden-sm-and-down"
            >
                <span>home</span>
            </v-btn>
            <v-btn
                text
                color="primary"
                @click="toBook"
                class="hidden-sm-and-down"
            >
                <span>Book a preview</span>
            </v-btn>
            <v-btn 
                text color="primary" 
                @click="toAbout"
                class="hidden-sm-and-down"
            >
                <span>About</span>
            </v-btn>
            <v-btn 
                text color="primary" 
                @click.stop="toContact"
                class="hidden-sm-and-down"
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