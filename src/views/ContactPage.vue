<template>
    <div class="flex flex-col items-center justify-center bg-cover xs:py-10 md:p-20"
        :style="{ backgroundImage: 'url(/public/images/bgpic.jpg)' }">
        <div class="flex flex-col items-center justify-center w-3/5 gap-5 xs:w-full">
            <h1 class="text-xl font-bold text-center text-white md:text-3xl drop-shadow-lg">Let's tell the story about
                your business.</h1>
            <p class="font-bold md:text-sm">My goal?</p>
            <p class="flex flex-col items-center justify-center w-3/5 gap-5 md:text-sm">
                To tell your business's story in the best and most marketable way possible while achieving your
                marketing, branding, and advertising objectives.
                <a href="#form"
                    class="transition duration-300 ease-in-out delay-100 hover:-translate-y-1 hover:scale-110">
                    <img src="../assets/images/arrow-down.png" alt="ArrowDown">
                </a>
            </p>
        </div>
    </div>
    <!-- Privacy Policy Dialog -->
    <dialog id="privacyPolicyDialog" class="w-[80%] max-w-[800px] rounded-lg p-5">
        <div class="text-justify">
            <div class="flex items-center justify-between p-3">
                <h1 class="text-2xl font-bold">Privacy Policy of <span
                        class="text-xl text-orange-400">FAVIOJASSO.COM</span></h1>
                <button class="px-3 py-2 mx-2 text-2xl font-medium rounded-lg hover:bg-orange-400 hover:text-white"
                    onclick="openPrivacyPolicyModal('privacyPolicyDialog', 'close')">✖</button>
            </div>
            <hr class="w-[95%] m-auto">
            <div class="py-5 [&>*]:p-1">
                <p><span class="p-1 font-bold bg-orange-50">Favio Jasso operates the FAVIOJASSO.COM website</span>,
                    which provides Data and Marketing Analytics consulting and services.</p>
                <p>This page is used to inform website visitors regarding our policies with the <span
                        class="p-1 font-bold bg-orange-50">collection, use, and disclosure of Personal
                        Information</span> if anyone decided to use our Service, the FavioJasso.com website.</p>
                <p>If you choose to use our Service, then you agree to the collection and use of information in relation
                    with this policy. The Personal Information that we collect is used for <span
                        class="p-1 font-bold bg-orange-50">providing and improving the Service</span>. We will not use
                    or share your information with anyone except as described in this Privacy Policy.</p>
                <p>The terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, which is
                    accessible at Website URL, unless otherwise defined in this Privacy Policy.</p>
                <h4 class="p-1 m-3 font-bold uppercase bg-orange-200 rounded-sm">Information Collection and Use</h4>
                <p>For a better experience while using our Service, we may require you to provide us with certain
                    personally identifiable information, including but not limited to your <span
                        class="p-1 font-bold bg-orange-50">name, phone number, and postal address</span>. The
                    information that we collect will be used to contact or identify you.</p>
                <h4 class="p-1 m-3 font-bold uppercase bg-orange-200 rounded-sm">Log Data</h4>
                <p>We want to inform you that whenever you visit our Service, we collect information that your browser
                    sends to us that is called <span class="p-1 font-bold bg-orange-50">Log Data</span>. This Log Data
                    may include information such as your computer's Internet Protocol (“IP”) address, browser version,
                    pages of our Service that you visit, the time and date of your visit, the time spent on those pages,
                    and other statistics.</p>
                <h4 class="p-1 m-3 font-bold uppercase bg-orange-200 rounded-sm">Cookies</h4>
                <p><span class="p-1 font-bold bg-orange-50">Cookies</span> are files with a small amount of data that is
                    commonly used as an anonymous unique identifier. These are sent to your browser from the website
                    that you visit and are stored on your computer's hard drive.</p>
                <p>Our website uses these “cookies” to collect information and to improve our Service. You have the
                    option to either accept or refuse these cookies, and know when a cookie is being sent to your
                    computer. If you choose to refuse our cookies, you may not be able to use some portions of our
                    Service.</p>
                <h4 class="p-1 m-3 font-bold uppercase bg-orange-200 rounded-sm">Service Providers</h4>
                <p>We may employ third-party companies and individuals due to the following reasons:</p>
                <p class="ml-[10%]">◉ To facilitate our Service;</p>
                <p class="ml-[10%]">◉ To provide the Service on our behalf;</p>
                <p class="ml-[10%]">◉ To perform Service-related services; or</p>
                <p class="ml-[10%]">◉ To assist us in analyzing how our Service is used.</p>
                <p>We want to inform our Service users that these third parties have access to your <span
                        class="p-1 font-bold bg-orange-50">Personal Information</span>. The reason is to perform the
                    tasks assigned to them on our behalf. However, they are obligated not to disclose or use the
                    information for any other purpose.</p>
                <h4 class="p-1 m-3 font-bold uppercase bg-orange-200 rounded-sm">Security</h4>
                <p>We value your trust in providing us your Personal Information, thus we are striving to use
                    commercially acceptable means of protecting it. But remember that no method of transmission over the
                    internet, or method of electronic storage is 100% secure and reliable, and we cannot guarantee its
                    absolute security.</p>
                <h4 class="p-1 m-3 font-bold uppercase bg-orange-200 rounded-sm">Links to Other Sites</h4>
                <p>Our Service may contain links to other sites. If you click on a third-party link, you will be
                    directed to that site. Note that these external sites are not operated by us. Therefore, we strongly
                    advise you to review the Privacy Policy of these websites. We have no control over, and assume no
                    responsibility for the content, privacy policies, or practices of any third-party sites or services.
                </p>
                <h4 class="p-1 m-3 font-bold uppercase bg-orange-200 rounded-sm">Children's Privacy</h4>
                <p>Our Services do not address anyone under the age of 13. We do not knowingly collect personal
                    identifiable information from children under 13. In the case we discover that a child under 13 has
                    provided us with personal information, we immediately delete this from our servers. If you are a
                    parent or guardian and you are aware that your child has provided us with personal information,
                    please contact us so that we will be able to do necessary actions.</p>
                <h4 class="p-1 m-3 font-bold uppercase bg-orange-200 rounded-sm">Changes to This Privacy Policy</h4>
                <p>We may update our Privacy Policy from time to time. Thus, we advise you to review this page
                    periodically for any changes. We will notify you of any changes by posting the new Privacy Policy on
                    this page. These changes are effective immediately, after they are posted on this page.</p>
                <h4 class="p-1 m-3 font-bold uppercase bg-orange-200 rounded-sm">Contact Us</h4>
                <p>If you have any questions or suggestions about our Privacy Policy, do not hesitate to contact us.
                    <span class="p-1 font-bold bg-orange-50">973-234-2073</span> or <span
                        class="p-1 font-bold bg-orange-50">fjporras04@gmail.com</span>
                </p>
            </div>
        </div>
    </dialog>

    <!-- Booking Form -->
    <form @submit.prevent="submitForm" class="flex flex-col gap-5 p-5" id="form"> -->
        <h2 class="font-bold text-xl text-[#FF7C03]">Select Service</h2>
        <p class="text-center">Set up consulting Today!</p>
        <template v-if="sessionError">
            <dialog id="errorDialog" class="p-5 text-lg font-bold text-red-500 rounded-lg bg-red-50" open>
                <div>{{ sessionError }}</div>
            </dialog>
        </template>

        <template v-if="sessionSuccess">
            <dialog id="successDialog" class="p-5 text-lg font-bold text-green-500 rounded-lg bg-green-50" open>
                <div>{{ sessionSuccess }}</div>
            </dialog>
        </template>

        <div class="w-full p-1 border rounded-lg">
            <select v-model="formData.service_id"
                class="w-full h-10 text-[#FF7C03] text-center bg-white rounded-lg focus:outline-none" required>
                <option value="" selected disabled hidden class="p-2">Select Option:</option>
                <option v-for="service in services" :key="service.service_id" :value="service.service_id" class="p-2">{{
                    service.service_name }}</option>
            </select>
        </div>

        <h2 class="font-bold text-xl text-[#FF7C03] mt-5">Select Time</h2>
        <div class="flex flex-col justify-center h-auto gap-2 md:flex-row">
            <div
                class="w-full h-auto max-w-xl p-5 m-0 transition-all bg-white border md:m-5 rounded-2xl hover:shadow-md xs:max-w-2xl">
                <div class="h-auto">
                    <div class="flex items-center justify-between mb-5">
                        <i class="cursor-pointer fas fa-chevron-left"></i>
                        <div>
                            <h1 class="text-xl font-bold" id="monthYear"></h1>
                            <p class="text-sm text-gray-500" id="currentDate"></p>
                        </div>
                        <i class="cursor-pointer fas fa-chevron-right"></i>
                    </div>
                    <div class="grid grid-cols-7 mb-5 text-center md:[&>*]:text-sm">
                        <div>SUN</div>
                        <div>MON</div>
                        <div>TUE</div>
                        <div>WED</div>
                        <div>THU</div>
                        <div>FRI</div>
                        <div>SAT</div>
                    </div>
                    <div class="grid grid-cols-7 text-center" id="calendarDays">
                    </div>
                </div>
            </div>
            <input type="hidden" name="user_id" id="user_id" required>
            <input type="hidden" name="appointment_date" id="appointment_date" required>
            <input type="hidden" name="start_time" id="start_time" required>
            <input type="hidden" name="end_time" id="end_time" required>
            <div
                class="flex flex-col items-center justify-center w-full h-auto max-w-xl p-5 m-0 transition-all bg-white border md:m-5 rounded-2xl hover:shadow-md xs:max-w-2xl">
                <div id="selectedDate" class="mb-3 text-lg font-bold"></div>
                <div id="timeSlots" class="flex flex-wrap items-center justify-center w-2/3 gap-2"></div>
                <div class="p-2 mt-3 text-center bg-orange-500 rounded-lg">
                    <small class="text-white"> US Eastern Standard Time </small>
                </div>
            </div>
        </div>
        <h2 class="font-bold text-xl text-[#FF7C03] mt-5">Add your details</h2>
        <div class="p-2 bg-white border rounded-lg md:p-10 hover:shadow-md" id="contact">
            <div
                class="flex justify-between [&>input]:w-[97%] [&>input]:p-2 [&>input]:m-2 [&>input]:rounded-md flex-col md:flex-row">
                <input v-model="formData.name" type="text" name="name" placeholder="Name"
                    class="bg-gray-100 border border-gray-200" required>
                <input v-model="formData.email" type="email" name="email" placeholder="Email"
                    class="bg-gray-100 border border-gray-200" required>
            </div>
            <div
                class="flex justify-between [&>input]:w-[97%] [&>input]:p-2 [&>input]:m-2 [&>input]:rounded-md flex-col md:flex-row">
                <input v-model="formData.address" type="text" name="address" placeholder="Address"
                    class="bg-gray-100 border border-gray-200" required>
                <input v-model="formData.phone_no" type="text" name="phone_no" placeholder="Phone Number"
                    class="bg-gray-100 border border-gray-200" required>
            </div>
            <div class="flex items-center justify-start p-4 m-2 bg-orange-100 rounded-xl">
                <img src="../assets/images/qmark.png" alt="QuestionMark" class="px-2">
                <small>Please share some details about your project.</small>
            </div>
            <div class="p-2">
                <textarea v-model="formData.message" name="message" rows="5" placeholder="Notes"
                    class="w-full p-2 bg-gray-100 border border-gray-200 rounded-md" required></textarea>
            </div>
        </div>
        <div class="flex flex-col items-center justify-center gap-2 my-28">
            <small> By clicking below you agree to these <button
                    onclick="openPrivacyPolicyModal('privacyPolicyDialog', 'open')"
                    class="text-orange-500 hover:underline">Privacy Policies</button>
            </small>
            <div>
                <button type="submit"
                    class="p-2 text-white bg-orange-500 border-2 border-orange-500 rounded-md hover:bg-white hover:text-orange-500">
                    Book Now </button>
            </div>
        </div>
    </form>
    <!-- End Details Section -->
</template>

<script setup>
import { onMounted, ref } from 'vue';
import { getContact } from '../services/api.js'; // Import as named export

const formData = ref({});

onMounted(async () => {
    try {
        const contactData = await getContact();
        formData.value = contactData;
    } catch (error) {
        console.error('Failed to fetch contact data:', error);
    }
});
</script>


<style></style>