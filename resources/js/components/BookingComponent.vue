<template>
    <div>
        <v-snackbar v-model="snackbar" :timeout="6000" color="primary lighten-3" top>
            <span>Your request was sent</span>
            <template v-slot:action="{ attrs }">
                <v-btn depressed text class="white--text" v-bind="attrs" @click="snackbar = false">Close</v-btn>
            </template>
        </v-snackbar>
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
                :class="{'mb-10':$vuetify.breakpoint.mdAndUp, 'mb-2':$vuetify.breakpoint.smAndDown}"
            >
                <v-col cols="12" sm="12" md="12" lg="8" xl="8">
                    <h1 class="grey--text">Book a Preview</h1>
                </v-col>
            </v-row>
            <v-row justify="center" class="mb-10">
                <v-col cols="12" sm="12" md="8" lg="8" xl="8">
                    <h2 class="grey--text text--darken-3 mb-4">Hello ! A preview will be ready sometime very soon.</h2>
                    <p class="body-1">We are working very hard to put finishing touches on to meetUni. It should be ready very soon. Please let us know your email address and we will be getting in touch with you as soon as it is ready. </p>
                </v-col>
            </v-row>
            <v-row justify="center">
                <v-col cols="12" sm="12" md="4">
                    <youtube
                        :video-id="videoId"
                        player-width=448
                        player-height=252
                        class="video-responsive mb-4"
                    ></youtube>
                </v-col>
                <v-col cols="12" sm="12" md="4">
                    <v-form ref="form">
                        <v-row>
                            <v-col cols="12" sm="12" md="6" class="py-0">
                                <v-text-field
                                    v-model= "first_name" 
                                    outlined
                                    label="First Name" 
                                    :rules="firstNameRules"
                                    required
                                    class="pa-0"
                                    :error="allerror.first_name"
                                    :error-messages="allerror.first_name"
                                ></v-text-field>
                            </v-col>
                            <v-col cols="12" sm="12" md="6" class="py-0">
                                <v-text-field
                                    v-model= "last_name" 
                                    outlined
                                    label="Last Name" 
                                    :rules="lastNameRules"
                                    required
                                    class="pa-0"
                                    :error="allerror.last_name"
                                    :error-messages="allerror.last_name"
                                ></v-text-field>
                            </v-col>
                        </v-row>
                        <v-row>
                            <v-col cols="12" sm="12" md="6" class="py-0">
                                <v-text-field
                                    v-model= "job_title" 
                                    outlined
                                    label="Job Title" 
                                    :rules="jobTitleRules"
                                    required
                                    :error="allerror.job_title"
                                    :error-messages="allerror.job_title"
                                ></v-text-field>
                            </v-col>
                            <v-col cols="12" sm="12" md="6" class="py-0">
                                <v-text-field
                                    v-model= "department" 
                                    outlined
                                    label="Department" 
                                    :rules="departmentRules"
                                    required
                                    :error="allerror.department"
                                    :error-messages="allerror.department"
                                ></v-text-field>
                            </v-col>
                        </v-row>
                        <v-row>
                            <v-col cols="12" sm="12" md="12" class="py-0">
                                <v-text-field
                                    v-model= "institution" 
                                    outlined
                                    label="Institution" 
                                    :rules="institutionRules"
                                    required
                                    :error="allerror.institution"
                                    :error-messages="allerror.institution"
                                ></v-text-field>
                            </v-col>
                        </v-row>
                        <v-row>
                            <v-col cols="12" sm="12" md="12" class="py-0">
                                <v-text-field
                                    v-model= "email" 
                                    outlined
                                    label="Email" 
                                    :rules="emailRules"
                                    required
                                    :error="allerror.email"
                                    :error-messages="allerror.email"
                                ></v-text-field>
                            </v-col>
                        </v-row>
                        <v-row>
                            <v-col cols="12" sm="12" md="12" class="py-0">
                                <v-text-field
                                    v-model= "confirmEmail" 
                                    outlined
                                    label="Confirm Email" 
                                    :rules="confirmEmailRules"
                                    required
                                ></v-text-field>
                            </v-col>
                        </v-row>
                        <p class="body-2 grey--text text--darken-2">By clicking 'Send', I have read the <router-link to="/privacy-policy" class="href">Privacy Policy</router-link>. </p>
                        <v-btn
                            color="primary"
                            block
                            :loading="loading == true"
                            @click="send"
                        >send</v-btn>
                    </v-form>
                </v-col>
            </v-row>
        </v-container>
    </div>
</template>

<script>
import Heading from './parts/HeadingComponent'

export default {
    components: {
        Heading,
    },
    data() {
        return{
            videoId: 'c1Ne5DADrrk',
            first_name: '',
            firstNameRules: [
                v => !!v || 'First Name is required',
            ],
            last_name: '',
            lastNameRules: [
                v => !!v || 'Last Name is required',
            ],
            job_title: '',
            jobTitleRules: [
                v => !!v || 'Job Title is required',
            ],
            department: '',
            departmentRules: [
                v => !!v || 'Department is required',
            ],
            institution: '',
            institutionRules: [
                v => !!v || 'Institution is required',
            ],
            email: '',
            emailRules: [
                (v) => !!v || 'E-mail is required',
                (v) => /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(v) || 'E-mail must be valid'
            ],
            confirmEmail: '',
            confirmEmailRules: [
                (v) => !!v || 'Confirmation E-mail is required',
                (v) => v == this.email || 'E-mail must match'
            ],
            allerror: [],
            dialog: false,
            snackbar: false,
            loading: false,
        }
    },
    mounted(){
        this.$gtag.pageview({
            page_path: '/book-preview',
            page_title: "Booking"
        })
    },
    methods: {
        send(){
            if(this.$refs.form.validate()){
                this.loading=true;

                axios
                .post('/book-preview', {
                    first_name: this.first_name,
                    last_name: this.last_name,
                    job_title: this.job_title,
                    department: this.department,
                    institution: this.institution,
                    email: this.email
                })
                .then(response => {
                    this.loading=false,
                    this.snackbar = true,
                    this.$router.go()
                })
                .catch(error => {
                    this.allerror = error.response.data.errors
                })
            }
            this.$gtag.event("click", {
                event_category: "button_click",
                event_label: "send_booking"
            });
        }
    }
}
</script>

<style>
.href{
    text-decoration: none;
}

</style>