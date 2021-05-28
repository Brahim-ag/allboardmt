<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                formations Scolaire
            </h2>
        </template>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <table class="border-collapse border table-auto">
                <tr>
                    <th>Objet de la Formation/Stage</th>
                    <th>Date</th>
                    <th>Promo</th>
                    <th>Durée</th>
                    <th>Etablissement</th>
                </tr>

                <tr v-for="(formation, index) in formations" :key="index">
                    <td>{{ formation.objet }}</td>
                    <td>{{ formation.date }}</td>
                    <td>{{ formation.promo }}</td>
                    <td>{{ formation.duree }}</td>
                    <td>{{ formation.etabili }}</td>
                    <td>
                        <inertia-link :href="`/formation/edit/${formation.id}`">
                            modifier
                        </inertia-link>
                    </td>
                </tr>
            </table>
            <inertia-link :href="`/formation/create/${this.employe_id}`"
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
            formations: [],
        };
    },
    components: {
        AppLayout,
    },
    methods: {
        getAll() {
            axios
                .get("/api/formation/getall/" + this.employe_id)
                .then((response) => {
                    console.log(response.data);
                    this.formations = response.data;
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
