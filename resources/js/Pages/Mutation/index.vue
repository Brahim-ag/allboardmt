<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                mutation
            </h2>
        </template>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <table class="border-collapse border table-auto">
                <tr>
                    <th>Adminstration d'Origine</th>
                    <th>Adminstration d'Acceuil</th>
                    <th>Type de Mouvement</th>
                    <th>Numéro d'Acte</th>
                    <th>Date de Signature d'Acte</th>
                    <th>Date d'Effet d'Acte</th>
                </tr>

                <tr v-for="(mutation, index) in mutations" :key="index">
                    <td>{{ mutation.from }}</td>
                    <td>{{ mutation.to }}</td>
                    <td>{{ mutation.type }}</td>
                    <td>{{ mutation.Number }}</td>
                    <td>{{ mutation.dateSignature }}</td>
                    <td>{{ mutation.dateStart }}</td>
                    <td></td>

                    <td>
                        <inertia-link :href="`/mutations/edit/${mutation.id}`">
                            modifier
                        </inertia-link>
                    </td>
                    </tr>
            </table>
            <inertia-link :href="`/mutations/create/${this.employe_id}`"
                >Ajouter</inertia-link
            >
        </div>
    </app-layout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout";

export default {
    props: ["employe_id"],
    data() {
        return {
            mutations: [],
        };
    },
    components: {
        AppLayout,
    },
    methods: {
        getAll() {
            axios
                .get("/api/mutations/getall/" + this.employe_id)
                .then((response) => {
                    console.log(response.data);
                    this.mutations = response.data;
                })
                .catch((err) => {
                    console.log(err);
                });
        },
    },
    created() {
        this.getAll();
    },
};
</script>
