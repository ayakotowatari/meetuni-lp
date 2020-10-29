<template>
    <div>
        <v-snackbar v-model="snackbar" :timeout="6000" color="primary lighten-3" top>
            <span>Your message was sent.</span>
            <template v-slot:action="{ attrs }">
                <v-btn depressed text class="white--text" v-bind="attrs" @click="snackbar = false">Close</v-btn>
            </template>
        </v-snackbar>
        <v-container>
            <heading-component></heading-component>
            <h1 class="grey--text mb-10">Contact Form</h1>
            <v-row>
                <v-col cols="12" sm="12" md="6">
                    <v-img
                        src=https://meetuni.s3-ap-northeast-1.amazonaws.com/illustration/drawkit-server-woman-colour-1200px.png
                        cover
                    ></v-img>
                </v-col>
                <v-col cols="12" sm="12" md="6">
                    <v-form ref="form">
                        <v-row>
                            <v-col cols="12" sm="12" md="12" class="py-0">
                                <v-text-field
                                    v-model= "name" 
                                    outlined
                                    label="Your Name" 
                                    :rules="nameRules"
                                    required
                                    class="pa-0"
                                    :error="allerror.name"
                                    :error-messages="allerror.name"
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
                                    class="pa-0"
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
                                    class="pa-0"
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
                                    class="pa-0"
                                    :error="allerror.institution"
                                    :error-messages="allerror.institution"
                                ></v-text-field>
                            </v-col>
                        </v-row>
                        <v-row>
                            <v-col cols="12" sm="12" md="6" class="py-0">
                                <v-text-field
                                    v-model= "email" 
                                    outlined
                                    label="Email" 
                                    :rules="emailRules"
                                    required
                                    class="pa-0"
                                    :error="allerror.email"
                                    :error-messages="allerror.email"
                                ></v-text-field>
                            </v-col>
                            <v-col cols="12" sm="12" md="6" class="py-0">
                                <v-text-field
                                    v-model= "confirmEmail" 
                                    outlined
                                    label="Confirm Email" 
                                    :rules="confirmEmailRules"
                                    required
                                    class="pa-0"
                                ></v-text-field>
                            </v-col>
                        </v-row>
                        <v-row>
                            <v-col cols="12" sm="12" md="12">
                                <v-textarea
                                    v-model="content"
                                    outlined
                                    counter
                                    label="Content"
                                    rows="6"
                                    :rules="textareaRules"
                                    class="pa-0"
                                    :error="allerror.content"
                                    :error-messages="allerror.content"
                                ></v-textarea>
                            </v-col>
                        </v-row>
                        <p class="body-2 grey--text text--darken-2">By clicking 'Send', I have read the <router-link to="/privacy-policy" class="href">Privacy Policy</router-link>. </p>
                        <v-btn
                            color="primary"
                            depressed
                            block
                            :loading="loading==true"
                            @click="send"
                        >Send</v-btn>
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
            name: '',
            nameRules: [
                v => !!v || 'Name is required',
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
            content: '',
            textareaRules: [
                v => !!v || v.length <= 600 || 'Max 600 characters'
            ],
            allerror: [],
            snackbar: false,
            loading: false,
        }
    },
    methods: {
        send(){
            if(this.$refs.form.validate()){
                this.loading=true

                axios
                .post('/contact', {
                    name: this.name,
                    job_title: this.job_title,
                    department: this.department,
                    institution: this.institution,
                    email: this.email,
                    content: this.content
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
        }
    }

}
</script>

<style>

</style>