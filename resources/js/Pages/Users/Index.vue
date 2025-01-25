<template>
    <div>
        <Link :href="route('pages.about')">about</Link>
        <h1>Users</h1>
        <div v-for="user in users" :key="user.id">
            <p>{{ user.name }}</p>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";

export default {
    components: {
        Link,
    },

    props: {
        users: Object,
    },
};
</script>
