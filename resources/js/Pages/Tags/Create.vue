<template>
    <admin-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Tambah Tag
            </h2>
        </template>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="w-full flex mb-4 p-2">
                <Link
                    :href="route('admin.tags.index')"
                    class="px-2 py-2 bg-green-600 hover:bg-green-800 text-white rounded-lg"
                >
                    Kembali
                </Link>
            </div>
            <section class="flex content-center">
                <form @submit.prevent="storeTag">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="w-full space-y-2">
                                <div class="">
                                    <label
                                        for="tagName"
                                        class="block text-sm font-medium text-gray-700"
                                    >
                                        Nama Tag
                                    </label>
                                    <input
                                        type="text"
                                        v-model="form.tagName"
                                        autocomplete="given-name"
                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    />
                                </div>
                                <div>
                                    <button
                                        type="submit"
                                        class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 text-white rounded"
                                    >
                                        Tambah Tag
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </admin-layout>
</template>

<script>
import { defineComponent } from "vue";
import AdminLayout from "../../Layouts/AdminLayout.vue";
import { Link, useForm } from "@inertiajs/inertia-vue3";

export default defineComponent({
    setup() {
        const form = useForm({
            tagName: "",
        });

        function storeTag() {
            form.post("/admin/tags");
        }
        return { form, storeTag };
    },
    components: {
        AdminLayout,
        Link,
    },
});
</script>
