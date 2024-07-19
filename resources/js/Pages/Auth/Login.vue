<template>
    <Head title="Login Page"/>
    <main class="grid place-items-center min-h-screen">
        <section class="bg-white p-8 rounded-xl max-w-md mx-auto border">
            <h1 class="text-3xl mb-6">Login Page</h1>
            <form @submit.prevent="submit" action="">

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">Email</label>
                    <input type="email" v-model="form.email" class="border rounded p-2 w-full" name="email" id="email">
                    <div v-if="form.errors.email" v-text="form.errors.email" class="text-red-500 text-xs mt-1"></div>
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">Password</label>
                    <input type="password" v-model="form.password" class="border rounded p-2 w-full" name="password" id="password">
                    <div v-if="form.errors.password" v-text="form.errors.password" class="text-red-500 text-xs mt-1"></div>
                </div>

                <div class="mb-6">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500" :disabled="form.processing">Login</button>
                </div>
            </form>
        </section>
    </main>
</template>



<script>
export default {
    layout:null,
}
</script>


<script setup>
import { useForm } from "@inertiajs/vue3";
import { Head } from "@inertiajs/inertia-vue3";

let form = useForm({
    email: '',
    password: '',
});

function submit() {
    form.post("/login", {
        onError: (errors) => {
            console.log(errors);
        }
    });
}
</script>

<style scoped>

</style>
