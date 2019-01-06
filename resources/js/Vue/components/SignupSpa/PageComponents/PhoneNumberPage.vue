<template>
    <div>
        <br><br>

        <div class="text-center vert-spacing">
            <h1>Phone Number Page</h1>
            <br>

            <button
                class="btn btn-default"
                v-on:click="vue_app.current_page = 'first_page'"
            >Go Back</button>
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
