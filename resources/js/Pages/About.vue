<template>
    <Link :href="route('users.index')">about</Link>
</template>

<script>
import { Link } from "@inertiajs/vue3";
// import AppLayout from "../Layouts/App.vue"

export default {
    components: {
        // AppLayout,
        Link,
    },
}
</script>