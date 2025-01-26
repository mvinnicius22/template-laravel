<template>
    <Head title="users list" />
    <Link :href="route('users.create')" class="inline-block px-4 py-3 bg-blue-500 text-white rounded mb-4">Add new user</Link>

    <table class="mt-4 min-w-full divide-y divide-gray-200 border">
        <thead>
            <tr>
                <th class="px-6 py-3 bg-gray-50 text-left">
                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">ID</span>
                </th>
                <th class="px-6 py-3 bg-gray-50 text-left">
                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Name</span>
                </th>
                <th class="px-6 py-3 bg-gray-50 text-left">
                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Email</span>
                </th>
                <th class="px-6 py-3 bg-gray-50 text-left">
                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Created at</span>
                </th>
                <th class="px-6 py-3 bg-gray-50 text-left">
                    <span class="text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">Actions</span>
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200 divide-solid">
            <tr v-for="user in users">
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                    {{ user.id }}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                    {{ user.name }}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                    {{ user.email }}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                    {{ user.created_at }}
                </td>
                <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                    <Link :href="route('users.edit', user.id)" type="button" class="px-2 py-1 bg-blue-600 text-white rounded font-bold uppercase">
                        Edit
                    </Link>
                    <button @click="destroy(user.id)" type="button" class="px-2 py-1 bg-red-600 text-white rounded font-bold uppercase">
                        Delete
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</template>

<script>
import { Head, Link, router } from "@inertiajs/vue3"
// import AppLayout from "../../Layouts/App.vue"

export default {
    components: {
        // AppLayout,
        Head, Link
    },
    props: {
        users: Object,
    },
    setup() {
        const destroy = (id) => {
            if (confirm('Are you sure?')) {
                router.delete(route('users.destroy', id), {preserveScroll: true});
            }
        }

        return { destroy }
    }
}
</script>