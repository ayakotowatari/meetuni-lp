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
            :class="{'mb-10':$vuetify.breakpoint.mdAndUp, 'mb-2':$vuetify.breakpoint.smAndDown}"
        >
            <v-col cols="12" sm="12" md="12" lg="8" xl="8">
                <h1 class="grey--text">Privacy Policy</h1>
            </v-col>
        </v-row>
        <v-row justify="center">
            <v-col cols="12" sm="12" md="8">
                <p class="overline">Last Updated October 28th, 2020</p>
                <h2 class="subheading">Introduction</h2>
                <p class="body-1">
                    Welcome to meetUni (“company”, “we”, “us”, or “our”). We are committed to protecting your personal information (“Personal Data”) and your right to privacy. If you have any questions or concerns about our policy, or our practices with regards to your Personal Data, please contact us at <a href="mailto:privacy@meetuniglobal.com" class="href">privacy@meetuniglobal.com</a>.
                </p>
                <p class="body-1">
                    When you visit our website meetuniglobal.com (“Site”) and use our services, you trust us with your Personal Data. We take your privacy very seriously. In this privacy notice, we describe our privacy policy. We seek to explain to you in the clearest way possible what information we collect, how we use it and what rights you have in relation to it. We hope you take some time to read through it carefully, as it is important. If there are any terms in this privacy policy that you do not agree with, please discontinue use of our site and our services.
                </p>
                <p class="body-1">
                    This privacy policy applies to all information collected through our websites, and/or any related services, sales, marketing or events (we refer to them collectively in this privacy policy as the "Sites"). 
                </p>
                <p class="body-1 mb-8">
                    Please read this privacy policy carefully as it will help you make informed decisions about sharing your Personal Data with us.
                </p>
                <h2 class="subheading">Table of Contents</h2>
                <h3>1. Who's Who</h3>
                <h3>2. What Information Do We Collect?</h3>
                <h3>3. How Do We Use Your Information?</h3>
                <h3>4. Will Your Information Be Shared With Anyone?</h3>
                <h3>5. Do We Use Cookies And Other Tracking Technologies?</h3>
                <h3>6. How Do We Handle Your Social Logins?</h3>
                <h3>7. Is Your Information Transferred Internationally?</h3>
                <h3>8. How Long Do We Keep Your Information?</h3>
                <h3>9. How Do We Keep Your Information Safe?</h3>
                <h3>10. Do We Collect Information From Minors?</h3>
                <h3>11. What Are Your Privacy Rights?</h3>
                <h3>12. Do California Residents Have Specific Privacy Rights?</h3>
                <h3>13. Do We Make Updates To This Policy?</h3>
                <h3 class="mb-8">14. How Can You Contact Us About This Policy?</h3>
                <h2 class="subheading">1. Who's Who</h2>
                <p class="body-1 mb-8">
                    When this Privacy Policy uses the term “Organizer”, we mean event creators using the Sites to create events for consumers using our Sites (a) to consume information about, or attend, events (“Consumers”), or (b) for any other reason. Organizers, Consumers and third parties using our Sites are all referred to in these Terms collectively as “Users”, “you” or “your”. 
                </p>
                <h2 class="subheading">2. What Information Do We Collect?</h2>
                <p class="body-1">
                    When you use or interact with us through the Services, we may collect Personal Data. Sometimes this will be on our own behalf and other times this will be on behalf of an Organizer using our Services to run an event. This is an important distinction for purposes of certain data protection laws and is explained in more detail below.
                </p>
                <p class="body-1">
                    The Personal Data that we collect depends on the context of your interactions with us and the Sites, the choices you make and the products and features you use. The Personal Data we collect can include the following: 
                </p>
                <p class="body-1">
                    2.1. <strong>Information Collected From All Users.</strong> We collect your first and last name, email address when you register for the Sites. We collect passwords, and similar security information used for authentication and account access. We automatically collect certain information when you visit, use or navigate the Sites. This information does not reveal your specific identity (like your name or contact information) but may include device and usage information, such as your IP address, browser and device characteristics, operating system, language preferences, referring URLs, device name, country, location, information about how and when you use our Site and other technical information.  This information is primarily needed to maintain the security and operation of our Sites, and for our internal analytics and reporting purposes. Like many businesses, we also collect information through cookies and similar technologies. You can find out more about this in our <router-link to="/cookies-policy" class="href">Cookies Policy</router-link>. 
                </p>
                <p class="body-1">
                    2.2. <strong>Information Collected From Organizers.</strong> If you are an Organizer we will collect additional Personal Data from you, such as job title, department and affiliated institution when you register for the Sites. 
                </p>
                <p class="body-1">
                    2.3. <strong>Information Collected From Consumers.</strong> We provide you with the option to register using social media account details, like your Facebook, Twitter or other social media account. If you choose to register in this way, we will collect the Information described in the section called "Social Logins" below.
                </p>
                <p class="body-1">
                    All Personal Data that you provide to us must be true, complete and accurate, and you must notify us of any changes to such Personal Data.  
                </p>
                <p class="body-1 mb-8">
                    2.4. <strong>Information collected from other Sources.</strong> We may obtain information about you from other sources, such as public databases, joint marketing partners, social media platforms (such as Facebook), as well as from other third parties. Examples of the information we receive from other sources include: social media profile information (your name, gender, birthday, email, current city, state and country, user identification numbers for your contacts, profile picture URL and any other information that you choose to make public); marketing leads and search results and links, including paid listings (such as sponsored links). 
                </p>
                <h2 class="subheading">3. How Do We Use Your Information?</h2>
                <p class="body-1">
                    We use Personal Data collected via our Sites for a variety of business purposes described below. We process your Personal Data for these purposes in reliance on our legitimate business interests ("Business Purposes"), in order to enter into or perform a contract with you ("Contractual"), with your consent ("Consent"), and/or for compliance with our legal obligations ("Legal Reasons"). We indicate the specific processing grounds we rely on next to each purpose listed below.  
                </p>
                <p class="body-1">
                    We use the information we collect or receive: 
                </p>
                <p class="body-1">
                    3.1. <strong>To facilitate account creation and logon process.</strong> If you choose to link your account with us to a third party account (such as your Google or Facebook account), we use the information you allowed us to collect from those third parties to facilitate account creation and logon process. See the section below headed "Social Logins" for further information. 
                </p>
                <p class="body-1">
                    3.2. <strong>To send you marketing and promotional communications</strong> for Business Purposes and/or with your Consent. We and/or our third party marketing partners may use the Personal Data you send to us for our marketing purposes, if this is in accordance with your marketing preferences.  You can opt-out of our marketing emails at any time (see the "Your Privacy Rights" below).
                </p>
                <p class="body-1">
                    3.3. <strong>To send administrative information to you</strong> for Business Purposes, Legal Reasons and/or possibly Contractual. We may use your Personal Data to send you product, service and new feature information and/or information about changes to our terms, conditions, and policies
                </p>
                <p class="body-1">
                    3.4. <strong>To send Organizer Emails.</strong> We allow Organizers to use our notification tools to contact Consumers for their current and past events, so you may receive emails from our system that originate with such Organizers and that we send on their behalf. If you registered for an event on the Sites, your email address is available to that Organizer. The Organizer and not meetUni is responsible for sending these emails. See "Your Privacy Rights" below on how to opt out of Organizer-initiated communications.
                </p>
                <p class="body-1">
                    3.5. <strong>To customize recommendations.</strong> We sometimes make inferences about the type of events or activities you may be interested in. We may use these inferences to help target advertising or customize recommendations to you, including on behalf of Organizers. We may do this on an aggregated or generalized basis. For instance, we may determine that our Users who attend many events about hospitality courses also often attend or show interest in Australia-related events or content. We may direct (or assist in directing) content or recommendations related to both hospitality and Australian courses to those Users.
                </p>
                <p class="body-1">
                    3.6. <strong>To request Feedback</strong> for our Business Purposes and/or with your Consent. We may use your information to request feedback and to contact you about your use of our Sites. 
                </p>
                <p class="body-1">
                    3.7. <strong>To protect our Sites</strong> for Business Purposes and/or Legal Reasons.  We may use your information as part of our efforts to keep our Sites safe and secure (for example, for fraud monitoring and prevention).
                </p>
                <p class="body-1">
                    3.8. <strong>To enforce our terms, conditions and policies</strong> for Business Purposes, Legal Reasons and/or possibly Contractual.
                </p>
                <p class="body-1">
                    3.9. <strong>To respond to legal requests and prevent harm</strong> for Legal Reasons]. If we receive a subpoena or other legal request, we may need to inspect the data we hold to determine how to respond.
                </p>
                <p class="body-1 mb-8">
                    3.10. <strong>For other Business Purposes.</strong> We may use your information for other Business Purposes, such as data analysis, identifying usage trends, determining the effectiveness of our promotional campaigns and to evaluate and improve our Sites, products, services, marketing and your experience.
                </p>
                <h2 class="subheading">4. Will Your Information Be Shared With Anyone?</h2>
                <p class="body-1">
                    We only share and disclose your information in the following situations:
                </p>
                <p class="body-1">
                    4.1. <strong>Compliance with Laws.</strong> We may disclose your information where we are legally required to do so in order to comply with applicable law, governmental requests, a judicial proceeding, court order, or legal process, such as in response to a court order or a subpoena (including in response to public authorities to meet national security or law enforcement requirements).
                </p>
                <p class="body-1">
                    4.2. <strong>Vital Interests and Legal Rights.</strong> We may disclose your information where we believe it is necessary to investigate, prevent, or take action regarding potential violations of our policies, suspected fraud, situations involving potential threats to the safety of any person and illegal activities, or as evidence in litigation in which we are involved. 
                </p>
                <p class="body-1">
                    4.3. <strong>Vendors, Consultants and Other Third-Party Service Providers.</strong> We may share your data with third party vendors, service providers, contractors or agents who perform services for us or on our behalf and require access to such information to do that work. Examples include: data analysis, email delivery, hosting services, and marketing efforts. We may allow selected third parties to use tracking technology on the Sites, which will enable them to collect data about how you interact with the Sites over time.  This information may be used to, among other things, analyze and track data, determine the popularity of certain content and better understand online activity. Unless described in this Policy, we do not share, sell, rent or trade any of your information with third parties for their promotional purposes. 
                </p>
                <p class="body-1">
                    4.4. <strong>Business Transfers.</strong> We may share or transfer your information in connection with, or during negotiations of, any merger, sale of company assets, financing, or acquisition of all or a portion of our business to another company.
                </p>
                <p class="body-1">
                    4.5. <strong>Third-Party Advertisers.</strong> We may use third-party advertising companies to serve ads when you visit the Sites. These companies may use information about your visits to our Website(s) and other websites that are contained in web cookies and other tracking technologies in order to provide advertisements about goods and services of interest to you. [See our Cookie Policy [Hyperlink] for further information] 
                </p>
                <p class="body-1">
                    4.6. <strong>Affiliates.</strong> We may share your information with our affiliates, in which case we will require those affiliates to honor this privacy policy. Affiliates include our parent company and any subsidiaries, joint venture partners or other companies that we control or that are under common control with us.
                </p>
                <p class="body-1">
                    4.7. <strong>Organizers.</strong> When you register for an event, sign up for communications, or otherwise input your Personal Data (such as through a web form) to communicate with an Organizer or participate in an Organizer event, that Organizer will receive that information. For instance, if you input your name and email address into a web form for an Organizer offer, activity or event, the Organizer will receive that information. The Organizer may then send you marketing or other communications, which may be subject to its own, separate privacy policy. Likewise, if you provide your mobile phone number, you may receive information messages related to the service, event, activity or information in which you’ve expressed interest.
                </p>
                <p class="body-1">
                    Other third parties that are involved in or on whose behalf an event or activity is promoted, may receive that Personal Data as well. In some instances, an Organizer may appoint a third party, which may or may not be affiliated with the Organizer, to create an event on its behalf (we call these third parties ("Third Party Organizers").In that case, we may provide your Personal Data to the Third Party Organizers on behalf of the Organizers.
                </p>
                <p class="body-1">
                    We are not responsible for the actions of these Organizers, or their Third Party Organizers (or other downstream recipients of your Personal Data), with respect to your Personal Data. It is important that you review the applicable policies of the Organizers, and if applicable and available, their appointed Third Party Organizers, of an event before providing Personal Data or other information in connection with that event.
                </p>
                <p class="body-1 mb-8">
                    4.8. <strong>With your Consent.</strong> We may disclose your Personal Data for any other purpose with your consent.
                </p>
                <h2 class="subheading">5. Do We Use Cookies And Other Tracking Technologies?</h2>
                <p class="body-1 mb-8">
                    We may use cookies and similar tracking technologies (like web beacons and pixels) to access or store information. Specific information about how we use such technologies and how you can refuse certain cookies is set out in our <router-link to="/cookies-policy" class="href">Cookies Policy</router-link>.
                </p>
                <h2 class="subheading">6. How Do We Handle Your Social Logins?</h2>
                <p class="body-1">
                    Our Sites offers Consumers the ability to register and login using their third party social media account details (like Facebook or Twitter logins). Where you choose to do this, we will receive certain profile information about you from your social media provider. The profile Information we receive may vary depending on the social media provider concerned, but will often include your name, e-mail address, friends list, profile picture as well as other information you choose to make public.
                </p>
                <p class="body-1 mb-8">
                    We will use the information we receive only for the purposes that are described in this privacy policy or that are otherwise made clear to you on the Sites. Please note that we do not control, and are not responsible for, other uses of your Personal Data by your third party social media provider. We recommend that you review their privacy policy to understand how they collect, use and share your Personal Data, and how you can set your privacy preferences on their sites and apps.
                </p>
                <h2 class="subheading">7. Is Your Information Transferred Internationally?</h2>
                <p class="body-1">
                    Our servers are located in Japan. If you are accessing our Sites from outside Japan, please be aware that your information may be transferred to, stored, and processed by us in our facilities and by those third parties with whom we may share your Personal Data (see "Disclosure of Your Information" above), in Japan and other countries. 
                </p>
                <p class="body-1">
                    If you are a resident in the European Economic Area, then these countries may not have data protection or other laws as comprehensive as those in your country. We will however take all necessary measures to protect your Personal Data in accordance with this privacy policy and applicable law. 
                </p>
                <p class="body-1 mb-8">
                    <strong>European Commission's Standard Contractual Clauses:</strong> Such measures implementing the European Commission's Standard Contractual Clauses for transfers of Personal Data between our group companies and between us and our third-party providers, which require all such recipients to protect Personal Data that they process from the EEA in accordance with European data protection laws. Our Standard Contractual Clauses can be provided upon request. We have implemented similar appropriate safeguards with our third party service providers and partners and further details can be provided upon request.
                </p>
                <h2 class="subheading">8. How Long Do We Keep Your Information?</h2>
                <p class="body-1 mb-8">
                    We may retain your Personal Data as long as you are registered to use the Sites. You may delete your account by visiting the Profile Setting page. However, we may retain your Personal Data for an additional period as is permitted or required under applicable laws. Even if we delete your Personal Data it may persist on backup or archival media for an additional period of time for legal, tax or regulatory reasons or for legitimate and lawful business purposes.
                </p>
                <h2 class="subheading">9. How Do We Keep Your Information Safe?</h2>
                <p class="body-1 mb-8">
                    We have implemented appropriate technical and organizational security measures designed to protect the security of any Personal Data we process. However, please also remember that we cannot guarantee that the internet itself is 100% secure. Although we will do our best to protect your Personal Data, transmission of Personal Data to and from our Sites is at your own risk. You should only access the services within a secure environment. 
                </p>
                <h2 class="subheading">10. Do We Collect Information From Minors?</h2>
                <p class="body-1 mb-8">
                    We do not knowingly solicit data from or market to children under 13 years of age.  By using the Sites, you represent that you are at least 13 or that you are the parent or guardian of such a minor and consent to such minor dependent’s use of the Site.  If we learn that Personal Data from Users less than 13 years of age has been collected, we will deactivate the account and take reasonable measures to promptly delete such data from our records.  If you become aware of any data we have collected from children under age 13, please contact us at <a href="mailto:privacy@meetuniglobal.com" class="href">privacy@meetuniglobal.com</a>.   
                </p>
                <h2 class="subheading">11. What Are Your Privacy Rights?</h2>
                <p class="body-1">
                    In some regions (like the European Economic Area), you have certain rights under applicable data protection laws.  These may include the right (a) to request access and obtain a copy of your Personal Data, (b) to request rectification or erasure; (iii) to restrict the processing of your Personal Data; and (c) if applicable, to data portability. In certain circumstances, you may also have the right to object to the processing of your Personal Data. To make such a request, please use the contact details provided below [HYPERLINK]. We will consider and act upon any request in accordance with applicable data protection laws.  
                </p>
                <p class="body-1">
                    If we are relying on your consent to process your Personal Data, you have the right to withdraw your consent at any time. Please note however that this will not affect the lawfulness of the processing before its withdrawal.
                </p>
                <p class="body-1">
                    If you are resident in the European Economic Area and you believe we are unlawfully processing your Personal Data, you also have the right to complain to your local data protection supervisory authority. You can find their contact details <a href="http://ec.europa.eu/justice/data-protection/bodies/authorities/index_en.htm" target="_blank" class="href">here</a>.
                </p>
                <p class="body-1">
                    <strong>Account Information:</strong> You may at any time review or change the information in your account or terminate your account by:<br>
                    (a) Logging into your profile settings and updating your account<br>
                    (b) Contacting us using the contact information provided below<br>
                    Upon your request to terminate your account, we will deactivate or delete your account and information from our active databases. However, some information may be retained in our files to prevent fraud, troubleshoot problems, assist with any investigations, enforce our Terms of Use and/or comply with legal requirements.
                </p>
                <p class="body-1">
                    <strong>Cookies and similar technologies:</strong> Most Web browsers are set to accept cookies by default. If you prefer, you can usually choose to set your browser to remove cookies and to reject cookies. If you choose to remove cookies or reject cookies, this could affect certain features or services of our Sites.[For further information, please see our <router-link to="/cookies-policy" class="href">Cookies Policy</router-link>.
                </p>
                <p class="body-1">
                    <strong>Opting out of email marketing:</strong> You can unsubscribe from our marketing email list at any time by clicking on the unsubscribe link in the emails that we send or by contacting us using the details provided below. You will then be removed from the marketing email list – however, we will still need to send you service-related emails that are necessary for the administration and use of your account. You can also opt-out by:<br> 
                    (a) Noting your preferences at the time you register your account with the Sites.<br>
                    (b) Logging into your account settings and updating your preferences.<br>
                    (c) Contacting us using the contact information provided below<br>
                </p>
                <p class="body-1">
                    <strong>meetUni as a data controller and a data processor:</strong> EU data protection law makes a distinction between organizations that process Personal Data for their own purposes (known as "data controllers") and organizations that process Personal Data on behalf of other organizations (known as "data processors"). If you have a question or complaint about how your Personal Data is handled, these should always be directed to the relevant data controller since they are the ones with primary responsibility for your Personal Data.
                </p>
                <p class="body-1">
                    meetUni may act as either a data controller or a data processor in respect of your Personal Data, depending on the circumstances.
                </p>
                <p class="body-1">
                    For example, if you create an account with us to organize your events, meetUni will be a data controller in respect of the Personal Data that you provide as part of your account. We will also be a data controller of the Personal Data that we have obtained about the use of the Sites, which could relate to Organizers or Consumers. We use this to conduct research and analysis to help better understand and serve Users of the Sites as well as to improve our platform and provide you with more targeted recommendations about events we think may be of interest to you.
                </p>
                <p class="body-1 mb-8">
                    However, if you register for an event as a Consumer, we will process your Personal Data to help administer that event on behalf of the Organizer (for example, sending confirmation, promotional and feedback emails, etc.) and to help the Organizer target, and understand the success of, their event and event planning (for example, providing event reports, using analytics to gain insights into the effectiveness of various marketing channels, etc.). In these circumstances, meetUni merely provides the tools for Organizers; Any questions that you may have relating to your Personal Data and your rights under data protection law should therefore be directed to the Organizer as the data controller, not to meetUni.
                </p>
                <h2 class="subheading">12. Do California Residents Have Specific Privacy Rights?</h2>
                <p class="body-1">
                    California Civil Code Section 1798.83, also known as the “Shine The Light” law, permits our Users who are California residents to request and obtain from us, once a year and free of charge, information about categories of Personal Data (if any) we disclosed to third parties for direct marketing purposes and the names and addresses of all third parties with which we shared Personal Data in the immediately preceding calendar year. If you are a California resident and would like to make such a request, please submit your request in writing to us using the contact information provided below.
                </p>
                <p class="body-1 mb-8">
                    If you are under 18 years of age, reside in California, and have a registered account with the Sites you have the right to request removal of unwanted data that you publicly post on the Sites. To request removal of such data, please contact us using the contact information provided below, and include the email address associated with your account and a statement that you reside in California. We will make sure the data is not publicly displayed on the Sites, but please be aware that the data may not be completely or comprehensively removed from our systems.
                </p>
                <h2 class="subheading">13. Do We Make Updates To This Policy?</h2>
                <p class="body-1 mb-8">
                    We may update this privacy policy from time to time. The updated version will be indicated by an updated “Revised” date and the updated version will be effective as soon as it is accessible. If we make material changes to this privacy policy, we may notify you either by prominently posting a notice of such changes or by directly sending you a notification. We encourage you to review this privacy policy frequently to be informed of how we are protecting your information. 
                </p>
                <h2 class="subheading">14. How Can You Contact Us About This Policy?</h2>
                <p class="body-1">
                    If you have questions or comments about this policy, email us at <a href="mailto:privacy@meetuniglobal.com" class="href">privacy@meetuniglobal.com</a> or by post to:
                </p>
                <p class="body-1 mb-8">
                    meetUni<br>
                    Ayako Towatari<br>
                    Ueda, 1-6-1-505 Arima<br>
                    Miyamae-ku, Kawasaki-shi<br>
                    Kanagawa, 216-0003<br>
                    Japan<br>
                </p>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
export default {
    mounted(){
        this.$gtag.pageview({
            page_path: '/privacy-policy',
            page_title: "Privacy"
        })
    },
}
</script>

<style>
.subheading{
    margin-bottom: 24px;
}
</style>