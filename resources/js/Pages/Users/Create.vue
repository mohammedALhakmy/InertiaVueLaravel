<!--<template>-->
<!--    <div>-->
<!--        <h1 class="text-3xl">Create User</h1>-->
<!--        <form @submit.prevent="submit" class="max-w-md mx-auto mt-7">-->
<!--            <div class="mb-6">-->
<!--                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">Name</label>-->
<!--                <input type="text" v-model="form.name" class="border border-gray-400 p-2 w-full" name="name" id="name">-->
<!--                <div v-if="errors.name" v-text="errors.name" class="text-red-500 text-xs mt-1"></div>-->
<!--            </div>-->

<!--            <div class="mb-6">-->
<!--                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">Email</label>-->
<!--                <input type="email" v-model="form.email" class="border border-gray-400 p-2 w-full" name="email" id="email">-->
<!--                <div v-if="errors.email" v-text="errors.email" class="text-red-500 text-xs mt-1"></div>-->
<!--            </div>-->

<!--            <div class="mb-6">-->
<!--                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">Password</label>-->
<!--                <input type="password" v-model="form.password" class="border border-gray-400 p-2 w-full" name="password" id="password">-->
<!--                <div v-if="errors.password" v-text="errors.password" class="text-red-500 text-xs mt-1"></div>-->
<!--            </div>-->

<!--            <div class="mb-6">-->
<!--                <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Submit</button>-->
<!--            </div>-->
<!--        </form>-->
<!--    </div>-->
<!--</template>-->

<!--<script>-->
<!--export default {-->
<!--    data() {-->
<!--        return {-->
<!--            form: {-->
<!--                name: '',-->
<!--                email: '',-->
<!--                password: ''-->
<!--            },-->
<!--            errors: {}-->
<!--        }-->
<!--    },-->
<!--    methods: {-->
<!--        submit() {-->
<!--            console.log('Form submitted:', this.form);-->
<!--            this.errors = {};-->
<!--            if (!this.form.name) {-->
<!--                this.errors.name = 'The name field is required.';-->
<!--            }-->
<!--            if (!this.form.email) {-->
<!--                this.errors.email = 'The email field is required.';-->
<!--            }-->
<!--            if (!this.form.password) {-->
<!--                this.errors.password = 'The password field is required.';-->
<!--            }-->
<!--            if (Object.keys(this.errors).length === 0) {-->
<!--            }-->
<!--        }-->
<!--    }-->
<!--}-->
<!--</script>-->

<template>
    <Head title="Create User"/>
    <h1 class="text-3xl">Create User</h1>
    <form @submit.prevent="submit" class="max-w-md mx-auto mt-7">
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">Name</label>
            <input type="text" v-model="form.name" class="border border-gray-400 p-2 w-full" name="name" id="name">
            <!--            <div v-if="$page.props.errors.name" v-text="$page.props.errors.name" class="text-red-500 text-xs mt-1"></div>-->
            <div v-if="form.errors.name" v-text="form.errors.name" class="text-red-500 text-xs mt-1"></div>
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">Email</label>
            <input type="email" v-model="form.email" class="border border-gray-400 p-2 w-full" name="email" id="email">
            <!--            <div v-if="$page.props.errors.email" v-text="$page.props.errors.email" class="text-red-500 text-xs mt-1"></div>-->
            <div v-if="form.errors.email" v-text="form.errors.email" class="text-red-500 text-xs mt-1"></div>
        </div>


        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">Password</label>
            <input type="password" v-model="form.password" class="border border-gray-400 p-2 w-full" name="password" id="password">
            <!--            <div v-if="$page.props.errors.password" v-text="$page.props.errors.password" class="text-red-500 text-xs mt-1"></div>-->
            <div v-if="form.errors.password" v-text="form.errors.password" class="text-red-500 text-xs mt-1"></div>
        </div>
        <div class="mb-6">
            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500" :disabled="form.processing">Submit</button>
        </div>
    </form>
</template>

<script setup>
import { ref } from "vue";
import { Inertia } from "@inertiajs/inertia";
import { useForm } from "@inertiajs/vue3";


let form = useForm({
    name : "",
    email : "",
    password : "",
});
// let processing = ref(false)
let submit = () => {
    // processing.value = true;
    form.post("/Users");
    // Inertia.post("/Users",form,{
    //     onStart:() => {processing.value = true },
    //     onFinish:() => { processing.value = false },
    // });
}
setTimeout(()=>{
    form.reset()
},3000)
import { Head } from "@inertiajs/vue3";

</script>

<style scoped>

</style>
