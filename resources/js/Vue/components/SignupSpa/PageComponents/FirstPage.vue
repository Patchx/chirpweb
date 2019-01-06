<template>
    <div>
        <br><br>

        <div class="text-center vert-spacing">
            <h1>Sign Up</h1>
            <br>

            <button
                class="btn btn-primary"
                v-on:click="vue_app.current_page = 'phone_number_page'"
            >Get Started</button>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['vue_app'],

        data: function() {
            return {};
        },

        mounted() {
            // alert('Component mounted.')
        }
    }
</script>
